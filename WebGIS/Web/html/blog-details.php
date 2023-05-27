<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Details</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbsig";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed : " . mysqli_connect_error());
} 
$ambilid = $_GET['idn'];
$sql = "SELECT * FROM objwisata where id=$ambilid"; 
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { //perulangan
    $No = 1;
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) { //looping
?>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-left">
            <li class="nav-item">
              <a class="nav-link" href="Beranda.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="objekwisata.php">Objek Wisata</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="peta.php">Maps</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <nav aria-label="Breadcrumb">
            <ol class="breadcrumb bg-transparent py-0 mb-5">
              <li class="breadcrumb-item"><a href="Beranda.php">Beranda</a></li>
              <li class="breadcrumb-item"><a href="objekwisata.php">Objek Wisata</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?php echo $row['Nama_tempat'] ?></li>
            </ol>
          </nav>
        </div>
      </div> <!-- .row -->

      <div class="row">
        <div class="col-lg-8">
          <article class="blog-details">
            <div class="post-thumb">
              <img src="Gambar/<?php echo $row['Gambar']?>" alt="">
            </div>
            <h2 class="post-title h1"><?php echo $row['Nama_tempat'] ?></h2>
            <div class="post-content">
              <p><?php echo $row['deskripsi'] ?></p>
            </div>
            </article> <!-- .blog-details -->

          </div>
        <div class="col-lg-4">
          <div class="sidebar">
            <div class="sidebar-block">
              <h3 class="sidebar-title">Search</h3>
              <form action="#" class="search-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                  <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                </div>
              </form>
            </div>
          

            <!-- <div class="sidebar-block">
              <h3 class="sidebar-title">Paragraph</h3>
              <p>dddd</p>
            </div> -->
          </div>
        </div> 
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->


  <footer class="page-footer">
      <div class="row px-md-3">
       <div class="col-sm-6 col-lg-3 py-3">
          <h5>Hubungi Kami</h5>
          <p class="footer-link mt-2">Jln. Kesuma Bhakti No. 1, Bukit Gulai Bancah Mandiangin</p>
          <p class="footer-link mt-2">Kota Bukittinggi, Sumatera Barat, Indonesia.</p>
          <p class="footer-link mt-2">(0752) 33369 ext. 117</p>
        </div>
      <hr>
<?php
  }
}
?>
    </div> <!-- .container -->
  </footer> <!-- .page-footer -->

  <script src="../assets/js/jquery-3.5.1.min.js"></script>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  
  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
  
  <script src="../assets/vendor/wow/wow.min.js"></script>
  
  <script src="../assets/js/theme.js"></script>
  
</body>
</html>