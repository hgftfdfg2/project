<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Country;
use App\Models\Group;
use App\Models\State;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{

    // public $countries_file = file_get_contents(public_path() . '/json/countries.json');
    // public $countries = json_decode($countries_file);

    // public $states_file = file_get_contents(public_path() . '/json/states.json');
    // public $states = json_decode($states_file);

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $countries_file = file_get_contents(public_path() . '/json/countries.json');
        $countries = json_decode($countries_file);

        $states_file = file_get_contents(public_path() . '/json/states.json');
        $states = json_decode($states_file);


        foreach ($countries as $country) {
            Country::create([
                'name' => $country->name,
                'code' => $country->code
            ]);
        }

        $countries_ids = Country::whereIn('code', ['CA', 'USA'])->get('id');

        foreach ($states as $country_code => $states_names) {
            if ($country_code == 'USA') {
                foreach ($states_names as $s) {
                    State::create([
                        'name' => $s,
                        'country_id' => $countries_ids[1]['id']
                    ]);
                }
            } elseif ($country_code == 'CA') {
                foreach ($states_names as $s) {
                    State::create([
                        'name' => $s,
                        'country_id' => $countries_ids[0]['id']
                    ]);
                }
            }
        }


        User::create([
            'fname' => 'User',
            'lname' => fake()->name(),
            'email' => 'user@email.com',
            'password' => Hash::make('123456789'),
            'phone_number' => fake()->phoneNumber,
            'birth_date' => fake()->dateTimeBetween('-60 years', '-10 years'),
            'nationality' => null,
            'state_id' => 1,
            'address' => fake()->address
        ]);

        User::factory(10)->create();
        Group::factory(5)->create();

        $groups = Group::all();
        $group_ids = $groups->pluck('id');

        User::all()->each(function ($user) use ($group_ids) {

            $user->groups()->attach(
                $group_ids->random(2)
            );
        });
    }
}
