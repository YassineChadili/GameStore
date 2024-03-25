<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $game = Game::find($id);
        return view('invoices.create')->with(['game' => $game]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'street' => 'required|string',
            'zip' => 'required|string',
            'city' => 'required|string',
            'game_id' => 'required|exists:games,id',
        ]);

        Invoice::create([
            'street' => $request->street,
            'zip' => $request->zip,
            'city' => $request->city,
            'game_id' => $request->game_id,
            'user_id' => Auth::id()
        ]);
      
        return redirect()->route('games.index')->with('message', 'Game is succesvol gekocht.');
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
