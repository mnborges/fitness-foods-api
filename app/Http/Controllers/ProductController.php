<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductUpdate;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Products' list
     *
     * Returns a paginated list of products and their info available in the database
     * @group Products
     * @queryParam page integer required Page number
     * @responseFile Response/Products/List.json
     */
    public function index()
    {
        return ProductResource::collection(Product::paginate(10))
        ->response()
        ->setEncodingOptions(JSON_UNESCAPED_SLASHES);
    }

    /**
     * Product details
     *
     * Returns the information of a specific product by code number
     * @group Products
     * @responseFile Response/Products/Detail.json
     * @response 404 {"message": "No query results for model [App\\Models\\Product] 0000000000017"}
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    /**
     * Product update
     *
     * Update information of product specified by code number
     * @group Products
     * @responseFile Response/Products/Detail.json
     * @response 404 {"message": "No query results for model [App\\Models\\Product] 0000000000017"}
     */
    public function update(ProductUpdate $request, Product $product)
    {
        $product->update($request->all());
        return new ProductResource($product);
    }

    /**
     * Trash product
     *
     * Trashes product specified by code number
     * @group Products
     * @response 204
     * @response 404 {"message": "No query results for model [App\\Models\\Product] 0000000000017"}
     */
    public function destroy(Product $product)
    {
        $product->status = "trash";
        $product->save();
        return response()->noContent();
    }
}