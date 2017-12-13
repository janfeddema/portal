<!DOCTYPE html>
<html>
<head>
  <title>Portal 3.0 | Notes</title>

  <style>
  .note_title {
    font-weight: bold;
  }
  .note_date {
      font-weight: bold;
    }
  </style>

</head>
<body>
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "Lalapo123";
    $dbname = "portal";

    $conn = mysql_connect($servername, $username, $password, $dbname);

   ?>

   <form action="addnotes.php" method="post">
    <!-- <fieldset> adds border -->
       <h2>Note Module</h2>

       <div class="note_title">Title</div>
       <input type="text" name="note_title"><br>

       <div class="note_date">Date</div>
       <input id="date" type="date" name="note_date"><br><br>

       <textarea name="note_text" style="width:400px; height:300px;">Write your note...</textarea>
       <br>
       <input type="submit" value="Submit Note">
     </form>
</html>
