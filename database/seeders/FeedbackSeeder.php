<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Feedback::create(
            [
            'name' => 'Farhan Najib',
            'phone' => '09438874239842',
            'service' => 'sport injury',
            'therapist_id' => '1',
            'testimony' => 'lorem ipsum',
            'star' => '5',
        ],
        [
            'name' => 'Muhammad Fatah',
            'phone' => '09438874239842',
            'service' => 'sport injury',
            'therapist_id' => '1',
            'testimony' => 'lorem ipsum',
            'star' => '5',
        ],
        [
            'name' => 'Sarip',
            'phone' => '09438874239842',
            'service' => 'sport injury',
            'therapist_id' => '1',
            'testimony' => 'lorem ipsum',
            'star' => '5',
        ],
        [
            'name' => 'PEaky BLind',
            'phone' => '09438874239842',
            'service' => 'sport injury',
            'therapist_id' => '1',
            'testimony' => 'lorem ipsum',
            'star' => '5',
        ],
        [
            'name' => 'Sahroni',
            'phone' => '09438874239842',
            'service' => 'sport injury',
            'therapist_id' => '1',
            'testimony' => 'lorem ipsum',
            'star' => '5',
        ],
        [
            'name' => 'Baduy Murhan',
            'phone' => '09438874239842',
            'service' => 'sport injury',
            'therapist_id' => '1',
            'testimony' => 'lorem ipsum',
            'star' => '5',
        ],
        [
            'name' => 'Stefan William',
            'phone' => '09438874239842',
            'service' => 'sport injury',
            'therapist_id' => '1',
            'testimony' => 'lorem ipsum',
            'star' => '5',
        ],
        [
            'name' => 'Badul Alam',
            'phone' => '09438874239842',
            'service' => 'sport injury',
            'therapist_id' => '1',
            'testimony' => 'lorem ipsum',
            'star' => '5',
        ],

    );
    }
}
