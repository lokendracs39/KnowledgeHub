<?php

  if(isset($_POST['submit'])) {
  include_once 'dbh.inc.php';


$first = mysqli_real_escape_string($conn,$_POST['first']);
$last = mysqli_real_escape_string($conn,$_POST['last']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$uid = mysqli_real_escape_string($conn,$_POST['uid']);
$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
$collage = mysqli_real_escape_string($conn,$_POST['collage']);
$interest = mysqli_real_escape_string($conn,$_POST['interest']);





if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd) || empty($collage)
    || empty($interest)){
  header("Location: ../signup.php?signup=empty");
  exit();
} else {
  //check if input character are valid
if(!preg_match("/^[a-zA-Z]*$/" , $first) || !preg_match("/^[a-zA-Z]*$/" , $last)) {
  header("Location: ../signup.php?signup=invalid");
  exit();
} else {
  //Check if email is valid
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?signup=email");
    exit();
  }
  //else {
  //     $sql = "SELECT * FROM users WHERE user_uid='$uid'";
  //     $result = mysqli_query($conn,$sql);
  //     $resultCheck = mysqli_num_rows($result);
  //
  //     if($resultCheck > 0) {
  //       header("Location: ../signup.php?signup=invalid");
  //       exit();
  //     }
//   else {
//     $sql = "SELECT * FROM users WHERE user_uid='$uid' or user_email='$email';";
//     $result = mysqli_query($conn,$sql);
//
//     $resultCheck = mysqli_num_rows($result);
//     if($resultCheck > 0) {
//       if($row = $result->fetch_assoc()) {
//         $email2 = $row['user_email'];
//
//           if($email==$email2) {
//
//             echo ('email adress already exist');
//             exit();
//
//           }
//   }
// }
// }

      else {
                // Hashing the password
                   $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);
                   //Insert the user into the database
                   $sql = "INSERT INTO users
                    (user_first,user_last,user_email,user_uid,user_pwd,user_clg,user_IOF)
                     VALUES ('$first','$last','$email','$uid','$hashedPwd','$collage','$interest')";
                     mysqli_query($conn,$sql);

                     header("Location: ../signup.php?signup= success");
                     exit();
                   }
       }
     }
}
//}
else {
header("Location: ../signup.php");
exit();
}




$conn->close();
  ?>
