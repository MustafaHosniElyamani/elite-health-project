<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Laravel\Ui\Presets\React;

class DoctorController extends Controller
{
    public function index(Request $request)
    {


        $records = Doctor::query()
        ->when($request->input('governorate'), function ($query) use($request) {
            return $query->where('governorate', $request->governorate );
        })

        ->when($request->input('speciality'), function ($query) use($request) {
            return $query->where('speciality', $request->speciality  );
        })

        ->when($request->input('name') , function($query) use($request) {
            return $query->where('name', 'like', '%' . $request->input('name') . '%');
        })
        ->get();





        return view('client.doctor.index',compact('records'));
    }
    public function create()
    {
        return view('client.doctor.signup');
    }
    public function store(Request $request)
    {
        $this->validate($request, []);

        $request->merge(['password' => bcrypt($request->password)]);
        $record = Doctor::create($request->all());


        Auth::guard('doctor')->login($record);


        flash("successfully added <strong> $record->name</strong>")->success();
        return redirect(route('client.doctor.index'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, []);
        $model = Auth::guard('doctor')->user();


        if ($request->filled('password')) {
            $request->merge(['password' => bcrypt($request->password)]);
            $model->update($request->all());
        } else {
            $model->update($request->except('password'));
        }


        flash("successfully updated <strong> $model->name</strong>")->success();
        return redirect(route('client.doctor.index'));
    }
    public function edit()
    {
        $model = Auth::guard('doctor')->user();
        return view('client.doctor.edit', compact('model'));

    }
    public function login()
    {
        return view('client.doctor.login');
    }

    public function signin(Request $request)
    {

        $credentials = $request->only('phone', 'password');




        if (Auth::guard('doctor')->attempt($credentials)) {
            // Authentication passed...
            return redirect('/');
        } else {
            return back()->withErrors([
                'phone' => 'The provided credentials do not match our records.',
            ]);
        }
    }
    public function logOut(Request $request)
    {
        Auth::guard('doctor')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
