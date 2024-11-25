<!-- app/views/user/index.php -->
<h2>Sistem Pengelolaan Perpustakaan Digital</h2>
<a href="/user/create">Tambah Data User</a>
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
<a href="/user/edit">Edit Data User</a>
<ul></ul>
<a href="/user/tampil">Tampilkan Data User</a>
<ul></ul>
<a href="/user/tampil">Hapus Data User</a>
