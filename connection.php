<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="taxi_book";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn) 
    {
        // echo"<script>alert('Connection Failed')</script>";
    }
    if($conn)
    {
        // echo"<script>alert('Connected Successfully')</script>";
    }
?>