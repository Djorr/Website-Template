<?php

  include 'database.php';

  $db = new database('localhost', 'root', '', 'project1', 'utf8');
  $db->executeQuerySignUp();
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title of the document</title>
  </head>
  <body> 
    <form action="action_page.php" style="border:1px solid #ccc">
      <div class="container"><br>
        <label for="firstname"><b>Voornaam (verplicht)</b></label>
        <input type="text" placeholder="Vul uw voornaam in" name="firstname" required><br><br>

        <label for="suffixname"><b>Tussenvoegsel (optioneel)</b></label>
        <input type="text" placeholder="Vul eventuele tussenvoegsel in" name="suffixname"><br><br>

        <label for="lastname"><b>Achternaam (verplicht)</b></label>
        <input type="text" placeholder="Vul uw achternaam in" name="lastname" required><br><br>

        <label for="email"><b>Email (verplicht)</b></label>
        <input type="text" placeholder="Vul uw email adres in" name="email" required><br><br>

        <label for="username"><b>Gebruikersnaam (verplicht)</b></label>
        <input type="text" placeholder="Vul uw gebruikersnaam in" name="username" required><br><br>

        <label for="psw"><b>Wachtwoord (verplicht)</b></label>
        <input type="password" placeholder="Vul uw wachtwoord in" name="psw" required><br><br>

        <label for="psw-repeat"><b>Herhaal Wachtwoord (verplicht)</b></label>
        <input type="password" placeholder="Herhaal uw wachtwoord" name="psw-repeat" required><br><br>

        <div class="clearfix">
          <button type="submit" class="signupbtn">Sign Up</button>
          <button type="button" class="cancelbtn">Cancel</button>
        </div>
      </div>
    </form>
  </body>
</html>