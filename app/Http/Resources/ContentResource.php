<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContentResource extends JsonResource
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
            'header' => [
                'en' =>  $this->header_en,
                'vi' =>  $this->header_vi,
            ],
            'feature_title' => [
                'en' =>  $this->feature_title_en,
                'vi' =>  $this->feature_title_vi,
            ],
            'feature_description' => [
                'en' =>  $this->feature_description_en,
                'vi' =>  $this->feature_description_vi,
            ],
            'service_description' => [
                'en' =>  $this->service_description_en,
                'vi' =>  $this->service_description_vi,
            ],
            'distributor_title' => [
                'en' =>  $this->distributor_title_en,
                'vi' =>  $this->distributor_title_vi,
            ],
            'distributor_description' => [
                'en' =>  $this->distributor_description_en,
                'vi' =>  $this->distributor_description_vi,
            ],
            'product_description' => [
                'en' =>  $this->product_description_en,
                'vi' =>  $this->product_description_vi,
            ],
            'clients_description' => [
                'en' =>  $this->clients_description_en,
                'vi' =>  $this->clients_description_vi,
            ],
        ];
    }
}
