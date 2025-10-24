🦁 Zoo Management System (Sistem Pengelolaan Kebun Binatang) 
- All Species V3Proyek ini adalah implementasi komprehensif dari Object-Oriented Programming (OOP) menggunakan PHP untuk mengelola data empat kategori hewan utama di kebun binatang: Mamalia, Burung, Reptil, dan Ikan.Desain web (HTML/CSS) dibuat modern, responsive, dan kaya visual, menggunakan tata letak grid card yang colorful untuk membedakan setiap spesies.

🎯 Fitur Utama4 Kategori Hewan: Mencakup Mamalia, Burung, Reptil, dan Ikan sebagai Class turunan.OOP Penuh: Implementasi 4 pilar OOP (Encapsulation, Inheritance, Polymorphism, Constructor) secara mendalam.Desain Modern: Menggunakan font Rubik dan desain dashboard card yang menarik dengan skema warna yang membedakan setiap jenis hewan.

🛠️ Persyaratan SistemUntuk menjalankan proyek ini, Anda membutuhkan lingkungan server lokal yang mendukung PHP (misalnya XAMPP, Laragon, atau MAMP).Server: Apache/NginxBahasa Pemrograman: PHP (Versi 7.0+)

📂 Struktur Folder ProyekPastikan semua file diletakkan di dalam satu direktori proyek (misalnya: htdocs/zoo-oop-v3/):zoo-oop-v3/
├── index.php         <-- File utama (menampilkan data)
├── Hewan.php         <-- Abstract Class Induk
├── Mamalia.php       <-- Class Turunan 1
├── Burung.php        <-- Class Turunan 2
├── Reptil.php        <-- Class Turunan 3
├── Ikan.php          <-- Class Turunan 4
└── style.css         <-- Styling (modern & responsive)

🚀 Cara MenjalankanStart Server: Pastikan server lokal (Apache) Anda berjalan.Pindahkan File: Letakkan semua file di atas ke direktori proyek di webroot server Anda.Akses Browser: Buka web browser Anda dan akses URL proyek:http://localhost/[nama_folder_proyek]/

💡 Penjelasan Implementasi OOP
1. Class Induk (Hewan.php)KonsepDetail ImplementasiInheritanceDideklarasikan sebagai abstract class Hewan, memastikan bahwa class ini tidak dapat di-instantiate langsung, hanya berfungsi sebagai blueprint.EncapsulationProperti utama ($id, $nama, $umur) adalah private. Akses diatur melalui method public Getter dan Setter.PolymorphismMenggunakan method abstract public function displaySpesifikInfo() yang wajib di-implementasikan (di-override) oleh semua class turunan.ConstructorMenggunakan __construct() untuk inisialisasi semua properti dasar.

2. Class Turunan (Mamalia, Burung, Reptil, Ikan)KonsepDetail ImplementasiInheritanceSetiap class (misal: class Mamalia extends Hewan) mewarisi properti dan method dari Hewan.ConstructorSetiap class menggunakan parent::__construct() untuk mengirim data dasar ke class induk sebelum menambahkan properti spesifiknya.PolymorphismMasing-masing class turunan memiliki implementasi unik dari method displaySpesifikInfo() dan beraksi(), menunjukkan perilaku yang berbeda-beda.

3. Tampilan (index.php & style.css)File index.php bertanggung jawab untuk membuat objek (new Mamalia(...), dll.) dan memanggil method-method OOP ($hewan->displaySpesifikInfo()) untuk menghasilkan output HTML.File style.css menggunakan Flexbox dan Grid dengan desain card modern, gradien, dan warna aksen spesifik (Merah untuk Mamalia, Biru untuk Ikan, dll.) untuk pengalaman pengguna yang lebih baik.Dibuat dengan semangat OOP oleh [Nama Anda/Organisasi Anda].