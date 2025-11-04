# Laporan Modul 4: Laravel Blade Template Engine
**Mata Kuliah:** Workshop Web Lanjut   
**Nama:** Maisha Zahrani
**NIM:** 2024573010052 
**Kelas:** TI-2C

---

## Abstrak 
Blade adalah mesin templating bawaan dari Laravel yang digunakan untuk memisahkan antara logika program dan tampilan (view) pada aplikasi web, sehingga kode menjadi lebih rapi dan mudah diatur. Dengan Blade, pengembang bisa menulis kode HTML yang dinamis tanpa harus menulis sintaks PHP berulang-ulang, karena Blade sudah menyediakan fitur seperti @if, @foreach, dan @include yang membuat tampilan lebih sederhana dan mudah dibaca. Selain itu, Blade juga mendukung konsep layout dan component yang membantu membuat tampilan web menjadi lebih konsisten di setiap halaman serta memudahkan penggunaan ulang kode yang sama.

---

## 1. Dasar Teori
Blade Template Engine adalah sistem templating yang digunakan Laravel untuk membantu pembuatan tampilan halaman web. Blade bekerja dengan cara memudahkan integrasi antara kode PHP dan HTML, sehingga struktur kode menjadi lebih teratur. Blade juga menyediakan fitur seperti layout, component, dan direktif yang mempercepat proses pembuatan antarmuka pengguna.

## fitur-fitur utama dan konsep penting dalam Blade
#### Membuat View Blade Sederhana<br>  
View menampilkan halaman web kepada pengguna dan disimpan di folder resources/views dengan ekstensi .blade.php. Blade memudahkan tampilan data dari controller agar halaman lebih dinamis.

#### Mengirim Data ke View  
Data dari controller, seperti teks atau angka, dapat dikirim ke view dan langsung ditampilkan agar isi halaman menyesuaikan dengan data tersebut.

#### Sintaks dan Direktif Blade  
Blade menyediakan sintaks mudah seperti @if, @foreach, dan @include untuk logika, perulangan, dan penyisipan tampilan lain, membuat kode lebih rapi.

#### Layouts dan Sections  
Layout menjadi kerangka utama tampilan, sedangkan section diisi konten halaman. Fitur ini menjaga tampilan tetap konsisten di seluruh web.

#### Blade Components  
Component digunakan untuk elemen berulang seperti tombol atau notifikasi, sehingga mudah digunakan kembali dan diperbarui.

#### Blade Includes  
Include berfungsi menyisipkan bagian tampilan seperti navbar atau footer agar kode lebih teratur dan mudah dikelola.

#### Perulangan dan Kondisional Lainnya  
Blade memiliki direktif seperti @isset, @empty, dan @switch untuk menangani kondisi dan logika sederhana di tampilan.

#### Menampilkan Error Validasi  
Blade dapat menampilkan pesan kesalahan dari validasi form secara otomatis agar pengguna tahu jika ada input yang salah.

---

## 2. Langkah-Langkah Praktikum
Tuliskan langkah-langkah yang sudah dilakukan, sertakan potongan kode dan screenshot hasil.

2.1 Praktikum 1 – Meneruskan Data dari Controller ke Blade View

1. Buat dan Buka Proyek Laravel
laravel new modul-4-blade-view
cd modul-4-blade-view
code .

2. Buat sebuah Controller php artisan make:controller DasarBladeController

3. Definisikan Rute, edit routes/web.php

<img src="../gambar/modul4labviewwebphp.png">

4. Buat Metode untuk menghandle data pada Controller, buka app/Http/Controllers/DasarBladeController.php dan tambahkan metode berikut:

<img src="../gambar/dasarbladecontroller.png">

5. Buat Blade View, buat file baru di resources/views/dasar.blade.php:

<img src="../gambar/dasar.png">

6. Mulai server development Laravel: php artisan serve

<img src="../gambar/outputdasar.png">

2.2 Praktikum 2 – Menggunakan Struktur Kontrol Blade

1. Di dalam project modul-4-blade-view buatlah sebuah controller baru:
php artisan make:controller LogicController
Ini membuat app/Http/Controllers/LogicController.php.

2. Tambahkan route baru
Buka routes/web.php dan tambahkan:

<img src="../gambar/modul4labviewwebphp2.png">

3. Tambahkan Logika di Controller
Edit app/Http/Controllers/LogicController.php:

<img src="../gambar/logiccontroller.png">

4. Buat Blade View
Buat file view di resources/views/logic.blade.php:

<img src="../gambar/logic.png">

5. Jalankan Aplikasi

<img src="../gambar/outputlogic.png">

2.3 Praktikum 3 – Layout dan Personalisasi di Laravel 12 dengan Bootstrap

1. Buat Controller baru: php artisan make:controller PageController

2. Menambahkan Route
Buka routes/web.php dan tambahkan rute baru:

<img src="../gambar/modul4labviewwebphp3.png">

3. Update Controller di app/Http/Controllers/PageController.php isikan kode berikut:

<img src="../gambar/pagecontroller2.png">

4. Buat Layout Dasar dengan Bootstrap
Buat direktori layouts di resources/views jika belum ada. Kemudian, buat resources/views/layouts/app.blade.php dan isikan kode berikut:

<img src="../gambar/app.png">

