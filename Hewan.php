<?php
// Hewan.php - Class Induk
abstract class Hewan { // Menggunakan abstract class agar tidak bisa di-instantiate langsung
    private $id;
    private $nama;
    protected $jenis;
    private $umur;
    private $habitat; // Properti baru
    protected $icon; // Untuk tampilan

    // Constructor
    public function __construct($id, $nama, $jenis, $umur, $habitat, $icon) {
        $this->id = $id;
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->umur = $umur;
        $this->habitat = $habitat;
        $this->icon = $icon;
    }

    // Getter (Encapsulation)
    public function getId() { return $this->id; }
    public function getNama() { return $this->nama; }
    public function getJenis() { return $this->jenis; }
    public function getUmur() { return $this->umur; }
    public function getHabitat() { return $this->habitat; }
    public function getIcon() { return $this->icon; }

    // Setter (Encapsulation)
    public function setNama($nama) { $this->nama = $nama; }
    public function setUmur($umur) { $this->umur = $umur; }

    // Minimal 1 method umum (Polymorphism: method ini akan di-override)
    abstract public function displaySpesifikInfo(); // Abstract method: wajib di-implementasi class turunan

    // Method umum untuk menampilkan dasar info (Dipanggil oleh turunan)
    public function displayBaseInfo() {
        return "
            <div class='info-base'>
                <p><strong>ID:</strong> {$this->id}</p>
                <p><strong>Umur:</strong> {$this->umur} tahun</p>
                <p><strong>Habitat:</strong> {$this->habitat}</p>
            </div>
        ";
    }
}
?>