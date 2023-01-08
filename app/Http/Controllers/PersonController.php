<?php

namespace App\Http\Controllers;

use App\Models\person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function insertData(Request $req){
        $data = [
            'name' => $req->name,
            'age' => $req->age,
            'address' => $req->address,
            'gender' => $req->gender
        ];
        person::create($data);
        return back();
    }
}
