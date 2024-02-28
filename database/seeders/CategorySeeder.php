<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Ramsey\Uuid\Uuid;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            [
                "id" => "98b50372-bf8e-4d02-8aa5-d28aca5bbdce",
                "created_at" => "2023-03-17 05:49:03",
                "updated_at" => "2023-03-17 05:49:03",
                "name" => "PHP",
                "slug" => "php",
                "image" => "yn9uT2DswZ18JG6iCpPVwnAFh8cj9WGmPoCLXeoI.png"
            ],
            [
                "id" => "98b50383-08b5-4b6a-a2ad-5ef865b0cfb8",
                "created_at" => "2023-03-17 05:49:14",
                "updated_at" => "2023-03-17 05:49:14",
                "name" => "Javascript",
                "slug" => "javascript",
                "image" => "BlNN6GKkY9zJnzkYciAbbdPTIjkal7gVFUXRcjuv.png"
            ],
            [
                "id" => "98b50391-ef0f-4263-a906-67751a319c9c",
                "created_at" => "2023-03-17 05:49:23",
                "updated_at" => "2023-03-17 05:49:23",
                "name" => "Dart",
                "slug" => "dart",
                "image" => "Uc1EN5RFJpLoyxlyzorw1YJ7AuK4jFdN8avkHE7A.png"
            ],
            [
                "id" => "98b5039f-805e-4199-84ff-490de3afbf4e",
                "created_at" => "2023-03-17 05:49:32",
                "updated_at" => "2023-03-17 05:49:32",
                "name" => "Go",
                "slug" => "go",
                "image" => "P0YqeNjr9CIWEbgVZV8F9Ne01Q3dHhBMGYRbHMBN.png"
            ],
            [
                "id" => "98b503ac-beec-4717-8bbf-356a2f5136b8",
                "created_at" => "2023-03-17 05:49:41",
                "updated_at" => "2023-03-17 05:49:41",
                "name" => "Java",
                "slug" => "java",
                "image" => "VjrBQMwrsYHQ25g3TPYKEqljaVGey534F634L31E.png"
            ],
            [
                "id" => "98b503be-3145-4d7a-8678-b2acd0c8b5f9",
                "created_at" => "2023-03-17 05:49:52",
                "updated_at" => "2023-03-17 05:49:52",
                "name" => "Python",
                "slug" => "python",
                "image" => "NJrT3iHyaCSecBJvJY9IiIBGYY00bym6G5tVxthZ.png"
            ],
            [
                "id" => "98b50401-1721-4073-b050-863ec5b92f55",
                "created_at" => "2023-03-17 05:50:36",
                "updated_at" => "2023-03-17 05:50:36",
                "name" => "Laravel",
                "slug" => "laravel",
                "image" => "ZtqkpTQ5IF65hPIQFL8yN7Q4qxtja6p0BJhSKEyR.png"
            ],
            [
                "id" => "98b50410-c2e4-4312-8beb-abb9ab85e191",
                "created_at" => "2023-03-17 05:50:47",
                "updated_at" => "2023-03-17 05:50:47",
                "name" => "NodeJS",
                "slug" => "nodejs",
                "image" => "2x20BMvaHjRGgKjI2MQkeW2L0vE2NNSs6NNre2T0.png"
            ],
            [
                "id" => "98b50420-b5c9-4a8e-85fa-a30337b9ce6c",
                "created_at" => "2023-03-17 05:50:57",
                "updated_at" => "2023-03-17 05:50:57",
                "name" => "Codeigniter",
                "slug" => "codeigniter",
                "image" => "LrpSObKoaVoQ6TAnzJDc2PSYTyJCLbZngxWGP7Cj.png"
            ],
            [
                "id" => "98b50431-e595-4879-ac02-c0a0ddb10897",
                "created_at" => "2023-03-17 05:51:08",
                "updated_at" => "2023-03-17 05:51:08",
                "name" => "Kotlin",
                "slug" => "kotlin",
                "image" => "6DmDQXIBWYH0tFsVhfGsm1NaPQlsXLygjNQJ36Ac.png"
            ],
            [
                "id" => "98b50440-7a30-4ef1-b7d7-e85c28f30862",
                "created_at" => "2023-03-17 05:51:18",
                "updated_at" => "2023-03-17 05:51:18",
                "name" => "Express",
                "slug" => "express",
                "image" => "FKSQiBKsNknivmb1XSV1UHtBOoIjjgkQmK2YSpGg.png"
            ],
            [
                "id" => "98b50456-2f53-41fb-8dd8-350986ca8a15",
                "created_at" => "2023-03-17 05:51:32",
                "updated_at" => "2023-03-17 05:51:32",
                "name" => "ReactJS",
                "slug" => "reactjs",
                "image" => "6dAjmLmJcqVendEyXsjyQbA5tYiy2CXpaROZxmIi.png"
            ],
            [
                "id" => "98b50466-3a25-4e82-8c6c-9119daa37b59",
                "created_at" => "2023-03-17 05:51:43",
                "updated_at" => "2023-03-17 05:51:43",
                "name" => "VueJS",
                "slug" => "vuejs",
                "image" => "kRaThF3jnxsp2wgcBjcYY0ppbT37SZLhUWYGlMUu.png"
            ],
            [
                "id" => "98b50479-f049-45cf-a2a3-452b2267cb2f",
                "created_at" => "2023-03-17 05:51:56",
                "updated_at" => "2023-03-17 05:51:56",
                "name" => "Tailwind CSS",
                "slug" => "tailwind-css",
                "image" => "JVXDA7Y3A72WBHfvdtz0m5ZpbIEvoabrEJyadSdt.png"
            ],
            [
                "id" => "98b50488-3446-44d4-b292-9ed4e3de4ac5",
                "created_at" => "2023-03-17 05:52:05",
                "updated_at" => "2023-03-17 05:52:05",
                "name" => "Spring",
                "slug" => "spring",
                "image" => "94IDUWqcUco5E2Ob4BFpUTpfwlgXX38qfWcxwLIG.png"
            ],
            [
                "id" => "98b50498-f03a-4a0a-bb96-0223cfda7442",
                "created_at" => "2023-03-17 05:52:16",
                "updated_at" => "2023-03-17 05:52:16",
                "name" => "Redis",
                "slug" => "redis",
                "image" => "1Kqksy4rxj5uddQSwvW7001LUZDByacgpjvwIQnc.png"
            ],
            [
                "id" => "98b504a7-4449-43e3-95b7-96e51d8bd062",
                "created_at" => "2023-03-17 05:52:25",
                "updated_at" => "2023-03-17 05:52:25",
                "name" => "MySQL",
                "slug" => "mysql",
                "image" => "GuIFxJPBrd9ha5qaS4jsB8eO7CHapPSDbPrxBwbF.png"
            ],
            [
                "id" => "98b504b4-6444-4e60-af8f-353bc3637d49",
                "created_at" => "2023-03-17 05:52:34",
                "updated_at" => "2023-03-17 05:52:34",
                "name" => "MongoDB",
                "slug" => "mongodb",
                "image" => "c156owKBqnBWGVctgSuUgWiONIAC31CXwfL1bDxC.png"
            ],
            [
                "id" => "98b504c1-75c2-40be-a280-68f05e5bc89b",
                "created_at" => "2023-03-17 05:52:42",
                "updated_at" => "2023-03-17 05:52:42",
                "name" => "Firebase",
                "slug" => "firebase",
                "image" => "9N9EsxHJ2Pois7SLmwGHRQEFF3FGYGeAMyMfSQaz.png"
            ],
            [
                "id" => "98b504d4-758e-43bb-b4ba-ba9e7bf37fe1",
                "created_at" => "2023-03-17 05:52:55",
                "updated_at" => "2023-03-17 05:52:55",
                "name" => "Microcontroller",
                "slug" => "microcontroller",
                "image" => "YjvKmhRTrp1u4l411INb7i5K3La3RnnFHnyMw7G6.png"
            ]
        ]);
    }
}
