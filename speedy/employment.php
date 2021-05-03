<?php include './template/header.php'?>
<?php
    $conn = mysqli_connect("localhost","root","","speedy");
    session_start();
?>
<div class="profil" style="margin-left: 50px;">
    <h3 style="font-size: 25pt; margin-top:80px">Employment</h3>
</div>

<div class="identitas">
    <form action="" method="POST" id="emp">
        <?php
            $data = mysqli_query($conn, "SELECT * FROM employments")or die(mysqli_error($conn));
            $d = mysqli_fetch_array($data);
        ?>
        <input type="hidden" name="id" id="id" value="<?= $d['id'];?>">
        <label for="" style="margin-left: 50px;">Employment</label>
        <input type="text" name="emp_name" id="emp_name" value="<?= $d['emp_name'];?>" style="width: 30%; margin-bottom: 20px; margin-left: 30px;">

        <br>

        <label for="" style="margin-left: 50px;">Level</label>
        <input type="text" name="level" id="level" value="<?= $d['level'];?>" style="width: 30%; margin-bottom: 20px; margin-left: 80px;">

        <br>

        <label for="" style="margin-left: 50px;">Company</label>
        <input type="text" name="company" id="company" value="<?= $d['company'];?>" style="width: 30%; margin-bottom: 20px; margin-left: 50px;">

        <br>

        <label for="" style="margin-left: 50px;">Start Date</label>
        <input type="date" name="start" id="start" value="<?= date('Y-m-d', strtotime($d['start_date']));?>" style="width: 30%; margin-bottom: 20px; margin-left: 20px;">

        <br>

        <label for="" style="margin-left: 50px;">End Date</label>
        <input type="date" name="end" id="end" value="<?= date('Y-m-d', strtotime($d['end_date']));?>" style="width: 30%; margin-bottom: 20px; margin-left: 20px;">

        <br>

        <div class="row-tombol" style="margin-top: 10px; float: left; margin-left: 50px;">
            <input type="submit" value="Tambah" class="kirim_add">
        </div>

        <div class="row-tombol" style="margin-top: 10px; float: left; margin-left: 50px;">
            <input type="submit" value="Edit" class="kirim_edit">
        </div>
    </form>
</div>
<script type="text/javascript" src="./jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="./script.js"></script>