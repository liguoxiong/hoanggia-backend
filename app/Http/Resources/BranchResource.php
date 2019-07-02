<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BranchResource extends JsonResource
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
            'name' => $this->title,
            'en' => $this->description_en,
            'vi' => $this->description_vi,
            'created_at' => (string)$this->created_at,
            'updated_at' => (string)$this->updated_at,
            'image' => $this->image,
            'link' => $this->link,
        ];
    }
}
