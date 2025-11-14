@extends('layouts.app')
@section('title', 'Detail Buku')

@section('content')
<h1>Detail Buku</h1>

<div class="card">
    <div class="card-body">
        <p><strong>Judul:</strong> {{ $book->judul_buku }}</p>
        <p><strong>Pengarang:</strong> {{ $book->pengarang }}</p>
        <p><strong>Kategori:</strong> <span class="badge bg-info">{{ $book->category->nama_kategori }}</span></p>
        <p><strong>Tahun Terbit:</strong> {{ $book->tahun_terbit }}</p>
        <p><strong>Stok:</strong> <span class="badge {{ $book->stok > 0 ? 'bg-success' : 'bg-danger' }}">{{ $book->stok }}</span></p>
        <p><strong>Dibuat:</strong> {{ $book->created_at->format('d M Y H:i') }}</p>
    </div>
    <div class="card-footer">
        <a href="{{ route('books.edit', $book) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection