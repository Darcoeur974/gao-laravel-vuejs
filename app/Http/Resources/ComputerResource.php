<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ComputerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $assign = AssignResource::collection($this->assign);
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'assign' => $assign,
        ];
    }
}
