<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'nama_tas' => 'Kylie Bag',
            'kategori' => 'Sling Bag',
            'harga' => 299000,
            'stok' => 15,
            'deskripsi' => 'Tas wanita elegan untuk aktivitas sehari-hari'
        ]);

        Product::create([
            'nama_tas' => 'Selena Bag',
            'kategori' => 'Hand Bag',
            'harga' => 350000,
            'stok' => 10,
            'deskripsi' => 'Tas premium dengan desain modern'
        ]);

        Product::create([
            'nama_tas' => 'Ariana Backpack',
            'kategori' => 'Backpack',
            'harga' => 420000,
            'stok' => 8,
            'deskripsi' => 'Tas ransel stylish dan multifungsi'
        ]);
    }
}
