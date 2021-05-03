<?php

    $conn = mysqli_connect("localhost", "root","","speedy");
    $name = $_POST['name'];
    $level = $_POST['level'];
    $school = $_POST['school'];
    
    $start = $_POST['start'];
    $start = date('Y-m-d', strtotime($start));
    $end   = $_POST['end'];
    $end = date('Y-m-d', strtotime($end));

    mysqli_query($conn,"INSERT INTO education(name, level, school, start_date, end_date) VALUES ('$name','$level','$school','$start', '$end')");

?>