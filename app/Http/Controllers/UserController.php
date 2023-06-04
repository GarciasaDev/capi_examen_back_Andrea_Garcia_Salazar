<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')
                    ->join('user_domicilios','users.id', 'user_domicilios.user_id')
                    ->select('users.name','users.email','users.fecha_nacimiento','user_domicilios.*',
                        DB::raw('TIMESTAMPDIFF(year, users.fecha_nacimiento, CURRENT_DATE()) as edad'))
                    ->get();

        return $users;
    }
}
