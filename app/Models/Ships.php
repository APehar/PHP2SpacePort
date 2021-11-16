<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class Ships{


    public function getAll(){
        $ships = DB::table('ships')
            ->where('deleted' , '!=', 1)
            ->orderBy('name', 'asc')
            ->paginate(6);
        return $ships;
    }

    public function getById($id){
        $ship = DB::table('ships')
            ->where('id_ship', '=', $id)
            ->first();
        return $ship;
    }

    public function rent($ship, $user, $crew, $time){
        $rent = DB::table('rented')
            ->insert([
                'crew'=>$crew,
                'time'=>$time,
                'user_id'=>$user,
                'ship_id'=>$ship
            ]);
    }

    public function getRented($user){
        $rented = DB::table('rented')
            ->join('ships', 'rented.ship_id', '=', 'ships.id_ship')
            ->where('user_id', '=', $user)
            ->get();
        return $rented;
    }

    public function getSorted($search, $origin){
            $ships = DB::table('ships')
                ->where('name', 'LIKE', '%'. $search .'%')
                ->whereIn('cat_id', $origin)
                ->orderBy('name', 'asc')
                ->paginate(6);
            return $ships;

    }


    public function getAdmin(){
        $ships = DB::table('ships')
            ->orderBy('name', 'asc')
            ->paginate(7);
        return $ships;
    }

    public function deleteShip($id){
        $fakeDelete = DB::table('ships')
            ->where('id_ship', '=', $id)
            ->update(['deleted' => 1]);
    }

    public function addShip($id){
        $fakeDelete = DB::table('ships')
            ->where('id_ship', '=', $id)
            ->update(['deleted' => 0]);
    }

    public function editShip($id, $name, $story, $price, $imgname, $cat){
        $edit = DB::table('ships')
            ->where('id_ship','=', $id)
            ->update([
                'name' => $name,
                'story' => $story,
                'price' => $price,
                'img' => $imgname,
                'cat_id' => $cat
                ]);
    }
    public function insertShip($name, $story, $price, $imgname, $cat){
        $edit = DB::table('ships')
            ->insert([
                'name' => $name,
                'story' => $story,
                'price' => $price,
                'img' => $imgname,
                'deleted' => 0,
                'cat_id' => $cat
            ]);
    }
}
















