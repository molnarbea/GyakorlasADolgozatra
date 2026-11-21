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
            'picture' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTa-9P2rtt9StygamWhCcqNkxYB9_A3T5QSw7LXSrX-kQ&s'
        ]);

        Product::create([
            'seller_id' => 6,
            'title' => 'Fekete slim fit farmer',
            'description' => 'Modern szabású férfi farmer',
            'price' => 15990,
            'picture' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfLlCrxOKRkTpmucQdFrP1KmA9QEh5SpoS4ura-N8vqA&s=10'
        ]);

        Product::create([
            'seller_id' => 5,
            'title' => 'Virágmintás nyári ruha',
            'description' => 'Könnyű és elegáns nyári viselet',
            'price' => 12990,
            'picture' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRj0oxvkrpnb_1PO_IGkhQh4nXiHAJZJzkxJtgSN3wcaA&s=10'
        ]);

        Product::create([
            'seller_id' => 1,
            'title' => 'Kapucnis pulóver',
            'description' => 'Meleg pulóver',
            'price' => 9990,
            'picture' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzg2PvpprRA4j2BXwvLInKS1OV10MHw0PSVRP-lgjREw&s=10'
        ]);

        Product::create([
            'seller_id' => 8,
            'title' => 'Műbőr kabát',
            'description' => 'Divatos fekete kabát',
            'price' => 24990,
            'picture' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcb0Uh_j7QrgVlHaOGfkNChsgFSSp7pk00TfTxa2tfyA&s=10'
        ]);

        Product::create([
            'seller_id' => 3,
            'title' => 'Sport rövidnadrág',
            'description' => 'Futáshoz és edzéshez',
            'price' => 6990,
            'picture' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTq0bT3cbkiZHlH8GZgzpRVWRkY0uAgiJ0gJ_dL0znEGA&s=10'
        ]);

        Product::create([
            'seller_id' => 9,
            'title' => 'Kockás ing',
            'description' => 'Hosszú ujjú férfi ing',
            'price' => 8990,
            'picture' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6MeHTONdflmHVeoR2hOrlausFQNcH564WYyXnrRQUeg&s=10'
        ]);

        Product::create([
            'seller_id' => 4,
            'title' => 'Bélelt télikabát',
            'description' => 'Hideg időre tervezve',
            'price' => 34990,
            'picture' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRm8DeOPYJdgrDb8QOIZv1jKs8xr4T-2pjPg_aX7LfztQ&s=10'
        ]);

        Product::create([
            'seller_id' => 1,
            'title' => 'Pliszírozott szoknya',
            'description' => 'Elegáns női szoknya',
            'price' => 10990,
            'picture' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSt19V-0uKkmTnlGKWoqhM4ktNH2XMEP88CS-OIECrgKA&s=10'
        ]);

        Product::create([
            'seller_id' => 3,
            'title' => 'Farmerdzseki',
            'description' => 'Világoskék divatos dzseki',
            'price' => 18990,
            'picture' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRc_MV0qZKXNkoDdgASLJlh8MuXABg3vdhiHfHEveewgw&s=10'
        ]);
    }
}
