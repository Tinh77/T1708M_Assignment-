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
        DB::table('categories')->delete();
        DB::table('categories')->insert([
            [
                'id' =>'1',
                'title' => 'Báo',
                'description' =>'Lấy thông tin các bài báo',
                'image' =>'https://dantricdn.com/zoom/327_245/2018/7/31/2-1533001172384815365527.jpg'
            ],
            [
                'id' =>'2',
                'title' => 'Giao thông',
                'description' =>'Tình hình giao thông',
                'image' =>'http://cafefcdn.com/thumb_w/650/2017/1-140610-1225431-1498796220680.jpg'
            ],
            [
                'id' =>'3',
                'title' => 'Ẩm thực',
                'description' =>'Các món ăn',
                'image' =>'http://image.baophapluat.vn/w620/Uploaded/2018/zsgkqzztgymu/2018_02_07/1_oneg.jpg'
            ],
            [
                'id' =>'4',
                'title' => 'Bánh',
                'description' =>'Cá loại bánh ngon',
                'image' =>'https://static.bandodiadiem.com/wp-content/uploads/2018/01/Tr%C3%A0-S%E1%BB%AFa-Bobapop-Nguyen-Thi-Minh-Khai-1.jpg'
            ],
        ]);
    }
}
