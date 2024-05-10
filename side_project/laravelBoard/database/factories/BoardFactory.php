<?php

namespace Database\Factories;

use App\Models\BoardName;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Board>
 */
class BoardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {   
        $arrImg = [
            '/public/img/romi1.jpg'
            ,'/public/img/romi2.jpg'
            ,'/public/img/romi.jpg'
            ,'/public/img/romi3.jpg'
            ,'/public/img/romi.jpg'
        ];
        return [
            'user_id' => User::inRandomOrder()->first()->id
            ,'type' => BoardName::inRandomOrder()->first()->type
            ,'title' => $this->faker->realText(50)
            ,'content' => $this->faker->realText(1000)
            ,'img' => Arr::random($arrImg)
        ];
    }
}
