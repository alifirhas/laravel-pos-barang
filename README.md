# Mini Inventaris Barang

<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

## Tentang Project

Proyek ini merupakan sebuah proyek mini yang berkaitan dengan inventarisasi barang. Menggunakan framework Laravel 10, proyek ini memanfaatkan database MySQL dan MongoDB. Fokus utama proyek ini adalah simulasi aplikasi inventarisasi barang mini. Perhatian utama dalam proyek ini adalah pada pengembangan bagian back-end, termasuk penggunaan route resource, gate, custom request, dan penanganan kesalahan pada front-end.

## Peringatan

Ketika proyek ini dibuat, Laravel 10 belum didukung oleh jenssegers/mongodb. Oleh karena itu, proyek ini menggunakan paket mongodb versi dev-master. Sebelum menginstal proyek ini, jika jenssegers/mongodb telah mendukung Laravel 10, silahkan ubah jenssegers/mongodb ke versi yang mendukung Laraavel 10.

## Dibangun dengan

1. Laravel 10
2. Laravel Breeze
3. Tailwind
4. DaisyUI
5. MySQL
6. MongoDB

## Instalasi

Ini adalah langkah instalasi yang harus dilakukan untuk menginstal proyek ini pada mesin local.

### Requirements

- npm
- composer
- php
- php mongodb extension
- Laravel
- pecl

### Instalasi proyek

Di bawah ini adalah langkah-langkah yang diperlukan untuk proses instalasi proyek. Pastikan semua requirements telah ter-install.

1. Clone repository dengan perintah

    ```bash
    git clone https://github.com/alifirhas/laravel-pos-barang.git
    ```

2. Masuk ke dalam folder proyek yang telah di-clone
3. salin file **.env.example** ke **.env.** Langkah ini bisa dilakukan dengan copy-paste atau menggunakan perintah

    ```bash
    cp .env.example .env
    # Jangan menggunakan perintah mv .env.example .env
    # Karena ini akan menghapus file .env.example
    ```

    Beberapa hal yang harus dilakukan di .env

    1. Sesuaikan variable koneksi MySQL
        1. DB_HOST → terdapat perbedaan antara [localhost](http://localhost) dan 127.0.0.1
        2. DB_PORT → Cek port yang digunakan
        3. DB_DATABASE → Nama database yang akan digunakan untuk migration
        4. DB_USERNAME → Username dari akun yang dapat mengakses database
        5. DB_PASSWORD → Password dari username yang dapat mengakses database
    2. Sesuaikan variable koneksi MongoDB
        1. MONGODB_DSN → Bisa didapatkan dari MongoDB atlas dengan koneksi pada driver PHP setelah membuat cluster
        2. MONGODB_DATABASE → Nama database yang ada pada cluster

        Untuk contoh tolong gunakan variable ini

        ```text
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=pos-barang
        DB_USERNAME=root
        DB_PASSWORD=
        
        # DSN mongodb dapat digunakan
        MONGODB_DSN=mongodb+srv://admin:admin@cluster0.nwciuhk.mongodb.net/?retryWrites=true&w=majority
        MONGODB_DATABASE=posbarang
        ```

4. Generate kunci aplikasi Laravel dengan menggunakan perintah

    ```bash
    php artisan key:generate
    ```

5. Install package composer

    ```bash
    composer install
    ```

6. Install package NPM

    ```bash
    npm install
    ```

7. Buat database sesuai dengan nama database yang ada pada .env atau yang telah ditentukan pada phpmyadmin atau DBMS MySQL lainnya
8. Migrasi database menggunakan perintah

    ```bash
    php artisan migrate
    ```

    Jika menggunakan database MongoDB yang telah saya sediakan, tolong jalankan seeder untuk mengisi data awal pada database yang menyimpan data akun user (admin dan staff) juga data barang yang sesuai dengan log aktivitas

    ```bash
    php artisan db:seed --class=UsersTableSeeder
    php artisan db:seed --class=BarangSeeder
    ```

9. Jalankan perintah `npm run build` untuk membangun tailwind css ui atau menjalankan perintah `npm run dev` untuk membuat server live tailwind CSS
10. Pada terminal yang berbeda, jalankan perintah `php artisan serve` untuk memulai server Laravel 10

Setelah langkah-langkah di atas selesai, proyek Laravel 10 Anda harus siap digunakan. Pastikan untuk membaca dokumentasi Laravel resmi dan mengacu pada instruksi yang diberikan oleh pengembang proyek jika ada langkah-langkah khusus yang perlu dilakukan.

### Catatan instalasi

- Pastikan untuk membaca dokumentasi instalasi untuk setiap requirement sesuai dengan sistem operasi yang digunakan, karena ada beberapa cara instalasi yang berbeda tergantung pada sistem operasinya.
- Jika Anda menggunakan XAMPP di Linux dan terdapat dua versi PHP yang berbeda, disarankan untuk menginstal ekstensi MongoDB pada PHP sistem dan PHP XAMPP. Hal ini disebabkan oleh lokasi instalasi Composer, di mana Composer akan menggunakan PHP dari sistem.
