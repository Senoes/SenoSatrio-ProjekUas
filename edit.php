<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <h2>Edit Data</h2>

    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'projekuas');

    $id = $_GET['id'];

    $query = mysqli_query($conn, "SELECT * FROM t_data WHERE id='$id'");
    $data = mysqli_fetch_assoc($query);
    ?>

    <form method="POST" action="update.php">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $data['email']; ?>" required>

        <label for="noHP">no HP:</label>
        <input type="integer" name="noHP" value="<?php echo $data['noHP']; ?>" required>

        <input type="submit" value="Simpan" class="btn">
    </form>

    <?php
    mysqli_close($conn);
    ?>
</body>
</html>
