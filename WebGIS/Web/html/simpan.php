<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbsig";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$target_dir = "Gambar/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "mp4" && $imageFileType !="3gp" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
$gambar_berita=$_FILES["fileToUpload"]["name"];

if(isset($_POST['submit'])){
  echo $_POST['txtEditor'];
}
$judul_berita = $_POST['txtEditor'];

if(isset($_POST['submit'])){
  echo $_POST['isi_berita'];
}
$isi_berita2 = $_POST['isi_berita']; 

$isi_berita3 = str_replace("'", "", $isi_berita2); //mengganti string tanda petik satu " ' " menjadi string yang dimau

 
$sql = "INSERT INTO objwisata (id, Nama_tempat, deskripsi, Gambar) VALUES ('','$judul_berita','$isi_berita3','$gambar_berita')";

  if (mysqli_query($conn, $sql)) {
    echo " <script>
    alert('Data Tersimpan');
    location.href='berita.php';
    </script>
    ";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

mysqli_close($conn);
?> 

<!-- var_dump($isi_berita); // melihat tipe data--> 