<?php
session_start();
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
  <title>Portal 3.0 | Programming</title>

<!--                              STYLE TYPEWRITER                           -->
<style>

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
    to{width: 14em;} /* Length of typewriter */
  }
  @keyframes blinkTextCursor{
    from{border-right-color: rgba(255,255,255,.75);}
    to{border-right-color: transparent;}
  }

</style>

</head>
<body>


  <!--                          NAVIGATION BAR                               -->
  <div id="container"> <!-- Container/Wrapper -->
    <p class="line-1 anim-typewriter">PORTAL/PROGRAMMING.PHP</p>    <!-- Typewriting Title -->
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
          Here you can find anything related to programming.
          Most likely, C++.
        </p>
        <br>
        <table width="100%">
          <tr>
            <td align="left"><a href="programming_links.html"><div class="button_links">Programming Links</div></a></a></td>
            <td>Useful links/sites for C++ like tutorials.</td>
          </tr>
          <tr>
            <td align="left"><a href="programming_software.html">Programming Software</td>
            <td>Handy software used for programming.
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

  </div>

  </div> <!-- End container -->
</body>
</html>
