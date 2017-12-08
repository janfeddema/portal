<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Portal 3.0 | Sign up</title>
  <!--<link rel="stylesheet" type="text/css" href="loginstyle.css">-->
  <link rel="stylesheet" type="text/css" href="style.css">

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

  .centerback {
    text-align: center;
  }
  </style>

</head>
<body>
  <header>
    <nav>
      <div class="main-wrapper">


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
      <p class="line-1 anim-typewriter">SIGNING UP...</p>
      <div class="imgcontainer">
<img src="media/avatar.png"  width="150px" height="150px" alt="Avatar" class="avatar">
</div>
      <form class="signup-form" action="includes/signup.inc.php" method="POST">
        <input type="text" name="first" placeholder="Firstname">
        <input type="text" name="last" placeholder="Lastname">
        <input type="text" name="email" placeholder="E-mail">
        <input type="text" name="uid" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit" name="submit">Sign up</button>
      </form>
    </div>
    <div class="centerback"><p>Click <a href="index.php">here</a> to go back...</p></div>
  </section>
</body>
</html>
