<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        category::create(
            array(
                'name'=>'Web Design',
                'slug'=> Str::slug('Web Design')
            )
        );
        category::create(
            array(
                'name'=>'Web Developement',
                'slug'=> Str::slug('Web Developement')
            )
        );
        category::create(
            array(
                'name'=>'Programming',
                'slug'=> Str::slug('programming')
            )
        );
        category::create(
            array(
                'name'=>'Mobile Apps',
                'slug'=> Str::slug('mobie apps')
            )
        );
        category::create(
            array(
                'name'=>'Frontend Developement',
                'slug'=> Str::slug('frontend developement')
            )
        );
    }
}
