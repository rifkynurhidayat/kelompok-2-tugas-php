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
        <form action="proses.php" method="POST"  id="form-pengarang">
            <table class="table table-striped">
                <tr>
                    <td>Id</td>
                    <td><input type="text" name="id_pengarang" id="id_pengarang">
                    <p id="id"></p>
                    </td>
                </tr>
                <tr>
                    <td>Nama pengarang</td>
                    <td><input type="text" name="nama_pengarang" id="nama_pengarang">
                    <p id="nama"></p>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" id="email">
                    <p id="email-warning"></p>
                    </td>
                </tr>
                <tr>
                    <td>Telpon</td>
                    <td><input type="number" name="telp" id="telp">
                    <p id="telp-warning"></p>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" id="alamat">
                    <p id="alamat-warning"></p>
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
                if ($('#id_pengarang').val().length == 0){
                    $('#id_pengarang' === '') 
                    $('#id').show().text('isi id dahulu');
                     $('#id_pengarang').css({"backgroundColor" : "red"});
                } else if('#id_pengarang' !== '' && '#id' !== ''){
                    $('#id').hide();
                    $('#id_pengarang').css('background-color', '');
                }
                if  ($('#nama_pengarang').val().length == 0){
                    $('#nama_pengarang' === '')
                    $('#nama').show().text('isi nama dahulu');
                    $('#nama_pengarang').css({"backgroundColor" : "red"});
                }else if ('#nama_pengarang' !== '' && '#nama' !== ''){
                    $('#nama').hide();
                    $('#nama_pengarang').css('background-color', '');
                }
                if ($('#email').val().length == 0){
                    $('#email' == '')
                    $('#email-warning').show().text('isi email dahulu');
                    $('#email').css({"backgroundColor" : "red"});
                } else if('#email' !== '' && '#email-warning' !== ''){
                    $('#email-warning').hide();
                    $('#email').css('background-color','');
                } 
                if ($('#telp').val().length == 0){
                    $('#telp' == '')
                   $('#telp-warning').show().text('isi nomer telepon dahulu');
                   $('#telp').css({"backgroundColor" : "red"});
                } else if('#telp' !== '' && '#telp-warning' !== ''){
                    $('#telp-warning').hide();
                    $('#telp').css('background-color', '');
                }
                if ($('#alamat').val().length == 0){
                    $('#alamat' == '')
                    $('#alamat-warning').show().text('isi alamat dahulu');
                    $('#alamat').css({"backgroundColor" : "red"});
                }else if('#alamat' !== '' && '#alamat-warning' !== ''){
                    $('#alamat-warning').hide();
                    $('#alamat').css('background-color','');
                } else{
                    $('#form-pengarang').submit();
                } 
                var id = $('#id_pengarang').val();
                var nama = $('#nama_pengarang').val();;
                var email = $('#email').val();;
                var telepon = $('#telp').val();;
                var alamat = $('#alamat').val();;
                
                var data = {
                    id:id,
                    nama:nama,
                    email:email,
                    telepon:telepon,
                    alamat:alamat
                };

                $.ajax ({
                    url: 'proses.php',
                    type: 'POST',
                    data: data,
                    success: function(response) {
                        console.log(response);
                    },
                    error:function(xhr, status, error) {
                        console.log(error);
                    }
                });
        });
    });
</script>