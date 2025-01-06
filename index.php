<?php
// index.php
if (isset($_GET['dl'])) {
  include('dl.php');  // Load the dl.php content
  exit();
}
?>

<html>
  <head>
    <title>My App</title>
  </head>
  <body>
    <h1>Welcome to My PHP App</h1>
    <a href="?dl">Go to Download Page</a>
  </body>
</html>
