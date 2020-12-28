<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <title></title>
     <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

  <header>
        <nav>
            <div class="main-wrapper">
              <ul>
                    <li> <a href = "index.php">Home</a></li>
              </ul>
              <?php
                  include_once 'afterlogin.php';
               ?>
            </div>
        </nav>
  </header>
