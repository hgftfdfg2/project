<?php

namespace Database\Factories;

use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $states_ids = State::all()->pluck('id');
        return [
            'name' => fake()->catchPhrase(),
            'profile_img' => 'images/group/Flag-France.jpg',
            'bg_img'=>'images/group/default.jpg',
            'state_id' => $states_ids[rand(0,count($states_ids)-1)],
            'description' => null
        ];
    }
}
