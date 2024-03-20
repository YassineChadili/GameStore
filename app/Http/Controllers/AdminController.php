<?php

namespace App\Http\Controllers;

use App\Models\Console;
use App\Models\Game;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::paginate(10);
        return view('admin.index',[
            'games' => $games,
        ]);
    }    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $consoles = Console::all();
        return view('admin.create', ['consoles' => $consoles]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
            'console_ids' => 'required|array',
            'console_ids.*' => 'exists:consoles,id',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/img', $imageName);
            $imageName = 'storage/img/'. $imageName;

            $game = Game::create([
                'name' => $request->name,
                'image' => $imageName,
                'price' => $request->price,
            ]);

            $game->consoles()->attach($request->input('console_ids', []));

        } else {
            return redirect()->back()->with('error', 'Geen afbeelding geüpload');
        }
      
        return redirect()->route('admin.index')->with('message', 'Game is succesvol toegevoegd.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
