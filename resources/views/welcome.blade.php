@extends('layouts.app')

@section('title', 'Beranda')

@section('hero')
<div class="hero-section mb-6">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="hero-title">Selamat Datang di Perpustakaan Mini</h1>
                <p class="hero-subtitle">Temukan dunia pengetahuan melalui koleksi buku berkualitas kami. Jelajahi, baca, dan tingkatkan wawasan Anda.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('books.index') }}" class="btn btn-hero">
                        <i class="fas fa-book-open me-2"></i>Jelajahi Koleksi
                    </a>
                    <a href="#" class="btn btn-outline-light">
                        <i class="fas fa-user-plus me-2"></i>Daftar Anggota
                    </a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="hero-image">
                    <i class="fas fa-book-reader" style="font-size: 12rem; opacity: 0.8;"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



<style>
    .category-card {
        border: none;
        transition: transform 0.3s, box-shadow 0.3s;
    }
    
    .category-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .book-card {
        border: none;
        transition: transform 0.3s, box-shadow 0.3s;
    }
    
    .book-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    
    .hero-image {
        animation: float 3s ease-in-out infinite;
    }
    
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
        100% { transform: translateY(0px); }
    }
</style>