<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Series;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Series::insert([
            [
                "id" => "98bb8ae0-9bbf-473e-9ce3-19eb30db7c0d",
                "created_at" => "2023-03-20 11:42:42",
                "updated_at" => "2023-03-20 11:49:04",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Kata Pengantar",
                "number_of_series" => 1,
                "intro" => 1,
                "description" => "<p style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><em><span style=\"font-family: &quot;Source Sans Pro&quot;;\">Bismillahirrahmannirrahiim.</span></em></p><p style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><em><span style=\"font-family: &quot;Source Sans Pro&quot;;\">Assalamu'alaikum Warahmatullahi Wabarakatuh.</span></em></p><p style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">Alhamdulillah, segala puji dan syukur penulis panjatkan kehadirat Tuhan Yang Maha Esa. Karena berkat limpahan karunia-Nya, kami dapat menyelesaikan penulisan buku </span><b><span style=\"font-family: &quot;Source Sans Pro&quot;;\">Membangun Aplikasi Web Presensi Dengan Laravel 10, NodeMCU &amp; RFID</span></b><span style=\"font-family: &quot;Source Sans Pro&quot;;\">. Di Dalam penyusunan buku tersebut, penulis telah berusaha semaksimal mungkin sesuai dengan kemampuan penulis demi penyelesaian buku ini dengan baik.</span></p><p style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">Penulis menyadari jika masih terdapat kekurangan ataupun suatu kesalahan dalam penyusunan buku ini sehingga penulis mengharapkan kritik ataupun saran yang bersifat positif untuk perbaikan di masa yang akan datang dari seluruh pembaca.</span></p><p style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">Maka dengan kerendahan hati penulis hanya bisa menyampaikan ucapan terima kasih kepada semua pihak yang terlibat dalam proses penyelesaian ini.</span></p><p style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">Sekian semoga buku ini dapat bermanfaat dan mudah dipahami bagi penulis khususnya serta para pembaca pada umumnya.</span></p><p style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><em><span style=\"font-family: &quot;Source Sans Pro&quot;;\">Raihlah ilmu, dan untuk meraih ilmu belajarlah tenang dan sabar</span></em><span style=\"font-family: &quot;Source Sans Pro&quot;;\">. -&nbsp;</span><span style=\"font-weight: bolder; font-family: &quot;Source Sans Pro&quot;;\">Umar bin Khattab</span><em><br></em></p>"
            ],
            [
                "id" => "98bb8ae0-9ef9-48c2-8823-513d06c05d63",
                "created_at" => "2023-03-20 11:42:42",
                "updated_at" => "2023-03-20 12:07:54",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Persetujuan Dan Lisensi",
                "number_of_series" => 2,
                "intro" => 1,
                "description" => "<p><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">Buku ini menggunakan&nbsp;</span><em style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">license</span></em><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">&nbsp;personal, yang artinya buku dan isi di dalamnya hanya boleh digunakan dan di baca untuk seseorang yang sudah membelinya. Selain pemilik license dari buku ini tidak diperbolehkan menggunakan apalagi sampai menyebar luaskan tanpa izin dari penulis.</span></p><p><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">Dan untuk pemilik&nbsp;</span><em style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">license</span></em><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">&nbsp;dari buku ini juga tidak di perbolehkan menyebarkan dan memperjual belikan lagi kepada seseorang.</span></p><h4 style=\"margin-top: 30px; font-weight: 600; color: rgb(90, 88, 88); font-family: Quicksand, sans-serif;\" class=\"\"><span style=\"font-weight: bolder; font-family: &quot;Source Sans Pro&quot;;\">Kutipan Pasal 72:</span></h4><h4 style=\"margin-top: 30px; color: rgb(90, 88, 88); font-family: Quicksand, sans-serif;\" class=\"\"><span style=\"font-size: 18px; font-family: &quot;Source Sans Pro&quot;;\">Sanksi Pelanggaran Undang-Undang Hak Cipta (UU No. 19 Tahun 2002)</span></h4><h4 style=\"margin-top: 30px; color: rgb(90, 88, 88); font-family: Quicksand, sans-serif;\" class=\"\"><ol style=\"font-size: 18px;\"><li><p style=\"margin-top: initial; margin-bottom: initial;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">Barangsiapa dengan sengaja dan tanpa hak melakukan perbuatan sebagaiamana dimaksud dalam pasal 2 ayat (1) atau Pasa 49 ayat (1) dan ayat (2) dipidana dengan pidana penjara masing-masing paling singkat 1 (satu) bulan dan/ atau denda paling sedikit Rp1.000.000,00 (satu juta rupiah), atau pidana penjara paling lama 7 tujuh tahun dan/ atau denda paling banyak Rp5.000.000.000,00 (lima miliar rupiah).</span></p><p style=\"margin-top: initial; margin-bottom: initial;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\"><br></span></p></li><li><p style=\"margin-top: initial; margin-bottom: initial;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">Barangsiapa dedengan sengaja meyiarkan memamerkan, mengedarkan, atau menjual kepada umum suatu Ciptaan atau barang hasil pelanggaran Hak Cipta atau Hak terkait sebagaimana dimaksud pada ayat (1) dipidana dengan [pidana penjara paling lama 5 (lima) tahun dan/ atau dennda paling banyak Rp500.000.000,00 (lima ratus juta rupiah).</span></p></li></ol></h4><h4 style=\"margin-top: 30px; color: rgb(90, 88, 88); font-family: Quicksand, sans-serif;\" class=\"\"><span style=\"font-weight: bolder;\"><br></span></h4>"
            ],
            [
                "id" => "98bb8ae0-a09b-4b73-b6f4-815e6a0ecdfc",
                "created_at" => "2023-03-20 11:42:42",
                "updated_at" => "2023-03-20 11:59:19",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Tentang Buku",
                "number_of_series" => 3,
                "intro" => 1,
                "description" => "<p><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">Di dalam buku ini kita bersama-sama akan belajar menjadi seorang&nbsp;</span><em style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><span style=\"font-weight: bolder; font-family: &quot;Source Sans Pro&quot;;\">Spesialis Laravel Web Developer</span></em><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">&nbsp;dari 0 dengan cara membangun sebuah website online course menggunakan&nbsp;</span><span style=\"font-weight: bolder; font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">Laravel</span><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">,&nbsp;</span><span style=\"font-weight: bolder; font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">Alpine.Js</span><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">&nbsp;dan&nbsp;</span><span style=\"font-weight: bolder; font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">Tailwind CSS</span><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">.</span></p><p><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">Disini kita akan belajar bagaimana cara membangun aplikasi menggunakan&nbsp;</span><span style=\"font-weight: bolder; font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">laravel</span><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">&nbsp;dari awal sampai tahapan&nbsp;</span><em style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">production</span></em><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">&nbsp;dan juga kita akan belajar bagaimana menuliskan sebuah&nbsp;</span><em style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><span style=\"font-weight: bolder; font-family: &quot;Source Sans Pro&quot;;\">kode yang rapi, readable, dan mudah di maintance.</span></em></p><p><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">Tidak hanya sampai disitu, kita juga akan memanfaat beberapa fitur bawaan&nbsp;</span><em style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><span style=\"font-weight: bolder; font-family: &quot;Source Sans Pro&quot;;\">Laravel</span></em><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">&nbsp;seperti,&nbsp;</span><em style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><span style=\"font-weight: bolder; font-family: &quot;Source Sans Pro&quot;;\">blade directive, components, form request, database notificaton</span></em><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">&nbsp;dan masih banyak lagi.</span></p><p><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">Pada buku ini, kita juga akan belajar bagaimana membuat desain yang sangat&nbsp;</span><em style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><span style=\"font-weight: bolder; font-family: &quot;Source Sans Pro&quot;;\">interaktif dan responsive</span></em><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">&nbsp;menggunakan&nbsp;</span><em style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><span style=\"font-weight: bolder; font-family: &quot;Source Sans Pro&quot;;\">Tailwind CSS</span></em><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">&nbsp;dan&nbsp;</span><span style=\"font-weight: bolder; font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">Alpine.Js</span><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">&nbsp;, sehingga tampilan aplikasi kita bisa diakses menggunakan segala macam device, dengan begitu aplikasi yang kita buat akan sangat mudah digunakan.</span></p><p><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">Karena kita membuat&nbsp;</span><em style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><span style=\"font-weight: bolder; font-family: &quot;Source Sans Pro&quot;;\">Website Online Course</span></em><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">, maka kita juga akan belajar melakukan&nbsp;</span><em style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><span style=\"font-weight: bolder; font-family: &quot;Source Sans Pro&quot;;\">integrasi payment gateway</span></em><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">&nbsp;menggunakan&nbsp;</span><em style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><span style=\"font-weight: bolder; font-family: &quot;Source Sans Pro&quot;;\">Midtrans</span></em><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">.</span></p><p><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">Setelah&nbsp;</span><em style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><span style=\"font-weight: bolder; font-family: &quot;Source Sans Pro&quot;;\">Website Online Course</span></em><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">&nbsp;selesai kita buat, langkah selanjutnya adalah melakukan proses&nbsp;</span><em style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><span style=\"font-weight: bolder; font-family: &quot;Source Sans Pro&quot;;\">deployment</span></em><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">&nbsp;atau proses&nbsp;</span><em style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><span style=\"font-weight: bolder; font-family: &quot;Source Sans Pro&quot;;\">meng-online-kan projectnya di Internet</span></em><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">, sehingga kita bisa mengaksesnya secara&nbsp;</span><em style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">global</span></em><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">.</span></p><p><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">Untuk proses&nbsp;</span><em style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">deployment</span></em><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">&nbsp;kita akan coba di&nbsp;</span><em style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><span style=\"font-weight: bolder; font-family: &quot;Source Sans Pro&quot;;\">cPanel / shared hosting</span></em><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">. Disini kita akan belajar melakukan proses&nbsp;</span><em style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">deployment</span></em><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">&nbsp;</span><em style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">project</span></em><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">&nbsp;</span><em style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><span style=\"font-weight: bolder; font-family: &quot;Source Sans Pro&quot;;\">Laravel</span></em><span style=\"font-family: &quot;Source Sans Pro&quot;; font-size: 18px;\">&nbsp;dengan benar dan aman.</span><span style=\"font-family: Quicksand, sans-serif; font-size: 18px;\"><br></span></p>"
            ],
            [
                "id" => "98bb8ae0-a22d-4bba-b833-6089a4fb57c1",
                "created_at" => "2023-03-20 11:42:42",
                "updated_at" => "2023-03-20 12:08:53",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Daftar Istilah",
                "number_of_series" => 4,
                "intro" => 1,
                "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            ],
            [
                "id" => "98bb8ae0-a3ad-4215-9c50-f07a79a3bd41",
                "created_at" => "2023-03-20 11:42:42",
                "updated_at" => "2023-03-20 12:10:23",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Referensi",
                "number_of_series" => 5,
                "intro" => 1,
                "description" => "Referensi"
            ],
            [
                "id" => "98bb8ae0-a570-4a85-b7fd-6307598f7522",
                "created_at" => "2023-03-20 11:42:42",
                "updated_at" => "2023-03-20 12:19:18",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Instalasi Kebutuhan Pengembangan (Tools)",
                "number_of_series" => 6,
                "intro" => 1,
                "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            ],
            [
                "id" => "98bb8ae0-a719-47a7-9d3d-218828de4980",
                "created_at" => "2023-03-20 11:42:42",
                "updated_at" => "2023-03-20 12:19:02",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Struktur & relasi Database",
                "number_of_series" => 7,
                "intro" => 1,
                "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            ],
            [
                "id" => "98bb8ae0-a8a8-451e-9b79-77df934a7b2f",
                "created_at" => "2023-03-20 11:42:42",
                "updated_at" => "2023-03-20 12:18:35",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Instalasi Laravel Via Composer",
                "number_of_series" => 8,
                "intro" => 1,
                "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            ],
            [
                "id" => "98bb8ae0-abe7-44d6-b2ea-94d480ae47ba",
                "created_at" => "2023-03-20 11:42:42",
                "updated_at" => "2023-03-20 12:18:21",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Konfigurasi Waktu (Timezone)",
                "number_of_series" => 9,
                "intro" => 1,
                "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            ],
            [
                "id" => "98bb8ae0-ad7b-4916-845e-a3b4495dee96",
                "created_at" => "2023-03-20 11:42:42",
                "updated_at" => "2023-03-20 12:20:56",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Tentang Laravel Spatie",
                "number_of_series" => 10,
                "intro" => 1,
                "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            ],
            [
                "id" => "98bb8ae0-aef8-438e-b542-23eb118d0132",
                "created_at" => "2023-03-20 11:42:42",
                "updated_at" => "2023-03-20 12:21:03",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Instalasi Laravel Spatie",
                "number_of_series" => 11,
                "intro" => 1,
                "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            ],
            [
                "id" => "98bb8ae0-b0eb-4164-8ad2-02a673b222f6",
                "created_at" => "2023-03-20 11:42:42",
                "updated_at" => "2023-03-20 12:21:45",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Konfigurasi Database",
                "number_of_series" => 12,
                "intro" => 1,
                "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            ],
            [
                "id" => "98bb8ae0-b289-4f59-bf4e-902b7c33798b",
                "created_at" => "2023-03-20 11:42:42",
                "updated_at" => "2023-03-20 12:21:53",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Model & Migration",
                "number_of_series" => 13,
                "intro" => 1,
                "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            ],
            [
                "id" => "98bb8ae0-b3f9-4f3a-adff-443c49964da2",
                "created_at" => "2023-03-20 11:42:42",
                "updated_at" => "2023-03-20 12:22:13",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Relasi Table dengan Eloquent",
                "number_of_series" => 14,
                "intro" => 1,
                "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            ],
            [
                "id" => "98bb8ae0-baf9-4f1b-a999-95bf547a1ea0",
                "created_at" => "2023-03-20 11:42:42",
                "updated_at" => "2023-03-20 12:30:38",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Eloquent Accessor & Mutator",
                "number_of_series" => 15,
                "intro" => 1,
                "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            ],
            [
                "id" => "98bb8ae0-b575-4ca1-b27a-c021bba9e367",
                "created_at" => "2023-03-20 11:42:42",
                "updated_at" => "2023-03-20 12:30:52",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Role & Permission Seeder",
                "number_of_series" => 16,
                "intro" => 1,
                "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            ],
            [
                "id" => "98bb8ae0-b801-4f9b-8f4e-6a23ad560e46",
                "created_at" => "2023-03-20 11:42:42",
                "updated_at" => "2023-03-20 12:31:14",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat User Seeder",
                "number_of_series" => 17,
                "intro" => 1,
                "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            ],
            [
                "id" => "98bb8ae0-b97d-44f4-9f15-369d6edf1069",
                "created_at" => "2023-03-20 11:42:42",
                "updated_at" => "2023-03-20 12:31:03",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Menjalankan Seeder & Migration",
                "number_of_series" => 18,
                "intro" => 1,
                "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            ],
            [
                "id" => "98bb8ae0-bc50-4b7c-9238-304aa6dbf822",
                "created_at" => "2023-03-20 11:42:42",
                "updated_at" => "2023-03-20 12:58:09",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Master Layout",
                "number_of_series" => 19,
                "intro" => 1,
                "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            ],
            [
                "id" => "98bb9d12-9bea-489b-b30e-5ec326ec9542",
                "created_at" => "2023-03-20 12:33:35",
                "updated_at" => "2023-03-20 13:00:02",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Layout Navbar",
                "number_of_series" => 20,
                "intro" => 1,
                "description" => "<p>testing</p>"
            ],
            [
                "id" => "98bb9d2e-91f5-49ce-b53b-ae0c83098f8f",
                "created_at" => "2023-03-20 12:33:53",
                "updated_at" => "2023-03-20 13:00:10",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Layout Sidebar",
                "number_of_series" => 21,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bb9d51-4d10-473d-a706-b661ca45c5bd",
                "created_at" => "2023-03-20 12:34:16",
                "updated_at" => "2023-03-20 13:00:16",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Layout Footer",
                "number_of_series" => 22,
                "intro" => 1,
                "description" => "<p>testing</p>"
            ],
            [
                "id" => "98bb9cc9-5f8a-460c-b410-1d3651ef1656",
                "created_at" => "2023-03-20 12:32:47",
                "updated_at" => "2023-03-20 13:00:23",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Autentikasi Dengan Laravel Fortify",
                "number_of_series" => 23,
                "intro" => 1,
                "description" => "<p>testing</p>"
            ],
            [
                "id" => "98bba6cb-dde0-4be3-a88d-a4a6db4d0398",
                "created_at" => "2023-03-20 13:00:46",
                "updated_at" => "2023-03-20 13:00:46",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Instalasi dan Konfigurasi Laravel Fortify",
                "number_of_series" => 24,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bba6bf-0112-4231-97cc-0d7da5862110",
                "created_at" => "2023-03-20 13:00:38",
                "updated_at" => "2023-03-20 13:00:38",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat  Fungsi Login",
                "number_of_series" => 25,
                "intro" => 1,
                "description" => "<p>tes</p>"
            ],
            [
                "id" => "98bba704-5086-40f4-ac2e-2bbda9d73cbb",
                "created_at" => "2023-03-20 13:01:23",
                "updated_at" => "2023-03-20 13:01:23",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Fungsi Logout",
                "number_of_series" => 26,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bba8ff-ce43-4001-abc0-29a1b7cd2b85",
                "created_at" => "2023-03-20 13:06:56",
                "updated_at" => "2023-03-20 13:06:56",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Mengenal Datatable",
                "number_of_series" => 27,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bba90d-8210-4541-a421-83e0279343d0",
                "created_at" => "2023-03-20 13:07:05",
                "updated_at" => "2023-03-20 13:07:05",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Instalasi Datatable",
                "number_of_series" => 28,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bba91d-11c2-4208-9524-90a951de71de",
                "created_at" => "2023-03-20 13:07:15",
                "updated_at" => "2023-03-20 13:07:15",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Form Request Department",
                "number_of_series" => 29,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bba929-f60c-42da-a9db-6b4dd597e40b",
                "created_at" => "2023-03-20 13:07:24",
                "updated_at" => "2023-03-20 13:07:24",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Controller Department",
                "number_of_series" => 30,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bba937-03ff-4413-99e1-11b5c5cce549",
                "created_at" => "2023-03-20 13:07:32",
                "updated_at" => "2023-03-20 13:07:32",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Menampilkan Data Department",
                "number_of_series" => 31,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bba944-8200-4723-ac5c-1c02bd94d94e",
                "created_at" => "2023-03-20 13:07:41",
                "updated_at" => "2023-03-20 13:07:41",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Fungsi Tambah Department",
                "number_of_series" => 32,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bba95f-660e-4785-88c9-e3cfdd611fd3",
                "created_at" => "2023-03-20 13:07:59",
                "updated_at" => "2023-03-20 13:07:59",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Fungsi Edit & Update Department",
                "number_of_series" => 33,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bba96a-fb73-4650-984b-3ac6a0b572fb",
                "created_at" => "2023-03-20 13:08:06",
                "updated_at" => "2023-03-20 13:08:06",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Fungsi Delete Department",
                "number_of_series" => 34,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bba976-ff7f-4c85-ad1a-07ea4e2a4b6c",
                "created_at" => "2023-03-20 13:08:14",
                "updated_at" => "2023-03-20 13:08:14",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Form Request Position",
                "number_of_series" => 35,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bba982-f745-47d7-953f-bb7626359caf",
                "created_at" => "2023-03-20 13:08:22",
                "updated_at" => "2023-03-20 13:08:22",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Controller Position",
                "number_of_series" => 36,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bba9d4-4926-49fd-8657-a10049d757ae",
                "created_at" => "2023-03-20 13:09:15",
                "updated_at" => "2023-03-20 13:09:15",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Menampilkan Data Position",
                "number_of_series" => 37,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bba9df-4428-4673-95f4-29cb8c72c0da",
                "created_at" => "2023-03-20 13:09:22",
                "updated_at" => "2023-03-20 13:09:22",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Fungsi Tambah Position",
                "number_of_series" => 38,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bba9ee-2682-407c-9650-f4d409ddb04e",
                "created_at" => "2023-03-20 13:09:32",
                "updated_at" => "2023-03-20 13:09:32",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Fungsi Edit & Update Position",
                "number_of_series" => 39,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bba9fc-3f41-426b-8b3a-72ca789f8de6",
                "created_at" => "2023-03-20 13:09:41",
                "updated_at" => "2023-03-20 13:09:41",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Fungsi Delete Position",
                "number_of_series" => 40,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bbaa07-4105-4a01-822e-7d4f47b6f41e",
                "created_at" => "2023-03-20 13:09:49",
                "updated_at" => "2023-03-20 13:09:49",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Form Request Staff",
                "number_of_series" => 41,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bbaa18-752c-4452-bb5b-01fb0dd98619",
                "created_at" => "2023-03-20 13:10:00",
                "updated_at" => "2023-03-20 13:10:00",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Controller Staff",
                "number_of_series" => 42,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bbaa23-7510-474b-8f7c-701ee9f82b40",
                "created_at" => "2023-03-20 13:10:07",
                "updated_at" => "2023-03-20 13:10:07",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Menampilkan Data Staff",
                "number_of_series" => 43,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bbaa34-834c-4fa5-8554-805837cb3520",
                "created_at" => "2023-03-20 13:10:18",
                "updated_at" => "2023-03-20 13:10:18",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Fungsi Tambah Staff",
                "number_of_series" => 44,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bbaa44-2bb8-4272-9d9c-b4e670e48233",
                "created_at" => "2023-03-20 13:10:29",
                "updated_at" => "2023-03-20 13:10:29",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Fungsi Edit & Update Staff",
                "number_of_series" => 45,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bbaa53-4172-4b9c-86c5-723018984017",
                "created_at" => "2023-03-20 13:10:38",
                "updated_at" => "2023-03-20 13:10:38",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Fungsi Delete Staff",
                "number_of_series" => 46,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bbaea3-0360-4c04-a9da-d063ec57c0e4",
                "created_at" => "2023-03-20 13:22:42",
                "updated_at" => "2023-03-20 13:22:42",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Form Request Device",
                "number_of_series" => 47,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bbaeb0-d519-4705-b266-f1c29f2f68e4",
                "created_at" => "2023-03-20 13:22:51",
                "updated_at" => "2023-03-20 13:22:51",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Controller Device",
                "number_of_series" => 48,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bbaebd-41ea-48ff-a9d9-7b37c6d3e4a7",
                "created_at" => "2023-03-20 13:22:59",
                "updated_at" => "2023-03-20 13:22:59",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Menampilkan Data Device",
                "number_of_series" => 49,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bbaecb-e0a9-447e-8442-4a5d535d96c4",
                "created_at" => "2023-03-20 13:23:09",
                "updated_at" => "2023-03-20 13:23:09",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Fungsi Tambah Device",
                "number_of_series" => 50,
                "intro" => 1,
                "description" => "<p>Device</p>"
            ],
            [
                "id" => "98bbaed7-a163-4bfa-8266-2fb3e37bab5f",
                "created_at" => "2023-03-20 13:23:16",
                "updated_at" => "2023-03-20 13:23:16",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Fungsi Edit & Update Device",
                "number_of_series" => 51,
                "intro" => 1,
                "description" => "<p>test</p>"
            ],
            [
                "id" => "98bbaee3-accd-4719-94bf-008cc2267794",
                "created_at" => "2023-03-20 13:23:24",
                "updated_at" => "2023-03-20 13:23:24",
                "course_id" => "98b5252e-bf27-41c4-957a-6d93c25cc28c",
                "title" => "Membuat Fungsi Delete Device",
                "number_of_series" => 52,
                "intro" => 1,
                "description" => "<p>test</p>"
            ]
        ]);
    }
}
