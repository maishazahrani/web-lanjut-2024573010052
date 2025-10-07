# Laporan Modul 1: Perkenalan Laravel
**Mata Kuliah:** Workshop Web Lanjut   
**Nama:** Maisha Zahrani  
**NIM:** 2024573010052 
**Kelas:** TI-2C  

---

## Abstrak 

Laporan ini membahas pengenalan framework Laravel, mulai dari konsep dasar, komponen utama, struktur folder dan file, hingga pola arsitektur MVC yang digunakan. Tujuan laporan ini adalah untuk memahami dasar-dasar Laravel sebagai fondasi dalam membangun aplikasi web modern yang terstruktur, efisien, dan mudah dikembangkan. Dengan memahami materi ini, mahasiswa diharapkan mampu memulai pengembangan aplikasi menggunakan Laravel dengan lebih percaya diri.

---

## 1. Pendahuluan

Laravel adalah sebuah alat atau framework (kerangka kerja) untuk membantu pembangunan situs Web atau Aplikasi Online dengan lebih mudah dan cepat, jika kita memperhatikan lebih lagi terkait slogannya “The PHP Framework” kita bisa tau bahwa laravel ini dibuat dengan bahasa pemrograman PHP, dan bagian “for Web Artisan” artisan diambil dari kata seniman yang mana laravel ini ditujukan untuk para seniman web.                  

Laravel adalah framework web PHP yang populer, bersifat open-source, dan dirancang untuk membangun aplikasi web modern yang skalabel dan aman.
Laravel merupakan framework high-level yang bersifat opinionated (punya aturan dan konvensi tertentu). Nanti kita akan bahas lebih detail apa maksudnya. Laravel juga mengikuti arsitektur Model-View-Controller (MVC), yang akan kita pelajari lebih lanjut, dengan tujuan mempermudah sekaligus membuat proses pengembangan menjadi lebih efisien dan menyenangkan.

Karakteristik utama MVC adalah:
- Proses pengujian program yang mudah dan minim masalah. MVC adalah framework yang sangat mudah untuk diuji,    dapat dikembangkan, dan dapat diterapkan di kode pr0gram apapun.
- Untuk mengembangkan aplikasi web menggunakan pola Model-View-Controller, MVC akan menawarkan kontrol penuh atas HTML serta URL.
- Framework yang memanfaatkan fitur yang disediakan oleh ASP.NET, JSP, Django, dan sejenisnya.
- Sesuai dengan pengertian sebelumnya, MVC adalah komponen pemrograman yang memisahkan 3 logika: Model, View, Controller.
- Pola pengembangan aplikasi yang mendukung Test Driven Development (TDD).

Laravel sangat cocok untuk mengembangkan berbagai jenis aplikasi web, termasuk aplikasi e-commerce, platform media sosial, sistem manajemen konten (CMS), aplikasi blogging, portal lowongan kerja, dan PWA (Progressive Web App) karena kemampuannya dalam penanganan data kompleks, keamanan, dan kemudahan pengembangan yang efisien menggunakan pola MVC.  

---

## 2. Komponen Utama Laravel (ringkas)

Tuliskan penjelasan singkat (1–3 kalimat) untuk tiap komponen berikut:
- Blade (templating)<br>
Blade merupakan salah satu fitur dari Laravel yang sangat bermanfaat dalam proses pengembangan halaman web. Blade templating biasanya digunakan untuk memudahkan membuat tampilan pada halaman web. Dengan menggunakan Blade Templating kita tidak perlu menulis kode berulang kali untuk membuat sebuah tampilan yang berulang seperti header, navbar, dan footer.

- Eloquent (ORM)<br>
Eloquent ORM adalah fitur dari Laravel yang memungkinkan developer untuk dapat menggunakan dan memanipulasi data yang ada di dalam database dengan PHP objects dan model terkait. Sebagai Object-Relational Mapping (ORM) yang disediakan oleh Framework Laravel, Eloquent memiliki fungsi query SQL yang memungkinkan untuk mengelola data dalam database tanpa harus menuliskannya kembali secara manual. ORM sendiri mengacu pada suatu metode pemrograman yang menghubungkan database relasional dengan kode pemrograman yang berorientasi sebagai objek.

