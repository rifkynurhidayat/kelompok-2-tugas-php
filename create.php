<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
                <button id="my-button" type="button" class="btn btn-primary mt-4 mb-4">Submit</button>
            </td>
        </form>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script type="text/javascript">
        $('#my-button').click(function() {
                if ($('#id_pengarang').val().length == 0){
                  $('#id_pengarang' === '');
                    $('#id').show().text('*isi id dahulu');
                    $('#id').css({"font-style":"italic"});
                     $('#id').css({"color" : "red"});
                } else{ $('#id_pengarang' !== '' && '#id' !== '')
                    $('#id').hide();
                }if  ($('#nama_pengarang').val().length == 0){
                    $('#nama_pengarang' === '');
                    $('#nama').show().text('*isi nama dahulu');
                    $('#nama').css({"font-style":"italic"});
                    $('#nama').css({"color" : "red"});
                }else { $('#nama_pengarang' !== '' && '#nama' !== '')
                    $('#nama').hide();
                }if ($('#email').val().length == 0){
                    $('#email' == '');
                    $('#email-warning').show().text('*isi email dahulu');
                    $('#email-warning').css({"font-style":"italic"});
                    $('#email-warning').css({"color" : "red"});
                } else {$ ('#email' !== '' && '#email-warning' !== '')
                    $('#email-warning').hide();
                } if ($('#telp').val().length == 0){
                    $('#telp' == '');
                   $('#telp-warning').show().text('*isi nomer telepon dahulu');
                   $('#telp-warning').css({"font-style":"italic"});
                   $('#telp-warning').css({"color" : "red"});
                } else { $('#telp' !== '' && '#telp-warning' !== '')
                    $('#telp-warning').hide();
                }if ($('#alamat').val().length == 0 ){
                    $('#alamat' == '');
                    $('#alamat-warning').show().text('*isi alamat dahulu');
                    $('#alamat-warning').css({"font-style":"italic"});
                    $('#alamat-warning').css({"color" : "red"});
                }else { $('#alamat' !== '' && '#alamat-warning' !== '')
                    $('#alamat-warning').hide();
                }
                if ($('#id_pengarang').val().length > 0 && $('#nama_pengarang').val().length > 0 && $('#email').val().length > 0 && $('#telp').val().length > 0 && ($('#alamat').val().length > 0 || $('#alamat').val() != '')) {
                 $('#form-pengarang').submit();
                    }
            });
</script>


