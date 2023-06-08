<?php

use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    public function run()
    {
        $technologies = [
            ['name' => 'Js'],
            ['name' => 'Html'],
            ['name' => 'Css'],
        ];

        foreach ($technologies as $technology) {
            Technology::create($technology);
        }
    }
}
