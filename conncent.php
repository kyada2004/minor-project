<?php
 
 if(isset($_POST['Submit'])){
    $Username = $_POST['Name'];
    $Password = $_POST['PASSWORD'];
    $Email-Id = $_POST['Email-Id'];
    $Phone No= $_POST['Phone_Number'];
    $City = $_POST['City'];
    $Country = $_POST['Country'];
    $State = $_POST['State'];
    $Courses = $_POST['Courses'];
    

    $servername = '127.0.0.1 via TCP/IP';
    $user = 'root';
    $pass ='';
    $databasename = 'student';

    $conn = mysqli_connect($servername,$user,$pass,$databasename);

    $sql = "INSERT INTO project(Name ,PASSWORD , Email-id ,Phone_Number, City, Country ,State,Courses)  value('$Username' , '$Password','Email_id','Phone No','City','Country','State','Courses')";

    mysqli_query($conn,$sql);
 }