<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryNames = [
            'Science',
            'Mathematics',
            'English Literature',
            'Physics',
            'Chemistry',
            'Biology',
            'History',
            'Geography',
            'Computer Science',
            'Art',
            'Music',
            'Physical Education',
            'Economics',
            'Psychology',
            'Sociology',
            'Philosophy',
            'Business Studies',
            'Environmental Science',
            'Political Science',
            'Drama',
            'Technology',
            'Engineering',
            'Design',
            'Health',
            'Religious Studies',
            'Languages',
            'Media Studies',
        ];
            foreach($categoryNames as $name){
                Category::create(['name' => $name]);
            }
    }
}
