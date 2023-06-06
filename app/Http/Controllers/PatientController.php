<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){
        $patients= Patient::all();
        return view('patient.index',compact('patients'));
    }
    public function create(){

        return view('patient.create');
    }
    public function store(Request $request){
        $this->validate($request, [

        ]);

        $request->merge(['password' => bcrypt($request->password)]);
        $record = Patient::create($request->all());


        // $record = new Role;
        // $record->name = $request->name;
        // $record->save();
        // $gov = Governorate::create(['name' => $request->name,]); //another way no  need for save since it automatically saves
        // $city = City::create($request->all()); another way
        flash("successfully added <strong> $record->name</strong>")->success();
        return redirect(route('patient.index'));
    }
    public function edit($id)
    {
        $model = Patient::findOrFail($id);
        return view('patient.edit',compact('model'));
    }
    public function update(Request $request, string $id)
    {
        $this->validate($request, [

        ]);
        $model = Patient::findOrFail($id);


        if ($request->filled('password')) {
            $request->merge(['password' => bcrypt($request->password)]);
            $model->update($request->all());
        } else {
            $model->update($request->except('password'));
        }


        flash("successfully updated <strong> $model->name</strong>")->success();
        return redirect(route('patient.index'));
    }
    public function destroy(string $id)
    {
        $model = Patient::findOrFail($id);
        $model->delete();
        flash("successfully deleted <strong> $model->name</strong>")->success();
        return back();
    }
}
