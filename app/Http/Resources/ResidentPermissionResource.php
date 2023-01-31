<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResidentPermissionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $status['color'] = 'text-orange-500' ;
        $status['text'] = 'Esperando Respuesta...' ;
        
        if($this->is_accepted){
            $status['color'] = 'text-green-500' ;
            $status['text'] = 'Aceptado' ;
        }elseif($this->replied_at)
        {
            $status['color'] = 'text-red-500' ;
            $status['text'] = 'Rechazado' ;
        }

        

        return [
            'id' => $this->id,
            'date' => $this->date->isoFormat('DD MMM YYYY'),
            'replied_at' => $this->replied_at?->isoFormat('DD MMM YYYY'),
            'subject' => $this->subjet,
            'description' => $this->description,
            'permission_type' => $this->whenLoaded('permissionType'),
            'user_id' => $this->user_id,
            'is_accepted' => $this->is_accepted,
            'status' => $status,
        ];
    }
}
