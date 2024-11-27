<!-- app/views/user/index.php -->
<h2>Daftar Peminjam</h2>
<a href="/loans/create">Tambah Peminjam Baru</a>
<ul>
    <?php foreach ($loans as $loan): ?>
        <div>
            <p><?= htmlspecialchars($loan['buku_yang_dipinjam']) ?> - <?= htmlspecialchars($loan['peminjam']) ?> - <?= htmlspecialchars($loan['tanggal_pinjam']) ?>
            <?= htmlspecialchars($loan['tanggal_kembali']) ?> -  <?= htmlspecialchars($loan['']) ?>
            <a href="/loans/edit/<?php echo $loan['id_pinjam']; ?>">Edit</a> |
            <a href="/loans/delete/<?php echo $loan['id_pinjam']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p>
        </div>
    <?php endforeach; ?>
</ul>

