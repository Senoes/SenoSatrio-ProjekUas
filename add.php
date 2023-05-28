<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <h2>Tambah Data</h2>

    <form method="POST" action="insert.php">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="noHP">no HP:</label>
        <input type="integer" name="noHP" required>

        <input type="submit" value="Tambah" class="btn">
    </form>
</body>
</html>

