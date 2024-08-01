<?php

namespace Database\Factories;

use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $states_ids = State::all()->pluck('id');
        $files = scandir(public_path().'/images/event');

        $imgs = array();

        foreach($files as $file){
            if($file != '.' && $file!= '..'){
                array_push($imgs, $file);
            }
        }

        return [
            'title'=>fake()->words('5',true),
            'discreption'=>null,
            'location'=>fake()->address(),
            'date'=>fake()->dateTimeBetween('now','+3 months',null),
            // 'time'=>'',
            'img' => 'images/event/'.$imgs[rand(0,count($imgs)-1)],
            'state_id' => $states_ids[rand(0,count($states_ids)-1)]
        ];
    }
}
