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
  <title>Portal 3.0 | Projects</title>

<!--                              STYLE TYPEWRITER                           -->
<style>

/* Animation */
.anim-typewriter{
  animation: typewriter 4s steps(44) 1s 1 normal both,
             blinkTextCursor 500ms steps(44) infinite normal;
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
</style>

</head>
<body>


  <!--                          NAVIGATION BAR                               -->
  <div id="container"> <!-- Container/Wrapper -->
    <p class="line-1 anim-typewriter">PORTAL/PROJECTS.HTML</p>    <!-- Typewriting Title -->
    <div class="navbar">
      <ul>
        <li><a href="home.php">HOME</a></li>
        <li><a href="web.php">WEB</a></li>
        <li><a href="programming.php">PROGRAMMING</a></li>
        <li><a href="projects.php">PROJECTS</a></li>
        <li><a href="filemanager.php">FILEMANAGER</a></li>
        <li style="float: right"><a href="logout.php">LOGOUT</a></li>
      </ul>
      <hl>
    </div>


  <!--                            ARTICLE                                    -->
    <div class="article">
      <article>
        <p>
          Here you can find all of my projects and creations, everything from programming to websites. Take a look.
        </p>
        <p>Clicking the links will open the project in another page.</p>
        <br><br>

                          <!-- PROJECTS LISTED -->

      <table width="100%">
        <tr>
          <td align="left"><a href="#">Gymnastiekvereniging SSS</a></td>
          <td>A website created for a gymnastics-community.</td>
        </tr>
        <tr>
          <td align="left"><a href="#">Game Hall</a></td>
          <td>Minor gaming website as a side project.</td>
        </tr>
        <tr>
          <td align="left"><a href="#">Coin Editor</a></td>
          <td>Layout creation for a coin editor.</td>
        </tr>
        <tr>
          <td align="left"><a href="#">Portal 2.0</a></td>
          <td>The 2.0 version of the portal. (this is 3.0)</td>
        </tr>
        <tr>
          <td align="left"><a href="#">Portal 1.0</a></td>
          <td>First version and attempt of the portal.</td>
        </tr>
        <tr>
          <td align="left"><a href="#">ComputerZone Webshop</a></td>
          <td>Simple creation of a webshop layout.</td>
        </tr>

      </table>

    </div>



  <!--                            FOOTER                                     -->

  <div class="footer">
    <p>2017 &copy; Portal by Jan Feddema &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php

        if (isset($_SESSION['u_id'])) {
          echo "You are logged in as: {$_SESSION['u_uid']}";
        } else {
          echo 'You are not logged in...';
                   }
      //  }
       ?></p>



  </div> <!-- End container -->
</body>
</html>
