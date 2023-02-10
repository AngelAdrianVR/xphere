<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $is_active = 1;
        $expired = now()->diffInDays($this->created_at) >= 1;

        if($expired)
            $is_active = 0;

        return [
            'id' => $this->id,
            'num_guests' => $this->num_guests,
            'name' => $this->name,
            'code_event' => $this->code_event,
            'notes' => $this->notes,
            'user' => $this->whenLoaded('user'),
            'is_active' => $is_active,
            'created_at' => $this->created_at->isoFormat('DD MMM, YYYY hh:mm a'),
        ];
    }
}
