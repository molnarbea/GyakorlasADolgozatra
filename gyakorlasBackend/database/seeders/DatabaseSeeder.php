<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        Product::create([
            'seller_id' => 5,
            'title' => 'Klasszikus fehér póló',
            'description' => 'Kényelmes pamut póló mindennapi viselethez',
            'price' => 4990,
            'picture' => 'feher_polo.jpg'
        ]);

        Product::create([
            'seller_id' => 6,
            'title' => 'Fekete slim fit farmer',
            'description' => 'Modern szabású férfi farmer',
            'price' => 15990,
            'picture' => 'fekete_farmer.jpg'
        ]);

        Product::create([
            'seller_id' => 5,
            'title' => 'Virágmintás nyári ruha',
            'description' => 'Könnyű és elegáns nyári viselet',
            'price' => 12990,
            'picture' => 'nyari_ruha.jpg'
        ]);

        Product::create([
            'seller_id' => 1,
            'title' => 'Kapucnis pulóver',
            'description' => 'Meleg uniszex pulóver',
            'price' => 9990,
            'picture' => 'pulover.jpg'
        ]);

        Product::create([
            'seller_id' => 8,
            'title' => 'Műbőr kabát',
            'description' => 'Divatos fekete kabát',
            'price' => 24990,
            'picture' => 'borkabat.jpg'
        ]);

        Product::create([
            'seller_id' => 3,
            'title' => 'Sport rövidnadrág',
            'description' => 'Futáshoz és edzéshez',
            'price' => 6990,
            'picture' => 'rovidnadrag.jpg'
        ]);

        Product::create([
            'seller_id' => 9,
            'title' => 'Kockás ing',
            'description' => 'Hosszú ujjú férfi ing',
            'price' => 8990,
            'picture' => 'kockas_ing.jpg'
        ]);

        Product::create([
            'seller_id' => 4,
            'title' => 'Bélelt télikabát',
            'description' => 'Hideg időre tervezve',
            'price' => 34990,
            'picture' => 'telikabat.jpg'
        ]);

        Product::create([
            'seller_id' => 1,
            'title' => 'Pliszírozott szoknya',
            'description' => 'Elegáns női szoknya',
            'price' => 10990,
            'picture' => 'szoknya.jpg'
        ]);

        Product::create([
            'seller_id' => 3,
            'title' => 'Farmerdzseki',
            'description' => 'Világoskék divatos dzseki',
            'price' => 18990,
            'picture' => 'farmerdzseki.jpg'
        ]);
    }
}
