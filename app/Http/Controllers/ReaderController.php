<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Reader;
class ReaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $readers = Reader::latest()->paginate(10);
        return view('readers.index', compact('readers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('readers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'birthday' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
        Reader::create($request->all());
        return redirect()->route('readers.index')->with('success', 'Reader created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reader = Reader::find($id);
        $borrows = $reader->borrows;
        return view('readers.show', compact('reader', 'borrows'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reader = Reader::find($id);
        return view('readers.edit', compact('reader'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
           'name' => 'required',
           'birthday' => 'required',
           'address' => 'required',
           'phone' => 'required',
        ]);
        Reader::find($id)->update($request->all());
        return redirect()->route('readers.index')->with('success', 'Reader updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Reader::destroy($id);
        return redirect()->route('readers.index')->with('success', 'Reader has been deleted');
    }
}
