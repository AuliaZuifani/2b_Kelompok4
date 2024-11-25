<!-- app/views/user/create.php -->
<h2>Tambah User</h2>
<form action="/user/store" method="POST">
    <pre>
    <label for="nomor">No.Anggota:</label>
    <input type="text" name="no" id="no" required><br>

    <label for="name">Nama:</label>
    <input type="text" name="nama" id="nama" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>
    <button type="submit">Simpan</button>
</pre>
</form>