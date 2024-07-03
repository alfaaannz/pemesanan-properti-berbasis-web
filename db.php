<?php
// Menghubungkan ke database (ganti dengan informasi koneksi yang sesuai)
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_properti";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Memeriksa apakah ada data yang dikirimkan melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirimkan melalui metode POST
    $nama_pemesanan = $_POST["nama_pemesanan"];
    $no_hp = $_POST["no_hp"];
    $tanggal = $_POST["tanggal"];
    $durasi_sewa = $_POST["durasi_sewa"];
    $unit_properti = $_POST["unit_properti"];
    $harga_paket = $_POST["harga_paket"];
    $jml_tagihan = $_POST["jml_tagihan"];
    
    // Query untuk menyimpan data ke dalam tabel pemesanan_properti
    $sql = "INSERT INTO pemesanan_properti (nama_pemesanan, no_hp, tanggal, durasi_sewa, unit_properti, harga_paket, jml_tagihan)
            VALUES ('$nama_pemesanan', '$no_hp', '$tanggal', '$durasi_sewa', '$unit_properti', '$harga_paket', '$jml_tagihan')";
    
    // Eksekusi query dan periksa keberhasilannya
    if ($conn->query($sql) === TRUE) {
        echo "Data pemesanan berhasil disimpan.";
        // Redirect ke halaman daftar_pesanan.php setelah berhasil menyimpan data
        header("Location: daftar_pesanan.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Tutup koneksi database
    $conn->close();
}
?>
