<?php

      if(isset($_POST['submit'])) {

        include_once 'dbh.inc.php';
        $Name = $_POST['name'];
        $Age = $_POST['age'];
        $Experience = $_POST['experience'];
        $Qualification = $_POST['qualification'];
        $Content = $_POST['content'];

        $Content = preg_replace("#.*youtube\.com/watch\?v=#" , "" ,$Content);
        $Content = '<iframe width="400" height="250" src="https://www.youtube.com/embed/'.$Content.'"
          frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>';

        $sql = "INSERT INTO educators (Name,Age,Experience,Qualification,Content)
        VALUES('$Name','$Age','$Experience','$Qualification','$Content')";
        mysqli_query($conn,$sql);
        //
        // include_once 'dbh.inc.php';
        // $sql = "INSERT INTO educators (Name,Age,Experience,Qualification,Content)
        //         VALUES ('$Name','$Age','$Experience','$Qualification','$fileName')";
        // mysqli_query($conn,$sql);
        header("Location: Educator_data_insert.php?upload success");

      }
?>
