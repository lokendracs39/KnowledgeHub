
<html>
  <head>
    <title>
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

<?php
if(isset($_SESSION['u_id']) && isset($_POST['search_submit'])) {
  include_once 'dbh.inc.php';
  $name = mysqli_real_escape_string($conn,$_POST['search_text']);
  $sql = "SELECT * FROM educators WHERE Name like '%$name%'";
  $result = mysqli_query($conn,$sql);
  $resultCheck = mysqli_num_rows($result);
  if($resultCheck > 0) {
    while($row=$result->fetch_assoc()) {
      echo " <div id='search_data' " ."<br>" ."<br>";
      echo "Name : " .$row["Name"]. "<br>";
      echo "Age : " .$row["Age"]. "<br>";
      echo "Experience : " .$row["Experience"]. "<br>";
      echo "Qualification : " .$row["Qualification"]. "<br>". "<br>". "<br>";
      // echo "<img src='upload/".$row['Content']."'>";
      echo 'Recommanded Video for You !!' ."<br>"."<br>";
      echo $row["Content"]. "<br>". "<br>" ;
      echo "</div>";
      }
    }
    else {
      echo 'no result found';
  }
}
?>
</html>
