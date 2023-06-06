<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index()
    {
        $hospitals = Hospital::all();
        return view('hospital.index', compact('hospitals'));
    }
    public function create()
    {

        return view('hospital.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, []);

        $request->merge(['password' => bcrypt($request->password)]);

        $checkbox_values = $request->input('specialties');
        $string_values = implode(',', $checkbox_values);

        // Save $string_values to a database field that expects a string
        // ...

        $request->merge(['specialties' => $string_values]);
        $record = Hospital::create($request->all());

        flash("successfully added <strong> $record->name</strong>")->success();
        return redirect(route('hospital.index'));
    }
    public function edit($id)
    {
        $model = Hospital::findOrFail($id);
        return view('hospital.edit', compact('model'));
    }
    public function update(Request $request, string $id)
    {
        $this->validate($request, []);
        $model = Hospital::findOrFail($id);


        if ($request->filled('password')) {
            $request->merge(['password' => bcrypt($request->password)]);
            $model->update($request->all());
        } else {
            $model->update($request->except('password'));
        }


        flash("successfully updated <strong> $model->name</strong>")->success();
        return redirect(route('hospital.index'));
    }
    public function destroy(string $id)
    {
        $model = Hospital::findOrFail($id);
        $model->delete();
        flash("successfully deleted <strong> $model->name</strong>")->success();
        return back();
    }
}
