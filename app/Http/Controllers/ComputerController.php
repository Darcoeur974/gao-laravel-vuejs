<?php

namespace App\Http\Controllers;

use App\Http\Resources\ComputerResource;
use App\Models\ComputerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ComputerController extends Controller
{
    public function getAll(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required|string',
        ]);

        $computers = ComputerModel::leftjoin('assigns', 'computers.id', '=', 'id_computer')
            ->with('client', function ($query) use ($validatedData) {
                $query->wherePivot('date', $validatedData['date']);
            })
            ->orderBy('computers.id', 'asc')
            ->get();

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
