<?php

namespace App\Http\Controllers;

use App\Models\ClientModel;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function search(Request $request)
    {
        if ($request->get('query')) {
            $query = $request->get('query');
            $users = ClientModel::where('firstname', 'like', '%' . $query . '%')
                ->orWhere('lastname', 'like', '%' . $query . '%')
                ->get();
            return response()->json($users);
        }
    }
}