- Routing<br>
Routing merupakan proses menentukan dan mengontrol respon permintaan HTTP dari aplikasi anda berdasarkan URL atau URI yang mereka akses. Sangat penting untuk mengetahui bagaimana cara routing dalam menangani permintaan ke fungsi atau metode yang tepat. Dalam laravel routing dikonfigurasi dalam file routes/web.php untuk menangani permintaan HTTP biasa, dan routes/api.php untuk menangani permintaan terkait dengan API yang dipakai didalam aplikasi yang kita gunakan.

- Controllers<br>
Controller adalah komponen di Laravel yang bertugas mengatur logika bisnis aplikasi dan menghubungkan antara route dengan model atau view. Dengan controller, kode lebih terstruktur karena logika tidak ditulis langsung di route. Hal ini membuat aplikasi lebih mudah dikelola dan dikembangkan.

- Migrations & Seeders<br>
Migration digunakan untuk membuat, mengubah, dan menghapus struktur tabel database dengan cara yang terkontrol. Seeder digunakan untuk menambahkan data awal atau data contoh ke dalam tabel agar memudahkan proses pengujian dan pengembangan. Keduanya membantu menjaga konsistensi database di berbagai lingkungan (development, staging, production).

- Artisan CLI<br>
Artisan adalah Command Line Interface bawaan Laravel yang menyediakan berbagai perintah otomatis untuk mempercepat proses pengembangan. Misalnya, Artisan bisa digunakan untuk membuat controller, model, menjalankan migrasi, hingga menjalankan server lokal. Dengan Artisan, pekerjaan developer menjadi lebih cepat dan efisien.

- Testing (PHPUnit)<br>
Laravel menyediakan integrasi dengan PHPUnit untuk melakukan pengujian otomatis terhadap kode. Pengujian ini memastikan setiap fitur berjalan sesuai harapan dan membantu mencegah bug ketika ada perubahan kode. Dengan testing, kualitas aplikasi lebih terjamin dan lebih aman untuk dikembangkan dalam jangka panjang.

---

## 3. Berikan penjelasan untuk setiap folder dan files yang ada didalam struktur sebuah project laravel.

Berikut adalah folder-folder yang tersedia secara default:
1. App<br>
 Folder app berisi kode-kode inti dari aplikasi seperti Model, Controller, Commands, Listener, Events, dll. Poinnya, hampir semua class dari aplikasi berada di folder ini.
2. Bootstrap<br>
 Folder bootstrap berisi file app.php yang dimana akan dipakai oleh Laravel untuk boot setiap kali dijalankan.
3. Config<br>
 Folder config seperti namanya, berisi semua file konfigurasi aplikasi Anda.
4. Database<br>
 Folder database berisi database migrations, model factories, dan seeds. Folder ini akan bertanggung jawab dengan pembuatan dan pengisian tabel-tabel database.
5. Public<br>
 Folder public memiliki file index.php yaitu entry point dari semua requests yang masuk/diterima ke aplikasi. Folder ini juga tempat menampung gambar, Javascript, dan CSS.
6. Resources<br>
 Folder resources berisi semua route yang disediakan aplikasi. Sebagai default, beberapa file routing akan tersedia seperti: web.php, api.php, console.php, dan channels.php. Folder ini adalah tempat dimana kita memberikan koleksi definisi route aplikasi.
7. Storage<br>
 Folder storage adalah tempat dimana cache, logs, dan file sistem yang ter-compile hidup.
8. Tests<br>
 Folder tests adalah tempat dimana unit dan integration tests tinggal.
9. Vendor<br>
 Folder vendor adalah dimana tempat folder-folder dependencies third-party yang telah di-install oleh composer berada.

Berikut adalah file-file yang tersedia secara default:
1. .editorconfig <br>
    Berguna untuk memberi IDE/text editor instruksi tentang standar coding Laravel seperti whitespace, besar identasi, dll.
2. .env dan .env.example <br>
    Tempat dimana variable environment aplikasi ditempatkan (variabel yang diekspektasikan akan berbeda di setiap sistem) seperti nama database, username database, password database. 
3. .gitignore dan .gitattributes <br>
    File konfigurasi git.
4. artisan <br>
    Memungkinkan anda untuk menjalankan perintah artisan dari command line.
