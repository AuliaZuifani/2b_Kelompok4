<!-- app/views/user/index.php -->
<h2>Daftar Penerbit</h2>
<a href="/publiser/create">Tambah Penerbit Baru</a><br>
<ul>
    <?php foreach ($publiser as $publiser): ?>
        <div>
            <p><?= htmlspecialchars($publiser['nama_penerbit']) ?> - <?= htmlspecialchars($publiser['alamat']) ?>-<?= htmlspecialchars($publiser['kontak']) ?>
            <a href="/publiser/edit/<?php echo $publiser['id_penerbit']; ?>">Edit</a> |
            <a href="/publiser/delete/<?php echo $publiser['id_penerbit']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p>
        </div>
    <?php endforeach; ?>
</ul>