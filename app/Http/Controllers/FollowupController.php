<?php

namespace App\Http\Controllers;

use App\Models\FollowUp;
use Illuminate\Http\Request;

class FollowupController extends Controller
{
    public function index(){
        $followups= FollowUp::all();
        return view('followup.index',compact('followups'));
    }

    public function edit($id)
    {
        $model = FollowUp::findOrFail($id);
        return view('followup.edit',compact('model'));
    }
    public function update(Request $request, string $id)
    {
        $this->validate($request, [

        ]);
        $model = FollowUp::findOrFail($id);


        $model->update([
    'reply' =>$request->reply
]);



        flash("successfully updated <strong> $model->name</strong>")->success();
        return redirect(route('followup.index'));
    }
    public function destroy(string $id)
    {
        $model = FollowUp::findOrFail($id);
        $model->delete();
        flash("successfully deleted <strong> $model->name</strong>")->success();
        return back();
    }}
