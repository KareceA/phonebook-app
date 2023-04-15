<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShowUsersResource extends JsonResource
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
            'FullName' => ucfirst($this->first_name . ' ' . ucfirst($this->last_name)),
            'PhoneNumber' => $this->phone_number,
            'Email' => $this->email,
        ];
    }
}
