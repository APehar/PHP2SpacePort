<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class Users{

    public function login($email, $pass){
        $login = DB::table('users')
            ->where([
                ['email', '=', $email],
                ['password', '=', md5($pass)]])
            ->first();
        return $login;
    }
    public function check($email){
        $login = DB::table('users')
            ->where('email', '=', $email)
            ->first();
        return $login;
    }

    public function signup($email, $username, $pass){
        $signup = DB::table('users')
            ->insert([
                'username'=>$username,
                'email'=>$email,
                'password'=>md5($pass),
                'role_id'=>2]);
    }

    public function getAdmin(){
        $users = DB::table('users')
            ->orderBy('username', 'asc')
            ->get();
        return $users;
    }

    public function grantAdmin($id){
        $grant = DB::table('users')
            ->where('id_user', '=', $id)
            ->update(['role_id' => 1]);
    }

    public function deleteUser($id){
        $delete = DB::table('users')
            ->where('id_user', '=', $id)
            ->delete();
        $deletemsg = DB::table('messages')
            ->where('user_id' , '=', $id)
            ->delete();
    }
}
