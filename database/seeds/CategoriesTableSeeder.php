<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->delete();

        DB::table('categories')->select();

        DB::table('categories')->update();

        DB::table('categories')->insert([[
                'id' => 1,
                'name' => 'Tra Sua O Long',
                'description' => 'Mui Rong Bien',
                'image' => 'https://abby.vn/wp-content/uploads/2017/05/tr%C3%A0-s%E1%BB%AFa-3.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Tra Sua Kem Cheese',
                'description' => 'Ngon Khong Tuong',
                'image' => 'https://tea-2.lozi.vn/v1/images/resized/tra-sua-kem-cheese-1483072617-1-3824811-1505364227?w=480&type=s'
            ],
            [
                'id' => 3,
                'name' => 'Sua Tuoi Tran Chau Duong Den',
                'description' => 'Toan La Duong',
                'image' => 'https://sky.vn/wp-content/uploads/2018/04/5ad49e8f1d86d_a4-1523364260716310575526-1523686147612831418267.jpg'
            ],
            [
                'id' => 4,
                'name' => 'Tra Hoa Qua',
                'description' => 'Co Vi Hoa Qua',
                'image' => 'http://cdn01.diadiemanuong.com/ddau/640x/undefined-royal-tea-nguyen-trai-0-b29bd67d636372716327446030.jpg'
            ],
            [
                'id' => 5,
                'name' => 'Tra Hoa Dau Biec',
                'description' => 'Co Mau Tim',
                'image' => 'http://congthucphache.com/wp-content/uploads/2017/12/25442922_204033446836888_8331969133923584747_n.jpg'
            ],
            [
                'id' => 6,
                'name' => 'Tra Hoa Cuc',
                'description' => 'Co Vi Hoa Cuc',
                'image' => 'https://hellobacsi.com/wp-content/uploads/2017/06/tra-hoa-cuc-2-e1516851862142.jpg?x30591'
            ],
            [
                'id' => 7,
                'name' => 'Tra Sua Matcha',
                'description' => 'Co Vi Tra Xanh',
                'image' => 'http://chauolong.com/wp-content/uploads/2016/12/matcha-trasua.jpg'
            ],
            [
                'id' => 8,
                'name' => 'Tra Quat',
                'description' => 'Co Vi Tac',
                'image' => 'https://dayphache.edu.vn/images/congthucphache/hinh-anh-tra-quat-ha-thanh.jpg'
            ],
            [
                'id' => 9,
                'name' => 'Tra Dao',
                'description' => 'Co Vi Dao',
                'image' => 'https://ameovat.com/wp-content/uploads/2016/09/cach-lam-tra-dao-600x600.jpg'
            ],
            [
                'id' => 10,
                'name' => 'Tra Chanh Xa',
                'description' => 'Giam Can Nhanh',
                'image' => 'https://kenh14cdn.com/2017/screen-shot-2017-04-20-at-9-59-16-pm-1492700387794.png'
            ],
            [
                'id' => 11,
                'name' => 'Tra Kem Cheese',
                'description' => 'Ngon Khong Tuong',
                'image' => 'https://kenh14cdn.com/2017/milkfoam1-1497553343824.jpg'
            ],
            [
                'id' => 12,
                'name' => 'Tra Sua Dau',
                'description' => 'Co Mau Hong',
                'image' => 'https://sky.vn/wp-content/uploads/2018/04/5ad49e8f1d86d_a4-1523364260716310575526-1523686147612831418267.jpg'
            ],
            [
                'id' => 13,
                'name' => 'Tra Hoa Hong',
                'description' => 'Co Vi Hoa Hong',
                'image' => 'http://hstatic.net/744/1000043744/10/2016/4-12/thh3_grande.jpg'
            ],
            [
                'id' => 14,
                'name' => 'Tra Detox',
                'description' => 'De Giam Can',
                'image' => 'https://tea-1.lozi.vn/v1/images/resized/tra-detox-tra-hoa-qua-kho-1506127536-1-3886766-1506127536?w=480&type=s'
            ],
            [
                'id' => 15,
                'name' => 'Tra Passion',
                'description' => 'Co Vi Chanh Leo',
                'image' => 'http://mrwish.vn/wp-content/uploads/2017/01/Passion-fruit-Green-Tea-e1489211527722.png'
            ],
            [
                'id' => 16,
                'name' => 'Tra Gao Rang',
                'description' => 'Co Vi Gao Rang',
                'image' => 'https://images.foody.vn/res/g72/711067/s/foody-tra-sua-bobapop-chau-phong-568-636510614065440738.jpg'
            ],
            [
                'id' => 17,
                'name' => 'Tra Lua Mach',
                'description' => 'Co Vi Thoc Lua',
                'image' => 'https://tea-1.lozi.vn/v1/images/resized/a2-tra-lua-mach-royal-cheese-1509525676-1-4136872-1510211430?w=480&type=o'
            ],
            [
                'id' => 18,
                'name' => 'Tra Tao Do',
                'description' => 'Co Vi Tao Do',
                'image' => 'http://trataodohxr.com/wp-content/uploads/2017/12/Tr%C3%A0-T%C3%A1o-%C4%90%E1%BB%8F-Si%C3%AAu-Th%E1%BB%8B-Thi%C3%AAn-Nhi%C3%AAn.jpg'
            ],
            [
                'id' => 19,
                'name' => 'Tra Chanh',
                'description' => 'Chua Lam',
                'image' => 'http://www.webphaidep.com/wp-content/uploads/2017/10/tra-chanh-ngua-benh-1.jpg'
            ],
            [
                'id' => 19,
                'name' => 'Tra Thao Moc',
                'description' => 'Giam Can Nhanh',
                'image' => 'http://voila-blog.com/wp-content/uploads/2016/03/tra-thao-moc.jpg'
            ],]
        );
    }
}
