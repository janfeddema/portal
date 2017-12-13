<?php
session_start();
//echo "Welcome '{$_SESSION['u_uid']}'";
 ?>
<!DOCTYPE html>

<!-- Responsive website by Jan Feddema -->
<!-- 2017 © - Started on 16-11-2017    -->

<html>
<head>
  <!--                            METAS & LINKS                              -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!-- For other devices -->
  <meta charset="utf-8"> <!-- Specifying character encoding -->
  <link rel="stylesheet" type"text/css" href="style.css"> <!-- Linking the style.css file with HTML -->
  <link rel="script" href="js/js.js"/> <!-- Linking javascript file -->
  <title>Portal 3.0 | Home</title>

<!--                              STYLE TYPEWRITER                           -->
<style>

a {
  text-decoration: none;
}
/* Animation */
.anim-typewriter{
  animation: typewriter 4s steps(44) 1s 1 normal both,
             blinkTextCursor 500ms steps(44) infinite normal;
}
@keyframes typewriter{
  from{width: 0;}
  to{width: 21em;} /* Length of typewriter */
}
@keyframes blinkTextCursor{
  from{border-right-color: rgba(255,255,255,.75);}
  to{border-right-color: transparent;}
}

  .line-1{
    margin-top: 3%;
    width: 24em;
    margin-left: auto;
    margin-right: auto;
    border-right: 2px solid rgba(255,255,255,.75);
    font-size: 180%;
    text-align: left;
    white-space: nowrap;
    overflow: hidden;
    transform: translateY(-50%);
  }

  /* Animation */
  .anim-typewriter{
    animation: typewriter 4s steps(44) 1s 1 normal both,
               blinkTextCursor 500ms steps(44) infinite normal;
  }
  @keyframes typewriter{
    from{width: 0;}
    to{width: 21em;} /* Length of typewriter */
  }
  @keyframes blinkTextCursor{
    from{border-right-color: rgba(255,255,255,.75);}
    to{border-right-color: transparent;}
  }

/*                  Fixed Background
#bg {
  position: fixed;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
}
#bg img {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  min-width: 50%;
  min-height: 50%;
}
*/
</style>

</head>
<body>
<!--    Fixed Background
  <div id="bg">
    <img src="bg.jpg" alt="">
  </div>-->


  <!--                          NAVIGATION BAR                               -->
  <div id="container"> <!-- Container/Wrapper -->
    <p class="line-1 anim-typewriter">Welcome to the index of the Portal...</p>    <!-- Typewriting Title -->
    <div class="navbar">
      <ul>
        <li><a href="home.php">HOME</a></li>
        <li><a href="web.php">WEB</a></li>
        <li><a href="programming.php">PROGRAMMING</a></li>
        <li><a href="projects.php">PROJECTS</a></li>
        <li><a href="filemanager.php">FILEMANAGER</a></li>
        <li><a href="profile.php">PROFILE</a></li>
        <li style="float: right"><a href="logout.php">LOGOUT</a></li>
      </ul>
      <hl>
    </div>


  <!--                            ARTICLE                                    -->
    <div class="article">
      <article>
        
        <p>
          Welcome to the portal <?php         if (isset($_SESSION['u_id'])) {
          echo "{$_SESSION['u_uid']}";
        } else {
          header("Location: ../index.php?error=not_logged_in");                   } ?>. 

          You can navigate through the portal using the navigation-bar above.
        </p>
        <p>
          It is recommended to use Google Chrome browser on this website.
          If you use Internet Explorer or another sub-par browser you might experience some errors.
        </p>
        <?PHP

function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$user_ip = getUserIP();

echo"You connected with the following IP: " . $user_ip; // Output IP address [Ex: 177.87.193.134]


?>

        <br><br>
        <table width="100%">
          <tr>
            <th>Changelog</th>
          </tr>
          <tr>
            <td>13-12-17</td>
            <td>Added 'profile' page.</td>
          </tr>
          <tr>
            <td>07-12-17</td>
            <td>Added a login and registration system.</td>
          </tr>
          <tr>
            <td>01-12-17</td>
            <td>Replaced the 'files' page with a Filemanager.</td>
          </tr>
          <tr>
            <td>24-11-17</td>
            <td>Updated with a login page to access the website.</td>
          <tr>
            <td>21-11-17</td>
            <td>Updated to Pi and Github</td>
          </tr>
          <tr>
            <td>18-11-17</td>
            <td>Implemented more pages with helpful links to websites under programming/web.</td>
          </tr>
          <tr>
            <td><a href="secret.php">1</a>5-11-17</td>
            <td>Remade the portal with a console-like layout.</td>
          </tr>
        </table>



      </article>
    </div>

  <!--                            FOOTER                                     -->

  <div class="footer">
    <p>2017 &copy; Portal by Jan Feddema &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php

        if (isset($_SESSION['u_id'])) {
          echo "You are logged in as: {$_SESSION['u_uid']}";
        } else {
          header("Location: ../index.php?error=not_logged_in");                   }
      //  }
       ?></p>
  </div> <!-- End container -->
</body>
</html>
