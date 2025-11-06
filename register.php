<?php
// Memuat semua class yang diperlukan
require_once 'Hewan.php';
require_once 'Mamalia.php';
require_once 'Burung.php';
require_once 'Reptil.php';
require_once 'Ikan.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Ambil Data dari Formulir
    $id = htmlspecialchars($_POST['id']);
    $nama = htmlspecialchars($_POST['nama']);
    $umur = (int)$_POST['umur'];
    $habitat = htmlspecialchars($_POST['habitat']);
    $jenis = htmlspecialchars($_POST['jenis']);
    $spesifik_info = htmlspecialchars($_POST['spesifik_info']);

    // 2. Logika Pembuatan Objek Berdasarkan Jenis
    $new_hewan = null;
    switch ($jenis) {
        case 'Mamalia':
            // Asumsi $spesifik_info adalah Makanan
            $new_hewan = new Mamalia($id, $nama, $umur, $habitat, $spesifik_info);
            break;
        case 'Burung':
            // Asumsi $spesifik_info adalah Kemampuan Terbang
            $new_hewan = new Burung($id, $nama, $umur, $habitat, $spesifik_info);
            break;
        case 'Reptil':
            // Asumsi $spesifik_info adalah Suhu Tubuh
            $new_hewan = new Reptil($id, $nama, $umur, $habitat, $spesifik_info);
            break;
        case 'Ikan':
            // Asumsi $spesifik_info adalah Jenis Air
            $new_hewan = new Ikan($id, $nama, $umur, $habitat, $spesifik_info);
            break;
        default:
            $message = "<div style='color: red;'>Jenis hewan tidak valid!</div>";
            break;
    }

    // 3. Simulasi Penyimpanan Data (Simpan ke file atau database sebenarnya di sini)
    // KARENA TIDAK ADA DATABASE, KITA SIMULASIKAN HANYA DENGAN PESAN SUKSES
    if ($new_hewan) {
        // Dalam implementasi nyata, data objek akan diuraikan dan disimpan ke database
        // atau ditambahkan ke array $daftarHewan di index.php (membutuhkan sesi/file)

        $message = "<div style='color: green;'>✅ **Hewan BARU berhasil diregistrasi!** <br>";
        $message .= "Objek OOP *{$new_hewan->getNama()}* dari kelas *{$new_hewan->getJenis()}* berhasil dibuat.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Hewan Baru - Zoo System</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Gaya spesifik untuk formulir */
        .form-card {
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        .form-card label {
            display: block;
            margin: 15px 0 5px;
            font-weight: 600;
        }
        .form-card input[type="text"],
        .form-card input[type="number"],
        .form-card select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 1em;
        }
        .form-card button {
            background-color: #1abc9c; /* Sesuai header */
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.1em;
            font-weight: 700;
            width: 100%;
            transition: background-color 0.3s;
        }
        .form-card button:hover {
            background-color: #16a085;
        }
        .message-box {
            padding: 15px;
            margin: 20px 0;
            border-radius: 8px;
            font-weight: 600;
            background-color: #e9f7ef;
            border: 1px solid #1abc9c;
            text-align: center;
        }
    </style>
    <script>
        function updatePlaceholder() {
            const jenis = document.getElementById('jenis').value;
            const spesifikInput = document.getElementById('spesifik_info');
            let placeholder = "Masukkan info spesifik...";

            switch (jenis) {
                case 'Mamalia':
                    placeholder = "Contoh: Karnivora / Herbivora (Makanan)";
                    break;
                case 'Burung':
                    placeholder = "Contoh: Bisa / Tidak Bisa (Kemampuan Terbang)";
                    break;
                case 'Reptil':
                    placeholder = "Contoh: Poikilotermik (Suhu Tubuh)";
                    break;
                case 'Ikan':
                    placeholder = "Contoh: Air Asin / Air Tawar (Jenis Air)";
                    break;
            }
            spesifikInput.placeholder = placeholder;
        }
        window.onload = updatePlaceholder; // Panggil saat halaman dimuat
    </script>
</head>
<body>
    <header>
        <div class="header-content">
            <h1>&#128196; Registrasi Hewan Baru</h1>
            <p>Masukkan data hewan untuk ditambahkan ke sistem</p>
        </div>
    </header>

    <main>
        <div class="form-card">
            <?php if ($message) echo "<div class='message-box'>" . $message . "</div>"; ?>
            <form method="POST" action="register.php">
                <h2>Data Dasar</h2>
                <label for="id">ID Hewan (Contoh: M003, B003)</label>
                <input type="text" id="id" name="id" required>

                <label for="nama">Nama Hewan</label>
                <input type="text" id="nama" name="nama" required>

                <label for="umur">Umur (tahun)</label>
                <input type="number" id="umur" name="umur" min="1" required>

                <label for="habitat">Habitat</label>
                <input type="text" id="habitat" name="habitat" required>

                <h2>Data Spesifik (Polymorphism)</h2>
                <label for="jenis">Jenis Hewan</label>
                <select id="jenis" name="jenis" onchange="updatePlaceholder()" required>
                    <option value="">-- Pilih Jenis --</option>
                    <option value="Mamalia">Mamalia</option>
                    <option value="Burung">Burung</option>
                    <option value="Reptil">Reptil</option>
                    <option value="Ikan">Ikan</option>
                </select>

                <label for="spesifik_info">Info Spesifik **(Berbeda untuk setiap Jenis)**</label>
                <input type="text" id="spesifik_info" name="spesifik_info" required placeholder="Pilih jenis hewan untuk melihat contoh...">

                <button type="submit">Tambah Hewan Baru</button>
            </form>
        </div>
        <p style="text-align: center; margin-top: 20px;"><a href="index.php">← Kembali ke Dashboard</a></p>
    </main>

    <footer>
        <p>&copy; 2025 Zoo OOP Project - Halaman Registrasi</p>
    </footer>

</body>
</html>