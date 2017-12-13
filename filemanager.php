<?php
session_start();
 ?>
<!DOCTYPE html>
<?php
    // echo "<h1>Hello World</h1>";
    // print_r($_GET);
    // print_r($_POST);
    // print_r($_SERVER);
    // print_r($_FILES);

    if ($_FILES)
    {
        $uploaddir = '/var/www/uploads/';
        //echo "$uploaddir<br>\n";
        $uploadfile = $uploaddir . basename($_FILES['inputFile']['name']);
        //echo "$uploadfile<br>\n";

        if (move_uploaded_file($_FILES['inputFile']['tmp_name'], $uploadfile))
        {
            echo "File is valid, and was successfully uploaded.<br>\n";
        }
        else
        {
            echo "Possible file upload attack!<br>\n";
        }
    }
?>
<!-- Responsive website by Jan Feddema -->
<!-- 2017 © - Started on 16-11-2017    -->

<html>
<head>
  <!--                            METAS & LINKS                              -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!-- For other devices -->
  <meta charset="utf-8"> <!-- Specifying character encoding -->
  <link rel="script" href="js/js.js"/> <!-- Linking javascript file -->
  <title>Portal 3.0 | Filemanager</title>

<!--                              STYLE TYPEWRITER                           -->
<style>
/* Responsive website by Jan Feddema */
/*              STYLING              */
/* 2017 © - Started on 16-11-2017    */

/* Left Navbar */
.vertical-menu {
    width: 200px;
    border: 2px solid #20F818;
    border-radius: 5px;
    box-shadow: 1px 1px 20px #20F818;
}

.vertical-menu a {
  /*  background-color: #eee;*/
    color: #20F818;
    display: block;
    padding: 1px;
    text-decoration: none;
}

.vertical-menu a:hover {
    font-size: 16px;
}

.vertical-menu a.header1 {
    background-color: #20F818;
    color: black;
    font-weight: bold;
    text-align: center;
}

.vertical-menu a.filemanager_icon {
  background-image: url(media/home.png);
  background-repeat: no-repeat;
  text-align: center;
  padding: 2px;
}

.vertical-menu a.doc_icon {
  background-image: url(media/doc.png);
  background-repeat: no-repeat;
  text-align: center;
  padding: 3px;
}

/* Local Container Styling */
#container { /* Setting up the container for the website. Everything will be inside this container. */
  position: absolute;
  background-color: black;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;

  margin-left: auto;
  margin-right: auto;
  margin-bottom: 4%;
  margin-top: 6%;

  text-align: left;
  border: solid #20F818 /*Bright Green*/ 3px;

  width: 65%;
}

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
    to{width: 13em;} /* Length of typewriter */
  }
  @keyframes blinkTextCursor{
    from{border-right-color: rgba(255,255,255,.75);}
    to{border-right-color: transparent;}
  }

.button_back {
  border: solid #20F818 3px;
  width: 26%;
  padding: 5px;
}
</style>

</head>
<body>


  <!--                          NAVIGATION BAR                               -->
  <p class="line-1 anim-typewriter">PORTAL/FILEMANAGER.PHP</p>    <!-- Typewriting Title -->

  <!-- Left Navbar -->

  <div class="vertical-menu">
    <a href="#" class="header1">Contents</a>
    <a href="filemanager.php" class="filemanager_icon">Filemanager</a>
    <a href="#" class="header1">Materials</a>
    <a href="files_php.php" class="doc_icon">PHP</a>
    <a href="files_html.php" class="doc_icon">HTML</a>
    <a href="files_misc.php" class="doc_icon">MISC</a>
  </div>


  <div id="container"> <!-- Container/Wrapper -->
    <div class="article">
      <article>
        <p>This is the filemanager. You can upload and download files here.
          If you'd like to upload, go ahead and use the buttons below.
          If you'd like to download, navigate through the left menu.</p>
          <br>
          <h1>Upload</h1>
          <form action="#" method="post" accept-charset="utf-8" enctype="multipart/form-data" >
              <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
            <input type="file" name="inputFile" value="Choose File"><br>
            <br>
            <input type="submit" value="Upload File">

          </form>
          <br><br>
      </article>
    </div>
    </div>


  <!--                            FOOTER                                     -->

  <div class="footer">
    <a href="home.php"><div class="button_back"> GO BACK</div></a>
    <p>2017 © Portal by Jan Feddema</p>

  </div> <!-- End container -->
</body>
</html>
