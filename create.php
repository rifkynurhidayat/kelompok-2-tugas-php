<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>create</title>
</head>
<body>
    <div class="container">
        <h3 class="fw-bold mt-4 mb-4">Tambah data</h3>
        <form action="proses.php" method="POST">
            <table class="table table-striped" id="form-pengarang">
                <tr>
                    <td>Id</td>
                    <td><input type="text" name="id_pengarang" id="input-id">
                    <p id="id"></p>
                    </td>
                </tr>
                <tr>
                    <td>Nama pengarang</td>
                    <td><input type="text" name="nama_pengarang" id="input-nama">
                    <p id="nama"></p>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" id="input-email">
                    <p id="email"></p>
                    </td>
                </tr>
                <tr>
                    <td>Telpon</td>
                    <td><input type="number" name="telp" id="input-telepon">
                    <p id="telp"></p>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" id="input-alamat">
                    <p id="alamat"></p>
                    </td>
                </tr>
            </table>
            <td>
                <button id="my-button" type="button" name="submit" class="btn btn-primary mt-4 mb-4">Submit</button>
            </td>
        </form>
    </div>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function() {
        $('#my-button').click(function(event) {
                if ($('#input-id').val().length == 0){
                    $('#input-id' === '') 
                    $('#id').show().text('isi id dahulu');
                     $('#input-id').css({"backgroundColor" : "red"});
                } else if('#input-id' !== '' && '#id' !== ''){
                    $('#id').hide();
                }
                if  ($('#input-nama').val().length == 0){
                    $('#input-nama' === '')
                    $('#nama').show().text('isi nama dahulu');
                    $('#input-nama').css({"backgroundColor" : "red"});
                }else if ('#input-nama' !== '' && '#nama' !== ''){
                    $('#nama').hide();
                }
                if ($('#input-email').val().length == 0){
                    $('#input-email' == '')
                    $('#email').show().text('isi email dahulu');
                    $('#input-email').css({"backgroundColor" : "red"});
                } else if('#input-email' !== '' && '#email' !== ''){
                    $('#email').hide();
                } 
                if ($('#input-telepon').val().length == 0){
                    $('#input-telepon' == '')
                   $('#telp').show().text('isi nomer telepon dahulu');
                } else if('#input-telepon' !== '' && '#telp' !== ''){
                    $('#telp').hide();
                }
                if ($('#input-alamat').val().length == 0){
                    $('#input-alamat' == '')
                    $('#alamat').show().text('isi alamat dahulu');
                    $('#input-alamat').css({"backgroundColor" : "red"});
                }else if('#input-alamat' !== '' && '#alamat' !== ''){
                    $('#alamat').hide();
                } else{
                    $('#form-pengarang').submit();
                }    
        });
    });
</script>