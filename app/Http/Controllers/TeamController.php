<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    function index () {
        $team = Team::all();
        return view('team.index', [
            'team' => $team
        ]);
    }
    
    function create () {
        return view('team.create');
    }

    function store (Request $request) {
        Team::create($request->all());
        return redirect('/team');
    }

    function show (string $id) {
        $team = Team::find($id);
        return view('team.show', [
            'team' => $team
        ]);
    }

    function edit () {
        return view('team.edit');
    }

    function update () {

    }

    function destroy () {

    }
}
