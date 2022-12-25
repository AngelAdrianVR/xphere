<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GuestResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $expired = now()->diffInDays($this->created_at) >= 1;
        $status['text'] = "Pendiente";
        $status['color'] = "text-orange-500";

        if ($this->arrived_time){
            $status['text'] = "Ingresado";
            $status['color'] = "text-green-500";
        }
            
        else if ($expired) {
            if (!$this->arrived_time){
                $status['text'] = 'Expirado';
                $status['color'] = "text-red-600";
            } 
        }

        return [
            'name' => $this->name,
            'arrived_time' => $this->arrived_time,
            'status' => $status,
            'plate_car' => $this->plate_car,
            'notes' => $this->notes,
            'guest_type' => $this->whenLoaded('guestType'),
            'created_at' => $this->created_at->isoformat('DD MMM, YYYY hh:mm a'),
            'user' => $this->whenLoaded('user'),
        ];
    }
}
