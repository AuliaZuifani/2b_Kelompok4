<!-- app/views/loans/index.php -->
<h2>Daftar Peminjaman Buku</h2>
<a href="/loans/create">Tambah Peminjaman Baru</a>
<ul>
    <?php foreach ($loans as $loan): ?>
        <div>
            <p>
            <strong>ID Pinjam:</strong> <?= htmlspecialchars($loan['id_pinjam']) ?> <br>
                <strong>ID Buku:</strong> <?= htmlspecialchars($loan['id_buku']) ?> <br>
                <strong>Buku:</strong> <?= htmlspecialchars($loan['buku']) ?> <br>
                <strong>Peminjam:</strong> <?= htmlspecialchars($loan['peminjam']) ?> <br>
                <strong>Tanggal Pinjam:</strong> <?= htmlspecialchars($loan['tanggal_pinjam']) ?> <br>
                <strong>Tanggal Kembali:</strong> <?= htmlspecialchars($loan['tanggal_kembali']) ?>
            </p>
            <p>
                <a href="/loans/edit/<?php echo $loan['id_pinjam']; ?>">Edit</a> |
                <a href="/loans/delete/<?php echo $loan['id_pinjam']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
            </p>
        </div>
        <hr>
    <?php endforeach; ?>
</ul>