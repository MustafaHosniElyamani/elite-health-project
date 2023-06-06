<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(){
        $doctors= Doctor::all();
        return view('doctor.index',compact('doctors'));
    }
    public function create(){

        return view('doctor.create');
    }
    public function store(Request $request){
        $this->validate($request, [

        ]);

        $request->merge(['password' => bcrypt($request->password)]);
        $record = Doctor::create($request->all());



        flash("successfully added <strong> $record->name</strong>")->success();
        return redirect(route('doctor.index'));
    }
    public function edit($id)
    {
        $model = Doctor::findOrFail($id);
        return view('doctor.edit',compact('model'));
    }
    public function update(Request $request, string $id)
    {
        $this->validate($request, [

        ]);
        $model = Doctor::findOrFail($id);


        if ($request->filled('password')) {
            $request->merge(['password' => bcrypt($request->password)]);
            $model->update($request->all());
        } else {
            $model->update($request->except('password'));
        }


        flash("successfully updated <strong> $model->name</strong>")->success();
        return redirect(route('doctor.index'));
    }
    public function destroy(string $id)
    {
        $model = Doctor::findOrFail($id);
        $model->delete();
        flash("successfully deleted <strong> $model->name</strong>")->success();
        return back();
    }
}
