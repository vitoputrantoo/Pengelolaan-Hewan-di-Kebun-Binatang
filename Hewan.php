<?php

// 1. Membuat class induk (Entity)
class Hewan {
    // Minimal 2 properti (misal: id, nama)
    // Menerapkan Encapsulation (access modifier: private)
    private $id;
    private $nama;
    protected $jenis; // Protected agar bisa diakses di class turunan
    private $umur;

    // Menerapkan Constructor: __construct()
    public function __construct($id, $nama, $jenis, $umur) {
        $this->id = $id;
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->umur = $umur;
    }

    // Menerapkan Encapsulation: Getter
    public function getId() {
        return $this->id;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getJenis() {
        return $this->jenis;
    }

    public function getUmur() {
        return $this->umur;
    }

    // Menerapkan Encapsulation: Setter
    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setUmur($umur) {
        if ($umur >= 0) {
            $this->umur = $umur;
        }
    }

    // Minimal 1 method umum (misal: displayInfo())
    // Method ini akan di-override di class turunan (Polymorphism)
    public function displayInfo() {
        return "<div class='card-info'>
            <p><strong>ID:</strong> " . $this->id . "</p>
            <p><strong>Nama:</strong> " . $this->nama . "</p>
            <p><strong>Jenis:</strong> " . $this->jenis . "</p>
            <p><strong>Umur:</strong> " . $this->umur . " tahun</p>
        </div>";
    }
}
?>