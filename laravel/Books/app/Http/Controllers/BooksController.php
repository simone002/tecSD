<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function read()
    {
        $books = Books::all();

        return view('read', ['books' => $books]);
    }

    public function insert(Request $request)
    {
        Books::create($request->all());

        return redirect('/read');
    }

    public function update(Request $request)
    {

        $book = Books::findOrFail($request->input('id'));

        $book->update($request->except(['_token', '_method', 'id']));

        return redirect('/read');
    }

    public function delete(Request $request)
    {

        $id = $request->input('id');
        Books::findOrFail($id)->delete();

        return redirect('/read');
    }
}
