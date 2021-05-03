<?php include './template/header.php'?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curiculum Vitae</title>
    <link rel="stylesheet" href="./css/cv.css">
</head>
<body>
    <div class="resume">
        <div class="resume-left">
        <?php
            $conn = mysqli_connect("localhost","root","","speedy");
            $data = $_SESSION['id_user'] ;
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE id_user = '$data' ORDER BY id_user");
            $d = mysqli_fetch_array($sql);
        ?>
            <div class="resume-contact" style="margin-top: 100px;">
                <h1 style="margin-left: 30px; color: rgb(226, 228, 229); font-size: 20pt; margin-top: 30px;">Contact</h1>
                <p class="telp" style="margin-top: 10px; margin-left: 30px; color: rgb(226, 228, 229); font-size: 13pt;"><?= $d['phone'];?></p>
                <p class="mobile" style="margin-top: -22px; margin-left: 150px; color: #b3c3c7; font-size: 13pt;">( Mobile )</p>
                <p class="email" style="margin-top: 7px; margin-left: 30px; color: rgb(226, 228, 229); font-size: 13pt;"><?= $d['email'];?></p>
            </div>
        </div>

        <div class="resume-right">
            <div class="profil">
                <div class="title" style="margin-top: 90px;">
                    <?php
                        $conn = mysqli_connect("localhost","root","","speedy");
                        $data = $_SESSION['id_user'] ;
                        $sql = mysqli_query($conn, "SELECT * FROM users WHERE id_user = '$data' ORDER BY id_user");
                        $d = mysqli_fetch_array($sql);
                    ?>
                    <h1 style="margin-left: 30px; font-size: 28pt;"><?= $d['name'];?></h1>
                </div>
                <div class="alamat" style="margin-left: 30px;">
                    <p class="alamat" style="margin-top: 30px; color: #5555; font-size: 20pt;">Greater <?= $d['address'];?></p>
                </div>
            </div>

                <div class="experience" style="margin-top: 30px;">
                    <?php
                        $conn = mysqli_connect("localhost","root","","speedy");
                        $data = mysqli_query($conn, "SELECT * FROM employments")or die(mysqli_error($conn));
                        $d = mysqli_fetch_array($data);
                    ?>
                    <h1 style="margin-left: 30px; font-size: 20pt;">Experience</h1>
                    <h5 class="company" style=" margin-top: 20px; margin-left:30px; font-size: 15pt;"><?= $d['company'];?></h5>
                    <h5 class="employments" style=" margin-top: 3px; margin-left:30px; font-size: 15pt;"><?= $d['emp_name'];?></h5>
                    <h5 class="due" style=" margin-top: 3px; margin-left:30px; font-size: 15pt;"><?= date('F Y',strtotime($d['start_date']));?> - <?= date('F Y',strtotime($d['end_date']))?></h5>
                </div>

                <hr style="width: 15%; margin-top: 30px; margin-left:30px; ">

                <div class="education" style="margin-top: 30px;">
                <?php
                    $data = mysqli_query($conn, "SELECT * FROM education");
                    $d = mysqli_fetch_array($data);
                ?>
                    <h1 style="margin-left: 30px; font-size: 20pt;">Education</h1>
                    <h5 class="edu" style=" margin-top: 20px; margin-left:30px; font-size: 15pt;"><?= $d['level'];?></h5>
                    <p class="school" style="margin-top: -22px; margin-left: 150px; color: #555; font-size: 13pt;">( <?= $d['school'];?> )</p>
                </div>
        </div>
    </div>
</body>
<!-- <script>
	window.print();
</script> -->
</html>