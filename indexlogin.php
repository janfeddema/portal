<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body>
  <header>
    <nav>
      <div class="main-wrapper">
        <ul>
          <li><a href="indexlogin.php">Home</a></li>
        </ul>
        <div class="nav-login">
          <?php
            if (isset($_SESSION['u_id'])) {
              echo '<form action="includes/logout.inc.php" method="POST">
                      <button type="submit" name="submit">Logout</button>
                    </form>';
            } else {
              echo '<form action="includes/login.inc.php" method="POST">
                      <input type="text" name="uid" placeholder="Username/Email">
                      <input type="password" name="pwd" placeholder="Password">
                      <button type="submit" name="submit">Login</button>
                    </form>
                    <a href="signup.php">Sign up</a>';
                       }
          //  }
           ?>
        <!--  <form action="includes/login.inc.php" method="POST">
            <input type="text" name="uid" placeholder="Username/Email">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Login</button>
          </form>
          <a href="signup.php">Sign up</a>-->
        </div>
      </div>
    </nav>
  </header>

  <section class="main-container">
    <div class="main-wrapper">
      <h2>Home</h2>
      <?php
        if (isset($_SESSION['u_id'])) {
          echo "You are logged in!";
        }
       ?>
    </div>
  </section>
</body>
</html>
