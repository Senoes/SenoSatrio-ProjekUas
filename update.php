<?php
$conn = mysqli_connect('localhost', 'root', '', 'projekuas');

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$noHP = $_POST['noHP'];

$query = mysqli_query($conn, "UPDATE t_data SET nama='$nama', email='$email', noHP='$noHP' WHERE id='$id'");

if($query) {
    header('Location: hal_depan.php?message=Data berhasil diperbarui.');
} else {
    header('Location: edit.php?id=' . $id . '&message=Gagal memperbarui data.');
}

mysqli_close($conn);
?>
