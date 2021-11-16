<?php

namespace App\Http\Controllers;
use App\Models\Ships;
use App\Models\Categories;
use Illuminate\Http\Request;
use Psy\Util\Json;

class HomeController extends Controller{

    private $data = [];

    public function __construct()
    {
        $meni = new Categories();
        $this->data['categories'] = $meni->getAll();
    }

    public function index(){
        return view('pages.home');
    }
    public function author(){
        return view('pages.author');
    }
    public function login(){
        return view('pages.login');
    }
    public function signup(){
        return view('pages.signup');
    }
    public function profile(){
        $model = new Ships();

        $user = session('user')->id_user;

        $this->data['rents'] = $model->getRented($user);
        return view('pages.profile', $this->data);
    }
    public function message(){
        return view('pages.message');
    }


    public function ships(){
        $model = new Ships();
        $this->data['ships'] = $model->getAll();



        return view('pages.ships', $this->data);
    }

    public function shipdetail($id){
        $model = new Ships();
        $this->data['ship'] = $model->getById($id);
        return view('pages.shipdetail', $this->data);
    }

    public function sort(Request $request){

        $model = new Ships();

        if($request->has('search')){
            $search = $request->get('search');
        }
        else{
            $search = "";
        }
        if($request->has('origin')){
            $origin = $request->get('origin');
        }
        else{
            $origin = [1, 2, 3, 4, 5];
        }


        $this->data['ships'] = $model->getSorted($search, $origin);
        return view('pages.ships', $this->data);
    }
}
