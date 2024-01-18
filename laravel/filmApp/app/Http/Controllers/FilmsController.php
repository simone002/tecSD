<?php

namespace App\Http\Controllers;

use App\Models\Films;
use Illuminate\Http\Request;

class FilmsController extends Controller
{

    public function read()
    {
        return view('read', ['films' => Films::all()]);
    }

    public function create(Request $request)
    {
        Films::create($request->all());
        return redirect('/read');
    }

    public function form(Request $request)
    {
        if ($request->input("action") === "Modifica")
        {
            return view('update', ['film' => (object)$request->all()]);
        }

        if ($request->input("action") === "Rimuovi")
        {
            $book = Films::find($request->input('id'));
            $book->delete();
        }

        return redirect('/read');
    }

    public function update(Request $request)
    {
        $book = Films::find($request->input('id'));
        $book->update($request->all()); // Simile all'insert
        return redirect('/read');
    }
}
