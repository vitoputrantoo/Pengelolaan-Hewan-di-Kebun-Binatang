<?php
// Memuat semua class
require_once 'Hewan.php';
require_once 'Mamalia.php';
require_once 'Burung.php';
require_once 'Reptil.php';
require_once 'Ikan.php';

// Membuat banyak objek hewan
$daftarHewan = [
    new Mamalia("M001", "Singa", 6, "Savana", "Karnivora"),
    new Burung("B001", "Elang", 4, "Pegunungan", "Bisa"),
    new Reptil("R001", "Ular Piton", 10, "Hutan", "Poikilotermik"),
    new Ikan("I001", "Hiu Macan", 12, "Lautan", "Asin"),
    new Mamalia("M002", "Gajah", 15, "Hutan", "Herbivora"),
    new Burung("B002", "Pinguin", 7, "Kutub", "Tidak Bisa"),
    new Reptil("R002", "Kura-kura", 50, "Air Tawar", "Poikilotermik"),
    new Ikan("I002", "Nemo", 2, "Terumbu Karang", "Asin"),
];

// Contoh penggunaan Encapsulation (Setter)
$daftarHewan[0]->setUmur(7); 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo Management System - All Species</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <div class="header-content">
            <h1>&#128062; Data Kebun Binatang Kita (Full OOP)</h1>
            <p>Sistem Komprehensif dengan 4 Kategori Hewan</p>
        </div>
    </header>

    <main>
        <section class="oop-demonstration">
            <h2>Konsep OOP yang Diterapkan</h2>
            <div class="concept-grid">
                <div class="concept-card inheritance"><span>Inheritance</span><p>4 Class turunan mewarisi dari **Abstract Class Hewan**.</p></div>
                <div class="concept-card encapsulation"><span>Encapsulation</span><p>Data internal dijaga (`private`) dan diakses melalui **Getter/Setter**.</p></div>
                <div class="concept-card polymorphism"><span>Polymorphism</span><p>Method `displaySpesifikInfo()` di-override oleh setiap jenis hewan.</p></div>
                <div class="concept-card constructor"><span>Constructor</span><p>Semua objek diinisialisasi menggunakan `__construct()` saat dibuat.</p></div>
            </div>
        </section>

        <section class="animal-data">
            <h2>Daftar Penghuni Kebun Binatang</h2>
            <div class="animal-grid">
                <?php
                // Tampilkan semua objek hewan
                foreach ($daftarHewan as $hewan) {
                    $jenis = strtolower($hewan->getJenis());
                    echo "<div class='card {$jenis}'>";
                    echo "<div class='card-header'>";
                    echo "<span class='icon'>{$hewan->getIcon()}</span>";
                    echo "<h3>{$hewan->getNama()} ({$hewan->getJenis()})</h3>";
                    echo "</div>";
                    
                    // Demonstrasi Polymorphism
                    echo $hewan->displaySpesifikInfo(); 
                    
                    echo "<div class='card-action'>";
                    echo "<p>&#128073; Aksi: <strong>" . $hewan->beraksi() . "</strong></p>";
                    echo "</div>";
                    
                    echo "</div>"; 
                }
                ?>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Zoo OOP Project - Implementasi Lengkap</p>
    </footer>

</body>
</html>