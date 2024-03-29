<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EGZAMIN</title>
	<link rel="stylesheet" href="static/style.css">
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
		  <form action="index.php" method="POST">
			<div style="display: flex;">
		  		<input class="inputname txt" type="text" placeholder="szukaj" name="search" style="margin: 0px !important;">
	          	<input type="submit" value="SZUKAJ" class="btn">
			</div>
          	</form>
          		<?php
          			require_once 'config.php';
          			session_set_cookie_params(3600);
          			session_start();
          			error_reporting(0);

          			if (is_zalogowany($_SESSION['zalogowany']) == 1)
          			{
	          			echo '<li><a href="add_egzamin.php">Dodaj egzamin</a></li>';
									echo '<li><a href="wyniki/">Wyniki</a></li>';
	          			echo '<li style="color: green;">Zalogowany [ + ]</li>';
          			}
          			if (is_zalogowany($_SESSION['zalogowany']) == 0)
          			{
          				echo '<li><a href="login/">Zaloguj się</a></li>';
          			}
          		?>
            	<li><a href="destroy.php">Wyloguj</a></li>
            	<li><a href="index.php">powrót</a></li>
          </ul>
          <a style="text-decoration: none; color: white;" href="index.php"><h1 class="logo">EGZAMINY.PL</h1></a>
      </div>
  </nav>
  <div class="navbar">
</div>
	<div class="container sek-egg">
	<form action="egzamin.php" method="GET">
		<?php
			require_once "dbconnect.php";
			// echo "wartosc zalogowania: ".$_SESSION['zalogowany'];
			$polaczenie = @new mysqli("127.0.0.1", "root", "", "egzaminy");
			if (!$polaczenie)
			{
				echo "Nie udało się polaczyc z baza danych!";
			}
			$search = $_POST['search'];
			$SQL = 'SHOW TABLES FROM egzaminy LIKE "%'.$search.'%";';

			if ($res = mysqli_query($polaczenie, $SQL))
			{
				// $_SESSION['nazwy_pliku'] = array();
				while ($table = mysqli_fetch_array($res))
				{
					$SQL2 = "SELECT * FROM ".$table[0].';';
					if ($res2 = mysqli_query($polaczenie, $SQL2))
					{
						$wiersz = mysqli_fetch_array($res2);
						$_SESSION['title'] = htmlentities($wiersz['nazwa_pliku'], ENT_QUOTES, "UTF-8");
					}
					if ($table[0] !== "users" and $table[0] !== "wyniki")
					{
						echo '<div class="contener-pdf"><div class="lpdf"><p><a href="egzamin.php?nazwa_tabeli='.$table[0].'">'.$table[0].'</a></p> </div><div class="dec"></div></div>';
					}
				}
			}
		?>
	</form>
	</div>
</body>
</html>