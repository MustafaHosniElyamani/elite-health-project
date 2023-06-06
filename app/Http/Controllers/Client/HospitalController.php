<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HospitalController extends Controller
{
    public function index(Request $request){
        $records = Hospital::query()
        ->when($request->input('governorate'), function ($query) use($request) {
            return $query->where('governorate', $request->governorate );
        })

        ->when($request->input('speciality'), function ($query) use ($request) {
            return $query->where('specialties', 'LIKE', '%'.$request->input('speciality').'%');
        })

        ->when($request->input('name') , function($query) use($request) {
            return $query->where('name', 'like', '%' . $request->input('name') . '%');
        })
        ->get();





        return view('client.hospital.index',compact('records'));
    }
    public function create(){
        return view('client.hospital.signup');

    }
    public function store(Request $request){
        $this->validate($request, [

        ]);
dd($request);
        $request->merge(['password' => bcrypt($request->password)]);
        $checkbox_values = $request->input('specialties');
        $string_values = implode(',', $checkbox_values);

        // Save $string_values to a database field that expects a string
        // ...

        $request->merge(['specialties' => $string_values]);
        $record = Hospital::create($request->all());

        Auth::guard('hospital')->login($record);


        flash("successfully added <strong> $record->name</strong>")->success();
        return redirect(route('client.hospital.index'));
    }
    public function update(Request $request){
        $this->validate($request, [

        ]);
        $model = Auth::guard('hospital')->user();


        if ($request->filled('password')) {
            $request->merge(['password' => bcrypt($request->password)]);
            $model->update($request->all());
        } else {
            $model->update($request->except('password'));
        }


        flash("successfully updated <strong> $model->name</strong>")->success();
        return redirect(route('client.hospital.index'));
    }
    public function edit()
    {
        $model = Auth::guard('hospital')->user();
        return view('client.hospital.edit', compact('model'));

    }
    public function login(){

        return view('client.hospital.login');

    }
    public function signin(Request $request)
    {

        $credentials = $request->only('phone', 'password');




        if (Auth::guard('hospital')->attempt($credentials)) {
            // Authentication passed...
            return redirect('/');
        }else{
            return back()->withErrors([
            'phone' => 'The provided credentials do not match our records.',
        ]);}

    }
    public function logOut(Request $request){
        Auth::guard('hospital')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
    }
}
