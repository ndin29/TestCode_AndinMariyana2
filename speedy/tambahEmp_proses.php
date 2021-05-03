<?php

    $conn = mysqli_connect("localhost", "root","","speedy");
    $emp = $_POST['emp'];
    $level = $_POST['level'];
    $company = $_POST['company'];
    $start = $_POST['start'];
    $start = date('Y-m-d', strtotime($start));
    $end   = $_POST['end'];
    $end = date('Y-m-d', strtotime($end));

    mysqli_query($conn,"INSERT INTO employments(emp_name, level, company, start_date, end_date) VALUES ('$emp','$level','$company','$start', '$end')");

?>