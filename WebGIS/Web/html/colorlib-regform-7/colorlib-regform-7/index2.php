<?php
 session_start();
 
$database = file_get_contents("data.json");
$database = json_decode($database, TRUE);

if(isset($_POST['your_email']) && isset($_POST['your_pass'])) {
    for($i=0; $i < count($database); $i++) {
        if($database[$i]['Email'] == $_POST['your_email']) {
            if($database[$i]['password'] == $_POST['your_pass']) {
                $email=$database[$i]['Email'];
                $_SESSION["buatsesi"] = $email ;
                
                echo " <script>
                alert('Anda Berhasil Login');
                location.href='../../berita.php';
                </script> ";   
            } else {
                echo "<script>
                alert('Username/Password Salah!');
                location.href='index2.php';
                </script>";
            }
        } else {
            echo "<script>
            alert('Username/Password Salah!');
            location.href='index2.php';
            </script>";
        }
    }
} 
// if($success == TRUE) {
//     //echo "Selamat Datang ".$_POST['username'];
//      echo " <script>
//      alert('Anda Berhasil Login');
//      location.href='Riwayat.php';
//      </script>
//     ";   
// } else {
//     echo "Username/Password Salah";
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In as an Admin</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Log In</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_email" id="your_email" placeholder="Username or Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>