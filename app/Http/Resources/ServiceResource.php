<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
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
            'id' => (string) $this->id,
            'name' => [
                'en' =>  $this->name_en,
                'vi' =>  $this->name_vi,
            ],
            'description' => [
                'en' =>  $this->description_en,
                'vi' =>  $this->description_vi,
            ],
            'image' => $this->image,
        ];
    }
}
