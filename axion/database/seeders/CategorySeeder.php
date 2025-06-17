<?php

use Velto\Axion\Models\BlogCategory;

class CategorySeeder
{
    public function run()
    {

        $now = date('Y-m-d H:i:s');

        BlogCategory::insert([
            [
                'category_id' => uvid(6),
                'category'    => 'Uncategory',
                'description' => 'This is Uncategory',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ]);
        
    }
}

