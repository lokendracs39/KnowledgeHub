<html>
  <head>
    <?php
    include_once 'db.inc.php';
    ?>
        <title>
            SignUp
        </title>
        <link rel='stylesheet' href='sign.css'></link>
  </head>
  <body>
    <form action = 'SignUp.php' method='post'>
        First Name : <input type='text' name='fname' placeholder="first name"size="26" required='required'></input>
      </br></br>
      Last Name : <input type='text' name='lname' placeholder="last name"size="26" required='required'  ></input>
      </br></br>
    Email : <input type = 'email' name='email' placeholder="email id" size="31" required='required'></input>
  </br></br>
    Password : <input type = 'password' name='password' placeholder="password"size="28" required='required'></input>
  </br></br>
    Retype Password : <input type = 'password' name='re_password' placeholder="retype password" required='required'></input>
  </br></br>
  Collage Name : <input type = 'text' name='col_name' placeholder="collage name"size="23" required='required'></input>
</br></br>

  <p> choose your preparation field</p>
  <select name = 'preparation'>
    <option value='GATE'>GATE</option>
    <option value='GRE'>GRE</option>
    <option value='CAT'>CAT</option>
    <option value='CIVIL SERVICES'>CIVIL SERVICES</option>
  </select></br></br>
  <input type = 'submit' name='submit'></input>
</form>

  <?php
        $fnm = $_POST['fname'];
        $pass = $_POST['password'];
        if(mysqli_query($conn,"INSERT INTO login (name,password) VALUES ('$fnm','$pass')"))
        {
          echo 'inserted successfully';
        }
        else {
          echo 'failed';
        }
  ?>

  </body>
</html>
