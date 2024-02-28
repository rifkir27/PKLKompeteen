<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Showcase;

class ShowcaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Showcase::insert([
            [
                "id" => "98b558e6-0014-467b-9f63-d39f451aaef5",
                "created_at" => "2023-02-17 09:47:59",
                "updated_at" => "2023-02-17 09:47:59",
                "user_id" => 3,
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membangun Aplikasi Presensi Laravel 10, NodeMCU dan RFID",
                "cover" => "TaaEJ4OfyLwwyUDFMlkgXiP6f59RHRfuOVDorUAW.png",
                "description" => "Berikut hasil dari mengikuti ebook dari eduthings, materi nya bagus dan mudah dipahami"
            ],
            [
                "id" => "98b5596a-ea55-4140-b473-cddbf0b5bacf",
                "created_at" => "2023-02-27 09:49:26",
                "updated_at" => "2023-02-27 09:49:26",
                "user_id" => 6,
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membangun Aplikasi Web Presensi Dengan laravl 10, NodeMCU & RFID",
                "cover" => "2KP9gkFPd3SEQ2YGlFY5lbNvYq7lGFaXB4mbPTWG.png",
                "description" => "Dengan role & permission saya dapat memilih hak akses setiap user, data aman dan terkendali"
            ],
            [
                "id" => "98b55b12-8360-4856-bebb-b237079e725e",
                "created_at" => "2023-03-01 09:54:04",
                "updated_at" => "2023-03-01 09:54:04",
                "user_id" => 9,
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Report Berdasarkan Tanggal Yang Kita Inginkan (Web Presensi NodeMCU)",
                "cover" => "nwqiMxGIu9hYIk2UYWk02UDfQHu41ZHVri8aeTMX.png",
                "description" => "Selain menggunakan nodemcu dan rfid untuk absensi, saya dapat mengunduh report berdasarkan tanggal"
            ],
            [
                "id" => "98b55b6e-d048-421e-a671-246337e1f04d",
                "created_at" => "2023-01-15 09:55:04",
                "updated_at" => "2023-01-15 09:55:04",
                "user_id" => 18,
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Aplikasi Web Presensi Laravel 10 Nodemcu",
                "cover" => "vlDZDZuHLPKLhh924gm9unoZgoSzKmXIEhFUS4fK.png",
                "description" => "Saya dapat melihat laporan kehadiran berdasarkan staff yang sudah terdaftar, terimakasih atas pembelajarannya."
            ]
        ]);
    }
}
