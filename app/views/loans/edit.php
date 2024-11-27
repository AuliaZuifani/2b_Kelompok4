<!-- app/views/loans/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Peminjaman Buku</title>
</head>
<body>
    <h2>Edit Peminjaman Buku</h2>
    <form action="/loans/update/<?php echo $loan['id_pinjam']; ?>" method="POST">
        <label for="id_buku">ID Buku:</label>
        <input type="number" id="id_buku" name="id_buku" value="<?php echo htmlspecialchars($loan['id_buku']); ?>" required>
        <br>

        <label for="buku_yang_dipinjam">Buku yang Dipinjam:</label>
        <input type="text" id="buku_yang_dipinjam" name="buku_yang_dipinjam" value="<?php echo htmlspecialchars($loan['buku_yang_dipinjam']); ?>" required>
        <br>

        <label for="peminjam">Nama Peminjam:</label>
        <input type="text" id="peminjam" name="peminjam" value="<?php echo htmlspecialchars($loan['peminjam']); ?>" required>
        <br>

        <label for="tanggal_pinjam">Tanggal Pinjam:</label>
        <input type="date" id="tanggal_pinjam" name="tanggal_pinjam" value="<?php echo htmlspecialchars($loan['tanggal_pinjam']); ?>" required>
        <br>

        <label for="tanggal_kembali">Tanggal Kembali:</label>
        <input type="date" id="tanggal_kembali" name="tanggal_kembali" value="<?php echo htmlspecialchars($loan['tanggal_kembali']); ?>">
        <br>  
        <button type="submit">Update</button>
    </form>
    <a href="/loans/index">Kembali ke Daftar</a>
</body>
</html>