<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            ['category_id' => 1, 'judul_buku' => 'Laskar Pelangi', 'pengarang' => 'Andrea Hirata', 'tahun_terbit' => 2005, 'stok' => 10],
            ['category_id' => 1, 'judul_buku' => 'Harry Potter', 'pengarang' => 'J.K. Rowling', 'tahun_terbit' => 1997, 'stok' => 5],
            ['category_id' => 2, 'judul_buku' => 'Sapiens', 'pengarang' => 'Yuval Noah Harari', 'tahun_terbit' => 2011, 'stok' => 8],
            ['category_id' => 3, 'judul_buku' => 'Naruto Vol.1', 'pengarang' => 'Masashi Kishimoto', 'tahun_terbit' => 1999, 'stok' => 15],
            ['category_id' => 4, 'judul_buku' => 'Sejarah Indonesia Modern', 'pengarang' => 'M.C. Ricklefs', 'tahun_terbit' => 2008, 'stok' => 3],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}