<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Objek Wisata</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-left">
            <li class="nav-item">
              <a class="nav-link" href="Beranda.php">Beranda</a>
            </li><li class="nav-item active ">
              <a class="nav-link" href="objekwisata.php">Objek Wisata</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="webgis.html">Maps</a>
            </li>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bgobjekwisata);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="Beranda.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Objek Wisata</li>
          </ol>
          </nav>
        <h1 class="font-weight-normal">Objek Wisata</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->


  
<div class="page-section">
  <h1 class="text-center wow fadeInUp">Objek Wisata</h1>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">

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

          $sql = "SELECT * FROM objwisata"; 
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) { //perulangan
              $No = 1;
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) { //looping
          ?>

            <div class="col-sm-6 py-3" ng-controller="ListaComprasController">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                  </div>
                  <a href="#" class="post-thumb">
                    <img src="Gambar/<?php echo $row['Gambar']?>" alt="">
                  </a>
                </div>
                <!-- <tr ng-repeat="item in itens | filter:search" class="comprado-{{ item.comprado }}"> -->
                <div class="body" ng-repeat="filter:search">
                  <h5 class="post-title"><a href="blog-details.php? idn=<?php echo $row['id'] ?> "> <?php echo $row['Nama_tempat'] ?> </a></h5>
                  <div class="site-info">
                  </div>
                </div>
              </div>
            </div>    
            </tr>
        
          <?php
            }
          }
          ?>

<div class="col-12 my-5">
              <nav aria-label="Page Navigation">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div> <!-- .row -->
        </div>
        <div class="col-lg-4">
          <div class="sidebar">
            <div class="sidebar-block">
              <h3 class="sidebar-title">Search</h3>
              <form action="#" class="search-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter" ng-model="search">
                  <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                </div>
              </form>
            </div>

          </div>
        </div> 
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <footer class="page-footer">
   
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Hubungi Kami</h5>
          <p class="footer-link mt-2">Jln. Kesuma Bhakti No. 1, Bukit Gulai Bancah Mandiangin</p>
          <p class="footer-link mt-2">Kota Bukittinggi, Sumatera Barat, Indonesia.</p>
          <p class="footer-link mt-2">(0752) 33369 ext. 117</p>
        </div>
      </div>

      <hr>

    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

<script>
   function ListaComprasController($scope) {
    
    $scope.item = {};
    $scope.itens = [
        {produto: 'Leite', quantidade: 2, comprado: false},
        {produto: 'Cerveja', quantidade: 12, comprado: false}
        {}
    ];

    }
</script>
  
</body>
</html>