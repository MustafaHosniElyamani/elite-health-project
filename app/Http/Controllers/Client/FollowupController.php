<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\FollowUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FollowupController extends Controller
{
    public function index(Request $request)
    {
        $patient = Auth::guard('patient')->user();
        $models = $patient->followUps;

        return view('client.followups', compact('models'));
    }
    public function store(Request $request)
    {
        $patient_id = Auth::guard('patient')->user()->id;
        $data = $request->all();
        $data['patient_id'] = $patient_id;
        $record = FollowUp::create($data);
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $path = 'uploads/' . $record->id . '/' ;
        Storage::putFileAs($path, $file, $filename);
        $record->file = $filename;
        $record->save();




        return back();
    }
}
