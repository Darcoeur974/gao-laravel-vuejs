<?php

namespace App\Http\Controllers;

use App\Http\Resources\ComputerResource;
use App\Models\ComputerModel;
use Illuminate\Support\Facades\Log;

class ComputerController extends Controller
{
    public function getComputers()
    {
        $computers = ComputerModel::all();

        return ComputerResource::collection($computers);
    }
}
