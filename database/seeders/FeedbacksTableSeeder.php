<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Seeder;

class FeedbacksTableSeeder extends Seeder
{

    public function run()
    {
        Feedback::create(['user_id' => 1, 'text' => 'отлично!']);
        Feedback::create(['user_id' => 1, 'text' => 'Не плохое решение']);
        Feedback::create(['user_id' => 1, 'text' => 'Вы мне нравитесь!']);
        Feedback::create(['user_id' => 1, 'text' => 'Кто пойдет гулять??!']);
        Feedback::create(['user_id' => 2, 'text' => 'Это спам!!']);
        Feedback::create(['user_id' => 2, 'text' => 'Это спам!!']);
        Feedback::create(['user_id' => 3, 'text' => 'плохо']);
    }
}
