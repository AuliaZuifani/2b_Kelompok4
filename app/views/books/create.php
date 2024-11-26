<!-- app/views/user/create.php -->
<h2>Tambah Buku Baru</h2>
<form action="/books/store" method="POST">
    <label for="id_buku">Id_Buku:</label><br>
    <input type="varchar" name="id_buku" id="id_buku" required><br>

    <label for="judul">Judul Buku:</label><br>
    <input type="text" name="judul" id="judul" required><br>

    <label for="pengarang">Pengarang:</label><br>
    <input type="text" name="pengarang" id="pengarang" required><br>

    <label for="tahun">Tahun:</label><br>
    <input type="number" name="tahun" id="tahun" required><br>

    <label for="genre">Genre:</label><br>
    <input type="text" name="genre" id="genre" required><br>

    <label for="genre">ID Penerbit:</label><br>
    <select name="id_penerbit" id="id_penerbit">
    <?php foreach ($penerbit as $p): ?>
        <option value="<?php echo $p['id_penerbit']; ?>"><?php echo $p['id_penerbit'] ?></option>
    <?php endforeach; ?>
    </select><br>

    <button type="submit">Simpan</button>
</form>
