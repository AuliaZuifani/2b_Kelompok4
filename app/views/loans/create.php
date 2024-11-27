<!-- app/views/loans/create.php -->
<h2>Tambah Peminjaman Buku</h2>
<form action="/loans/store" method="POST">
    <pre>
    <label for="id_pinjam">ID Pinjam:</label><br>
    <input type="number" name="id_pinjam" id="id_pinjam" required><br>
  
    <label for="buku_yang_dipinjam">Buku yang Dipinjam:</label><br>
    <input type="text" name="buku_yang_dipinjam" id="buku_yang_dipinjam" required><br>

    <label for="peminjam">Nama Peminjam:</label><br>
    <input type="text" name="peminjam" id="peminjam" required><br>

    <label for="tanggal_pinjam">Tanggal Pinjam:</label><br>
    <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" required><br>

    <label for="tanggal_kembali">Tanggal Kembali:</label><br>
    <input type="date" name="tanggal_kembali" id="tanggal_kembali"><br>

    <label for="id_buku">ID Buku :</label><br>
    <select name="id_buku" id="id_buku" required>
        <?php foreach ($books as $book): ?>
            <option value="<?php echo $book['id_buku']; ?>">
                <?php echo $book['id_buku']; ?>
            </option>
        <?php endforeach; ?>
    </select><br>
    <button type="submit">Simpan</button>


</pre>
</form>
