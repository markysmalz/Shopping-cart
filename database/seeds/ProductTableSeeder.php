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

        $product = new \App\product();
        $product->truncate();
        $product = new \App\product([
            'imagePath' => "http://images2.nike.com/is/image/DotCom/PDP_HERO_ZOOM/Nike-Air-Max-Thea-Womens-Shoe-599409_007_E_PREM.jpg",
            'title' => 'Nike Air Max',
            'description' => '  This is very comfortable and durable shoe, for women.',
            'price' => 13000
        ]);
        $product->save();
        $product = new \App\product([
            'imagePath' => "http://images.nike.com/is/image/DotCom/PDP_THUMB_RETINA/Nike-Air-Max-2016-806771_409.jpg",
            'title' => 'Nike Air Max',
            'description' => '  This is very comfortable and durable shoe, for women.',
            'price' => 14000
        ]);
        $product->save();
        $product = new \App\product([
            'imagePath' => "http://www.lesitedelasneaker.com/wp-content/images/2015/03/nike-air-max-zero-789695-104-1.jpg",
            'title' => 'Nike Air Max',
            'description' => '  This is very comfortable and durable shoe, for women.',
            'price' => 13000
        ]);
        $product->save();
        $product = new \App\product([
            'imagePath' => "http://6.kicksonfire.net/wp-content/uploads/2016/04/NIKE-AIR-MAX-90-BREEZE-1.jpg?541b01",
            'title' => 'Nike Air Max',
            'description' => '  This is very comfortable and durable shoe, for women.',
            'price' => 16000
        ]);
        $product->save();
        $product = new \App\product([
            'imagePath' => "http://s3.amazonaws.com/nikeinc/assets/35225/NIKE_AIR_MAX_2015_M_Profile_04_native_600.jpg?1415839589",
            'title' => 'Nike Air Max',
            'description' => '  This is very comfortable and durable shoe, for women.',
            'price' => 12000
        ]);
        $product->save();
        $product = new \App\product([
            'imagePath' => "https://frenchfuel.fr/wp-content/uploads/2014/10/image.jpg",
            'title' => 'Nike Air Max',
            'description' => '  This is very comfortable and durable shoe, for women.',
            'price' => 14000
        ]);
        $product->save();
        $product = new \App\product([
            'imagePath' => "http://images3.nike.com/is/image/DotCom/PHN_PS/NIKE-AIR-MAX-2016-806771_101_C_PREM.png?fmt=png-alpha",
            'title' => 'Nike Air Max',
            'description' => '  This is very comfortable and durable shoe, for women.',
            'price' => 13000
        ]);
        $product->save();
    }
}
