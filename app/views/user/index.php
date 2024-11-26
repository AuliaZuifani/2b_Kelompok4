<!-- app/views/user/index.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pengelolaan Perpustakaan Digital</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 30px;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            text-decoration: underline;
        }

        .btn-user {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .btn-user:hover {
            background-color: #218838;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        .user-item {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            margin: 10px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .user-item p {
            margin: 0;
            font-size: 16px;
            color: #333;
        }

        .user-item a {
            margin-left: 10px;
            color: #ff5733;
        }

        .user-item a:hover {
            color: #c0392b;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
    </style>

<body>
    <h2>Sistem Pengelolaan Perpustakaan Digital</h2>
    <a href="/user/create" class="btn-user">Tambah Data User</a>

    <ul>

        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th> No.Anggota </th>
                        <th> Nama </th>
                        <th> Email </th>
                        <th> Password </th>
                        <th> Aksi </th>
                    </tr>
                </thead>
                <p>
                    <tbody>
                        <tr>
                        <?php foreach ($users as $user): ?>
                          <td>  <?= htmlspecialchars($user['nomor_anggota']) ?> </td>
                          <td> <?= htmlspecialchars($user['nama']) ?> </td>
                          <td>  <?= htmlspecialchars($user['email']) ?> </td>
                          <td>  <?= htmlspecialchars($user['password']) ?> </td>
                          <td> <a href="/user/edit/<?php echo $user['id_user']; ?>">Edit</a> </td>
                          <td> <a href="/user/delete/<?php echo $user['id_user']; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
                        </tr>
                </p>
             </tbody>
        </div>
    <?php endforeach; ?>

    </table>
    </ul>
</body>

</html>