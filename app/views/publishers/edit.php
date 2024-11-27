<!-- app/views/publiser/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Penerbit</title>
</head>
<body>
    <h2>Edit Penerbit</h2>
    <form action="/publiser/update/<?php echo $publiser['id_penerbit']; ?>" method="POST">
        <label for="nama_penerbit">Nama Penerbit:</label><br>
        <input type="text" id="nama_penerbit" name="nama_penerbit" value="<?php echo $publiser['nama_penerbit']; ?>" required>
        <br>
        <label for="alamat">Alamat:</label><br>
        <input type="varchar" id="alamat" name="alamat" value="<?php echo $publiser['alamat']; ?>" required>
        <br>
        <label for="kontak">Kontak:</label><br>
        <input type="varchar" id="kontak" name="kontak" value="<?php echo $publiser['kontak']; ?>" required>
        <br><br>
        <button type="submit">Update</button>
    </form><br>
    <a href="/publiser/index">Back to List</a>
</body>
</html>
