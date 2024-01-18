<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Player;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() // index
    {
        $games= Game::all();
        return view('games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $playerName = $request->input('player_name');
        $player = Player::where('name', $playerName)->first();
        $request->merge(['player_id' => $player->id]);

        Game::create($request->all());
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        return view('games.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        Player::findOrFail($game->player_id);
        $game->update($request->all());
        return redirect('/games');
    }

    public function help_show(Request $request){

        $id=$request->input('id');
        return redirect("/games/$id");

    }

    public function maggiora(Request $request){
        $id = $request->input('id');
        $prezzo = $request->input('prezzo');
        $prezzo = $prezzo+$prezzo*10/100;

        $game = Game::findOrFail($id);
        $game->update(['prezzo' => $prezzo]);

        return redirect("/games/$id");
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect('/games');
    }

    public function destroyAll()
    {
        $games = Game::all();
        foreach($games as $game)
            $game->delete();
        return redirect('/games');
    }


}
