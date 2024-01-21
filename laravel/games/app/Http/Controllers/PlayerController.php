<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{

    public function index()
    {
        $players= Player::all();
        return view('players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('players.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Player::create($request->all());
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        return view('players.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        return view('players.edit', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Player $player)
    {
        $player->update($request->all());
        return redirect('/players');
    }

    public function help_show(Request $request){

        $id=$request->input('id');
        return redirect("/players/$id");

    }


    public function destroy(Player $player)
    {
        $player->delete();
        return redirect('/players');
    }

    public function destroyAll()
    {
        $players = Player::all();
        foreach($players as $player)
            $player->delete();
        return redirect('/players');
    }
}
