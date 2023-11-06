<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('feedback')->insert([
            [
                'id' => 1,
                'name' => 'Alex',
                'country' => 'France',
                'message' => 'Hai Phong is a great place to travel with very friendly people and beautiful scenery',
                'created_at' => Carbon::now(),
                'show' => 1
            ],
            [
                'id' => 2,
                'name' => 'John Doe',
                'country' => 'England',
                'message' => 'Hai Phong is a great place to travel with very friendly people and beautiful scenery',
                'created_at' => Carbon::now(),
                'show' => 1
            ],
            [
                'id' => 3,
                'name' => 'Rachel',
                'country' => 'Germany',
                'message' => 'Hai Phong is a great place to travel with very friendly people and beautiful scenery',
                'created_at' => Carbon::now(),
                'show' => 1
            ],
            [
                'id' => 4,
                'name' => 'Jane',
                'country' => 'USA',
                'message' => 'Hai Phong is a great place to travel with very friendly people and beautiful scenery',
                'created_at' => Carbon::now(),
                'show' => 1
            ],
        ]);
    }
}
