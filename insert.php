<?php
$conn = mysqli_connect('localhost', 'root', '', 'projekuas');

$nama = $_POST['nama'];
$email = $_POST['email'];
$noHP = $_POST['noHP'];


$query = mysqli_query($conn, "INSERT INTO t_data (nama, email, noHP) VALUES ('$nama', '$email', '$noHP')");

if($query) {
    header('Location: hal_depan.php?message=Data berhasil ditambahkan.');
} else {
    header('Location: add.php?message=Gagal menambahkan data.');
}

mysqli_close($conn);
?>
