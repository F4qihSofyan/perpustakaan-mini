<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['nama_kategori' => 'Fiksi', 'deskripsi' => 'Buku-buku cerita fiksi dan novel'],
            ['nama_kategori' => 'Non-Fiksi', 'deskripsi' => 'Buku-buku ilmiah dan pengetahuan'],
            ['nama_kategori' => 'Komik', 'deskripsi' => 'Komik dan manga'],
            ['nama_kategori' => 'Sejarah', 'deskripsi' => 'Buku tentang sejarah dunia dan Indonesia'],
            ['nama_kategori' => 'Sains', 'deskripsi' => 'Buku sains dan teknologi'],
        ];

        foreach ($categories as $cat) {
            Category::create($cat);
        }
    }
}