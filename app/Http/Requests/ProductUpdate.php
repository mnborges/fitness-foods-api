<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdate extends FormRequest
{
    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
            // "code" => ["prohibited"],
            // "imported_t" => ["prohibited"],
            // "created_t" => ["prohibited"],
            // "last_modified_t" => ["prohibited"],
            // "creator" => ["prohibited"],
            "image_url" => ["url"],
            "url" => ["url"],
            "status" => ["string","in:draft,published"],
            "product_name" => ["string"],
            "quantity" =>[ "string"],
            "brands" => ["string"],
            "categories" => ["string"],
            "labels" => ["string"],
            "cities" => ["string"],
            "purchase_places" => ["string"],
            "stores" => ["string"],
            "ingredients_text" => ["string"],
            "traces" => ["string"],
            "serving_size" => ["string"],
            "serving_quantity" => ["numeric"],
            "nutriscore_score" => ["integer"],
            "nutriscore_grade" => ["alpha","size:1","in:a,b,c,d,e"],
            "main_category" => ["string"]
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
        ];
    }
}
