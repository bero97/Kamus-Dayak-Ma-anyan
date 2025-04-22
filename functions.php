<?php
// Konfigurasi database
$servername = "localhost"; // Ganti dengan server kamu
$username = "root";        // Ganti dengan username MySQL kamu
$password = "";            // Ganti dengan password MySQL kamu
$dbname = "kamus-db";      // Nama database yang sudah dibuat

// Koneksi ke database
function connect_db() {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
    return $conn;
}

// Mengambil semua data kamus dari database
function load_kamus() {
    $conn = connect_db();
    $sql = "SELECT * FROM kamus";
    $result = $conn->query($sql);
    $kamus = [];
    while ($row = $result->fetch_assoc()) {
        $kamus[$row['indo']] = $row['dayak'];
    }
    $conn->close();
    return $kamus;
}

// Menyimpan kata baru ke database
function save_kamus($indo, $dayak) {
    $conn = connect_db();
    $stmt = $conn->prepare("INSERT INTO kamus (indo, dayak) VALUES (?, ?)");
    $stmt->bind_param("ss", $indo, $dayak);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>
