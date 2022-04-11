<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Item;
use App\Models\Store;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Item::create([
        //     'name' => 'Oli 1',
        //     'price' => 50000,
        //     'category_id' => 2,
        //     'store_id' => 1
        // ]);
        Store::create([
            'name' => 'Toko 1',
            'location' => 'Banjarsari'
        ]);
        Category::create([
            'name' => 'Exhaust',
            'slug' => 'exhaust'
        ]);
        Category::create([
            'name' => 'Engine Oil',
            'slug' => 'engine-oil'
        ]);
        Category::create([
            'name' => 'Tools',
            'slug' => 'tools'
        ]);
        // \App\Models\User::factory(10)->create();
        // Item::factory(10)->create();
        // foreach (Item::all() as $item) {
        //     $store = Store::inRandomOrder()->take(rand(1,3))->pluck('id');
        //     $item->store()->attach($store);
        // }
        // $this->call(LaratrustSeeder::class);
    }
}
