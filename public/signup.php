<?php

  include '../classes/database.php';

  $db = new database('localhost', 'root', '', 'project1', 'utf8');

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['uname'];
    $firstname = $_POST['fname'];
    $middlename = $_POST['mname'];
    $lastname = $_POST['lname'];
    $password = $_POST['pwd'];
    $email = $_POST['email'];

    $db->insert($username, $firstname, $middlename, $lastname, $password, $email);
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registreren</title>
  </head>
  <body>
    <form method="post" action="signup.php" style="border:1px solid #ccc">
      <fieldset>
        <input type="text" name="uname" placeholder="Gebruikersnaam"required><br><br>
        <input type="text" name="fname" placeholder="Voornaam" required><br><br>
        <input type="text" name="mname" placeholder="Middelnaam"><br><br>
        <input type="text" name="lname" placeholder="Achternaam" required><br><br>
        <input type="text" name="email" placeholder="E-mail" required><br><br>
        <input type="password" name="pwd" placeholder="Wachtwoord" required><br><br>
        <input type="password" name="repeatpwd" placeholder="Herhaal wachtwoord" required><br><br>
        <input type="submit" value="Sign up!"><br><br>
      </fieldset>
      <a href="index.php">Ik heb al een account.</a>
    </form>
  </body>
</html>
