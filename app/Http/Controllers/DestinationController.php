<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationController extends Controller
{
    //
    public function index()
    {
        $Destination = Destination::all();
        return view('destination.index', compact('Destination'));
    }

}
