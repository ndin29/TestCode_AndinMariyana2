<?php
    session_start();
    $conn = mysqli_connect("localhost", "root","","speedy");

    $id = $_POST['idEdu'];
    $name = $_POST['name'];
    $level = $_POST['level'];
    $school = $_POST['school'];

    $start = $_POST['start'];
    $start = date('Y-m-d', strtotime($start));

    $end   = $_POST['end'];
    $end = date('Y-m-d', strtotime($end));

    mysqli_query($conn,"UPDATE education SET name = '$name', level = '$level', school = '$school', start_date = '$start', end_date = '$end' WHERE id = '$id'");

?>