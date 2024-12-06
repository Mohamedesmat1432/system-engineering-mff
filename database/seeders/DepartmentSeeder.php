<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $departments = [
            ['نظم المعاومات', 'IT'],
            ['المالية', 'Financial'],
            ['الهندسية', 'Engineering'],
            ['المكتب الفني', 'COE'],
            ['الدعم', 'Support'],
            ['البحوث', 'Research'],
        ];

        foreach ($departments as $department) {
            Department::create([
                'name_ar' => $department[0],
                'name_en' => $department[1],
            ]);
        }
    }
}
