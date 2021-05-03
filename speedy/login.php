<?php

   session_start();
   include_once 'Databases/user.php';

   $user = new User();

   if(isset($_REQUEST['submit'])){
       extract($_REQUEST);
       $login = $user->check_login($email, $password);
       if($login){
           //Registration success
           header('location:dashboard.php');
       }else{
           //Registration Failed
           echo " Wrong Username or Password";
       }
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body style="font-family:sans-serif; background:#6dbcfd;">
    <!-- <img src="../img/favicon.svg" width="70px" style="margin-top: 80px; margin-left: 650px; margin-bottom: -70px;"> -->
    <div class="kotak_login" id="error">
        <?php
            if(isset($_POST['submit'])){
                echo "<div class='pesan_error' id='login_error' style='color:red;'>'".$login->message."'</div>";
            }
        ?>
        <p class="tulisan_login">Login</p>

        <form action="login.php" id="login" name="login" method="POST">
            <label for="">Email</label>
            <input type="text" name="email" id="email" class="form_login" placeholder="Email">

            <label for="">Password</label>
            <input type="password" name="password" id="password" class="form_login" placeholder="Password" >


            <input type="submit" name="submit" class="tombol_login" value="LOGIN" id="submit" onclick="return(submitlogin());">

            <br/>
            <br/>

            <hr>
            <div class="belumPunyaAkun">
                <h4>Belum Punya Akun ?</h4>
                <center>
                    <a href="register.php" class="link">Regisration</a>
                </center>
            </div>
            <hr>
        </form>
    </div>
</body>
</html>
<script type="text/javascript">
    function submitlogin(){
        var form = document.login;
            if(form.email.value == ""){
                alert("Enter email");
                return false;
            }else if(form.password.value == ""){
                alert("Enter Password");
                return false;
            }
    }
</script>