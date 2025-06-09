<?php
class ConnectDB {
    private $conn; // Gunakan $conn untuk menyimpan koneksi

    public function __construct() {
        // Buat koneksi ke database
        $this->conn = mysqli_connect("localhost", "root", "", "bukutamu");

        // Cek apakah koneksi berhasil
        if (!$this->conn) {
            die("Gagal terkoneksi: " . mysqli_connect_error());
        }
    }

    // Method untuk mengembalikan koneksi
    public function getConnection() {
        return $this->conn;
    }
}

// Inisialisasi koneksi
$db = new ConnectDB();
$conn = $db->getConnection();
?>