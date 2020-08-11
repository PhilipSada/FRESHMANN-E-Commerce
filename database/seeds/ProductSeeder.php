<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'title'=>'Black Copenhagen Longline T-shirt',
            'image_url_1'=>'/images/tshirts/Black Copenhagen Longline T-shirt.png',
            'image_url_2'=>'/images/tshirts/Black Copenhagen Longline T-Shirt-1.png',
            'brand'=>'Topman',
            'colour'=>'Black',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>28.99,
            'quantity'=>20,
            'category_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Black Slub Roller T-Shirt',
            'image_url_1'=>'/images/tshirts/Black Slub Roller T-Shirt.png',
            'image_url_2'=>'/images/tshirts/Black Slub Roller T-Shirt-1.png',
            'brand'=>'Topman',
            'colour'=>'Black',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>28.99,
            'quantity'=>20,
            'category_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Lilac Slub Roller T-Shirt',
            'image_url_1'=>'/images/tshirts/Lilac Slub Roller T-Shirt.png',
            'image_url_2'=>'/images/tshirts/Lilac Slub Roller T-Shirt-1.png',
            'brand'=>'Topman',
            'colour'=>'Lilac',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>28.99,
            'quantity'=>20,
            'category_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'White Slub Roller T-Shirt',
            'image_url_1'=>'/images/tshirts/White Slub Roller T-Shirt.png',
            'image_url_2'=>'/images/tshirts/White Slub Roller T-Shirt-1.png',
            'brand'=>'Topman',
            'colour'=>'White',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>28.99,
            'quantity'=>20,
            'category_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Blue Tipped Pique T-Shirt',
            'image_url_1'=>'/images/tshirts/Blue Tipped Pique T-Shirt.png',
            'image_url_2'=>'/images/tshirts/Blue Tipped Pique T-Shirt-1.png',
            'brand'=>'Topman Premium',
            'colour'=>'Blue',
            'featured'=>'true',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>30.99,
            'quantity'=>20,
            'category_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Ecru Subliminal Wash T-Shirt',
            'image_url_1'=>'/images/tshirts/Ecru Subliminal Wash T-Shirt.png',
            'image_url_2'=>'/images/tshirts/Ecru Subliminal Wash T-Shirt-1.png',
            'brand'=>'Topman Premium',
            'colour'=>'White',
            'featured'=>'true',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>30.99,
            'quantity'=>20,
            'category_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Life Planet B T-Shirt',
            'image_url_1'=>'/images/tshirts/Life Planet B T-Shirt.png',
            'image_url_2'=>'/images/tshirts/Life Planet B T-Shirt-1.png',
            'brand'=>'Topman Premium',
            'colour'=>'White',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>30.99,
            'quantity'=>20,
            'category_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Manhattan Box T-Shirt',
            'image_url_1'=>'/images/tshirts/Manhattan Box T-Shirt.png',
            'image_url_2'=>'/images/tshirts/Manhattan Box T-Shirt-1.png',
            'brand'=>'Topman Premium',
            'colour'=>'White',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>30.99,
            'quantity'=>20,
            'category_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'New York Square T-shirt',
            'image_url_1'=>'/images/tshirts/New York Square T-shirt.png',
            'image_url_2'=>'/images/tshirts/New York Square T-shirt-1.png',
            'brand'=>'Topman Premium',
            'colour'=>'White',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>30.99,
            'quantity'=>20,
            'category_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Stripe T-shirt',
            'image_url_1'=>'/images/tshirts/Stripe T-shirt.png',
            'image_url_2'=>'/images/tshirts/Stripe T-shirt-1.png',
            'brand'=>'Topman',
            'colour'=>'Multi',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>28.99,
            'quantity'=>20,
            'category_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Tan Textured Baseball T-Shirt',
            'image_url_1'=>'/images/tshirts/Tan Textured Baseball T-Shirt.png',
            'image_url_2'=>'/images/tshirts/Tan Textured Baseball T-Shirt-1.png',
            'brand'=>'Topman',
            'colour'=>'Tan',
            'featured'=>'True',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>28.99,
            'quantity'=>20,
            'category_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'White Textured Baseball T-Shirt',
            'image_url_1'=>'/images/tshirts/Tan Textured Baseball T-Shirt.png',
            'image_url_2'=>'/images/tshirts/Tan Textured Baseball T-Shirt-1.png',
            'brand'=>'Topman',
            'colour'=>'White',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>28.99,
            'quantity'=>20,
            'category_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Black And Camel Stripe Knitted Polo',
            'image_url_1'=>'/images/poloshirts/Black And Camel Stripe Knitted Polo.png',
            'image_url_2'=>'/images/poloshirts/Black And Camel Stripe Knitted Polo-1.png',
            'brand'=>'Topman',
            'colour'=>'Multi',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>28.99,
            'quantity'=>20,
            'category_id'=>4,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Black And White Colour Block Knitted Polo',
            'image_url_1'=>'/images/poloshirts/Black And White Colour Block Knitted Polo.png',
            'image_url_2'=>'/images/poloshirts/Black And White Colour Block Knitted Polo-1.png',
            'brand'=>'Topman Premium',
            'colour'=>'Multi',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>30.99,
            'quantity'=>20,
            'category_id'=>4,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Black Zip Long Sleeve Polo',
            'image_url_1'=>'/images/poloshirts/Black Zip Long Sleeve Polo.png',
            'image_url_2'=>'/images/poloshirts/Black Zip Long Sleeve Polo-1.png',
            'brand'=>'Topman',
            'colour'=>'Black',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>28.99,
            'quantity'=>20,
            'category_id'=>4,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Ecru Stripe Knitted Polo',
            'image_url_1'=>'/images/poloshirts/Ecru Stripe Knitted Polo.png',
            'image_url_2'=>'/images/poloshirts/Ecru Stripe Knitted Polo-1.png',
            'brand'=>'Topman',
            'colour'=>'Multi',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>30.99,
            'quantity'=>20,
            'category_id'=>4,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Black Spray On Jeans',
            'image_url_1'=>'/images/jeans/Black Spray On Skinny Jeans.png',
            'image_url_2'=>'/images/jeans/Black Spray On Skinny Jeans-1.png',
            'brand'=>'Topman Premium',
            'colour'=>'Black',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>45.99,
            'quantity'=>20,
            'category_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'CONSIDERED Light Wash Considered Jeans',
            'image_url_1'=>'/images/jeans/CONSIDERED Light Wash Considered Skinny Jeans.png',
            'image_url_2'=>'/images/jeans/CONSIDERED Light Wash Considered Skinny Jeans-1.png',
            'brand'=>'Topman',
            'colour'=>'Blue',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>45.99,
            'quantity'=>20,
            'category_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'CONSIDERED Washed Black Slim Jeans',
            'image_url_1'=>'/images/jeans/CONSIDERED Washed Black Slim Jeans.png',
            'image_url_2'=>'/images/jeans/CONSIDERED Washed Black Slim Jeans-1.png',
            'brand'=>'Topman',
            'colour'=>'Black',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>30.99,
            'quantity'=>20,
            'category_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'CONSIDERED Washed Black Super Spray On Jeans',
            'image_url_1'=>'/images/jeans/CONSIDERED Washed Black Super Spray On Skinny Jeans.png',
            'image_url_2'=>'/images/jeans/CONSIDERED Washed Black Super Spray On Skinny Jeans-1.png',
            'brand'=>'Topman Premium',
            'colour'=>'Black',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>35.99,
            'quantity'=>20,
            'category_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Khaki Ripped Stretch Jeans',
            'image_url_1'=>'/images/jeans/Khaki Ripped Stretch Skinny Jean.png',
            'image_url_2'=>'/images/jeans/Khaki Ripped Stretch Skinny Jean-1.png',
            'brand'=>'Topman Premium',
            'colour'=>'Khaki',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>38.99,
            'quantity'=>20,
            'category_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Black Coach Jacket',
            'image_url_1'=>'/images/jackets/Black Coach Jacket.png',
            'image_url_2'=>'/images/jackets/Black Coach Jacket-1.png',
            'brand'=>'Topman',
            'colour'=>'Black',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>38.99,
            'quantity'=>20,
            'category_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Black Icon Bomber',
            'image_url_1'=>'/images/jackets/Black Icon Bomber.png',
            'image_url_2'=>'/images/jackets/Black Icon Bomber-1.png',
            'brand'=>'Topman Premium',
            'colour'=>'Black',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>35.99,
            'quantity'=>20,
            'category_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Black Marble Print Trucker Jacket',
            'image_url_1'=>'/images/jackets/Black Marble Print Trucker Jacket.png',
            'image_url_2'=>'/images/jackets/Black Marble Print Trucker Jacket-1.png',
            'brand'=>'Topman',
            'colour'=>'Black',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>25.99,
            'quantity'=>20,
            'category_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Black Multiple Pocket Jacket',
            'image_url_1'=>'/images/jackets/Black Multiple Pocket Shacket.png',
            'image_url_2'=>'/images/jackets/Black Multiple Pocket Shacket-1.png',
            'brand'=>'Topman',
            'colour'=>'Black',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>35.99,
            'quantity'=>20,
            'category_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Ecru Tech Borg Jacket',
            'image_url_1'=>'/images/jackets/Ecru Tech Borg Jacket.png',
            'image_url_2'=>'/images/jackets/Ecru Tech Borg Jacket-1.png',
            'brand'=>'Topman Premium',
            'colour'=>'Multi',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>45.99,
            'quantity'=>20,
            'category_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Black Stretch Shirt',
            'image_url_1'=>'/images/shirts/Black Stretch Skinny Shirt.png',
            'image_url_2'=>'/images/shirts/Black Stretch Skinny Shirt-1.png',
            'brand'=>'Topman Premium',
            'colour'=>'Black',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>35.99,
            'quantity'=>20,
            'category_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Blue And White Stripe Overshirt',
            'image_url_1'=>'/images/shirts/Blue And White Stripe Overshirt.png',
            'image_url_2'=>'/images/shirts/Blue And White Stripe Overshirt-1.png',
            'brand'=>'Topman',
            'colour'=>'Multi',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>30.99,
            'quantity'=>20,
            'category_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Ecru Stripe Overshirt',
            'image_url_1'=>'/images/shirts/Ecru Stripe Overshirt.png',
            'image_url_2'=>'/images/shirts/Ecru Stripe Overshirt-1.png',
            'brand'=>'Topman',
            'colour'=>'Multi',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>30.99,
            'quantity'=>20,
            'category_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Grey Bamboo Shirt',
            'image_url_1'=>'/images/shirts/Grey Bamboo Shirt.png',
            'image_url_2'=>'/images/shirts/Grey Bamboo Shirt-1.png',
            'brand'=>'Topman',
            'colour'=>'Grey',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>30.99,
            'quantity'=>20,
            'category_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Grey Ripstop Pocket Utility Overshirt',
            'image_url_1'=>'/images/shirts/Grey Ripstop Pocket Utility Overshirt.png',
            'image_url_2'=>'/images/shirts/Grey Ripstop Pocket Utility Overshirt-1.png',
            'brand'=>'Topman Premium',
            'colour'=>'Grey',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>35.99,
            'quantity'=>20,
            'category_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Light Blue Bowling Revere Shirt',
            'image_url_1'=>'/images/shirts/Light Blue Bowling Revere Shirt.png',
            'image_url_2'=>'/images/shirts/Light Blue Bowling Revere Shirt-1.png',
            'brand'=>'Topman Premium',
            'colour'=>'Blue',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>35.99,
            'quantity'=>20,
            'category_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Navy Floral Print Shirt',
            'image_url_1'=>'/images/shirts/Navy Floral Print Shirt.png',
            'image_url_2'=>'/images/shirts/Navy Floral Print Shirt-1.png',
            'brand'=>'Topman Premium',
            'colour'=>'Blue',
            'featured'=>'false',
            'description'=>'This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it',
            'price'=>35.99,
            'quantity'=>20,
            'category_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
         
    }
}
