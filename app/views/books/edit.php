<!-- app/views/user/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
</head>
<body>
    <h2>Edit Buku</h2>
    <form action="/books/update/<?php echo $books['id_buku']; ?>" method="POST">
        <label for="judul">Judul Buku :</label>
        <input type="text" id="judul" name="judul" value="<?php echo $books['judul']; ?>" required>
        <br>
        <label for="pengarang">Pengarang :</label>
        <input type="text" id="pengarang" name="pengarang" value="<?php echo $books['pengarang']; ?>" required>
        <br>
        <label for="tahun">Tahun :</label>
        <input type="number" id="tahun" name="tahun" value="<?php echo $books['tahun']; ?>" required>
        <br>
        <label for="genre">Genre :</label>
        <input type="text" id="genre" name="genre" value="<?php echo $books['genre']; ?>" required>
        <br>
        
        <button type="submit">Update</button>
    </form>
    <a href="/books/index">Back to List</a>
</body>
</html>