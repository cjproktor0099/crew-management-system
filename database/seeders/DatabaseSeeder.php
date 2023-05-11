<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Crew;



class DatabaseSeeder extends Seeder
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    public function run()
    {
        Crew::factory()->count(100)->create();
    }
}
