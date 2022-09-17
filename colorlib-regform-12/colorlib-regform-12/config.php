<?php 
$servername = "localhost";
$username = "root";
$password = "";
$DB = "register";

// Create connection
$conn = mysqli_connect($servername, $username, $password , $DB);
$title = $_POST['title']; //
$userName = $_POST['username'];
$email = $_POST['email']; //
$password = $_POST['pass'];
$course_type = $_POST['course_type'];
$confirm_type = $_POST['confirm_type'];
$hour_appointment = $_POST['hour_appointment']; //
$agree_term = $_POST['agree_term'];




$sql = "INSERT INTO users (title , username, email, pass, course_type , confirm_type , hour_appointment , agree_term)
        VALUES('$title', '$userName', '$email', '$password' , '$course_type' , '$confirm_type' , '$hour_appointment' , '$agree_term')";
        
        if ($conn->query($sql) === TRUE) 
            echo "row inserted suc" ;
        