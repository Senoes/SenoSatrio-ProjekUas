<?php
$conn = mysqli_connect('localhost', 'root', '', 'projekuas');

$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM t_data WHERE id='$id'");

if($query) {
    header('Location: hal_depan.php?message=Data berhasil dihapus.');
} else {
    header('Location: hal_depan.php?message=Gagal menghapus data.');
}

mysqli_close($conn);
?>
