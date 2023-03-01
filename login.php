<?php
   session_start();
   error_reporting(0);

   if ($_SESSION['zalogowany'] == 1)
   {
      header('Location: index.php');
      exit();
   }

   require_once "dbconnect.php";

   $conn = @new mysqli("127.0.0.1", "root", "", "egzaminy");

   if(!$conn)
   {
      echo "ERROR nie udało połączyć się z bazą!";
   }
   else
   {
      $_SESSION['zalogowany'] = False;
      $login = $_POST['login'];
      $passwordFromUser = $_POST['passwd'];

      $login = htmlentities($login, ENT_QUOTES, "UTF-8");

      if($res = mysqli_query($conn, sprintf("SELECT * FROM users WHERE username='%s'",
      mysqli_real_escape_string($conn,$login))))
      {
         $ilu_userow = mysqli_num_rows($res);
         if ($ilu_userow > 0) {
            $wiersz = mysqli_fetch_assoc($res);
            $verify_hash = password_verify($passwordFromUser, $wiersz['password']);
            if ($verify_hash) {
               $_SESSION['zalogowany'] = true;
               $_SESSION['id'] = $wiersz['id'];
               $_SESSION['user'] = $wiersz['username'];

               header('Location: index.php');
               close($res);
            }
            else {
               $_SESSION['blad'] = '<h3 style="color: red;">Niepoprawne dane logowania!</h3>';
            }
         }
      }
   }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="static/style.css">
	<title>arkusze</title>
</head>
<body>
   <nav class="navbar fix">
      <div class="navbar-container container">
          <input type="checkbox" name="" id="">
          <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
          </div>
          <ul class="menu-items">
               <li><a href="index.php">Powrót</a></li>
          </ul>
          <h1 class="logo">EGZAMINY.PL</h1>
      </div>
   </nav>
   <div class="navbar">
   </div>
   <main class="main">
      <form action="login.php" method="POST">
         Login: <input type="text" name="login" class="txt">
         Hasło: <input type="password"  name="passwd" class="txt">
         <br /> <br />
         <input type="submit" value="zaloguj" name="" class="btn" style="margin: 0 auto">
      </form>
   </main>
</body>
</html>