<!-- app/views/loans/create.php -->
<h2>Tambah Peminjaman Buku</h2>
<form action="/user/store" method="POST">
    <label for="id_pinjam">ID Pinjam:</label>
    <input type="number" name="id_pinjam" id="id_pinjam" required><br>

    <label for="id_buku">ID Buku:</label>
    <input type="number" name="id_buku" id="id_buku" required><br>

    <label for="buku">Buku yang Dipinjam:</label>
    <input type="text" name="buku" id="buku" required><br>

    <label for="peminjam">Nama Peminjam:</label>
    <input type="text" name="peminjam" id="peminjam" required><br>

    <label for="tanggal_pinjam">Tanggal Pinjam:</label>
    <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" required><br>

    <label for="tanggal_kembali">Tanggal Kembali:</label>
    <input type="date" name="tanggal_kembali" id="tanggal_kembali"><br>
    <button type="submit">Simpan</button>
</form>
