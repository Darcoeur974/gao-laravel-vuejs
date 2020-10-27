<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AssignResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray(Request $request)
    {
        return [
            'id'=>$this->id,
            'id_client'=>$this->client,
            'id_computer'=>$this->computer,
            'schedule'=>$this->schedule,
        ];
    }
}
