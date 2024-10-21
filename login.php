<?php
//menyertakan file program koneksi.php pada register
require "koneksi.php";
//inisialisasi session
session_start();
$error = '';
$validate = '';
//mengecek apakah sesssion nama tersedia atau tidak jika tersedia maka akan diredirect ke halaman index
if( isset($_SESSION['nama']) ) header('Location: index2.html');
//mengecek apakah form disubmit atau tidak
if( isset($_POST['submit']) ){
         
    $nama = htmlspecialchars($_POST['nama']);
    $password= htmlspecialchars($_POST['password']);
        //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if(!empty(trim($nama)) && !empty(trim($password))){
            //select data berdasarkan nama dari database
            $query      = "SELECT nama FROM user WHERE nama = '$nama'";
            $result     = mysqli_query($con, $query);
            $rows       = mysqli_num_rows($result);
            if ($rows != 0) {
                $hash   = mysqli_fetch_assoc($result)['password'];
                if(password_verify($password, $hash)){
                    $_SESSION['nama'] = $nama;
                
                    header('Location: index2.html');
                }
                             
            //jika gagal maka akan menampilkan pesan error
            } else {
                $error =  'Register User Gagal !!';
            }
             
        }else {
            $error =  'Data tidak boleh kosong !!';
        }
    } 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

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
                        <figure><img src="gambar/logo.png" alt="sing up image"></figure>
                        <a href="register.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <form action="index.php" method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="nama"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nama" id="nama" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
                                    me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="https://id-id.facebook.com/login/device-based/regular/login/?login_attempt=1"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="https://twitter.com/i/flow/login"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="https://accounts.google.com/v3/signin/identifier?dsh=S469791937%3A1669715055295463&continue=https%3A%2F%2Faccounts.google.com%2F%3Fhl%3Did&followup=https%3A%2F%2Faccounts.google.com%2F%3Fhl%3Did&hl=id&passive=1209600&flowName=GlifWebSignIn&flowEntry=ServiceLogin&ifkv=ARgdvAuoZ_MspV6Izcq1tDvOApnuRmEH1eUkbgdhVkr3IH1oz3Ehv5qqjX_6ID1tWS8irnF4TuFiyQ"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
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