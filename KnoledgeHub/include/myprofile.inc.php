<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<?php

session_start();


    if(isset($_POST['myprofile'])) {
      include_once 'dbh.inc.php';

      //Error handlers
      //Check if input are Empty
      $uid = $_SESSION['u_id'];
      $uemail = $_SESSION['u_email'];
        $sql = "SELECT * from users where user_uid='$uid' or user_email = '$uemail'";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck>0) {
          while ($row = $result->fetch_assoc()) {

            echo " <div class='My_profile' " ."<br>" ."<br>";
            echo "My Profile";
            echo "</div>";
            echo " <div id='My_profile' " ."<br>" ."<br>";
            echo "First Name    : " . $row["user_first"].  "<br>";
            echo "Last Name     : " .$row["user_last"]. "<br>";
            echo "Email Id      : " .$row["user_email"]. "<br>";
            echo "User Id       : " .$row["user_uid"]. "<br>";
            echo "Collage Name  : " .$row["user_clg"]. "<br>";
            echo "Preparing for : " .$row["user_IOF"]. "<br>";
            echo "</div>";
          }
        }
        else {
          echo 'no result found';
        }

    } else {
      header("Location: ../index.php?login=error");
      exit();
    }
 ?>
</body>
</html>
