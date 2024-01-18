<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{

    public function read(){
        return view('read',['books'=>Books::all()]);
    }

    public function create(Request $request)
    {
        Books::create($request->all());
        return redirect('/read');
    }

    public function form(Request $request){

        if($request->input('action') === 'Modifica'){

            return view('update',['book'=> (object)$request->all()]);
        }

        if($request->input('action') === 'Rimuovi'){
            $book= Books::find($request->input('id'));
            $book->delete();
            return redirect('/read');
        }
    }


    public function update(Request $request)
    {
        $book= Books::find($request->input('id'));
        $book->update($request->all());
        return redirect('/read');
    }


}

