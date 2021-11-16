<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Models\Ships;
use App\Models\Msg;

class FormController extends Controller
{
    private $data = [];

    public function login(Request $request){
        $input = $request->all();
        $email = $input['email'];
        $pass = $input['password'];

        $model = new Users();
        $user = $model->login($email, $pass);

        if($user){
            $request->session()->put('user', $user);
//LOG
            $id = session('user')->id_user;
            $time = time();
            $action = 4;
            $model = new Log();
            $model->addLog($id, $time, $action);

            return redirect('/message')->with('message', 'You have logged in successfully.');
        }
        else{
            return redirect('/login')->with('message', 'Email or password is incorrect.');
        }
    }

    public function logout(Request $request){
        $request->session()->forget("user");
        $request->session()->flush(); // = destroy()
        return redirect("/");
    }

    public function signup(Request $request){
        $input = $request->all();
        $email = $input['email'];
        $username = $input['username'];
        $pass = $input['password'];

        $regName ='/^[a-zA-Z0-9._-]{3,15}$/';
        $regPass = '/^[a-zA-Z0-9]{3,15}$/';

        $errors = [];
        if(!preg_match($regName, $username)){
            $errors[] = 'Username is not Valid';
        }
        if(!preg_match($regPass, $pass)){
            $errors[] = 'Password is not Valid';
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Email is not Valid";
        }

        if(count($errors)>0){
            return redirect('/signup')->with('errors', $errors);
        }
        else{
            $model = new Users();
            $check = $model->check($email);
            if($check){
                return redirect('/login')->with('message', 'User with email already exists.');
            }
            else{
                $insert = $model->signup($email, $username, $pass);
                $login = $model->login($email, $pass);
                $request->session()->put('user', $login);
//LOG
                $id = session('user')->id_user;
                $time = time();
                $action = 6;
                $model = new Log();
                $model->addLog($id, $time, $action);

                return redirect('/message')->with('message', 'You have signed up successfully.');
            }
        }

    }

    public function rent(Request $request){
        $input = $request->all();
        if(!isset($input['crew'])){
            $crew = 0;
        }
        else
            $crew = $input['crew'];
        $ship = $input['ship_id'];
        $user = session('user')->id_user;
        $time = time();

        $model = new Ships();
        $rent = $model->rent($ship, $user, $crew, $time);
        return redirect('/message')->with('message', 'You have rented a ship successfully.');
    }

    public function sendmsg(Request $request){

        $text = $request->input('msg');
        $id = session('user')->id_user;
        $time = time();

        $model = new Msg();
        $model->send($id, $text, $time);

        return redirect('/message')->with('message', 'You have successfully sent a message to the admins.');
    }
}
