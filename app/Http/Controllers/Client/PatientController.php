<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{

    public function create()
    {
        return view('client.patient.signup');
    }
    public function store(Request $request)
    {
        $this->validate($request, []);

        $request->merge(['password' => bcrypt($request->password)]);
        $record = Patient::create($request->all());

        Auth::guard('patient')->login($record);

        flash("successfully added <strong> $record->name</strong>")->success();
        return redirect('/');
    }
    public function update(Request $request)
    {
        $this->validate($request, []);


        $model = Auth::guard('patient')->user();
        if ($request->filled('password')) {
            $request->merge(['password' => bcrypt($request->password)]);
            $model->update($request->all());
        } else {
            $model->update($request->except('password'));
        }


        flash("successfully updated <strong> $model->name</strong>")->success();
        return redirect('/');
    }
    public function edit()
    {
        $model = Auth::guard('patient')->user();
        return view('client.patient.edit', compact('model'));

    }
    public function login(){
        return view('client.patient.login');


    }
    public function signin(Request $request)
    {

        $credentials = $request->only('phone', 'password');




        if (Auth::guard('patient')->attempt($credentials)) {
            // Authentication passed...
            return redirect('/');
        }else{
            return back()->withErrors([
            'phone' => 'The provided credentials do not match our records.',
        ]);}

    }
    public function logOut(Request $request){
        Auth::guard('patient')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
    }
}
