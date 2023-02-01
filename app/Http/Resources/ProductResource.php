<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $res = parent::toArray($request);
        $res['serving_quantity'] = floatval($res['serving_quantity']);
        return $res;
    }
    public function withResponse($request, $response)
    {
        $response->header('Content-Type', 'application/json')->setEncodingOptions(JSON_UNESCAPED_SLASHES);
    }
}