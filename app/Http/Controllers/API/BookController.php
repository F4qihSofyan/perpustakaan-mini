<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('category')->get();
        return response()->json($books);
    }

    public function store(Request $request)
    {
        // untuk validasi data buku ketika create/menambahkan data
        $validator = Validator::make($request->all(), [
            'category_id' => 'required|exists:categories,id',
            'judul_buku' => 'required|string|max:200',
            'pengarang' => 'required|string|max:100',
            'tahun_terbit' => 'required|integer|min:1000|max:' . (date('Y') + 1),
            'stok' => 'required|integer|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation Error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $validated = $validator->validated();
        $book = Book::create($validated);

        return response()->json($book->load('category'), 201);
    }

    public function show($id)
    {
        $book = Book::with('category')->findOrFail($id);
        return response()->json($book);
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        // untuk validasi data buku ketika update/edit data
        $validator = Validator::make($request->all(), [
            'category_id' => 'required|exists:categories,id',
            'judul_buku' => 'required|string|max:200',
            'pengarang' => 'required|string|max:100',
            'tahun_terbit' => 'required|integer|min:1000|max:' . (date('Y') + 1),
            'stok' => 'required|integer|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation Error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $validated = $validator->validated();
        $book->update($validated);

        return response()->json($book->load('category'));
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return response()->json(null, 204);
    }
}