<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="nav-login">
  <?php
      if(isset($_SESSION['u_id'])) {

        echo '<form class="myprofile" action="include/myprofile.inc.php" method="POST">
           <button type="submit" name="myprofile" id="myprofile">Profile</button>
         </form>' ;

         echo '<form class="earncredit" action="include/earncredit.inc.php" method="POST">
            <button type="submit" name="earncredit" id="earncredit">Earncredit</button>
          </form>';

        echo '<form class="search-bar action="index.php" method="POST">
        <input type="search" name="search_text"  id="search" placeholder="Search Educators"/>
        <input type="submit" id="search_submit" name="search_submit"></input>
         </form>';

         echo '<form class="setting" action="include/setting.inc.php" method="POST">
            <button type="submit" name="setting" id="setting">Setting</button>
          </form>';

        echo '<form action="include/logout.inc.php" method="POST">
           <button type="submit" name="submit" id="logout">Logout</button>
         </form>';


         // echo " <div id='user_id' " ."<br>" ."<br>";
         // echo $_SESSION['u_uid'];
         // echo "</div>";
      }
      else {
          echo '<form action="include/login.inc.php" method="POST">
              <input type="text" name="uid" placeholder="Username/e-mail">
              <input type="password" name="pwd" placeholder="password">
              <button type="submit" name="submit">Login</button>
           </form>
           <a href="signup.php">Sign up</a>';
      }

   ?>
</div>
</body>
</html>
