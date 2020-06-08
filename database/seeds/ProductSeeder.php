<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            
        	[
           'product_name' => 'sheniel bag',
           'category_id' => '1',
           'description' => 'the best of bags from italy',
           'pix1' => 'samplebag1.png',
           'pix2' => 'samplebag2.png',
           'pix3' => 'samplebag3.png',
           'pix4' => 'samplebag4.png',
           'quantity_in_stock' => '12',
           'unit_price' => '99900',
           'seller_id' => '1',
           'status' => 'verified',
           'discount' => '0',
           'rating' => '1',
        ],

        [
           'product_name' => 'cousine belt',
           'category_id' => '1',
           'description' => 'the best of belts from spain',
           'pix1' => 'samplebelt1.png',
           'pix2' => 'samplebelt2.png',
           'pix3' => 'samplebelt3.png',
           'pix4' => 'samplebelt4.png',
           'quantity_in_stock' => '10',
           'unit_price' => '500000',
           'seller_id' => '1',
           'status' => 'verified',
           'discount' => '0',
           'rating' => '1',
        ],


        [
           'product_name' => 'vogue shoes',
           'category_id' => '1',
           'description' => 'strong and durable shoes for coperate outings',
           'pix1' => 'sampleshoes1.png',
           'pix2' => 'sampleshoes2.png',
           'pix3' => 'sampleshoes3.png',
           'pix4' => 'sampleshoes4.png',
           'quantity_in_stock' => '12',
           'unit_price' => '33000',
           'seller_id' => '1',
           'status' => 'verified',
           'discount' => '0',
           'rating' => '1',
        ],


        [
           'product_name' => 'Gucci Shirt',
           'category_id' => '1',
           'description' => 'comes in awesome colors and styles',
           'pix1' => 'sampleshirtz1.png',
           'pix2' => 'sampleshirtz2.png',
           'pix3' => 'sampleshirtz3.png',
           'pix4' => 'sampleshirtz4.png',
           'quantity_in_stock' => '12',
           'unit_price' => '90000',
           'seller_id' => '1',
           'status' => 'verified',
           'discount' => '0',
           'rating' => '1',
        ],


        [
           'product_name' => 'VN Wears',
           'category_id' => '1',
           'description' => 'these products will surely make you stand out',
           'pix1' => 'samplewear1.png',
           'pix2' => 'samplewerar2.png',
           'pix3' => 'samplewear3.png',
           'pix4' => 'samplewear4.png',
           'quantity_in_stock' => '4',
           'unit_price' => '550000',
           'seller_id' => '1',
           'status' => 'verified',
           'discount' => '0',
           'rating' => '1',
        ],


        [
           'product_name' => 'Laptop Cover',
           'category_id' => '2',
           'description' => 'For all brands of systems these are definately a most have, durable and beautiful wallpapers',
           'pix1' => 'samplelap1.png',
           'pix2' => 'samplelap2.png',
           'pix3' => 'samplelap3.png',
           'pix4' => 'samplelap4.png',
           'quantity_in_stock' => '22',
           'unit_price' => '22000',
           'seller_id' => '1',
           'status' => 'verified',
           'discount' => '0',
           'rating' => '1',
        ],



    ]);
    }
}
