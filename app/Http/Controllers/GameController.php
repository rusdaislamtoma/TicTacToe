<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(Request $request){
       return view('game.index');
    }

    public function game_start(Request $request){
       // dd($request->all());

        $request->validate([
            'player1' => 'required',
            'player2' => 'required',
            'board_length' => 'required|numeric|min:3|max:10',   
        ]);

        $data['player1'] = $request->player1;
        $data['player2'] = $request->player2;
        $data['board_length'] = $request->board_length;

        return view('game.game_start',$data);

    }
}
