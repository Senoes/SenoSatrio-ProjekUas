<!DOCTYPE html>
<html>
<head>
    <title>Halaman Edit Data</title>
    <style>
        .form-container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="noHP"] {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .form-group button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Edit Data</h2>
        <?php
        include 'config.php';

        $id = $_GET['id'];

        $query = mysqli_query($conn, "SELECT * FROM t_data WHERE id='$id'");
        $data = mysqli_fetch_assoc($query);
        
        ?>
 <form method="POST" action="update.php">
        <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?php echo $data['nama']; ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $data['email']; ?>" required>
        </div>
        <div class="form-group">
            <label for="noHP">no HP:</label>
            <input type="text" id="noHP" name="noHP" value="<?php echo $data['noHP']; ?>" required>
        </div>
            <div class="form-group">
            <button type="submit" name="submit">Simpan</button>
        </div>
        </form>
    </div>
</body>
</html>
