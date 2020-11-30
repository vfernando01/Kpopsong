<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Artist;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::all(); //SELECT * FROM Song
        $artists = Artist::all(); //SELECT * FROM Artist
        return view('song.index', compact('songs', 'artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artists = Artist::all();
        return view('song.addSong', compact('artists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'singed_by' => 'required|integer',
            'nameSong' => 'required|string',
            'albumSong'=>'required|string',
            'yearSong' => 'required|string',
            'genreSong' => 'required|string',
        ]);

        Song::create([
            'singed_by' => $data['singed_by'],
            'nameSong' => $data['nameSong'],
            'albumSong' => $data['albumSong'],
            'yearSong' => $data['yearSong'],
            'genreSong' => $data['genreSong'],
        ]);

        return redirect()->route('song.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        $artists = Artist::all();
        return view('song.editSong', compact('song', 'artists'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        $song->update($request->all());
        return redirect()->route('song.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        $song->delete();
        return redirect()->route('song.index');
    }
}
