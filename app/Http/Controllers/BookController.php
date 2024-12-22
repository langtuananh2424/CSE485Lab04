<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::latest()->paginate(10);
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->input('category'));
//        $request->validate([
//            'name' => 'required',
//            'author' => 'required',
//            'category' => 'required',
//            'year' => 'required',
//            'quantity' => 'required',
//        ]);
//        try {
//            Book::create($request->all());
//            return redirect()->route('books.index')->with('success', 'Book created successfully.');
//        } catch (\Exception $e) {
//            return back()->withErrors(['error' => 'Failed to create book: ' . $e->getMessage()]);
//        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);
        $borrows = $book->borrows;
//        foreach ($borrows as $borrow) {
//            echo "Người Mượn: " . $borrow->reader->name;
//            echo "<br>";
//            echo "Ngày mượn: " . $borrow->borrow_date;
//            echo "<br>";
//            echo "Ngày trả dự kiến: " . $borrow->return_date;
//            echo "<br>";
//        }
        return view('books.show', compact('book', 'borrows'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'author' => 'required',
        ]);
        Book::update($request->all());
        return redirect()->route('books.index')->with('success', 'Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Book::destroy($id);
        return redirect()->route('books.index')->with('success', 'Book deleted successfully');
    }
}
