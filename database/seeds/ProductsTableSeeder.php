<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->delete();
        DB::table('products')->insert([
            [
                'id'=>1,
                'name'=>'Tra ',
                'description'=>'Tra Sua Khong Beo ',
                'categoryId'=>1,
                'price'=>2000,
                'image'=>'https://images.foody.vn/res/g21/207900/prof/s640x400/foody-mobile-12-jpg-660-636148055709596139.jpg'
            ],
            [
                'id'=>2,
                'name'=>'Tra Kem Cheese',
                'description'=>'Tra Sua Beo',
                'categoryId'=>2,
                'price'=>2300,
                'image'=>'https://tea-2.lozi.vn/v1/images/resized/tra-sua-kem-cheese-1483072617-1-3824811-1505364227?w=480&type=s'
            ],
            [
                'id'=>3,
                'name'=>'Tra Hoa Qua',
                'description'=>'Tra Co Vi Hoa Qua',
                'categoryId'=>3,
                'price'=>2500,
                'image'=>'http://cdn01.diadiemanuong.com/ddau/640x/undefined-royal-tea-nguyen-trai-0-ae503ff0636372716119654030.jpg'
            ],
            [
                'id'=>4,
                'name'=>'Tra Detox',
                'description'=>'Tra Giam Can',
                'categoryId'=>2,
                'price'=>2700,
                'image'=>'https://tea-1.lozi.vn/v1/images/resized/tra-detox-tra-hoa-qua-kho-1506127536-1-4123478-1509296336?w=480&type=s'
            ],
            [
                'id'=>5,
                'name'=>'Tra Matcha',
                'description'=>'Tra Vi Tra Xanh',
                'categoryId'=>3,
                'price'=>3000,
                'image'=>'http://tamlong.com.vn/wp-content/uploads/hoc-pha-che-tra-sua-matcha-dau-do-gong-cha.jpg'
            ]
        ]);
    }
}
