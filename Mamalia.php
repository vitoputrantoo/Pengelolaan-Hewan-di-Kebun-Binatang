<?php
require_once 'Hewan.php';

// 2. Membuat class turunan dari class induk (Inheritance: extends)
class Mamalia extends Hewan {
    private $habitat;
    
    // Menerapkan Constructor dengan memanggil parent::__construct()
    public function __construct($id, $nama, $umur, $habitat) {
        // Memanggil constructor class induk
        parent::__construct($id, $nama, "Mamalia", $umur);
        $this->habitat = $habitat;
    }

    // Menerapkan Polymorphism: override minimal satu method dari class induk
    public function displayInfo() {
        $info_induk = parent::displayInfo(); // Ambil info dari class induk
        
        // Menambahkan info spesifik Mamalia
        return str_replace(
            "</div>", 
            "<p><strong>Habitat:</strong> " . $this->habitat . "</p></div>", 
            $info_induk
        );
    }

    // Method spesifik Mamalia
    public function menyusui() {
        return $this->getNama() . " sedang menyusui anaknya.";
    }
}
?>