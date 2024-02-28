<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::insert([
            [
                "id" => "98b533f8-cc63-491e-8c4f-7373ee204422",
                "created_at" => "2023-03-17 08:04:44",
                "updated_at" => "2023-03-17 08:04:44",
                "user_id" => 3,
                "invoice" => "LD-1PV0O1",
                "name" => "Aditya Aria Subagja",
                "status" => "success",
                "grand_total" => 0,
                "snap_token" => "dbe2ff0c-43f2-4c01-bf17-0014dd51bb05"
            ],
            [
                "id" => "98b53492-af1f-48c2-bc61-96778774cc1b",
                "created_at" => "2023-03-17 08:06:25",
                "updated_at" => "2023-03-17 08:06:25",
                "user_id" => 3,
                "invoice" => "LD-362116",
                "name" => "Aditya Aria Subagja",
                "status" => "success",
                "grand_total" => 0,
                "snap_token" => "f0ecbc10-1c0b-421b-b3cf-79d01b48e68f"
            ],
            [
                "id" => "98b535ec-b377-4746-8c33-a34d47196754",
                "created_at" => "2023-03-17 08:10:12",
                "updated_at" => "2023-03-17 08:10:12",
                "user_id" => 4,
                "invoice" => "LD-PJ89VZ",
                "name" => "Agung Satrio Budi",
                "status" => "success",
                "grand_total" => 0,
                "snap_token" => "9de0a8e4-2b49-496e-b536-5b06672410ed"
            ],
            [
                "id" => "98b5360d-2380-4dcf-9683-50ad7d217d58",
                "created_at" => "2023-03-17 08:10:33",
                "updated_at" => "2023-03-17 08:10:33",
                "user_id" => 5,
                "invoice" => "LD-2U1U82",
                "name" => "Setiawan Gunadi",
                "status" => "success",
                "grand_total" => 0,
                "snap_token" => "1a6f8612-3a89-4619-8a12-dda8090a7d6a"
            ],
            [
                "id" => "98b53627-51a7-46ad-980f-377aebe33a11",
                "created_at" => "2023-03-17 08:10:50",
                "updated_at" => "2023-03-17 08:10:50",
                "user_id" => 6,
                "invoice" => "LD-6660KU",
                "name" => "Della Fadila Rahmawati",
                "status" => "success",
                "grand_total" => 0,
                "snap_token" => "0df12ae8-39c2-4d9e-9251-299f141580d5"
            ],
            [
                "id" => "98b5365e-0804-4842-b1d2-adbbfecdd3fa",
                "created_at" => "2023-03-17 08:11:26",
                "updated_at" => "2023-03-17 08:11:26",
                "user_id" => 8,
                "invoice" => "LD-368078",
                "name" => "Rifki Adha Darmawan",
                "status" => "success",
                "grand_total" => 0,
                "snap_token" => "fecff06e-c01e-40ba-aa04-5cf6d371bf97"
            ],
            [
                "id" => "98b5396f-306e-4c66-9372-392344eb4cee",
                "created_at" => "2023-03-17 08:20:00",
                "updated_at" => "2023-03-17 08:20:01",
                "user_id" => 7,
                "invoice" => "LD-K68303",
                "name" => "Endah Astria",
                "status" => "success",
                "grand_total" => 0,
                "snap_token" => "4038e00e-f0a8-4ca4-a855-8a336bb85d0d"
            ],
            [
                "id" => "98b53a6f-b866-43fe-8873-1262f679a74d",
                "created_at" => "2023-03-17 08:22:49",
                "updated_at" => "2023-03-17 08:22:49",
                "user_id" => 9,
                "invoice" => "LD-O6ZY8G",
                "name" => "Febrian Fi Rizki",
                "status" => "success",
                "grand_total" => 0,
                "snap_token" => "75246537-5553-4207-b1d5-4160ccad1398"
            ],
            [
                "id" => "98b53c00-c626-425e-b94a-cd86eb35f471",
                "created_at" => "2023-03-17 08:27:11",
                "updated_at" => "2023-03-17 08:27:12",
                "user_id" => 10,
                "invoice" => "LD-3N88G7",
                "name" => "Muhammad Faisal",
                "status" => "success",
                "grand_total" => 0,
                "snap_token" => "62c6adc8-212c-46b9-9f8e-92b15e92ca79"
            ],
            [
                "id" => "98b53c22-5075-4cf6-9f21-970f66d60117",
                "created_at" => "2023-03-17 08:27:33",
                "updated_at" => "2023-03-17 08:27:34",
                "user_id" => 11,
                "invoice" => "LD-F2L46Q",
                "name" => "Adnan Darwanto",
                "status" => "success",
                "grand_total" => 0,
                "snap_token" => "0bd57cb1-d5ba-4df3-b18a-4adc7c81b7be"
            ],
            [
                "id" => "98b53c3e-4226-4cc8-ac3a-b6992ee67bbf",
                "created_at" => "2023-03-17 08:27:52",
                "updated_at" => "2023-03-17 08:27:52",
                "user_id" => 12,
                "invoice" => "LD-V76OQU",
                "name" => "Mulyadi",
                "status" => "success",
                "grand_total" => 0,
                "snap_token" => "4c370e49-2e1d-4f1d-9df3-602be8a25261"
            ],
            [
                "id" => "98b53c55-7d3a-49a4-b99a-386879544361",
                "created_at" => "2023-03-17 08:28:07",
                "updated_at" => "2023-03-17 08:28:07",
                "user_id" => 13,
                "invoice" => "LD-MSETU3",
                "name" => "Haidar Harim",
                "status" => "success",
                "grand_total" => 0,
                "snap_token" => "9b0cd872-615e-411d-a131-9f864c146cd2"
            ],
            [
                "id" => "98b53c71-45c9-4521-9cee-fb6db2ecfec4",
                "created_at" => "2023-03-17 08:28:25",
                "updated_at" => "2023-03-17 08:28:25",
                "user_id" => 14,
                "invoice" => "LD-15VSSE",
                "name" => "Defana Aditya",
                "status" => "success",
                "grand_total" => 0,
                "snap_token" => "bd7374d8-2628-4940-9f98-37f862d33f43"
            ],
            [
                "id" => "98b53c90-3b54-4eff-a5b8-203bcfd9b472",
                "created_at" => "2023-03-17 08:28:45",
                "updated_at" => "2023-03-17 08:28:46",
                "user_id" => 15,
                "invoice" => "LD-ONYC0V",
                "name" => "Raihan Fadilah",
                "status" => "success",
                "grand_total" => 0,
                "snap_token" => "d652157e-ba2b-48bd-bc5a-9e29ec496492"
            ],
            [
                "id" => "98b53ca4-da06-4164-be74-67cb9840377b",
                "created_at" => "2023-03-17 08:28:59",
                "updated_at" => "2023-03-17 08:28:59",
                "user_id" => 16,
                "invoice" => "LD-W1HYUO",
                "name" => "Taniya Yulia",
                "status" => "success",
                "grand_total" => 0,
                "snap_token" => "28bdbdd7-42f6-44e2-bf10-0b5231654ed4"
            ],
            [
                "id" => "98b53ccb-8dd4-428c-8865-c579cd83da18",
                "created_at" => "2023-03-17 08:29:24",
                "updated_at" => "2023-03-17 08:29:25",
                "user_id" => 17,
                "invoice" => "LD-1IP7V3",
                "name" => "Kintan Febriyanti",
                "status" => "success",
                "grand_total" => 0,
                "snap_token" => "45127b36-873c-428b-8755-91980471e972"
            ],
            [
                "id" => "98b53ce6-9caf-4120-8ada-4a575204b6ba",
                "created_at" => "2023-03-17 08:29:42",
                "updated_at" => "2023-03-17 08:29:42",
                "user_id" => 18,
                "invoice" => "LD-372269",
                "name" => "Rena Relita",
                "status" => "success",
                "grand_total" => 0,
                "snap_token" => "e3ad5204-2bbb-4728-91be-649336c605c0"
            ],
            [
                "id" => "98b53d04-2ba5-46bf-a9e2-368e443dd83e",
                "created_at" => "2023-03-17 08:30:01",
                "updated_at" => "2023-03-17 08:30:02",
                "user_id" => 19,
                "invoice" => "LD-KIKJO4",
                "name" => "Iqbal Dzulfikar",
                "status" => "success",
                "grand_total" => 0,
                "snap_token" => "52474577-04c1-4add-9445-629f6580f8e0"
            ],
            [
                "id" => "98b53d17-ad90-48a8-9344-b4c022ef762a",
                "created_at" => "2023-03-17 08:30:14",
                "updated_at" => "2023-03-17 08:30:14",
                "user_id" => 20,
                "invoice" => "LD-70OG83",
                "name" => "Syahna Zulfikar",
                "status" => "success",
                "grand_total" => 0,
                "snap_token" => "36afc943-3873-42c6-8dea-629ec07268de"
            ],
            [
                "id" => "98b53d34-24f9-4485-bf78-69a761e9d106",
                "created_at" => "2023-03-17 08:30:33",
                "updated_at" => "2023-03-17 08:30:33",
                "user_id" => 21,
                "invoice" => "LD-Y9857U",
                "name" => "Radhika Yusuf",
                "status" => "success",
                "grand_total" => 0,
                "snap_token" => "7e3779a9-ae56-4e92-a7a8-66a20a7597bd"
            ]
        ]);
    }
}
