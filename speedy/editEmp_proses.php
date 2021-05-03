<?php
    session_start();
    $conn = mysqli_connect("localhost", "root","","speedy");

    $id = $_POST['id'];
    $emp = $_POST['emp_name'];
    $level = $_POST['level'];
    $company = $_POST['company'];

    $start = $_POST['start'];
    $start = date('Y-m-d', strtotime($start));

    $end   = $_POST['end'];
    $end = date('Y-m-d', strtotime($end));

    mysqli_query($conn,"UPDATE employments SET emp_name = '$emp', level = '$level', company = '$company', start_date = '$start', end_date = '$end' WHERE id = '$id'");

?>