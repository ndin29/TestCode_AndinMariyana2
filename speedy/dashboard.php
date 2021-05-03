<?php include './template/header.php'?>
<?php

    $conn = mysqli_connect("localhost","root","","speedy");
    session_start();
?>
<div class="profil" style="margin-left: 300px;">
    <h3 style="font-size: 25pt; margin-top:40px">Profil</h3>
</div>

<div class="identitas">
    <?php
        $conn = mysqli_connect("localhost","root","","speedy");
        $data = $_SESSION['id_user'] ;
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE id_user = '$data' ORDER BY id_user");
        $d = mysqli_fetch_array($sql);
    ?>
    <form action="dashboard.php" method="POST" id="profil">

        <input type="hidden" name="idUser" id="idUser" value="<?= $d['id_user'];?>">
        <label for="" style="margin-left: 300px;">Name</label>
        <input type="text" name="name" id="name" value="<?= $d['name'];?>" style="width: 30%; margin-bottom: 20px; margin-left: 30px" readonly>
        
        <br>

        <label for="" style="margin-left: 300px;">Email</label>
        <input type="text" name="email" id="email" value="<?= $d['email'];?>" style="width: 30%; margin-bottom: 20px; margin-left: 30px;" readonly>

        <br>

        <label for="" style="margin-left: 300px;">Address</label>
        <input type="text" name="alamat" id="alamat" value="<?= $d['address'];?>" style="width: 30%; margin-bottom: 20px; margin-left: 10px;" readonly>

        <br>

        <label for="" style="margin-left: 300px;">Phone</label>
        <input type="text" name="telp" id="telp" value="<?= $d['phone'];?>" style="width: 30%; margin-bottom: 20px; margin-left: 20px;" readonly>

        <br>

        <!-- <div class="row-tombol" style="margin-top: 10px; float: left; margin-left: 300px;">
            <input type="submit" id="submit" value="Edit" class="kirimDash">
        </div> -->
    </form>
    
</div>
<script type="text/javascript" src="./jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="./script.js"></script>