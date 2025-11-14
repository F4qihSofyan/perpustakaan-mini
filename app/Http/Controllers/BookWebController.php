<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookWebController extends Controller
{
    public function index()
    {
        $books = Book::with('category')->get();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'judul_buku' => 'required|string|max:200',
            'pengarang' => 'required|string|max:100',
            'tahun_terbit' => 'required|integer|min:1000|max:' . (date('Y') + 1),
            'stok' => 'required|integer|min:0',
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')
                         ->with('success', 'Buku berhasil ditambahkan!');
    }

    public function show($id)
    {
        $book = Book::with('category')->findOrFail($id);
        return view('books.show', compact('book'));
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $categories = Category::all();
        return view('books.edit', compact('book', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'judul_buku' => 'required|string|max:200',
            'pengarang' => 'required|string|max:100',
            'tahun_terbit' => 'required|integer|min:1000|max:' . (date('Y') + 1),
            'stok' => 'required|integer|min:0',
        ]);

        $book->update($request->all());

        return redirect()->route('books.index')
                         ->with('success', 'Buku berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('books.index')
                         ->with('success', 'Buku berhasil dihapus!');
    }
}