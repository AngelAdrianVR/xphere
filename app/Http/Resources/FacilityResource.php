<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FacilityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'location' => $this->location,
            'description' => $this->description,
            'capacity' => $this->capacity,
            'cost' => number_format($this->cost),
            'hours_available' => $this->hours_available,
            'sphere_id' => $this->sphere_id,  
            'created_at' => $this->created_at,  
            'is_active' => $this->is_active,  
        ];
    }
}
