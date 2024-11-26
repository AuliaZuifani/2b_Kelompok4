<!-- app/views/user/create.php -->
<h2>Tambah User</h2>
<form action="/user/store" method="POST">
    <pre>
    <label for="id_user">Id User:</label>
    <input type="number" name="id_user" id="id_user" required><br>

    <label for="nomor_anggota">No.Anggota:</label>
    <input type="text" name="nomor_anggota" id="nomor_anggota" required><br>

    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>
    <button type="submit">Simpan</button>
</pre>
</form>