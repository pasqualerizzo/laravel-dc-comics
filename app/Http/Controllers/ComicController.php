<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:128',
            'description' => 'nullable',
            'thumb' => 'nullable|max:1024',
            'type' => 'required|max:16',
            'writers' => 'nullable|json',
        ], [
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Il titolo non può essere più lungo di 128 caratteri',
            'type.required' => 'Il tipo è obbligatorio',
            'type.max' => 'Il tipo non può essere più lungo di 16 caratteri',
        ]);

        $comic = new Comic();
        $comic->title = $request->input('title');
        $comic->description = $request->input('description');
        $comic->thumb = $request->input('thumb');
        $comic->type = $request->input('type');
        $comic->writers = $request->input('writers');
        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comic = Comic::findOrFail($id);

        $request->validate([
            'title' => 'required|max:128',
            'description' => 'nullable',
            'thumb' => 'nullable|max:1024',
            'type' => 'required|max:16',
            'writers' => 'nullable|json',
        ], [
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Il titolo non può essere più lungo di 128 caratteri',
            'type.required' => 'Il tipo è obbligatorio',
            'type.max' => 'Il tipo non può essere più lungo di 16 caratteri',
        ]);

        $comic->title = $request->input('title');
        $comic->description = $request->input('description');
        $comic->thumb = $request->input('thumb');
        $comic->type = $request->input('type');
        $comic->writers = $request->input('writers');
        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }
}
