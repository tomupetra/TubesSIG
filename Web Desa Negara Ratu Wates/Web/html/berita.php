<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="editor.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="form.css">
    <title>Berita</title>
</head>
<body>
    <form method="POST" action="simpan.php" enctype="multipart/form-data">
        <div class="container-fluid">
            <div class="row">
            <h2 class="demo-text">Berita</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 nopadding">
                            <label>Nama Upload :</label><br><br><input type="text" name="nama"> <br>
                            <label>Tanggal Upload :</label><br><br> <input type="date" name="tanggal"> <br>
                            <label>Tipe Berita : </label><br><br> <input type="text" name="tipe"> <br>
                            <label>Gambar :</label> <br> <br> <input type="file" id="fileToUpload" name="fileToUpload">
                            <img id='ambilimage' width='100' height='100'/>
                            <br><label>Judul Berita :</label>
                            <input type="textarea" id="txtEditor" name="txtEditor">
                            <br><label>Isi Berita :</label>
                            <textarea id="txtEditor2" class="tesaja" name="isi_berita"></textarea> 
                            <div id='cek'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <a href="simpan.php" target="_blank"><button>Submit</button></a>
        <div class="container-fluid footer">
            <p class="pull-right">&copy; Suyati Technologies <script>document.write(new Date().getFullYear())</script>. All rights reserved.</p>
        </div>
    </form>
   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="editor.js"></script>
    
    <script>
        function readURL(input){
            if (input.files && input.files[0]){
                var reader = new FileReader();

                reader.onload = function(e) {
                $('#ambilimage').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
            $('#fileToUpload').change(function(){
                readURL(this);
            });
    </script>

    <script>
        $(document).ready(function() {
        $("#txtEditor").Editor();
        $('form').submit(function () {
            $('#txtEditor').val($('#txtEditor').Editor('getText')); // tanda titik adalah
              
        });
        $('#txtEditor').Editor('setText', $('#txtEditor').val());
    });
    </script>

<script>
    $(document).ready(function() {
        $("#txtEditor2").Editor();
        $('form').submit(function () {
            $('#txtEditor2').val($('#txtEditor2').Editor('getText'));
        });
        $('#txtEditor2').Editor('setText', $('#txtEditor2').val());
    });
</script>

</body>
</html>