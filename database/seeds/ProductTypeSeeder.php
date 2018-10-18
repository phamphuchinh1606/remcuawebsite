<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\TableNameDB;
use App\Models\ProductType;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data Slider Banner
        $productTypes = [
            [
                'product_type_name' => 'Ví khắc cung hoàng đạo',
                'parrent_id' => '',
                'image_icon' => 'product_types/1537764639_sidebarleft_icon1.png'
            ],
            [
                'product_type_name' => 'Ví phong cảnh',
                'parrent_id' => '',
                'image_icon' => 'product_types/1537764886_sidebarleft_icon2.png'
            ],
            [
                'product_type_name' => 'Túi ví',
                'parrent_id' => '',
                'image_icon' => 'product_types/1537764895_sidebarleft_icon3.png'
            ],
            [
                'product_type_name' => 'Ví thời trang nữ',
                'parrent_id' => '',
                'image_icon' => 'product_types/1537764902_sidebarleft_icon4.png'
            ],
            [
                'product_type_name' => 'Ví thời trang nam',
                'parrent_id' => '',
                'image_icon' => 'product_types/1537764915_sidebarleft_icon5.png'
            ],
            [
                'product_type_name' => 'Ví tình ca',
                'parrent_id' => '',
                'image_icon' => 'product_types/1537764928_sidebarleft_icon6.png'
            ],
            [
                'product_type_name' => 'Ví năm mới',
                'parrent_id' => '',
                'image_icon' => 'product_types/1537764936_sidebarleft_icon7.png'
            ],
            [
                'product_type_name' => 'Ví giảm giá',
                'parrent_id' => '',
                'image_icon' => 'product_types/1537764947_sidebarleft_icon9.png'
            ],
            [
                'product_type_name' => 'Sản phẩm hot',
                'parrent_id' => '',
                'image_icon' => 'product_types/1537764955_sidebarleft_icon8.png'
            ],
            [
                'product_type_name' => 'Ví cầu an',
                'parrent_id' => '',
                'image_icon' => 'product_types/1537764962_sidebarleft_icon10.png'
            ],
            [
                'product_type_name' => 'Ví khắc con mèo',
                'parrent_id' => '1',
                'image_icon' => ''
            ],
            [
                'product_type_name' => 'Ví khắc con ngựa',
                'parrent_id' => '1',
                'image_icon' => ''
            ],
            [
                'product_type_name' => 'Cảnh quê hương',
                'parrent_id' => '2',
                'image_icon' => ''
            ],
            [
                'product_type_name' => 'Cảnh công viên',
                'parrent_id' => '2',
                'image_icon' => ''
            ],
            [
                'product_type_name' => 'Cảnh hiện đại',
                'parrent_id' => '2',
                'image_icon' => ''
            ],
            [
                'product_type_name' => 'Ví phong cách',
                'parrent_id' => '3',
                'image_icon' => ''
            ],
            [
                'product_type_name' => 'Ví da cá sấu',
                'parrent_id' => '4',
                'image_icon' => ''
            ],
            [
                'product_type_name' => 'Ví tiện lợi',
                'parrent_id' => '4',
                'image_icon' => ''
            ],
        ];
        foreach ($productTypes as $productType){
            $productTypeDb = new ProductType();
            $productTypeDb->product_type_name = $productType['product_type_name'];
            if($productType['parrent_id'] != ''){
                $productTypeDb->parent_id = $productType['parrent_id'];
            }
            if($productType['image_icon'] != ''){
                $productTypeDb->image_icon = $productType['image_icon'];
            }
            $productTypeDb->is_public = 1;
            $productTypeDb->is_delete = 0;
            $productTypeDb->save();
        }
    }
}
