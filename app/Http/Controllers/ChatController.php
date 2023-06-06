<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index(){
        $chats=Question::all();
        return view( 'chat.index',compact('chats'));
    }
    public function create(){
        return view( 'chat.create');
    }
    public function store(Request $request){
        $record = Question::create($request->all());



        flash("successfully added <strong> $record->name</strong>")->success();
        return redirect(route('chat.index'));

    }
    public function edit($id){

        $model = Question::findOrFail($id);

        return view('chat.edit',compact('model'));
    }
    public function update(Request $request,$id){
        $model = Question::findOrFail($id);
        $model->update($request->all());

        return redirect(route('chat.index'));
        }
    public function destroy($id){

        $model = Question::findOrFail($id);
        $model->delete();
        flash("successfully deleted <strong> $model->name</strong>")->success();
        return back();    }
}
