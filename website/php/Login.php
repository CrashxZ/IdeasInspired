<?php
    $db=  mysqli_connect("localhost","root", "", "Project_WD")
            or die('Error connecting Database');
    $query="SELECT * FROM Login";
    $result=  mysqli_query($db, $query)
            or die('Error querying Login');
    $num=  mysqli_num_rows($result);
    $count=0;
    for($i=0;$i<$num;$i++)
    {
        $row=  mysqli_fetch_assoc($result);
        if((strcmp($row["Username"], htmlspecialchars($_POST['username']))==0)&&(strcmp($row["Password"], htmlspecialchars($_POST['password']))==0))
        {
            $count++;
        }
    }
    if($count!=0)
    {
        header ("Location:entry.html");
    }
    else
    {
        echo 'Invalid Username or Password';
    }