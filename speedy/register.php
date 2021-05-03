<?php
	
	include_once 'Databases/user.php';
	$user = new User();
	if(isset($_REQUEST['submit'])){
		extract($_REQUEST);
		$register = $user->reg_user($email, $password, $name, $alamat, $telp);
		if($register){
			header('location:login.php');
		}else{
			echo 'Registration failed. Email alredy exits please try again';
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body style="font-family:sans-serif; background:#6dbcfd;">
<!-- <img src="../img/favicon.svg" width="70px" style="margin-top: 80px; margin-left: 650px; margin-bottom: -70px;"> -->
    <div class="kotak_login">
        <p class="tulisan_login">Registration</p>

        <form action="" method="POST" name="reg" id="reg">

            <label for="">Name</label>
            <input type="text" name="name" id="name" class="form_login" placeholder="Name">

            <label for="">Email</label>
            <input type="text" name="email" id="email" class="form_login" placeholder="Email">

            <label for="">Password</label>
            <input type="password" name="password" id="password" class="form_login" placeholder="Password">
            
            <label for="">Address</label>
            <input type="text" name="alamat" id="alamat" class="form_login" placeholder="Address">

            <label for="">Phone</label>
            <input type="text" name="telp" id="telp" class="form_login" placeholder="Telp">

            <input type="submit" name="submit" class="tombol_login" value="Registration" id="btn" onclick="return(submitreg());">

            <br/>
            <br/>
            <center>
                <a href="login.php" class="link">Back</a>
            </center>
        </form>
    </div>
</body>

<!-- SCRIPT -->
<script type="text/javascript">
	function submitreg(){
		var form = document.reg;
		if(form.name.value == ""){
			alert("Enter Name");
			return false;
		}else if(form.email.value == ""){
			alert("Enter email");
			return false;
		}else if(form.password.value == ""){
			alert("Enter Password");
			return false;
		}else if(form.alamat.value == ""){
			alert("Enter Address");
			return false;
		}else if(form.telp.value == ""){
			alert("Enter Phone");
			return false;
		}
	}
</script>
</html>