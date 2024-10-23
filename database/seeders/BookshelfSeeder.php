<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //tambahkanini
use App\Models\Book; 
class BookshelfSeeder extends Seeder


{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookshelfs')->insert([
        [
            'code' => 'BS001',
            'name' => 'mangga'
        ],
        [

            'code' => 'BS001',
            'name' => 'mangga'
        ]
       ]);
       Book::create([
        'tittle'   => 'gajah terbang',
        'author'   => 'minsittar',
        'year'   => '2024',
        'publisher'   => 'universitas gajah terbang',
        'city'   => 'cianjur',
        'cover'   => 'gajahterbang.jpg',
        'bookshelf_id'   => 1
       ]);
    }
}
