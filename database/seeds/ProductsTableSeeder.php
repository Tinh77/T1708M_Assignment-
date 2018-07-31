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


        DB::table('products')->delete();
        DB::table('products')->insert([
            [
                'id' =>'1',
                'name' => 'Hình sự',
                'description' =>'ngon',
                'categoryId'=>'1',
                'price' => '50000',
                'image' =>'http://img.luatviet.net.vn/Images/Uploaded/Share/2017/07/21/abetu-van-phap-luat-12.jpg'
            ],
            [
                'id' =>'2',
                'name' => 'Pháp luật',
                'description' =>'ngon',
                'categoryId'=>'1',
                'price' => '50000',
                'image' =>'http://image.baophapluat.vn/w620/Uploaded/2018/athlraqhpghat/2017_02_28/minh_hoa_vicy.jpg'
            ],
            [
                'id' =>'3',
                'name' => '11 phương pháp chống tắc dường',
                'description' =>'ngon',
                'categoryId'=>'2',
                'price' => '50000',
                'image' =>'http://cafefcdn.com/thumb_w/650/2017/1-140610-1225431-1498796220680.jpg'
            ],
            [
                'id' =>'4',
                'name' => 'Đường luôn luôn Tắc',
                'description' =>'ngon',
                'categoryId'=>'2',
                'price' => '50000',
                'image' =>'http://cafefcdn.com/thumb_w/650/2015/20111017110048nga4chuaboc6-1421813649255.jpg'
            ],
            [
                'id' =>'5',
                'name' => 'Đồ ăn ngày tết',
                'description' =>'ngon',
                'categoryId'=>'3',
                'price' => '50000',
                'image' =>'http://image.baophapluat.vn/w620/Uploaded/2018/zsgkqzztgymu/2018_02_07/1_oneg.jpg'
            ],
            [
                'id' =>'6',
                'name' => 'Món nào nên nấu ',
                'description' =>'ngon',
                'categoryId'=>'3',
                'price' => '50000',
                'image' =>'http://www.vietnamtourism.com/imguploads/news/2016/T6/00monan.jpg'
            ],
            [
                'id' =>'7',
                'name' => 'Bobabop',
                'description' =>'ngon',
                'categoryId'=>'4',
                'price' => '50000',
                'image' =>'https://static.bandodiadiem.com/wp-content/uploads/2018/01/Tr%C3%A0-S%E1%BB%AFa-Bobapop-Nguyen-Thi-Minh-Khai-1.jpg'
            ],
            [
                'id' =>'8',
                'name' => 'ca phe',
                'description' =>'ngon',
                'categoryId'=>'4',
                'price' => '50000',
                'image' =>'https://c.tribune.com.pk/2018/04/1688067-pphotcoffeerfistockx-1523983605-649-640x480.jpg'
            ],
            [
                'id' =>'9',
                'name' => 'Banh su kem',
                'description' =>'ngon',
                'categoryId'=>'4',
                'price' => '50000',
                'image' =>'https://ameovat.com/wp-content/uploads/2016/04/cach-lam-banh-su-kem.jpg'
            ],
            [
                'id' =>'10',
                'name' => 'Banh mat',
                'description' =>'ngon',
                'categoryId'=>'4',
                'price' => '50000',
                'image' =>'http://lambanh365.com/wp-content/uploads/2015/06/cach-lam-banh-mat-don-gian-hap-dan-1.jpg'
            ],
            [
                'id' =>'11',
                'name' => 'Banh bot loc',
                'description' =>'ngon',
                'categoryId'=>'4',
                'price' => '50000',
                'image' =>'https://daylambanh.edu.vn/images/congthuclambanh/cach-lam-banh-bot-loc-ha-noi.jpg'
            ],
            [
                'id' =>'12',
                'name' => 'Banh U',
                'description' =>'ngon',
                'categoryId'=>'4',
                'price' => '50000',
                'image' =>'https://anh.eva.vn/upload/1-2017/images/2017-01-18/banh-u-cach-lam-banh-u-11-1484728492-width500height375.jpg'
            ],
            [
                'id' =>'13',
                'name' => 'Banh chay',
                'description' =>'ngon',
                'categoryId'=>'4',
                'price' => '50000',
                'image' =>'https://anh.eva.vn/upload/1-2017/images/2017-03-29/cach-lam-banh-troi-banh-chay-cach-lam-banh-troi-banh-chay-14-1490776819-width500height375.jpg'
            ],
            [
                'id' => '14',
                'name' => 'Banh troi',
                'price' => '50000',
                'description' => 'ngon',
                'categoryId'=>'4',
                'image' => 'https://media.cooky.vn/recipe/g2/13143/s400x400/recipe13143-635957115018063867.jpg'
            ],
            [
                'id' => '15',
                'name' => 'Banh Chung',
                'price' => '50000',
                'description' => 'ngon',
                'categoryId'=>'4',
                'image' => 'https://vnn-imgs-f.vgcloud.vn/2018/02/17/11/nhung-nguoi-khong-nen-an-banh-chung-ngay-tet-9.jpg'
            ],
            [
                'id' => '16',
                'name' => 'Banh bo',
                'price' => '50000',
                'description' => 'ngon',
                'categoryId'=>'4',
                'image' => 'https://images.foody.vn/res/g18/179707/prof/s576x330/foody-mobile-cach-lam-banh-bo-hap-151-635815595922975822.jpg'
            ],
            [
                'id' => '17',
                'name' => 'Banh xeo',
                'price' => '50000',
                'description' => 'ngon',
                'categoryId'=>'4',
                'image' => 'https://www.bepgiadinh.com/wp-content/uploads/2016/03/30/banh-xeo-1.jpg'
            ],
            [
                'id' => '18',
                'name' => 'Banh bong lan',
                'price' => '50000',
                'description' => 'ngon',
                'categoryId'=>'4',
                'image' => 'https://amthucnamchau.org/wp-content/uploads/2017/05/cach-lam-banh-bong-lan-bang-noi-com-dien.jpg'
            ],
            [
                'id' => '19',
                'name' => 'Banh cuon',
                'price' => '50000',
                'description' => 'ngon',
                'categoryId'=>'4',
                'image' => 'http://lambanh365.com/wp-content/uploads/2015/04/C%C3%A1ch-l%C3%A0m-b%C3%A1nh-cu%E1%BB%91n-b%E1%BA%B1ng-n%E1%BB%93i-h%C6%A1i-th%C6%A1m-ngon-11.jpg'
            ],
            [
                'id' => '20',
                'name' => 'Banh trang',
                'price' => '50000',
                'description' => 'ngon',
                'categoryId'=>'4',
                'image' => 'http://lambanh365.com/wp-content/uploads/2015/05/cach-lam-banh-trang-tron-ngon-tai-nha-3.jpg'
            ],
        ]);
    }
}
