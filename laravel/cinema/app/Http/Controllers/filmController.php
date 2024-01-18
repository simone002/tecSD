<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;


class filmController extends Controller
{
    public function read()
    {
        if($_GET['readF']=="film"){
            $films = DB::table('film')->where('regista', $_GET['regista'])->get();

            return view('read', ['films' => $films]);
        }

        if($_GET['readF']=="All"){

            $films = DB::table('film')->get();

            return view('read', ['films' => $films]);
        }
    }


}
