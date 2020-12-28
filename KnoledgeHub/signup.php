<?php
include_once 'header.php'
?>

<section class="main-container">
  <div class="main-wrapper">
    <h2>Signup</h2>
    <form class = "signup-form" action="include/sign.inc.php" method="POST">
          <input type="text" name="first" placeholder="Firstname">
          <input type="text" name="last" placeholder="Lastname">
          <input type="text" name="email" placeholder="E-mail">
          <input type="text" name="uid" placeholder="Username">
          <input type="password" name="pwd" placeholder="Password">
          <input type="text" name="collage" placeholder="Collagename">
          <input type="text" name="interest" placeholder="Field of interest">
          <button type="submit" name="submit">Sign up</button>
    </form>
  </div>
</section>

<?php
  include_once 'footer.php'
?>
