<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Article::class, function (Faker $faker) {

   

    // 随机取一个月以内的时间
    $updated_at = $faker->dateTimeThisMonth();

    // 传参为生成最大时间不超过，因为创建时间需永远比更改时间要早
    $created_at = $faker->dateTimeThisMonth($updated_at);

    return [
        'title' => $faker->sentence(),
        'user_id' =>rand(1,6),
        'category_id' => rand(1,4),
        'content' => $faker->text(),
        'excerpt' => $faker->paragraph(),
        'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null),
        'updated_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null),
    ];
});
