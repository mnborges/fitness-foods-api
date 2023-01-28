<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductsTest extends TestCase
{
    use RefreshDatabase;
    public function test_products_list_endpoint_is_accessible()
    {
        $response = $this->get('/products');
        $response->assertStatus(200);

    }
    public function test_products_list_endpoint_response_has_correct_structure()
    {
        Product::factory()->create();
        $response = $this->get('/products');
        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    "code",
                    "status",
                    "imported_t",
                    "url",
                    "creator",
                    "created_t",
                    "last_modified_t",
                    "product_name",
                    "quantity",
                    "brands",
                    "categories",
                    "labels",
                    "cities",
                    "purchase_places",
                    "stores",
                    "ingredients_text",
                    "traces",
                    "serving_size",
                    "serving_quantity",
                    "nutriscore_score",
                    "nutriscore_grade",
                    "main_category",
                    "image_url",
                ]
            ]
        ]);
    }
    public function test_product_list_endpoint_has_correct_pagination_first_10_items()
    {
        Product::factory(22)->create();
        $response = $this->get('/products');
        $response
            ->assertJson(["meta" => ['current_page' => 1, 'last_page' => 3]])
            ->assertJsonCount(10, 'data');
    }

    public function test_product_list_endpoint_has_correct_pagination_last_2_items()
    {
        Product::factory(22)->create();
        $response = $this->get('/products?page=3');
        $response
            ->assertJson(["meta" => ['current_page' => 3]])
            ->assertJsonCount(2, 'data');
    }

    public function test_get_product_endpoint_is_accessible_if_code_is_valid()
    {
        $product = Product::factory()->create();
        $response = $this->get("/products/" . strval($product->code));
        $response->assertStatus(200);
    }
    public function test_get_product_endpoint_returns_404_if_product_not_found()
    {
        $response = $this->get("/products/" . strval(fake()->randomNumber(9, true)));
        $response->assertStatus(404);
    }

    public function test_get_product_endpoint_response_has_correct_structure()
    {
        $product = Product::factory()->create();
        $response = $this->get("/products/" . strval($product->code));
        $response->assertJsonStructure([
            "code",
            "status",
            "imported_t",
            "url",
            "creator",
            "created_t",
            "last_modified_t",
            "product_name",
            "quantity",
            "brands",
            "categories",
            "labels",
            "cities",
            "purchase_places",
            "stores",
            "ingredients_text",
            "traces",
            "serving_size",
            "serving_quantity",
            "nutriscore_score",
            "nutriscore_grade",
            "main_category",
            "image_url",
        ]);
    }

    public function test_update_product_endpoint_with_valid_product_code_is_accessible()
    {
        $product_original = Product::factory()->create();
        $response = $this->putJson("/products/" . strval($product_original->code), []);
        $response->assertOk();
    }
    public function test_update_product_endpoint_with_invalid_product_code_returns_not_found()
    {
        $update = ['status' => 'published'];
        $response = $this->putJson("/products/" . strval(fake()->randomNumber(9, true)), $update);
        $response->assertNotFound();
    }
    public function test_update_product_valid_payload_successfully_updates_and_returns_updated_product()
    {
        $product_original = Product::factory()->create();
        $update = ["cities" => fake()->city()];
        $response = $this->putJson("/products/" . strval($product_original->code), $update);
        $response
            ->assertJsonStructure([
                "code",
                "status",
                "imported_t",
                "url",
                "creator",
                "created_t",
                "last_modified_t",
                "product_name",
                "quantity",
                "brands",
                "categories",
                "labels",
                "cities",
                "purchase_places",
                "stores",
                "ingredients_text",
                "traces",
                "serving_size",
                "serving_quantity",
                "nutriscore_score",
                "nutriscore_grade",
                "main_category",
                "image_url",
            ])
            ->assertJson(["cities" => $update['cities']])
            ->assertOk();
    }
    public function test_update_product_invalid_payload_not_allowed_field_returns_unprocessable()
    {
        $product_original = Product::factory()->create();
        $update = [
            "code" => strval(fake()->unique()->randomNumber(9, true)),
            "imported_t" => now(),
            "created_t" => fake()->unixTime(),
            "last_modified_t" => fake()->unixTime(),
            "creator" => fake()->userName(),
        ];
        foreach ($update as $key => $value) {
            $response = $this->putJson("/products/" . strval($product_original->code), [$key => $value]);
            $response->assertUnprocessable();
        }
    }
    public function test_update_product_invalid_payload_non_existent_field_ignored()
    {
        $product_original = Product::factory()->create();
        $update = [
            "exists" => false,
            "status" => "published",
        ];
        $response = $this->putJson("/products/" . strval($product_original->code), $update);
        $response
            ->assertJsonMissing(["exists"])
            ->assertJson(["status" => $update["status"]]);
    }
    public function test_update_product_invalid_payload_wrong_data_type_returns_unprocessable()
    {
        $product_original = Product::factory()->create();
        $update = [
            "nutriscore_grade" => "more_than_one_letter",
            "serving_quantity" => "not_numeric",
            "nutriscore_score" => 10.5, // not integer
            "status" => "invalid"
        ];
        foreach ($update as $key => $value) {
            $response = $this->putJson("/products/" . strval($product_original->code), [$key => $value]);
            $response->assertUnprocessable();
        }
    }
    public function test_delete_product_with_invalid_product_code_returns_not_found()
    {
        $response = $this->delete("/products/" . strval(fake()->randomNumber(9, true)));
        $response->assertNotFound();
    }
    public function test_delete_product_with_valid_product_code_is_successfull()
    {
        $product = Product::factory()->create(["status" => "published"]);
        $response = $this->delete("/products/" . strval($product->code));
        $response->assertNoContent();
        $this->assertSame(Product::find($product->code)->status, "trash");
    }
}