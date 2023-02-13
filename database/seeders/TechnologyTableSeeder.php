<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ["#Html", "CSS", "SCSS", "Javascript", "Vue Js", "PHP", "Laravel"];

        foreach($technologies as $technology) {
            Technology::create ([
                "name" => $technology,
                "description" => "descrizione della tecnologia "  .  $technology
            ]);
    }
}
}
