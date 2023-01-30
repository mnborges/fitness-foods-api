<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        return ProductResource::collection(Product::paginate(10))
        ->response()
        ->setEncodingOptions(JSON_UNESCAPED_SLASHES);
    }

    public function show($code)
    {
        return new ProductResource(Product::findOrFail($code));
    }

    public function update(Request $request, $code)
    {
        $validated = Validator::make($request->all(), [
            "code" => "prohibited",
            "imported_t" => "prohibited",
            "created_t" => "prohibited",
            "last_modified_t" => "prohibited",
            "creator" => "prohibited",
            "image_url" => "url",
            "url" => "url",
            "status" => "string|in:draft,published",
            "product_name" => "string",
            "quantity" => "string",
            "brands" => "string",
            "categories" => "string",
            "labels" => "string",
            "cities" => "string",
            "purchase_places" => "string",
            "stores" => "string",
            "ingredients_text" => "string",
            "traces" => "string",
            "serving_size" => "string",
            "serving_quantity" => "numeric",
            "nutriscore_score" => "integer",
            "nutriscore_grade" => "alpha|size:1|in:a,b,c,d,e",
            "main_category" => "string"
        ])->validate();

        $product = Product::findOrFail($code);
        $product->update($validated);
        return new ProductResource($product);
    }

    public function destroy($code)
    {
        $product = Product::findOrFail($code);
        $product->status = "trash";
        $product->save();
        return response()->noContent();
    }
}