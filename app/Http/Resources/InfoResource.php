<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InfoResource extends JsonResource
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
            'company_name' => [
                'en' =>  $this->company_name_en,
                'vi' =>  $this->company_name_vi,
            ],
            'address' => [
                'en' =>  $this->address_en,
                'vi' =>  $this->address_vi,
            ],
            'email' => $this->email,
            'phone' => $this->phone,
            'facebook' => $this->facebook,
            'youtube' => $this->youtube,
            'twitter' => $this->twitter,
            'likedin' => $this->likedin,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
        ];
    }
}
