<?php

use App\EmergencyCode;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [


            [
                'name' => 'CODE RED', 'icon' => 'fab fa-4x fa-gripfire', 'title' => 'Fire',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, repellendus.',
                'color' => '#dc3545'
            ],
            [
                'name' => 'CODE BLACK', 'icon' => 'fas fa-4x fa-bomb', 'title' => 'Bomb Threat/ Suspicious Package',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, repellendus.',
                'color' => '#000000'
            ],
            [
                'name' => 'CODE PURPLE', 'icon' => 'fas fa-4x fa-walking', 'title' => 'Hostage Taking',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, repellendus.',
                'color' => '#740692'
            ],
            [
                'name' => 'CODE WHITE', 'icon' => 'fas fa-4x fa-meh',
                'title' => 'Actual or Potential Violent Behaviour',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, repellendus.',
                'color' => '#ffffff'
            ],
            [
                'name' => 'CODE YELLOW', 'icon' => 'fas fa-4x fa-male', 'title' => 'Missing Patient',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, repellendus.',
                'color' => '#ffcc00'
            ],
            [
                'name' => 'CODE BROWN', 'icon' => 'fas fa-4x fa-fill-drip', 'title' => 'Hazardous Material Spill/Leak',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, repellendus.',
                'color' => '#663300'
            ],
            [
                'name' => 'CODE GREY', 'icon' => 'fas fa-4x  fa-charging-station',
                'title' => 'Infrastructure Loss/Air Exclusion',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, repellendus.',
                'color' => '#a6a6a6'
            ],
            [
                'name' => 'CODE ORANGE', 'icon' => 'fas fa-4x fa-ambulance', 'title' => 'External Disaster',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, repellendus.',
                'color' => '#ff6600'
            ],
            [
                'name' => 'CODE GREEN', 'icon' => 'fas fa-4x fa-running', 'title' => 'Evacuation',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, repellendus.',
                'color' => '#009900'
            ],
            [
                'name' => 'CODE BLUE', 'icon' => 'fas fa-4x fa-heartbeat',
                'title' => 'Cardiac Arrest/ Medical Emergency',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, repellendus.',
                'color' => '#0070c0'
            ],


            //...
        ];

        \App\Models\Emergencycode::insert($data); // Eloquent approach


    }
}
