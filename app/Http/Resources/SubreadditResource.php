<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SubreadditResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray(($request));
            // 'id' => (string)$this->id,
            // // 'type' => 'Subreaddits',
            // 'name' => $this->name,
            // 'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at
    }
}
