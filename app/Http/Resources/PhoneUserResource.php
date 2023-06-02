<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class PhoneUserResource extends JsonResource
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
            'FirstName' => ucfirst($this->first_name),
            'LastName' => ucfirst($this->last_name),
            'PhoneNumber' => $this->phone_number,
            'Email' => $this->email,
            'Date' => Carbon::parse($this->created_at)->format('l, jS F')
        ];
    }
}
