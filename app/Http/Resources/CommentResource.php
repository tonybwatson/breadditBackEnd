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
        // return parent::toArray($request);
        return [
            'id' => (string)$this->id,
            'post_id' => (string)$this->post_id,
            'user_id' => (string)$this->user_id,
            'content' => (string)$this->content,
            'parent_id' => (string)$this->parent_id,
            'created_at' => (string)$this->created_at,
            'updated_at' => (string)$this->updated_at
        ];
    }
}
