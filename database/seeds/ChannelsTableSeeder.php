<?php

use App\Channel;



use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Channel::create([

            'name' => 'laravel',

            'slug' => Str::slug('\laravel')

        ]);

        Channel::create([

            'name' => 'angular', 

            'slug' => Str::slug('\angular')

        ]);

        Channel::create([

            'name' => 'php',

            'slug' => Str::slug('\php')

        ]);

        Channel::create([

            'name' => 'nodejs',

            'slug' => Str::slug('\nodejs')

        ]);






    }
}
