<?php

namespace Database\Seeders;

use App\Models\Like;
use Illuminate\Database\Seeder;

class LikeTableSeeder extends Seeder
{

    public function run()
    {
        Like::create(['user_id' => 1, 'feedback_id' => 1]);
        Like::create(['user_id' => 2, 'feedback_id' => 1]);
        Like::create(['user_id' => 3, 'feedback_id' => 1]);
        Like::create(['user_id' => 3, 'feedback_id' => 2]);
        Like::create(['user_id' => 1, 'feedback_id' => 2]);
        Like::create(['user_id' => 1, 'feedback_id' => 3]);
        Like::create(['user_id' => 1, 'feedback_id' => 4]);
        Like::create(['user_id' => 1, 'feedback_id' => 5]);
        Like::create(['user_id' => 1, 'feedback_id' => 6]);
    }
}
