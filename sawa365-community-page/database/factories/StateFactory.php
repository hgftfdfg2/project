<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\State>
 */
class StateFactory extends Factory
{


    // public $file = file_get_contents(public_path() . '/json/states.json');
    // public $states = json_decode($file);

    public function definition(): array
    {
        return [
            // 'name' => $this->states['USA'][rand(0, 10)],
            // 'country_id' => 1
        ];
    }
}
