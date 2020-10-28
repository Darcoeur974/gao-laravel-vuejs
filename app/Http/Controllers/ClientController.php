<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClientResource;
use App\Models\ClientModel;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function search(Request $request)
    {
        $clients = ClientModel::all();

        return ClientResource::collection($clients);
    }
}
