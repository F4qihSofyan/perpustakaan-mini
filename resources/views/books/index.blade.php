@extends('layouts.app')
@section('title', 'Daftar Buku')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Daftar Buku</h1>
    <a href="{{ route('books.create') }}" class="btn btn-dark">
        <i class="fas fa-plus"></i> Tambah Buku
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card">
    <div class="card-body p-0">
        <table class="table table-hover mb-0">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Kategori</th>
                    <th>Tahun</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($books as $i => $book)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $book->judul_buku }}</td>
                    <td>{{ $book->pengarang }}</td>
                    <td><span class="badge bg-info">{{ $book->category->nama_kategori }}</span></td>
                    <td>{{ $book->tahun_terbit }}</td>
                    <td><span class="badge {{ $book->stok > 0 ? 'bg-success' : 'bg-danger' }}">{{ $book->stok }}</span></td>
                    <td>
                        <a href="{{ route('books.show', $book) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('books.edit', $book) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('books.destroy', $book) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus buku ini?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">Belum ada buku.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection