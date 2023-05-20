<html>
    <head>
        <title>Update</title>
    </head>
    <body>  
    <h2>Form Update Data</h2>
        <?php 
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE id='$id'");
        while ($pgw = mysqli_fetch_assoc($data)){
        ?>

        <form method="POST" action="update.php">
        <table>
            <tr>
                <td>ID</td>
                <td>:</td>
                <td><input type="text" name="id" value="<?php echo $pgw['id'];?>" ></td>
            </tr>
            <tr>
                <td>NIP</td>
                <td>:</td>
                <td><input type="text" name="nip" value="<?php echo $pgw['nip'];?>" ></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $pgw['nama'];?>" ></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td>:</td>
                <td><input type="text" name="no_hp" value="<?php echo $pgw['no_hp'];?>" ></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="email" value="<?php echo $pgw['email'];?>" ></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="simpan"></td>
            </tr>
        </table>    
        </form>
        <?php } ?>
    </body>
</html>