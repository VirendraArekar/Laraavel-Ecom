<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        	'imagepath'=>'',
        	'title' => 'Harry porter',
        	'description' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec sollicitudin molestie malesuada.',
        	'price' =>'20'
        ]); 
        $product->save();
        $product = new \App\Product([
        	'imagepath'=>'',
        	'title' => 'Harry porter',
        	'description' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec sollicitudin molestie malesuada.',
        	'price' =>'20'
        ]); 
        $product->save();
        $product = new \App\Product([
        	'imagepath'=>'',
        	'title' => 'Harry porter',
        	'description' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec sollicitudin molestie malesuada.',
        	'price' =>'20'
        ]); 
        $product->save();
        $product = new \App\Product([
        	'imagepath'=>'',
        	'title' => 'Harry porter',
        	'description' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec sollicitudin molestie malesuada.',
        	'price' =>'20'
        ]); 
        $product->save();
        $product = new \App\Product([
        	'imagepath'=>'',
        	'title' => 'Harry porter',
        	'description' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec sollicitudin molestie malesuada.',
        	'price' =>'20'
        ]); 
        $product->save();
        $product = new \App\Product([
        	'imagepath'=>'',
        	'title' => 'Harry porter',
        	'description' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec sollicitudin molestie malesuada.',
        	'price' =>'20'
        ]); 
        $product->save();

    }
}
