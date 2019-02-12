<?php

namespace App\Http\Controllers;

use App\GameType;
use App\Puppy;

use Illuminate\Http\Request;

class GameTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gameTypes = GameType::all();
        return view('/gameTypes/index', ['gameTypes' => $gameTypes ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/gameTypes/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        GameType::create($attributes);
        return redirect('/gameTypes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GameType  $gameType
     * @return \Illuminate\Http\Response
     */
    public function show(GameType $gameType, Puppy $puppy)
    {
        dd($puppy);
        return view('gameTypes.show', compact('gameType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GameType  $gameType
     * @return \Illuminate\Http\Response
     */
    // public function edit(GameType $gameType)
    public function edit(GameType $gameType)
    {
        return view('gameTypes.edit', compact('gameType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GameType  $gameType
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, GameType $gameType)
    public function update(GameType $gameType)
    {
        $attributes = request()->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $gameType->update($attributes);

        return redirect('/gameTypes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GameType  $gameType
     * @return \Illuminate\Http\Response
     */
    public function destroy(GameType $gameType)
    {
        $gameType->delete();
        return redirect('/gameTypes');
    }
}
