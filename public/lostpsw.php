<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Wachtwoord vergeten</title>
  </head>
  <body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      E-mail: <input type="text" name="email">
      <br><br>
      <input type="submit" name="submit" value="Submit">  
    </form>
  </body>
</html>