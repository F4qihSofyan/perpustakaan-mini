<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'judul_buku',
        'pengarang',
        'tahun_terbit',
        'stok',
    ];

    // Relasi ke category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}