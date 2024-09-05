<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validasi dan sanitasi input
    $name = $conn->real_escape_string(trim($name));
    $email = $conn->real_escape_string(trim($email));
    $message = $conn->real_escape_string(trim($message));

    // Query untuk menyimpan data
    $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Pesan Anda telah terkirim. Terima kasih!</p>";
        echo '<p class="back">Go back to the <a href="index.php">homepage</a>.</p>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo '<p class="back">Go back to the <a href="index.php">homepage</a>.</p>';
    }
}

// Tutup koneksi
$conn->close();
?>