<?php
require_once 'Hewan.php';

// 2. Membuat class turunan dari class induk (Inheritance: extends)
class Burung extends Hewan {
    private $warnaBulu;

    // Menerapkan Constructor dengan memanggil parent::__construct()
    public function __construct($id, $nama, $umur, $warnaBulu) {
        // Memanggil constructor class induk
        parent::__construct($id, $nama, "Burung", $umur);
        $this->warnaBulu = $warnaBulu;
    }

    // Menerapkan Polymorphism: override minimal satu method dari class induk
    public function displayInfo() {
        $info_induk = parent::displayInfo(); // Ambil info dari class induk
        
        // Menambahkan info spesifik Burung
        return str_replace(
            "</div>", 
            "<p><strong>Warna Bulu:</strong> " . $this->warnaBulu . "</p></div>", 
            $info_induk
        );
    }

    // Method spesifik Burung
    public function terbang() {
        return $this->getNama() . " sedang terbang tinggi.";
    }
}
?>