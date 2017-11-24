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
    to{width: 11em;} /* Length of typewriter */
  }
  @keyframes blinkTextCursor{
    from{border-right-color: rgba(255,255,255,.75);}
    to{border-right-color: transparent;}
  }

.upload_file {
  display: block;
  border: solid #20F818 3px;
  width: 7%;
  padding: 5px;
  cursor: pointer;
}
</style>

</head>
<body>

  <!-- FILE UPLOADING SCRIPT -->
  <?php
  	// echo "<h1>Hello World</h1>";
  	// print_r($_GET);
  	// print_r($_POST);
  	// print_r($_SERVER);
  	// print_r($_FILES);

  	if ($_FILES)
  	{
  		$uploaddir = '/var/www/uploads/';
  		echo "$uploaddir<br>\n";
  		$uploadfile = $uploaddir . basename($_FILES['inputFile']['name']);
  		echo "$uploadfile";

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

  <!--                          NAVIGATION BAR                               -->
  <div id="container"> <!-- Container/Wrapper -->
    <p class="line-1 anim-typewriter">PORTAL/FILES.HTML</p>    <!-- Typewriting Title -->
    <div class="navbar">
      <ul>
        <li><a href="index.html">INDEX</a></li>
        <li><a href="web.html">WEB</a></li>
        <li><a href="programming.html">PROGRAMMING</a></li>
        <li><a href="projects.html">PROJECTS</a></li>
        <li><a href="files.php">FILES</a></li>
        <li style="float: right"><a href="login.html">LOGIN</a></li>
      </ul>
      <hl>
    </div>


  <!--                            ARTICLE                                    -->
    <div class="article">
      <article>
        <p>
          Here you can upload files.
        </p>
        <br><br>

        <form action="#" method="post" accept-charset="utf-8" enctype="multipart/form-data" >
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        	<input type="file" name="inputFile"><br>
          <br>
        	<input type="submit">

        </form>
        <br><br>
        <!--<table width="100%">
          <tr>
            <td align="left"><a href="#">Download #1</a></td>
            <td>Description</td>
          </tr>
          <tr>
            <td align="left"><a href="#">Download #2</a></td>
            <td>Description</td>
          </tr>
          <tr>
            <td align="left"><a href="#">Download #3</a></td>
            <td>Description</td>
          </tr>
          <tr>
            <td align="left"><a href="#">Download #4</a></td>
            <td>Description</td>
          </tr>
          <tr>
            <td align="left"><a href="#">Download #5</a></td>
            <td>Description</td>
          </tr>
          <tr>
            <td align="left"><a href="#">Download #6</a></td>
            <td>Description</td>
          </tr>
          <tr>
            <td align="left"><a href="#">Download #7</a></td>
            <td>Description</td>
          </tr>
          <tr>
            <td align="left"><a href="#">Download #8</a></td>
            <td>Description</td>
          </tr>
          <tr>
            <td align="left"><a href="#">Download #9</a></td>
            <td>Description</td>
          </tr>
          <tr>
            <td align="left"><a href="#">Download #10</a></td>
            <td>Description</td>
          </tr>
          <tr>
            <td align="left"><a href="#">Download #11</a></td>
            <td>Description</td>
          </tr>
          <tr>
            <td align="left"><a href="#">Download #12</a></td>
            <td>Description</td>
          </tr>

        </table>-->
      </article>
    </div>


  <!--                            FOOTER                                     -->

  <div class="footer">
    <p>2017 © Portal by Jan Feddema</p>

  </div> <!-- End container -->
</body>
</html>
