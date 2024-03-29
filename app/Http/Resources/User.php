<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'distribuidor' => $this->distribuidor,
            'comprador' => $this->comprador,
            'productor' => $this->productor
            //'self' => url("/api/users/{$this->id}"),
        ];
    }
}
