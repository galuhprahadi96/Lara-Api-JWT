<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['exept' => ['login', 'register']]);
    }

    public function getUser()
    {
        $user = user::all();
        return response()->json([
            'message' => 'Success Get User All',
            'user' => $user
        ], 201);
    }
}
