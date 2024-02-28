<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::insert([
            [
                "id" => "98b5372d-b080-459e-b96c-c71b947782d5",
                "created_at" => "2023-03-01 08:13:42",
                "updated_at" => "2023-03-17 08:13:42",
                "course_id" => "98b523e0-4d5c-4884-91e5-dc8ed3bec0d5",
                "user_id" => 3,
                "rating" => 5,
                "review" => "Materi dapat dipahami dengan baik, dokumentasi lengkap dan penulis membantu dengan baik ketika ada masalah."
            ],
            [
                "id" => "98b5380c-ab0e-4b3e-b4ed-936e68d1c0c4",
                "created_at" => "2023-03-05 08:16:08",
                "updated_at" => "2023-03-17 08:16:08",
                "course_id" => "98b52233-b051-4bba-846e-e25f0f1ee3a7",
                "user_id" => 4,
                "rating" => 5,
                "review" => "Materi lengkap dan detail"
            ],
            [
                "id" => "98b5386d-731f-474e-971c-66b09c62622e",
                "created_at" => "2023-03-29 08:17:11",
                "updated_at" => "2023-03-17 08:17:11",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "user_id" => 5,
                "rating" => 5,
                "review" => "Materi yang sangat bermanfaat, terima kasih atas ilmunya"
            ],
            [
                "id" => "98b53915-01d8-44d9-9ca1-c63ef250701b",
                "created_at" => "2023-03-15 08:19:01",
                "updated_at" => "2023-03-17 08:19:01",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "user_id" => 6,
                "rating" => 5,
                "review" => "Penjelasannya Detail dan Mudah di Mengerti"
            ],
            [
                "id" => "98b539c9-caac-4cd1-979a-b21f5bb06836",
                "created_at" => "2023-03-20 08:21:00",
                "updated_at" => "2023-03-17 08:21:00",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "user_id" => 7,
                "rating" => 5,
                "review" => "mantap penjelasaannya."
            ],
            [
                "id" => "98b53a4a-b4ee-4467-9a7a-0031b8458099",
                "created_at" => "2023-03-05 08:22:24",
                "updated_at" => "2023-03-17 08:22:24",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "user_id" => 8,
                "rating" => 5,
                "review" => "Penjelasannya rapih terstruktur mudah diikuti"
            ],
            [
                "id" => "98b53aa7-c523-4080-9191-b45a15827b83",
                "created_at" => "2023-03-05 08:23:25",
                "updated_at" => "2023-03-17 08:23:25",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "user_id" => 9,
                "rating" => 5,
                "review" => "Mantap Alhamdulillah saya sudah bisa mengerjakan materi ini dengan baik . hehe"
            ],
            [
                "id" => "98b53ddb-d2c0-4209-8940-057d62eadc4d",
                "created_at" => "2023-04-05 08:32:23",
                "updated_at" => "2023-04-05 08:32:23",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "user_id" => 10,
                "rating" => 5,
                "review" => "Mudah di cerna untuk orang baru"
            ],
            [
                "id" => "98b53e11-440a-4e23-bd3a-1bafe961930d",
                "created_at" => "2023-04-01 08:32:58",
                "updated_at" => "2023-03-17 08:32:58",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "user_id" => 11,
                "rating" => 5,
                "review" => "keren banget"
            ],
            [
                "id" => "98b53e4a-db28-4bf2-9cf6-0ffe8c838f96",
                "created_at" => "2023-04-6 08:33:35",
                "updated_at" => "2023-03-17 08:33:35",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "user_id" => 12,
                "rating" => 5,
                "review" => "sangat bermanfaat"
            ]
        ]);
    }
}
