<?php
      session_start();
      require_once "../Controller/dataAccess-db.php";
      require_once "../Model/Model.php";

      if (isset($_SESSION['username'])){
        header("Location: ../Admin/Home.php");
      }


?>

<!DOCTYPE html>
<html>
  <body>
      <form action="../Utils/login.php" method="post">
        <h3>Username</h3>
        <input name = "username" type="text" required>
        <h3>Password</h3>
        <input name = "password" type="password" required>
        <input type="hidden" name="dataName" id="hiddenField" value="Admin"/>
        <input type ="submit" value="Enter">
      </form>
  </body>
</html>
