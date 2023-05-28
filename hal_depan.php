<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Kelompok</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <div class= "body">
    <h1> Data Kelompok </h1>
    <?php
    if(isset($_GET['message'])) {
        echo '<p class="message">' . $_GET['message'] . '</p>';
    }
    ?>

    <a href="add.php" class="btn">Tambah Data</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>no HP</th>
            <th>Aksi</th>
        </tr>
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'projekuas');

        $query = mysqli_query($conn, "SELECT * FROM t_data");

        while($row = mysqli_fetch_assoc($query)) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['nama'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['noHP'] . '</td>';
            echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a> | <a href="delete.php?id=' . $row['id'] . '">Hapus</a></td>';
            echo '</tr>';
        }

        mysqli_close($conn);
        ?>
        <a href="logout.php" class="btn">Logout</a>
    </table>
    </div>
</body>
</html>
