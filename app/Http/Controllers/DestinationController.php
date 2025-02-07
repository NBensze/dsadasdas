<?php

namespace App\Http\Controllers;
use App\Models\Destination;

use Illuminate\Http\Request;

class DestinationController extends Controller
{
    //
    public function index()
    {
        $Destination = Destination::all();
        return view('destination.index', compact('Destination'));
    }

    public function show($id)
    {
        $role = Destination::find($id);
        return view('destination.show', compact('role'));
    }

}
