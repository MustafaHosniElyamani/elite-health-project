<?php

namespace App\Http\Controllers;

use App\Models\Pharmacy;
use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    public function index(){
        $pharmacies= Pharmacy::all();
        return view('pharmacy.index',compact('pharmacies'));
    }
    public function create(){

        return view('pharmacy.create');
    }
    public function store(Request $request){
        $this->validate($request, [

        ]);

        $request->merge(['password' => bcrypt($request->password)]);
        $record = Pharmacy::create($request->all());



        flash("successfully added <strong> $record->name</strong>")->success();
        return redirect(route('pharmacy.index'));
    }
    public function edit($id)
    {
        $model = Pharmacy::findOrFail($id);
        return view('pharmacy.edit',compact('model'));
    }
    public function update(Request $request, string $id)
    {
        $this->validate($request, [

        ]);
        $model = Pharmacy::findOrFail($id);


        if ($request->filled('password')) {
            $request->merge(['password' => bcrypt($request->password)]);
            $model->update($request->all());
        } else {
            $model->update($request->except('password'));
        }


        flash("successfully updated <strong> $model->name</strong>")->success();
        return redirect(route('pharmacy.index'));
    }
    public function destroy(string $id)
    {
        $model = Pharmacy::findOrFail($id);
        $model->delete();
        flash("successfully deleted <strong> $model->name</strong>")->success();
        return back();
    }
}
