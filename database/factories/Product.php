<?php

use Illuminate\Support\Str;

use Faker\Generator as Faker;
$factory->define(Product::class, function (Faker $faker) {

         $filepath = storage_path('avatars');
         if(!File::exists($filepath)){
        File::makeDirectory($filepath);
    }

    return [
        'avatar' => $faker->image($filepath,400, 300),
        ];
    });
