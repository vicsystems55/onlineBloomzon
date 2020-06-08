<?php

use Illuminate\Database\Seeder;

class IngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('ingredients')->insert([
            [
                'name' => 'Quick Oats',
                'description' => '100% whole grain oats (quick cooking)',
                'category' => 'oats',
                'price' => 230000,
                'pix' => 'quickoats.jpg',
                'price_per_gram' => 0.027,
            ],

            [
                'name' => 'Quick Cereals',
                'description' => '100% whole grain oats (quick cooking)',
                'category' => 'oats',
                'price' => 50000,
                'pix' => 'quickoats2.jpg',
                'price_per_gram' => 12.007,
            ],

            [
                'name' => 'Quick milks',
                'description' => '100% whole grain oats (quick cooking)',
                'category' => 'oats',
                'price' => 43000,
                'pix' => 'quickoats3.jpg',
                'price_per_gram' => 100.007,
            ],

            [
                'name' => 'Quick sugars',
                'description' => '100% whole grain oats (quick cooking)',
                'category' => 'oats',
                'price' => 900000,
                'pix' => 'quickoats4.jpg',
                'price_per_gram' => 200.007,
            ],

            [
                'name' => 'Quick malt',
                'description' => '100% whole grain oats (quick cooking)',
                'category' => 'oats',
                'price' => 220000,
                'pix' => 'quickoats5.jpg',
                'price_per_gram' => 0.777,
            ],
/* ... many more! ... */
       ]);
    }
}
