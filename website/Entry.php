<?php
    $db=  mysqli_connect("localhost","crashxz", "", "project_wd")
            or die('Error connecting Database');
    $cat=  htmlspecialchars($_POST["category"]);
    $name=  htmlspecialchars($_POST["author"]);
    $email= htmlspecialchars($_POST["email"]);
    $title= htmlspecialchars($_POST["title"]);
    $target_dir="upload/";
    $file=$target_dir.$_FILES["image"]["name"];
    $extension=  pathinfo($file,PATHINFO_EXTENSION);
    move_uploaded_file($_FILES["image"]["tmp_name"], $file);
    $entry= htmlspecialchars($_POST["entry"]);
    if($email!="")
    {
        $query="INSERT INTO entry VALUES ('NULL','$cat','$name', '$email','$title', '$entry','$file')";
        $result=mysqli_query($db, $query);
        if($result)
        {
            echo '<script type="text/javascript">alert("Your entry has been posted.");';
            echo 'window.open("entry.html","_self");';
            echo '</script>';
        }
        else
        {
            echo '<script type="text/javascript">alert("Error Posting.");';
            echo 'window.open("entry.html","_self");';
            echo '</script>';
        }
    }
    else
    {
        echo '<script type="text/javascript">alert("Invalid Email ID");';
        echo 'window.open("entry.html","_self");';
        echo '</script>';
    }
        
        
        