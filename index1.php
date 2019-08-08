<?php
    date_default_timezone_set('America/New_York');
    include 'dbh1.inc.php';
    include 'comments.inc.php';
?>
<!DOCTYPE html>

<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Helping Hands</title>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

  <nav>

    <div class="logo">
      <img src="logo.jpeg" alt="Helping Hands logo of two hands in a circle">
    </div>

    <ul class="menu-ctn">
      <li><button class="menu" type="button" onclick="homepage()">Home</button></li>
      <li><button class="menu" type="button" onclick="newjob()">Job Requests</button></li>
      <li><button class="menu" type="button" onclick="bio()">Bio</button></li>
      <li><button class="menu" type="button" onclick="login()">Login/Sign-Up</button></li>
    </ul>

  </nav>

  <div class="name">

    <h1><span class="name">Helping Hands</span></h1>

  </div>


  <div class="bodynewjob">
    <h2>
      Create a New Job Request:
    </h2>
  </div>

  <div class="explainjobs">
    <p>Please include: <br>
    1. Your name,<br>
    2. What the odd job is,<br>
    3. What day you want the job done, <br>
    4. Your phone number (so that they can confirm the odd job with you and recieve the location/other confidential information).</p>
  </div>

  <?php
  echo "<form name='boxforjobs' method='POST' action='".setComments($conn)."'>
    <input type='hidden' name='uid' value='Elder'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea class='boxjob'name='message'></textarea><br>
    <button class='commenting' type='submit' name='commentSubmit'>Send Request!</button>
  </form>";

  getComments($conn);
  ?>

  <script src="java.js"></script>
</body>

</html>
