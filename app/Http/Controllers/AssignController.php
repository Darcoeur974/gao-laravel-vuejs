<?php

namespace App\Http\Controllers;

use App\Http\Resources\AssignResource;
use App\Models\AssignModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AssignController extends Controller
{
    public function create(Request $request)
    {
        Log::debug($request);

        $validatedData = $request->validate([
            'id_client' => 'required|integer',
            'id_computer' => 'required|integer',
            'date' => 'required|date',
            'schedule' => 'required',
        ]);

        $addAssign = new AssignModel();

        $addAssign->id_client = $validatedData['id_client'];
        $addAssign->id_computer = $validatedData['id_computer'];
        $addAssign->date = $validatedData['date'];
        $addAssign->schedule = $validatedData['schedule'];

        $addAssign->save();

        return new AssignResource($addAssign);
    }
}
