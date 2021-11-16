<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class Msg{

    public function send($id, $text, $time){
        $send = DB::table('messages')
            ->insert([
                'text' => $text,
                'user_id' => $id,
                'time' => $time
            ]);
    }

    public function getAll(){
        $messages = DB::table('messages')
            ->join('users', 'messages.user_id', '=', 'users.id_user')
            ->get();

        return $messages;
    }
}
















