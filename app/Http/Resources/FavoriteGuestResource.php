<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FavoriteGuestResource extends JsonResource
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
            'notes' => $this->notes,
            'brand_car' => $this->brand_car,
            'plate_car' => $this->plate_car,
            'guest_type' => $this->whenLoaded('guestType'),
            'created_at' => $this->created_at->isoformat('DD MMM, YYYY hh:mm a'),
            'user' => $this->whenLoaded('user'),
        ];
    }
}
