<!DOCTYPE html>
<html>
<head>
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
<table cellpadding="10" cellspacing="0" class="table table-striped">
  <a href="create.php" class="btn btn-primary mt-4 mb-4">Tambah data</a>
        <tr>
            <td widht="50px" class="text-center">ID</td>
            <td widht="200px" class="text-center">Nama Pengarang</td>
            <td widht="200px" class="text-center">Email</td>
            <td widht="300px" class="text-center">Telpon</td>
            <td widht="200px" class="text-center">Alamat</td>
            <td widht="200px" class="text-center">Aksi</td>
        </tr>
        <?php
            include ('connect.php');
            $data_pengarang = mysqli_query($conn, "SELECT * FROM pengarang");
            while($pengarang = mysqli_fetch_array($data_pengarang)){
        ?>
        <tr>
            <td class="text-center"><?php echo $pengarang['id_pengarang'] ?></td>
            <td class="text-center"><?php echo $pengarang['nama_pengarang'] ?></td>
            <td class="text-center"><?php echo $pengarang['email'] ?></td>
            <td class="text-center"><?php echo $pengarang['telp'] ?></td>
            <td class="text-center"><?php echo $pengarang['alamat'] ?></td>
            <td class="text-center">
            <button class="btn btn-warning">Edit</button> |
            <button class="btn btn-danger">Delete</button> |
            </td>
        </tr>
        <?php 
            } 
        ?>
    </table>
    </div>
    </body>
</html>