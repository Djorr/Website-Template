<?php

  include '../classes/database.php';

  $db = new database('localhost', 'root', '', 'project1', 'utf8');

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    $db->lostPassword($email);
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Wachtwoord vergeten</title>
  </head>
  <body>
    <form method="post" action="lostpsw.php">
      <input type="text" name="email" placeholder="E-mail" required><br><br>
      <input type="submit" value="Get password!"><br><br>
    </form>
  </body>
</html>
