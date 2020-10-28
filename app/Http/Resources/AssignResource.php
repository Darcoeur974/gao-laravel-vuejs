<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AssignResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array
     */
    public function toArray($request)
    {
        $client = new ClientResource($this->client);
        return [
            'id'=>$this->id,
            'schedule'=>$this->schedule,
            'date'=>$this->date,
            'client' => $client
        ];
    }
}
