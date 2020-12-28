<?php
  include_once 'db.inc.php';
?>
 <html>
 <body>
   <title>SignUp</title>
   <form>
          UserName : <input type='text' name='username'></input></br>
          Password : <input type='password' name='pass'></input>
   </form>
 <?php
  echo 'data has retriesve';
 $sql = "SELECT * FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 // output data of each row
 while($row = $result->fetch_assoc()) {
     echo "id: " . $row["id"].  "<br>";
 }
} else {
 echo "0 results";
}
$conn->close();
  ?>
 </body>
</html>
