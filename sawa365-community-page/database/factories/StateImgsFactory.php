<?php

namespace Database\Factories;

use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StateImgs>
 */
class StateImgsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $states_ids = State::all()->pluck('id');

        $files = scandir(public_path().'/images/state');

        $imgs = array();

        foreach($files as $file){
            if($file != '.' && $file!= '..'){
                array_push($imgs, $file);
            }
        }
        return [
            'state_id' => $states_ids[rand(0,count($states_ids)-1)],
            'img' => 'images/state/'.$imgs[rand(0,count($imgs)-1)]
        ];
    }
}
