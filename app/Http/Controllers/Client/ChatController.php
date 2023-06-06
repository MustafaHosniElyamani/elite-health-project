<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index(Request $request){
        $record = null;
        $q = null;

    if ($request->has('chat')) {
        $record = Question::query()
            ->where('name', 'like', '%'.$request->input('chat').'%')
            ->first();
        $q=$request->chat;
        if($record){

        }else{
            $record = (object) ['answer' => 'برجاء التوضيح'];
        }

    }

    return view('client.chat', compact('record','q'));

    }
}
