<?php

namespace App\Http\Controllers;

use App\Models\Rsvps;
use Illuminate\Http\Request;

class RsvpController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);
        Rsvps::create($request->all());
        return json_encode(array(
            "statusCode" => 200
        ));
    }
}
