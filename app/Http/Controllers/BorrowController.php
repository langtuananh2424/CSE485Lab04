<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use Illuminate\Database\Eloquent\BroadcastableModelEventOccurred;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $borrows = Borrow::paginate(10);
        return view('borrows.index', compact('borrows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('borrows.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required',
            'reader_id' => 'required',
            'borrow_date' => 'required',
            'status' => 'required',
        ]);
        Borrow::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $borrow = Borrow::find($id);
        return view('borrows.show', compact('borrow'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $borrow = Borrow::find($id);
        return view('borrows.edit', compact('borrow'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'book_id' => 'required',
            'reader_id' => 'required',
            'borrow_date' => 'required',
            'return_date' => 'required',
            'status' => 'required'
        ]);
        Borrow::update($request->all());
        return redirect()->route('borrows.index')->with('success', 'Borrow updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Borrow::destroy($id);
        return redirect()->route('borrows.index')->with('success', 'Borrow deleted successfully');
    }
}
