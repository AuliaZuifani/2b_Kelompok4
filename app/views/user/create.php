<!-- app/views/user/create.php -->
<h2>Tambah Buku Baru</h2>
<form action="/user/store" method="POST">
    <label for="id_buku">Id_Buku:</label><br>
    <input type="integer" name="id_buku" id="id_buku" required><br>
    <label for="judul">Judul Buku:</label><br>
    <input type="varchar" name="judul" id="judul" required><br>
    <label for="pengarang">Pengarang:</label><br>
    <input type="varchar" name="pengarang" id="pengarang" required><br>
    <label for="tahun">Tahun:</label><br>
    <input type="varchar" name="tahun" id="tahun" required><br>
    <label for="genre">Genre:</label><br>
    <input type="varchar" name="genre" id="genre" required><br>
    <button type="submit">Simpan</button>
</form>
