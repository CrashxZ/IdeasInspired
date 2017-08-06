<?php
    $db=  mysqli_connect("localhost", "crashxz", "", "project_wd")
            or die('Error connecting Database');
    $fname=  htmlspecialchars($_POST["fi_name"]);
    $lname=  htmlspecialchars($_POST["la_name"]);
    $username=  htmlspecialchars($_POST["username"]);
    $email=  htmlspecialchars($_POST["email"]);
    $password=  htmlspecialchars($_POST["pass"]);
    $cpassword=  htmlspecialchars($_POST["cpass"]);
    if(($fname!="")&&($lname!="")&&($email!="")&&($username!="")&&($password!="")&&($cpassword!=""))
    {
        if(strcmp($password, $cpassword)==0)
        {
            $query="INSERT INTO login VALUES ('$fname','$lname','$email','$username','$password')";
            if(mysqli_query($db, $query))
            {
                echo "Thank You for Signing In.";
            }
            else
            {
                echo "Error Querying database";
            }
        }
        else
        {
            echo "Passwords do not match";
        }
    }
    else
    {
        echo "Could not entry the record due to Invalid or Blank Details"."<br>";
    }