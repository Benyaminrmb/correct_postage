<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShipmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $return['id'] = $this->id;
        $return['agency'] = [
            'name' => $this->user->name,
            'family' => $this->user->family,
        ];
        $return['ordered_at'] = $this->ordered_at;
        $return['stepStatus'] = $this->stepStatus;
        $return['accessResponse'] = $this->accessResponse;

        return $return;
    }
}
