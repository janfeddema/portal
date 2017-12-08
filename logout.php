<?php
session_start();
 ?>

<!DOCTYPE html>


<!-- Responsive website by Jan Feddema -->
<!-- 2017 © - Started on 16-11-2017    -->

<html>
<head>
  <!--                            METAS & LINKS                              -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!-- For other devices -->
  <meta charset="utf-8"> <!-- Specifying character encoding -->
  <link rel="script" href="js/js.js"/> <!-- Linking javascript file -->
  <!--<link rel="stylesheet" type="text/css" href="loginstyle.css">-->

  <title>Portal 3.0 | Login</title>

<!--                              STYLE TYPEWRITER                           -->
<style>
/* Responsive website by Jan Feddema */
/*              STYLING              */
/* 2017 © - Started on 16-11-2017    */

/* Implemented Fonts */
@font-face { font-family: "Droid Sans Mono", src: url('fonts/DroidSansMono.ttf'); } /* Monospace type of font */

/* Green Color Code: #20F818 */

body {
  background-color: black;
  font-family: Droid Sans Mono, monospace;
  color: #20F818; /* Bright Green color */
  height: calc(100vh - 8em); /* Needed for typewriter */
}


#container { /* Setting up the container for the website. Everything will be inside this container. */
  position: absolute;

  top: 0;
  bottom: 0;
  left: 0;
  right: 0;

  margin-left: auto;
  margin-right: auto;

  text-align: left;
  border: solid #20F818 /*Bright Green*/ 3px;


}

/* Typewriter title settings - Inserted on each page locally --
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
} */

/* Nav Bar Settings */

.navbar {
  margin-left: auto;
  margin-right: auto;
  margin-top: 0%;
}
ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
    overflow: hidden;
}

li {
    float: left;
}

a {
  color: #20F818;
  text-decoration: none;
}

li a {
    color: #20F818;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 16px;
}

li a:hover {
    font-size: 18px;
}

.article {
  margin-left: auto;
  margin-right: auto;
  text-align: left;
  padding: 20px;
}

.footer {
  position: absolute;
  bottom: 0;
  padding: 0px 15px 0px 33px;
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
    to{width: 8em;} /* Length of typewriter */
  }
  @keyframes blinkTextCursor{
    from{border-right-color: rgba(255,255,255,.75);}
    to{border-right-color: transparent;}
  }

/*                            STYLE LOGIN                                     */
form {
    /*border: 3px solid #20F818;*/
    width: 50%;
    margin: auto;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #20F818;
    background-color: black;
    box-sizing: border-box;
    color: #20F818;
}

button { /* Login Button */
    background-color: #181818; /* Dark Grey */
    color: #20F818;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.button_back {
  width: auto;
  color: #20F818;
  padding: 10px 18px;
  background-color: #181818; /* Dark Grey */
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    color: #20F818;
    padding: 10px 18px;
    background-color: #181818; /* Dark Grey */
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    border-radius: 50%;
}

.container {
    padding: 16px;
}

.center_logout {
  text-align: center;
}
span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 50%;
    }
}

.nologin {
  margin: auto;
  text-align: center;
  cursor: pointer;
}

.nologin:hover {
  font-size: 17px;
}

/* Login  */


</style>


</head>
<body>

  <header>
    <nav>
      <div class="main-wrapper">
      </div>
    </nav>
  </header>


  <!--                          NAVIGATION BAR                               -->
  <div id="container"> <!-- Container/Wrapper -->
    <p class="line-1 anim-typewriter">LOGGING OUT...</p>    <!-- Typewriting Title -->
    <!--<div class="navbar">
      <ul>
        <li><a href="index.html">INDEX</a></li>
        <li><a href="web.html">WEB</a></li>
        <li><a href="programming.html">PROGRAMMING</a></li>
        <li><a href="projects.html">PROJECTS</a></li>
        <li><a href="files.html">FILES</a></li>
        <li style="float: right"><a href="login.html">LOGIN</a></li>
      </ul>
      <hl>
    </div>-->


  <!--                            ARTICLE                                    -->
    <div class="article">
      <article>
        <header>
          <nav>
            <div class="main-wrapper">
              <ul>
                <!--<li><a href="index.php">Home</a></li>-->
              </ul>
              <div class="nav-login">
                <div class="imgcontainer">
  <img src="media/avatar.png"  width="150px" height="150px" alt="Avatar" class="avatar">
</div>
<div class="center_logout">
                <?php
                  if (isset($_SESSION['u_id'])) {
                    echo "Are you sure you want to logout {$_SESSION['u_uid']}?<br>";
                    echo '<form action="includes/logout.inc.php" method="POST">
                            <button type="submit" name="submit">Logout</button>
                          </form>';
                             }
                 ?>
                 <p>Click <a href="home.php">here</a> to go back..</p>
               </div>
      </article>
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

    <?php
      if (!isset($_SESSION['u_id'])) {
        header("Location: ../index.php?notloggedin");
      }
      ?>

  </div> <!-- End container -->
</body>
</html>
