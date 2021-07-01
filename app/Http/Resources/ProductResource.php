<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'detail' => $this->detail,
            'price' => $this->price,
            'stock' => $this->stock,
            'rating'=> $this->reviews->sum('star') / ($this->reviews->count() != 0 ? $this->reviews->count() : 1),
            'discount' => $this->discount,
            'href' => [
                'reviews' => route('reviews.index', $this->id)
            ]
        ];
    }
}
