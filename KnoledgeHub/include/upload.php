<?php
      if(isset($_POST['upload'])) {
        $file = $_FILES['file'];


        $fileName=$_FILES['file']['name'];

        $Name = $_POST['name'];
        $Age = $_POST['age'];
        $Experience = $_POST['experience'];
        $Qualification = $_POST['qualification'];

        include_once 'dbh.inc.php';
        $sql = "INSERT INTO educators (Name,Age,Experience,Qualification,Content)
                VALUES ('$Name','$Age','$Experience','$Qualification','$fileName')";
        mysqli_query($conn,$sql);


        $fileTmpName=$_FILES['file']['tmp_name'];
        $fileSize=$_FILES['file']['size'];
        $fileError=$_FILES['file']['error'];
        $fileType=$_FILES['file']['type'];
        print_r($file);
        $fileExt = explode('.',$fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg','jpeg','png','pdf','mp3');

        if(in_array($fileActualExt,$allowed)) {
            if($fileError === 0) {
                if($fileSize < 100000000) {
                    $fileNameNew = uniqid('',true).".".$fileActualExt;
                    $fileDestination = 'upload/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: index.php?upload success");
                } else {
                  echo 'Your file size is too big!';
                }
            } else {
              echo 'There was an error in uploading your file!';
            }
        } else {
          echo 'You can not upload file of this type!';
        }
      }
?>
