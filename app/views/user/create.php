<!-- app/views/user/create.php -->
<h2>Tambah Penerbit Baru</h2>
<form action="/user/store" method="POST">
    <label for="id_penerbit">id penerbit:</label><br>
    <input type="varchar" name="name" id="name" required><br>
    <label for="nama_penerbit">Nama Penerbit:</label><br>
    <input type="text" name="name" id="name" required><br>
    <label for="alamat">Alamat:</label><br>
    <input type="varchar" name="name" id="name" required><br>
    <label for="kontak">Kontak:</label><br>
    <input type="varchar" name="email" id="email" required><br>
    <button type="submit">Simpan</button>
</form>
