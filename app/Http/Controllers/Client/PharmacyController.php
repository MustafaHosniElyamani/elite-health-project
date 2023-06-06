<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Pharmacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PharmacyController extends Controller
{
    public function index(Request $request){
        $records = Pharmacy::query()
        ->when($request->input('governorate'), function ($query) use($request) {
            return $query->where('governorate', $request->governorate );
        })


        ->when($request->input('name') , function($query) use($request) {
            return $query->where('name', 'like', '%' . $request->input('name') . '%');
        })
        ->get();





        return view('client.pharmacy.index',compact('records'));    }
    public function create(){
        return view('client.pharmacy.signup');

    }
    public function store(Request $request){
        $this->validate($request, [

        ]);

        $request->merge(['password' => bcrypt($request->password)]);
        $record = Pharmacy::create($request->all());

        Auth::guard('pharmacy')->login($record);


        flash("successfully added <strong> $record->name</strong>")->success();
        return redirect(route('client.pharmacy.index'));

    }
    public function update(Request $request){
        $this->validate($request, [

        ]);
        $model = Auth::guard('pharmacy')->user();


        if ($request->filled('password')) {
            $request->merge(['password' => bcrypt($request->password)]);
            $model->update($request->all());
        } else {
            $model->update($request->except('password'));
        }


        flash("successfully updated <strong> $model->name</strong>")->success();
        return redirect(route('client.pharmacy.index'));

    }
    public function edit()
    {
        $model = Auth::guard('pharmacy')->user();
        return view('client.pharmacy.edit', compact('model'));

    }
    public function login(){

        return view('client.pharmacy.login');

    }
    public function signin(Request $request)
    {

        $credentials = $request->only('phone', 'password');




        if (Auth::guard('pharmacy')->attempt($credentials)) {
            // Authentication passed...
            return redirect('/');
        }else{
            return back()->withErrors([
            'phone' => 'The provided credentials do not match our records.',
        ]);}

    }
    public function logOut(Request $request){
        Auth::guard('pharmacy')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
    }
}
