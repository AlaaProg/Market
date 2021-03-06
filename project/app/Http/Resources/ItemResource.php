<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Tags;
class ItemResource extends JsonResource
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
            
            "id"    => $this->id,
            "title" => $this->title,
            'price' => $this->price,
            'short_descrip' => $this->short_descrip,
            'discount'      => $this->discount,
            'description'   => $this->description,
            'images' => $this->images,
            'owner'  => $this->user ? $this->user : $this->guest,
            'tags'   => $this->tags
        ];
    }
}
