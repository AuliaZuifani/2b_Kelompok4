<!-- app/views/user/index.php -->
<h2>Sistem Pengelolaan Perpustakaan Digital</h2>
<a href="/user/create">Tambah Daftar Buku<br></a>
<a href="/user/edit">Edit Daftar Buku<br></a>
<a href="/user/tampil">Tampil Daftar Buku<br></a>
<a href="/user/hapus">Hapus Daftar Buku<br></a>
<ul>
    <?php foreach ($users as $user): ?>
        <div>
            <p><?= htmlspecialchars($user['name']) ?> - <?= htmlspecialchars($user['email']) ?>
            <a href="/user/edit/<?php echo $user['id']; ?>">Edit</a> |
            <a href="/user/delete/<?php echo $user['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p>
        </div>
    <?php endforeach; ?>
</ul>

