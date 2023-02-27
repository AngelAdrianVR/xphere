<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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
            'message' => $this->message,
            'parent_id' => $this->parent_id,
            'user' => $this->whenLoaded('user'),
            'post_id' => $this->post_id,
            'created_at' => $this->created_at->diffForHumans(),
        ];
    }
}
