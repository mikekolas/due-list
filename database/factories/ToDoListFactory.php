<?php

namespace Database\Factories;

use App\Models\ToDoList;
use Illuminate\Database\Eloquent\Factories\Factory;
//use Illuminate\Support\Str;

class ToDoListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ToDoList::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'userID' => \App\Models\User::inRandomOrder()->first()->id
        ];
    }
}
