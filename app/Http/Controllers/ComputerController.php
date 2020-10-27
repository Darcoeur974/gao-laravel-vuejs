<?php

namespace App\Http\Controllers;

use App\Http\Resources\ComputerResource;
use App\Models\ComputerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ComputerController extends Controller
{
    public function getAll()
    {
        $computers = ComputerModel::all();

        return ComputerResource::collection($computers);
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
        ]);

        $addComputer = new ComputerModel();

        $addComputer->name = $validatedData['name'];

        $addComputer->save();

        return new ComputerResource($addComputer);
    }
}
