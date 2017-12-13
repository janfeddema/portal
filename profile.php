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
    to{width: 12em;} /* Length of typewriter */
  }
  @keyframes blinkTextCursor{
    from{border-right-color: rgba(255,255,255,.75);}
    to{border-right-color: transparent;}
  }

  .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
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
    <p class="line-1 anim-typewriter">PORTAL/PROFILE.PHP</p>    <!-- Typewriting Title -->
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
                <!-- Avatar -->
                <div class="imgcontainer">
                  <img src="media/avatar.png"  width="150px" height="150px" alt="Avatar" class="avatar">
                </div>

        <br><br>
        <table width="50%" style="margin: auto;">
          <tr>
            <th>Profile</th>
          </tr>

          <!-- START USERNAME -->
          <tr>
            <td>Username:</td>                                    <!-- Prints out username -->
            <td>
                                                        <?php

                                                    if (isset($_SESSION['u_id'])) {
                                                      echo "{$_SESSION['u_uid']}";
                                                    } else {
                                                      header("Location: ../index.php?error=not_logged_in");
                                                               }
                                                  //  }
                                                   ?>
          </td>                                            
       </tr>
       <!-- END USERNAME -->

       <!-- START IP ADDRESS -->
          <tr>
            <td>IP Address:</td>   
            <td>                                <!-- Prints out users IP address -->
          
                                                              <?PHP function getUserIP()
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

                                                      echo $user_ip; // Output IP address [Ex: 177.87.193.134]


                                                      ?>
            </td>
          </tr>
          <!-- END IP ADDRESS -->

          <!-- START EMAIL -->
          <tr>
            <td>Email:</td>
            <td>
              <?php
              echo "{$_SESSION['u_email']}";
              ?>
            </td>
          </tr>
          <!-- END EMAIL -->

          <!-- START FIRST NAME -->
          <tr>
            <td>Firstname:</td>
            <td>
              <?php echo "{$_SESSION['u_first']}"; ?>
            </td>
          </tr>
          <!-- END FIRST NAME -->

          <!-- START LAST NAME -->
          <tr>
            <td>Lastname:</td>
            <td><?php echo "{$_SESSION['u_last']}"; ?></td>
          </tr>
          <!-- END LAST NAME -->

          <!-- START USER ID -->
          <tr>
            <td>User ID:</td>
            <td><?php echo "{$_SESSION['u_id']}"; ?></td>
          </tr>
          <!-- END USER ID -->     
        </table>



      </article>
    </div>

  <!--                            FOOTER                                     -->

  <div class="footer">
    <p>2017 &copy; Portal by Jan Feddema &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php

        if (isset($_SESSION['u_id'])) {
          echo "You are logged in as: {$_SESSION['u_uid']}";
        } else {
          header("Location: ../index.php?error=not_logged_in");
                   }
      //  }
       ?></p>
  </div> <!-- End container -->
</body>
</html>
