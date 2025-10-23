<?php
// Memuat class-class yang dibutuhkan
require_once 'Hewan.php';
require_once 'Mamalia.php';
require_once 'Burung.php';

// 4. Tampilkan hasil program di halaman index.php

// Membuat beberapa objek dari class yang dibuat
$singa = new Mamalia("M001", "Leo", 5, "Savana");
$gajah = new Mamalia("M002", "Dumbo", 12, "Hutan");
$elang = new Burung("B001", "Falcon", 3, "Cokelat Keemasan");
$kakaktua = new Burung("B002", "Coco", 7, "Putih Jambul Kuning");

// Demonstrasi Encapsulation (Setter)
$singa->setUmur(6);
$elang->setNama("Elara");

// Demonstrasi Encapsulation (Getter)
$nama_gajah = $gajah->getNama();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pengelolaan Hewan Kebun Binatang (OOP PHP)</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <h1>&#128000; Zoo Management System</h1>
        <p>Implementasi Object-Oriented Programming (OOP) dengan PHP</p>
    </header>

    <main>
        <h2>Daftar Penghuni Kebun Binatang</h2>

        <section class="zoo-grid">
            
            <div class="card mamalia">
                <h3>Mamalia: <?php echo $singa->getNama(); ?></h3>
                <?php 
                // Demonstrasi Polymorphism (method displayInfo() yang sudah di-override)
                echo $singa->displayInfo(); 
                // Method spesifik Mamalia
                echo "<p class='action-text'>Aksi: " . $singa->menyusui() . "</p>";
                ?>
            </div>

            <div class="card mamalia">
                <h3>Mamalia: <?php echo $gajah->getNama(); ?></h3>
                <?php 
                echo $gajah->displayInfo(); 
                echo "<p class='action-text'>Aksi: " . $gajah->menyusui() . "</p>";
                ?>
            </div>

            <div class="card burung">
                <h3>Burung: <?php echo $elang->getNama(); ?></h3>
                <?php 
                // Demonstrasi Polymorphism (method displayInfo() yang sudah di-override)
                echo $elang->displayInfo(); 
                // Method spesifik Burung
                echo "<p class='action-text'>Aksi: " . $elang->terbang() . "</p>";
                ?>
            </div>
            
            <div class="card burung">
                <h3>Burung: <?php echo $kakaktua->getNama(); ?></h3>
                <?php 
                echo $kakaktua->displayInfo(); 
                echo "<p class='action-text'>Aksi: " . $kakaktua->terbang() . "</p>";
                ?>
            </div>
        </section>

        <div class="demonstrasi-oop">
            <h3>Demonstrasi Konsep OOP:</h3>
            <ul>
                <li><strong>Encapsulation:</strong> Properti diakses/diubah via `Getter` (misal: `<?php echo $nama_gajah; ?>`) dan `Setter` (misal: umur **Leo** diubah menjadi 6 tahun).</li>
                <li><strong>Inheritance:</strong> Class `Mamalia` dan `Burung` mewarisi properti dan method dari class `Hewan`.</li>
                <li><strong>Polymorphism:</strong> Method `displayInfo()` menampilkan data yang berbeda pada `Mamalia` (ada info Habitat) dan `Burung` (ada info Warna Bulu).</li>
                <li><strong>Constructor:</strong> Objek diinisialisasi menggunakan `__construct()` saat dibuat.</li>
            </ul>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Sistem Kebun Binatang OOP Sederhana</p>
    </footer>

</body>
</html>