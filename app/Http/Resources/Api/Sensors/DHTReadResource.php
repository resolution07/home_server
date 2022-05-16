<?php

namespace App\Http\Resources\Api\Sensors;

use Illuminate\Http\Resources\Json\JsonResource;

class DHTReadResource extends JsonResource
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
            'humidity' => $this->humidity,
            'temperature' => $this->heat_index,
            'heat_index' => $this->heat_index,
            'created_at' => $this->created_at,
            //'created_at' => $this->created_at->format('d.m.Y H:i:s'),
            'updated_at' => $this->updated_at
            //'updated_at' => $this->updated_at->format('d.m.Y H:i:s')
        ];
    }
}
