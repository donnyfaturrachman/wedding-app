<?php

namespace App\Http\Controllers;

use App\Models\Rsvps;
use Illuminate\Http\Request;

class RsvpController extends Controller
{
    public function list(Request $request)
    {
        if ($request->ajax()) {
            $dataRsvp = Rsvps::orderByDesc('id')->get();
            if ($dataRsvp) {
                $dataRsvp = $dataRsvp->toArray();
            } else {
                return 'leave_type_empty';
            }

            $data = $dataRsvp;
            return $data;
        }
    }

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
