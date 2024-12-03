<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notification;

class NotificationSeeder extends Seeder
{
    public function run()
    {
        Notification::insert([
            [
                'title' => 'Welcome to the course!',
                'content' => 'You have successfully enrolled in the "Laravel Basics" course.',
                'user_id' => 1, // Replace with a valid user ID
                'is_read' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Course Completed!',
                'content' => 'Congratulations! You have completed the "React Advanced" course.',
                'user_id' => 1, // Replace with a valid user ID
                'is_read' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
