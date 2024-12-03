<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Student;
use App\Models\User;
use App\Models\Grade;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Student::factory(100)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Grade::factory()->createMany([
            ['name' => '10 PPLG 1'],
            ['name' => '10 PPLG 2'],
            ['name' => '10 ANIMASI 1'],
            ['name' => '10 ANIMASI 2'],
            ['name' => '10 ANIMASI 3'],
            ['name' => '10 ANIMASI 4'],
            ['name' => '10 ANIMASI 5'],
            ['name' => '10 DKV 1'],
            ['name' => '10 DKV 2'],
            ['name' => '10 DKV 3'],
            ['name' => '10 DKV 4'],
            ['name' => '11 PPLG 1'],
            ['name' => '11 PPLG 2'],
            ['name' => '11 ANIMASI 1'],
            ['name' => '11 ANIMASI 2'],
            ['name' => '11 ANIMASI 3'],
            ['name' => '11 ANIMASI 4'],
            ['name' => '11 ANIMASI 5'],
            ['name' => '11 DKV 1'],
            ['name' => '11 DKV 2'],
            ['name' => '11 DKV 3'],
            ['name' => '11 DKV 4'],
            ['name' => '11 DKV 5'],
            ['name' => '12 PPLG 1'],
            ['name' => '12 PPLG 2'],
            ['name' => '12 ANIMASI 1'],
            ['name' => '12 ANIMASI 2'],
            ['name' => '12 ANIMASI 3'],
            ['name' => '12 ANIMASI 4'],
            ['name' => '12 ANIMASI 5'],
            ['name' => '12 DKV 1'],
            ['name' => '12 DKV 2'],
            ['name' => '12 DKV 3'],
            ['name' => '12 DKV 4'],
            ['name' => '12 DKV 5'],
        ]);

        Department::factory()->create(
            [
                'name' => 'GAME DEVELOPMENT',
                'desc' => 'Merancang dan membuat game dengan pengalaman interaktif menarik menggunakan alat seperti Unity atau Unreal Engine.'
            ]
        );

        Department::factory()->create(
            [
                'name' => 'ANIMATIONS 2D',
                'desc' => 'Membuat animasi dua dimensi untuk karakter dan latar dalam media seperti film, iklan, dan game.'
            ]
        );
        Department::factory()->create(
            [
                'name' => 'ANIMATIONS 3D',
                'desc' => 'Mengembangkan animasi tiga dimensi untuk karakter, efek visual, dan lingkungan realistis atau fantasi di film dan game.'
            ]
        );

        Department::factory()->create(
            [
                'name' => 'UI/UX DESIGNER',
                'desc' => 'Merancang antarmuka dan pengalaman pengguna yang intuitif dan menarik pada aplikasi dan situs web.'
            ]
        );

        Department::factory()->create(
            [
                'name' => 'TECHNICAL PRINTING',
                'desc' => 'Menyiapkan dan memastikan kualitas desain serta spesifikasi teknis sebelum dicetak pada berbagai media produk.'
            ]
        );
    }
}