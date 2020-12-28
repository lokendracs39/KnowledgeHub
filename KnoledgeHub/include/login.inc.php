<?php

session_start();


    if(isset($_POST['submit'])) {
      include_once 'dbh.inc.php';
      $uid = mysqli_real_escape_string($conn,$_POST['uid']);
      $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

      //Error handlers
      //Check if input are Empty

      if(empty($uid) || empty($pwd)) {

      } else {
        $sql = "SELECT * from users where user_uid='$uid' or user_email = '$uid'";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1) {
          header("Location: ../index.php?login=error");
          exit();
        } else {
          if($row = mysqli_fetch_assoc($result)) {
            //De-hashing the password
            $hashedPwdCheck = password_verify($pwd,$row['user_pwd']);
            if($hashedPwdCheck == false) {
              header("Location: ../index.php?login=error");
              exit();
            } else if($hashedPwdCheck == true) {
              //Log in the user here
              $_SESSION['u_id'] = $row['user_id'];
              $_SESSION['u_first'] = $row['user_first'];
              $_SESSION['u_last'] = $row['user_last'];
              $_SESSION['u_email'] = $row['user_email'];
              $_SESSION['u_uid'] = $row['user_uid'];
              $_SESSION['u_clg'] = $row['user_clg'];
              $_SESSION['u_IOF'] = $row['user_IOF'];
              header("Location: ../index.php?login=success");
              exit();
            }
          }
        }
      }
    } else {
      header("Location: ../index.php?login=error");
      exit();
    }
 ?>
