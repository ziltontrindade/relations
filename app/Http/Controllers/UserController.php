<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $r){
        $users = User::all();
        return $users;
    }

    public function findOne(Request $r){
        $user = User::find($r->id);
        return $user->address;
    }

    public function insert(Request $r){
        $rawData = $r->only(['name','email','password']);

        $user = User::create($rawData);

        return $user;

    }
}

