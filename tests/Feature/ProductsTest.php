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
        info($response->__toString());
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
}