<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdate extends FormRequest
{
    public function rules()
    {
        return [
            "code" => ["prohibited"],
            "imported_t" => ["prohibited"],
            "created_t" => ["prohibited"],
            "last_modified_t" => ["prohibited"],
            "creator" => ["prohibited"],
            "image_url" => ["url", "filled"],
            "url" => ["url","filled"],
            "status" => ["string","in:draft,published", "filled"],
            "product_name" => ["string", "filled"],
            "quantity" =>[ "string", "filled"],
            "brands" => ["string", "filled"],
            "categories" => ["string", "filled"],
            "labels" => ["string", "filled"],
            "cities" => ["string", "filled"],
            "purchase_places" => ["string", "filled"],
            "stores" => ["string", "filled"],
            "ingredients_text" => ["string", "filled"],
            "traces" => ["string", "filled"],
            "serving_size" => ["string", "filled"],
            "serving_quantity" => ["numeric", "filled"],
            "nutriscore_score" => ["integer", "filled"],
            "nutriscore_grade" => ["alpha","size:1","in:a,b,c,d,e", "filled"],
            "main_category" => ["string", "filled"]
        ];
    }
    public function bodyParameters()
    {
        return [
            "image_url" => [
                'description' => 'Image url of the product on Open Food Facts',
                'example' => 'https://static.openfoodfacts.org/images/products/000/000/000/0017/front_fr.4.400.jpg',
            ],
            "url" => [
                'description' => 'Url of the product page on Open Food Facts',
                'example' => 'http://world-en.openfoodfacts.org/product/0000000000017/vitoria-crackers',
            ],
            "status" => [
                'description' => 'Status of the product',
                'example' => 'draft',
            ],
            "product_name" => [
                'description' => 'Name of the product',
                'example' => 'Vitória crackers',
            ],
            "quantity" =>[
                'description' => 'Quantity and unit',
                'example' => '114 g (3 x 2 u.)',
            ],
            "nutriscore_grade" => [
                'example' => 'a',
            ]
        ];
    }
}
