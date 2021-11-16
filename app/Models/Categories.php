<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class Categories
{
    public function getAll(){
        $categories = DB::table('category')
            ->get();
        return $categories;
    }
}
