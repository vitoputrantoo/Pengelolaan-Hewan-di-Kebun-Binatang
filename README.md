🐘 Zoo Management System (Sistem Pengelolaan Kebun Binatang)Proyek ini adalah implementasi sederhana dari konsep Object-Oriented Programming (OOP) menggunakan bahasa pemrograman PHP untuk mensimulasikan sistem pengelolaan data hewan di sebuah kebun binatang.

Tampilan dirancang menggunakan HTML dan CSS murni dengan gaya modern dan responsive.

🎯 Tujuan ProyekTujuan utama dari proyek ini adalah untuk mendemonstrasikan pemahaman dan implementasi dari 4 pilar utama OOP: Encapsulation, Inheritance, Polymorphism, dan penggunaan Constructor dalam konteks PHP.

🛠️ Persyaratan SistemUntuk menjalankan proyek ini, Anda membutuhkan lingkungan server lokal yang mendukung PHP.Server: Apache/Nginx (melalui XAMPP, Laragon, MAMP, dll.)Bahasa Pemrograman: PHP (versi 7.0 atau lebih tinggi)

📂 Struktur Folder ProyekPastikan struktur folder Anda sesuai dengan berikut ini di dalam direktori webroot server lokal Anda (misalnya: htdocs/zoo-management/):zoo-management/
├── index.php         <-- File utama untuk menampilkan hasil
├── Hewan.php         <-- Class Induk
├── Mamalia.php       <-- Class Turunan (Mamalia)
├── Burung.php        <-- Class Turunan (Burung)
└── style.css         <-- File untuk styling dan tampilan modern

⚙️ Cara MenjalankanSiapkan Lingkungan: Pastikan XAMPP/Laragon Anda berjalan (terutama Apache/Web Server).Pindahkan File: Pindahkan semua file di atas ke folder proyek baru Anda di direktori webroot server lokal (misalnya, C:\xampp\htdocs\zoo-management).Akses Browser: Buka web browser Anda dan akses URL proyek:http://localhost/zoo-management/

💻 Penjelasan Konsep OOP
Proyek ini menggunakan beberapa Class untuk memodelkan sistem:
1. Class Induk (Hewan.php)Konsep OOPDetail ImplementasiClass Indukclass HewanConstructorMenggunakan __construct($id, $nama, $jenis, $umur) untuk inisialisasi properti.EncapsulationProperti utama ($id, $nama, $umur) dideklarasikan sebagai private. Properti $jenis menggunakan protected agar dapat diakses oleh class turunan.Getter/SetterDisediakan method public seperti getNama(), setUmur(), dll. untuk mengontrol akses ke properti private.Method UmumdisplayInfo() yang akan di-override.
2. Class Turunan (Mamalia.php dan Burung.php)Konsep OOPDetail ImplementasiInheritanceClass Mamalia extends Hewan dan Burung extends Hewan mewarisi semua properti dan method publik/terproteksi dari Hewan.ConstructorMasing-masing class turunan memanggil parent::__construct() untuk menginisialisasi properti induk.PolymorphismMethod displayInfo() di-override pada kedua class turunan. Method ini menampilkan informasi tambahan spesifik (misalnya, Habitat pada Mamalia dan Warna Bulu pada Burung) selain informasi dari class induk, menunjukkan perilaku yang berbeda dari method yang sama.

✨ Tampilan dan DesainTampilan diatur sepenuhnya melalui file style.css untuk mencapai desain yang:Modern: Menggunakan tipografi Poppins, skema warna bersih (flat design), dan shadow yang lembut.Clean Card Layout: Setiap objek hewan ditampilkan dalam elemen card terpisah, memudahkan pembacaan informasi.Visualisasi OOP: Bagian demonstrasi di bawah menampilkan rangkuman implementasi setiap pilar OOP dalam kode program.Dibuat dengan PHP, HTML, dan CSS.