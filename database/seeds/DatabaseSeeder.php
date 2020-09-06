<?php

use App\EmergencyCode;
use App\Models\Department;
use App\Models\Hospital;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Doctor;


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

        \App\Models\Emergencycode::insert($data);
        Setting::create([
            'sms_username' => '0532709980',
            'sms_password' => 'Fdert01395',
            'sms_template' => 'برجاء التوجه الي المستشفي لوجود حالة طارئة',
            'twilio_account_sid' => 'AC32a62df7008e7b6469a2cbe2620e2fc1',
            'twilio_auth_token' => '1fe33dfc8404a4ff1c5ff6dbb09cf7b9',
            'twilio_twilio_phone_number' => '+12029339658',


        ]);


        $hospital = Hospital::create([
            'name' => 'Saudi German Hospital',
            'clinicalCapacity' => 8000,
        ]);

        $hospital2 = Hospital::create([
            'name' => 'King Khaled Eye Specialist Hospital',
            'clinicalCapacity' => 4806,
        ]);


        $data = [

            [
                'name' => 'Gynaecology', 'hospital_id' => $hospital->id, 'numberOfBeds' => rand(41, 456),
                'alarmSound' => '',
            ],

            [
                'name' => 'Haematology', 'hospital_id' => $hospital->id, 'numberOfBeds' => rand(41, 456),
                'alarmSound' => '',
            ],


            [
                'name' => 'Microbiology', 'hospital_id' => $hospital->id, 'numberOfBeds' => rand(41, 456),
                'alarmSound' => '',
            ],


            [
                'name' => 'Critical Care', 'hospital_id' => $hospital2->id, 'numberOfBeds' => rand(41, 456),
                'alarmSound' => '',
            ],


            [
                'name' => 'General surgery', 'hospital_id' => $hospital2->id, 'numberOfBeds' => rand(41, 456),
                'alarmSound' => '',
            ],


        ];

        Department::insert($data);


        $data = [

            [
                'name' => 'Scans for A&E', 'hospital_id' => $hospital->id,
            ],

            [
                'name' => 'Mammography', 'hospital_id' => $hospital->id,
            ],


            [
                'name' => 'Gastroenterology', 'hospital_id' => $hospital->id,
            ],


            [
                'name' => 'Bone disease', 'hospital_id' => $hospital2->id,
            ],


            [
                'name' => 'Colon surgery', 'hospital_id' => $hospital2->id,
            ],


        ];

        \App\Models\Specialization::insert($data);

                   $ff = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {



            $user = User::create([
                'name' => $ff->name,
                'email' => $ff->email,
                'password' => bcrypt('123456789'),
                'phoneNumber' => $ff->phoneNumber,
                'address' => $ff->address,
                'photo' => $ff->imageUrl(),
                'sex' => $ff->randomElement(['male', 'female']),
            ]);
            $user->save();


            \App\Models\doctor::create([
                'department_id' => rand(1, 5),
                'special_id' => rand(1, 5),
                'user_id' => $user->id,
            ]);

        }


    }
}
