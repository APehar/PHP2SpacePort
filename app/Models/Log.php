<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class Log{

    public function getLog($order = 'desc'){
        $logs = DB::table('log')
            ->join('users', 'log.user_id', '=', 'users.id_user')
            ->join('actions', 'log.action_id', '=', 'actions.id_action')
            ->orderBy('time', $order)
            ->get();
        return $logs;
    }

    public function addLog($user, $time, $action){
        $log = DB::table('log')
            ->insert([
                'time'=>$time,
                'user_id'=>$user,
                'action_id'=>$action]);
    }


}
