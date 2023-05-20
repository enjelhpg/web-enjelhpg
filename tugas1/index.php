<html>
    <head>
        <title>Create-Read-Update-Delete</title>
    </head>
    <body><center>
<h2>CRUD PEGAWAI</h2>
<a href="insert.php">Tambah data baru</a>
    <table cellpadding= "10" border="1">
        <tr>
            <th>NO</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>No HP</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $data = mysqli_query($koneksi, "SELECT * FROM pegawai order by nama asc");
        //while ($pgw = mysqli_fetch_assoc($data))
        //contoh penggunaan perulangan foreach
        foreach ($data as $pgw){
        ?>
        <tr>
            <td><?= $pgw['id']; ?></td>
            <td><?= $pgw['nip']; ?></td>
            <td><?= $pgw['nama']; ?></td>
            <td><?= $pgw['no_hp']; ?></td>
            <td><?= $pgw['email']; ?></td>
            <td>
            <a href="edit.php?id=<?= $pgw['id']; ?>">Edit</a> | 
            <a href="delete.php?id=<?= $pgw['id']; ?>" onclick="return confirm('yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    </body>
</html>
<!-- dipakai buat deteksi bug
var_dump($variabel)
die;-->