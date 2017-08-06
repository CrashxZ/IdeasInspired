<?php
    $db=  mysqli_connect("localhost","crashxz", "", "project_wd")
            or die('Error connecting Database');
    $name=  htmlspecialchars($_POST["your_name"]);
    $email= htmlspecialchars($_POST["email"]);
    $messqage= htmlspecialchars($_POST["your_enquiry"]);
    $query="INSERT INTO contact VALUES ('$name', '$email', '$messqage')";
    mysqli_query($db, $query)
        or die('Error posting Message');