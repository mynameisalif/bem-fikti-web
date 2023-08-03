<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\News;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(3)->create();

        //  Category::create([
        //      'name'=>'FIKTI Info',
        //      'slug'=>'fikti-Info'
        //  ]);
        //  Category::create([
        //      'name'=>'FIKTI Update',
        //      'slug'=>'fikti-update'
        //  ]);
        //  News::factory(20)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
          'name'=>'Ilham Kurniawan',
          'username'=>'ilham123',
          'email'=>'ilham21@gmail.com',
          'password'=> bcrypt('ilham123')
        ]);
        User::create([
          'name'=>'Admin PTI',
          'username'=>'adminpti',
          'email'=>'pti.bemfiktiug@gmail.com',
          'password'=> bcrypt('bem123')
        ]);

        User::factory(3)->create();
        Category::create([
            'name'=>'FIKTI Info',
            'slug'=>'fikti-Info'
        ]);
        Category::create([
            'name'=>'FIKTI Update',
            'slug'=>'fikti-update'
        ]);

         News::factory(20)->create();
        // News::create([
        //     'title'=>'DIGITAL MARKETING',
        //     'slug'=>'digital-marketing',
        //     'author'=>'Admin PT',
        //     'excerpt'=>'Haloo teman teman semuanya, gimana kuliahnya semoga lancar lancar teruss yaa. Yang lagi PI dan Skripsi semangat ya.',
        //     'body'=>'Haloo teman teman semuanya, gimana kuliahnya semoga lancar lancar teruss yaa. Yang lagi PI dan Skripsi semangat ya.

        //     Oh iya, pasti diantara semua mahasiswa yang melihat ini pasti ada yang punya usaha? Nah disini kami ingin memberikan tips gimana sih agar usaha kamu bisa lebih berkembang lagi dan menjadi sukses.

        //     Pengertian digital marketing adalah suatu kegiatan pemasaran atau promosi sebuah brand atau produk menggunakan media digital atau internet.

        //     Tujuan digital marketing adalah untuk menarik konsumen dan calon konsumen secara cepat

        //     Berikut adalah kelebihan dari digital marketing :

        //     1. Kecepatan Penyebaran
        //     Strategi pemasaran dengan menggunakan media digital dapat dilakukan dengan sangat cepat, bahkan dalam hitungan detik.

        //     2. Kemudahan Evaluas
        //     Dengan menggunakan media online, hasil dari kegiatan pemasaran dapat langsung diketahui Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis quibusdam esse. Ex libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum ut a quam vitae.

        //     Informasi seperti berapa lama produk Anda ditonton, berapa banyak orang yang melihat produk Anda, berapa persen konversi penjualan dari setiap iklan dan sebagainya.

        //     3. Murah dan Efektif
        //     Dibandingkan dengan pemasaran tradisional, tentu saja digital marketing jauh lebih murah dan efektif

        //     Berikut ini adalah jenis jenis digital marketing :

        //     1. Website
        //     Website sangat berperan dalam menunjukkan profesionalisme perusahaan, membantu konsumen mengetahui bisnis Anda, promosi yang hemat dan media bisnis yang mudah.

        //     2. Social Media Marketing
        //     Edarkan platform di media sosial seperti Facebook, Instagram, WhatsApp dan Twitter karena dapat dilakukan dengan biaya yang minim bahkan gratis.

        //     3. Video Marketing
        //     Dengan cara ini, Anda dapat langsung menjelaskan tentang bisnis Anda, menjelaskan produk dan cara menggunakannya serta menampilkan testimonial pelanggan.

        //     Cara memulai Digital Marketing
        //     1. Siapkan alat yang digunakan untuk melakukan pemasarannya. Beberapa alat bantu yang dapat digunakan dalam digital marketing seperti: website, akun media sosial, identitas brand dan produk, unggahan blog, jejak online (review, feedback dari pelanggan,dan lain-lain).

        //     2. Siapkan konten yang menarik perhatian dan shareable. Konten dapat berupa foto, video, tulisan atau yang lainnya.

        //     3. Anda dapat memulai menggunggah dan selanjutnya evaluasi setiap unggahan di setiap social media yang dimiliki.

        //     4. Masuk dan bergabunglah dengan forum marketplace public. Usahakan profil bisnis Anda bagus, karena akan berpengaruh terhadap citra brand.


        //     Itulah beberapa tips dan contoh tentang judul Digital Marketing yang penting untuk Anda perhatikan, semoga informasi ini bermanfaat bagi Anda yang mungkin minat di bidang Digital Marketing.',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);
    }
}
