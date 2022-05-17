<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monster;

class MonsterController extends Controller
{
    public function index()
    {
        $monsters = Monster::paginate(10);
        return view('monsters.index', compact('monsters'));
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        return view('monsters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $request->validate([
            'armor_class' => 'max:10|numeric|required',
            'hit_points' => 'max:10|numeric|required',
            'strength' => 'max:10|required|numeric',
            'dexterity' => 'max:10|required|numeric',
            'constitution' => 'max:10|numeric|required',
            'intelligence' => 'max:10|numeric|required',
            'wisdom' => 'max:10|numeric|required',
            'charisma' => 'max:10|numeric|required',
            'xp' => 'max:10|numeric|required',
            'challenge_rating' => 'max:10|numeric|required'
        ]);

       $formData = $request->all();
       $monster = Monster::create($formData);

       // return redirect()->route('houses.index');
       return redirect()->route('monsters.show', compact('monster'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Monster  $Monster
     * @return \Illuminate\Http\Response
     */
    public function show(Monster $monster)
    {
        return view('monsters.show', compact('monster'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Monster  $Monster
     * @return \Illuminate\Http\Response
     */
    
     public function edit(Monster $monster)
    {
        return view('monsters.edit', compact('monster'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Monster  $Monster
     * @return \Illuminate\Http\Response
     */
    
     public function update(Request $request, Monster $monster)
    {
        $formData = $request->all();
        $monster->update($formData);
        return redirect()->route('monster.show', $monster->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Monster  $Monster
     * @return \Illuminate\Http\Response
     */
    
     public function destroy(Monster $monster)
    {
        $monster->delete();
        return redirect()->route('monsters.index');
    }

      /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Monster  $Monster
     * @return \Illuminate\Http\Response
     */
    

    public function search(Request $request)
    {
         $search_text = $request->query('query');
         $monsters = Monster::where('name', 'LIKE', '%' . $search_text . '%');
         return view('monsters.search', compact('monsters'));
    }
}

