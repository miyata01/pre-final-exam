<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resume;

class ResumeSeeder extends Seeder
{
    public function run()
    {
        Resume::create([
            'name' => 'Catap Marod Cyrile Manlangit',
            'address' => '0643 Re chico st Concepcion, Baliwag, Bulacan, 3006',
            'email' => 'marodcatap2@gmail.com',
            'phone' => '09623298105',
            'education' => 'Bachelor of Science in Information Technology, Baliwag Polytechnic College',
            'experience' => 'Dinning Crew at Jollibee, Baliwag Bayan',
            'skills' => 'Basic Computer Troubleshooting, Hardware',
            'interests' => 'Music, Instruments like Guitar, Drums, Sports like Basketball',
        ]);
    }
}
