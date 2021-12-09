<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        //
        DB::table("products")->insert([
            [
            'name'=>'Oppo Mobile',
            "price"=>"300",
            "description"=> "A smartphone with 8gb ram and much more feature",
            "category"=>"mobile",
            "gallery"=>"https://www.oppo.com/content/dam/oppo/product-asset-library/reno/reno6-global/reno6-5g/v1/assets/reno6-5g-pdp-design-renoglow-sm-640.webp"
            ],
            [
            'name'=>'Panasonic Tv',
            "price"=>"400",
            "description"=> "A smart Tv with much more feature",
            "category"=>"mobile",
            "gallery"=>"https://shop.panasonic.com/dw/image/v2/AASQ_PRD/on/demandware.static/-/Sites-shop-pna-master-catalog/default/dwedf9b0a4/product/images/TC-L42E3_ALT01.jpg?sw=1000&sh=1000&sm=fit"
            ],
        ]);
    }
}
