<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $subscription = isset($_POST['subscription']) ? 'subscribe' : 'unsubscribe';
    $country = $_POST['country'];

    // Koneksi ke database
    $conn = new mysqli("localhost", "root", "", "tabel_form");

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query untuk menyimpan data ke dalam tabel
    $query = "INSERT INTO form_data (name, email, message, gender, subscription, country) VALUES ('$name', '$email', '$message', '$gender', '$subscription', '$country')";

    if ($conn->query($query) === TRUE) {
        echo "Data berhasil disimpan ke database";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }

    // Tutup koneksi
    $conn->close();
}
?>
