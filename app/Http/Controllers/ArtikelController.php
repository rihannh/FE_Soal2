<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Http\Requests\ArtikelRequest;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Artikel::all();
        return view('admin.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArtikelRequest $request)
    {
        $data = $request->all();
        Artikel::create($data);
        return redirect()->route('artikel.index');
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
        $item = Artikel::findorfail($id);

        return view('admin.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArtikelRequest $request, string $id)
    {
        $data = $request->all();

        $item = Artikel::findorfail($id);
        $item->update($data);

        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item =Artikel::findorfail($id);
        $item->delete();

        return redirect()->route('artikel.index');
    }
}
