<!-- app/views/user/create.php -->
<h2>Tambah Penerbit Baru</h2>
<form action="/publiser/store" method="POST">
    <label for="id_penerbit">id penerbit:</label><br>
    <input type="varchar" name="id_penerbit" id="id_penerbit" required><br>
    <label for="nama_penerbit">Nama Penerbit:</label><br>
    <input type="text" name="nama_penerbit" id="nama_penerbit" required><br>
    <label for="alamat">Alamat:</label><br>
    <input type="varchar" name="alamat" id="alamat" required><br>
    <label for="kontak">Kontak:</label><br>
    <input type="varchar" name="kontak" id="kontak" required><br>
    <button type="submit">Simpan</button>
</form>