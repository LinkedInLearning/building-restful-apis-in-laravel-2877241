<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PetitionResource extends JsonResource
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
            'id' => $this->id,
            'title' =>ucwords($this->title),
            'category' => $this->category,
            'description' => $this->description,
            'author' => $this->author,
            'signees' => $this->signees,
        ];

    }
}
