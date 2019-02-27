<?php

use Illuminate\Database\Seeder;

class JoblistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Data 1
        DB::table('joblist')->insert([
            'title' => 'Laravel Programmer',
            'description' => 'Membina sistem job search',
            'position' => 'Junior Programmer',
            'salary' => '3000.00',
            'education' => 'SPM'
        ]);

        
        # Data 2
        DB::table('joblist')->insert([
            'title' => 'Technician',
            'description' => 'Menjaga Komputer',
            'position' => 'Technican IT',
            'salary' => '3000.00',
            'education' => 'SPM'
        ]);
    }
}
