<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action = simpan.php>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                                <span id='message3' value=""></span>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" pattern=".{8,}" required/>
                                <span id='message2'></span>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" required/>
                                <span id='message'></span>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="index2.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        //$("#signup").prop('disabled', true);
        $('#pass, #re_pass').on('keyup', function () {
            var message3 = $('#message3').val();

            if ($('#pass').val() == $('#re_pass').val() && message3 != "Email already in use") {
                $("#signup").prop('disabled', false);
            } else 
               $("#signup").prop('disabled', true);
        });
        $('#pass, #re_pass').on('keyup', function () {
            if ($('#pass').val() == $('#re_pass').val()) {
                $('#message').html('Matching').css('color', 'green');
            } else 
               $('#message').html('Not Matching').css('color', 'red');
        });
        $('#pass').on('keyup',function(){
            var Password = $(this).val();
            if (Password.length < 8){
                $('#message2').html('Passwords less than eight').css('color', 'red');
                //alert('data harus 8');
                //$('#pass').next('.error').css('display', 'inline');
            }else{
                $('#message2').css('display', 'none');
                //alert('data pas');
                //$(this).next('.error').css('display', 'none');
            }
        });
});
   //pelajaran tambahan react.js atau vue.js 
</script>
<script>
     $("document").ready(function () {
         $('#pass').on('click', function() {
             var cek_email = $("#email").val();
             console.log(cek_email);

             $.ajax({
                 type: "POST",
                 url: "cek_email.php",
                 data: "email=" + cek_email,
                 success: function(showcon1php){ // showcon1php adalah variabel bebas yang digunakan untuk menampilkan pesan
                    $('#message3').html(showcon1php);
                    $('#message3').val(showcon1php);
                    // var message3 = $('#message3').val();
                    // alert(message3);
                    // if (message3 == "Email already in use") {
                    //     $("#signup").prop('disabled', true);
                    // }
                 }
             });
         });
     });
 </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<!-- https://select2.org/getting-started/builds-and-modules -->