5. Buat view untuk Admin
Buat direktori admin di resources/views jika belum ada. Kemudian, buat resources/views/admin/dashboard.blade.php:

<img src="../gambar/admindashboard.png">

6. Buat view untuk User
Buat direktori user di resources/views jika belum ada. Kemudian, buat resources/views/user/dashboard.blade.php:

<img src="../gambar/userdashboard.png">

7. jalankan aplikasi

<img src="../gambar/adminoutput.png">
<img src="../gambar/useroutput.png">

2.4 Praktikum 4 – Partial Views, Blade Components, dan Theme Switching di Laravel 12

1. Buat Proyek Laravel
laravel new modul-4-laravel-ui
cd modul-4-laravel-ui
code .

2. Buat Controller php artisan make:controller UIController

3. Definisikan Routes
Buka routes/web.php dan tambahkan:

<img src="../gambar/labuiwebphp.png">

4. Update Controller
Edit app/Http/Controllers/UIController.php:

<img src="../gambar/uicontroller.png">

5. Buat Layout Utama dengan Theme Support
Buat direktori layouts di resources/views jika belum ada. Kemudian buat resources/views/layouts/app.blade.php:

<img src="../gambar/uiapp.png">

6. Buat Partial Views
Buat direktori partials di resources/views dan buat file berikut:
resources/views/partials/navigation.blade.php:

<img src="../gambar/navigationui.png">

Selanjutnya, buatkan sebuah file resources/views/partials/alert.blade.php:

<img src="../gambar/alertui.png">

7. Buat Blade Components
php artisan make:component Footer
php artisan make:component FeatureCard
php artisan make:component TeamMember
php artisan make:component ContactForm

Kemudian, Edit resources/views/components/footer.blade.php:

<img src="../gambar/footer.png">

Kemudian, Edit resources/views/components/feature-card.blade.php:

<img src="../gambar/feature.png">

Selanjutnya, Edit resources/views/components/team-member.blade.php:

<img src="../gambar/team-member.png">

8. Buat Main Views
Buat view-view utama: resources/views/home.blade.php:

<img src="../gambar/homeui.png">

Selanjutnya, buat resources/views/about.blade.php:

<img src="../gambar/aboutui.png">

Selanjutnya, buat resources/views/partials/team-stats.blade.php:

<img src="../gambar/team-stats.png">

Selanjutnya, buat resources/views/contact.blade.php:

<img src="../gambar/contactui.png">

Selanjutnya, Edit resources/views/components/contact-form.blade.php:

<img src="../gambar/contact-form.png">

Kemudian, buat resources/views/profile.blade.php:

<img src="../gambar/profileui.png">

9. Jalankan dan Test Aplikasi

<img src="../gambar/homeuioutput.jpg">
<img src="../gambar/aboutuioutput.jpg">
<img src="../gambar/contactuioutput.jpg">
<img src="../gambar/profileuioutput.jpg">

---

## 3. Hasil dan Pembahasan
Praktikum 1 – Mengirim Data ke View
Data yang dikirim dari controller bisa langsung ditampilkan di halaman menggunakan {{ }}. Ini membuat isi halaman bisa berubah sesuai data tanpa menulis ulang kode HTML.

Praktikum 2 – Struktur Kontrol Blade
Blade menyediakan perintah seperti @if, @else, dan @foreach untuk logika dan perulangan. Dengan ini, kode HTML tidak bercampur dengan kode PHP, jadi tampilannya lebih bersih dan mudah dibaca.

Praktikum 3 – Layout dan Bootstrap
Penggunaan @extends dan @section membuat setiap halaman punya tampilan yang sama (misalnya header dan footer). Layout dasar hanya dibuat satu kali dan bisa digunakan di banyak halaman. Tambahan Bootstrap juga membantu memperindah tampilan web.

Praktikum 4 – Partial dan Component
Partial (@include) dan component (<x-nama-component>) digunakan untuk bagian web yang sering dipakai berulang, seperti navbar, footer, atau form. Dengan cara ini, kode lebih mudah dikelola dan tidak perlu diketik berulang kali.Fitur theme switching juga membuat tampilan bisa diubah tanpa mengganggu struktur utama aplikasi.

Secara keseluruhan, semua percobaan berhasil dan menunjukkan bahwa Blade sangat membantu dalam membuat tampilan web yang terstruktur, rapi, dan mudah diubah.

---

## 4. Kesimpulan
Dari hasil praktikum, bisa disimpulkan bahwa Blade membuat pembuatan tampilan web di Laravel jadi lebih mudah. Dengan Blade, bagian tampilan dan logika program bisa dipisahkan, jadi kodenya tidak berantakan dan lebih enak dibaca. Fitur seperti layout, section, include, dan component juga membantu supaya tampilan bisa dipakai ulang tanpa perlu menulis ulang kodenya. Selain itu, sintaks Blade sederhana dan mudah dimengerti, sehingga membuat proses pembuatan web jadi lebih cepat. Ditambah lagi, penggunaan Bootstrap membuat tampilan web terlihat lebih menarik dan rapi di setiap halaman. Secara keseluruhan, Blade sangat membantu dalam membuat web yang rapi, mudah diatur, dan efisien.

---

## 5. Referensi
1. https://hackmd.io/@mohdrzu/r1AIUzWpll
2. fitur-fitur utama dan konsep penting dalam blade https://chatgpt.com

---
