<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use App\Models\Msg;
use App\Models\Ships;
use App\Models\Users;
use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class AdminController extends Controller{

    private $data = [];

    public function __construct()
    {
        $meni = new Categories();
        $this->data['cats'] = $meni->getAll();
    }

    public function index(){
        return view('pages.adminpanel');
    }
    public function ships(){
        $model = new Ships();
        $this->data['ships'] = $model->getAdmin();
        return view('pages/adminships', $this->data);
    }

    public function users(){
        $model = new Users();
        $this->data['users'] = $model->getAdmin();
        return view('pages/adminusers', $this->data);
    }

    public function log(){
        $model = new Log();
        $this->data['logs'] = $model->getLog();
        return view('pages/adminlog', $this->data);
    }

    public function msg(){
        $model = new Msg();
        $this->data['msgs'] = $model->getAll();
        return view('pages/adminmsgs', $this->data);

    }

    public function orderlog($order){
        $model = new Log();
        $this->data['logs'] = $model->getLog($order);
        return view('pages/adminlog', $this->data);

    }


    public  function grantadmin($id){
        $model = new Users();
        $model->grantAdmin($id);

        return redirect('/message')->with('message', 'You have successfully granted admin access to a user.');
    }

    public  function deleteUser($id){
        $model = new Users();
        $model->deleteUser($id);

        return redirect('/message')->with('message', 'You have successfully deleted a user.');
    }

    public function deleteShip($id){
        $model = new Ships();
        $model->deleteShip($id);

        return redirect('/message')->with('message', 'You have successfully deleted a ship.');
    }
    public function addShip($id){
        $model = new Ships();
        $model->addShip($id);

        return redirect('/message')->with('message', 'You have successfully added a ship.');
    }

    public function editform($id){
        $model = new Ships();
        $this->data['ship'] = $model->getById($id);


        return view('pages.editform', $this->data);
    }

    public function editShip(Request $request, $id){

        if ($request->hasFile('img'))
        {
            $image = $request->file('img');
            $imgname = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $imgname);
        }
        else{
            $imgname = $request->input('orgImage');
        }

        $name = $request->input('name');
        $price = $request->input('price');
        $story = $request->input('story');
        $cat = $request->input('cat');

        $model = new Ships();
        $model->editShip($id, $name, $story, $price, $imgname, $cat);

        return redirect('/message')->with('message', 'You have successfully edited a ship.');
    }

    public function insertform(){
        $model = new Categories();
        $this->data['cats'] = $model->getAll();

        return view('pages.insertform', $this->data);
    }

    public function insertShip(Request $request){
        $message = [];
        if ($request->hasFile('img'))
        {
            $image = $request->file('img');
            $imgname = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $imgname);
        }
        else
            $message[] = 'Picture missing';

        if($request->input('name') != null)
            $name = $request->input('name');
        else
            $message[] = 'Name missing';

        if($request->input('price') != null)
            $price = $request->input('price');
        else
            $message[] = "Price missing";

        if($request->input('story') != null)
            $story = $request->input('story');
        else
            $message[] = 'Description missing';

        if ($request->input('cat') != 0)
            $cat = $request->input('cat');
        else
            $message[] = 'Category missing';

        if(count($message)>0){
            return redirect('/ships/insertform')->with('error' , $message);
        }
        else{
            $model = new Ships();
            $model->insertShip($name, $story, $price, $imgname, $cat);

            return redirect('/message')->with('message', 'You have successfully added a ship.');
        }

    }
}
