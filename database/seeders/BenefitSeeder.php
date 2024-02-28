<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Benefit;

class BenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Benefit::insert([
            [
                "id" => "98e5e745-9fc8-4756-a16d-a81ac04fc541",
                "created_at" => "2023-04-10 13:05:50",
                "updated_at" => "2023-04-10 13:05:50",
                "name" => "Akses Selamanya"
            ],
            [
                "id" => "24db5ee9-add3-4502-87b9-67fe9e9af4ad",
                "created_at" => "2023-04-10 13:05:51",
                "updated_at" => "2023-04-10 13:05:51",
                "name" => "Source Code"
            ],
            [
                "id" => "98e5e786-dde3-4b62-b256-a4940e4e2834",
                "created_at" => "2023-04-10 13:06:33",
                "updated_at" => "2023-04-10 13:06:33",
                "name" => "Subsidi Pengiriman Hardware"
            ],
            [
                "id" => "98e5e791-e37e-4bba-bcae-0d62af28476e",
                "created_at" => "2023-04-10 13:06:40",
                "updated_at" => "2023-04-10 13:06:40",
                "name" => "Private Group Member"
            ],
            [
                "id" => "98e5e7cf-80f2-4108-a893-5641e66026d7",
                "created_at" => "2023-04-10 13:07:20",
                "updated_at" => "2023-04-10 13:07:20",
                "name" => "Konsultasi Pembelajaran"
            ],
            [
                "id" => "98e5e7d7-b771-452e-8385-b71bda84a2e8",
                "created_at" => "2023-04-10 13:07:26",
                "updated_at" => "2023-04-10 13:07:26",
                "name" => "Studi Kasus Real Siap Digunakan"
            ],
            [
                "id" => "98e5e7e4-6e3b-4a9a-af4c-b5cf435dff23",
                "created_at" => "2023-04-10 13:07:34",
                "updated_at" => "2023-04-10 13:07:34",
                "name" => "Menarik Untuk Portfolio"
            ],
            [
                "id" => "98e5e7ed-d2b0-45d9-997e-e187b0fe590f",
                "created_at" => "2023-04-10 13:07:40",
                "updated_at" => "2023-04-10 13:07:40",
                "name" => "Update Materi"
            ]
        ]);
    }
}