5. composer.json dan composer.lock <br>
 File konfigurasi untuk composer. File ini adalah informasi dasar tentang projek dan juga mendefinisikan dependencies yang digunakan.
6. package.json<br>
 Mirip-mirip dengan composer.json tapi untuk aset-aset dan dependencies front-end.
7. phpunit.xml<br>
 Sebuah file konfigurasi untuk PHPUnit, tools yang digunakan Laravel untuk testing.
8. readme.md<br>
 Sebuah markdown file yang memberikan pengenalan dasar tentang Laravel.
9. server.php<br>
 Server cadangan yang mencoba untuk tetap menjalankan aplikasi Laravel kepada server yang kurang mampu.
10. webpack.mix.js <br>
 Konfigurasi file untuk Mix (opsional). File ini adalah untuk membangun arahan system soal bagaimana meng-compile
 
---

## 4. Diagram MVC dan Cara kerjanya

Model View Controller atau yang dapat disingkat MVC adalah sebuah pola arsitektur dalam membuat sebuah aplikasi dengan cara memisahkan kode menjadi tiga bagian yang terdiri dari:
- Model
Bagian yang bertugas untuk menyiapkan, mengatur, memanipulasi, dan mengorganisasikan data yang ada di database.
- View
Bagian yang bertugas untuk menampilkan informasi dalam bentuk Graphical User Interface (GUI).
- Controller
Bagian yang bertugas untuk menghubungkan serta mengatur model dan view agar dapat saling terhubung.

Cara kerja:
- Proses pertama adalah view akan meminta data untuk ditampilkan dalam bentuk grafis kepada pengguna.
- Permintaan tersebut diterima oleh controller dan diteruskan ke model untuk diproses.
- Model akan mencari dan mengolah data yang diminta di dalam database
- Setelah data ditemukan dan diolah, model akan mengirimkan data tersebut kepada controller untuk ditampilkan di view.
- Controller akan mengambil data hasil pengolahan model dan mengaturnya di bagian view untuk ditampilkan kepada pengguna.

<img src="../gambar/Diagram MVC.jpg">

---

## 6. Kelebihan & Kekurangan (refleksi singkat)

Menurut saya, kelebihan Laravel terletak pada dokumentasi resminya yang sangat lengkap sehingga mudah dipelajari, selain itu struktur proyeknya rapi karena menggunakan pola MVC. Fitur-fitur bawaan seperti Blade, Eloquent ORM, Artisan, dan sistem autentikasi juga membuat proses pengembangan menjadi lebih cepat dan efisien. Laravel juga memiliki komunitas yang besar dan aktif, sehingga ketika menghadapi kendala, solusinya relatif mudah ditemukan.

Namun, bagi pemula, Laravel bisa terasa cukup menantang. Proses instalasi dan konfigurasi awal sering kali membingungkan jika belum terbiasa dengan Composer, PHP, dan server lokal. Banyaknya fitur juga dapat membuat orang yang baru belajar merasa kewalahan. Selain itu, pemahaman tentang konsep OOP (Object-Oriented Programming) sangat diperlukan agar lebih mudah memahami cara kerja model, controller, middleware, dan komponen lainnya dalam Laravel.

---

## 7. Referensi

1. Perkenalan laravel https://www.idn.id/laravel-basic-pengenalan-laravel-struktur-project-laravel/
2. Karakteristik MVC https://www.domainesia.com/berita/mvc-adalah/#Karakteristik_MVC
3. Blade https://buildwithangga.com/tips/cara-menggunakan-blade-templating-pada-laravel
4. Eloquent (ORM) https://www.sekawanmedia.co.id/blog/eloquent-orm/
5. Routing https://buildwithangga.com/tips/hal-dasar-yang-perlu-dipelajari-tentang-laravel
6. Migrations & Seeders, Artisan CLI, Testing (PHPUnit) https://chatgpt.com/c/68c286bf-e9f0-8327-976a-bb1b2216f644
7. Struktur folder dan file https://www.barajacoding.or.id/mengenal-struktur-folder-dan-file-pada-laravel/
8. Diagram MVC dan cara kejanya https://www.dicoding.com/blog/apa-itu-mvc-pahami-konsepnya/

---