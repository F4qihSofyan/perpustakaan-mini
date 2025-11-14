@extends('layouts.app')
@section('title', 'Detail Kategori')

@section('content')
<h1>Detail Kategori</h1>

<div class="card">
    <div class="card-body">
        <p><strong>Nama Kategori:</strong> {{ $category->nama_kategori }}</p>
        <p><strong>Deskripsi:</strong> {{ $category->deskripsi ?? '-' }}</p>
        <p><strong>Dibuat:</strong> {{ $category->created_at->format('d M Y H:i') }}</p>
    </div>
    <div class="card-footer">
        <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection