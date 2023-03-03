<?php
    session_start();
    error_reporting(0);

	if ($_SESSION['zalogowany'] == 0)
     {
     	header('Location: index.php');
        // echo '<li><a href="login.php">Zaloguj się</a></li>';
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Wyniki</title>
	<link rel="stylesheet" href="static/style.css">
	<style type="text/css">
		td, th {
			border: 1px solid black;
			text-align: center;
		}
		table {
			min-width: 60%;
			margin: auto;
		}
	</style>
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
          			if ($_SESSION['zalogowany'] == 1)
          			{
	          			echo '<li><a href="add_egzamin.php">Dodaj egzamin</a></li>';
									echo '<li><a href="scores.php">Wyniki</a></li>';
	          			echo '<li style="color: green;">Zalogowany [ + ]</li>';
          			}
          			// if ($_SESSION['zalogowany'] == 0)
          			// {
          			// 	header('Location: index.php');
          			// 	// echo '<li><a href="login.php">Zaloguj się</a></li>';
          			// }
          		?>
            	<li><a href="destroy.php">Wyloguj</a></li>
            	<li><a href="index.php">powrót</a></li>
          </ul>
          <h1 class="logo">EGZAMINY.PL</h1>
      </div>
</nav>
	<br />
	<br />
	<br />
	<br />
	<h3 style="text-align: center;">Wyniki egzaminów - użyj formularza aby filtrować lub:</h3>
	<br />
	<h3 style="text-align: center;"><a href="scores.php?d=true">usuń</a> wszystkie wyniki</h3>
	<br />
	<table>
	<?php
		$polaczenie = @new mysqli("mysql:3306", "root", "root", "egzaminy");
		if (!$polaczenie) {
			echo "Nie udalo sie polaczyc z baza danych!";
		}

		if ($_GET['d'] == true and $_SESSION['zalogowany'] == 1) {
			$sql2 = 'DELETE FROM wyniki;';
			if ($res2 = mysqli_query($polaczenie, $sql2)) {
				echo '<h3 style="text-align: center; color: green;">Wyniki egzaminów zostały pomyślnie usunięte.</h3>';
			}
		}

		$sql1 = 'SELECT * FROM wyniki;';
		if ($res = mysqli_query($polaczenie, $sql1)) {
			$ile = mysqli_num_rows($res);
			if ($ile > 0) {
				echo '<tr>
					<td>Data</td>
					<td>Nazwa egzaminu</td>
					<td>Imie i nazwisko</td>
					<td>Wynik</td>
				</tr>';

				for ($i = 1; $i <= $ile; $i++) {
					$row = mysqli_fetch_assoc($res);
					$a1 = $row['data'];
					$a2 = $row['nazwa_egzaminu'];
					$a3 = $row['imie_nazwisko'];
					$a4 = $row['wynik'];

					echo '<tr>
						<td>'.$a1.'</td>
						<td>'.$a2.'</td>
						<td>'.$a3.'</td>
						<td>'.$a4.'</td>
					</tr>';
				}	
			}
			else {
				echo '<br /> <br /> <h3 style="text-align: center;">brak wyników w bazie.</h3>';
			}
		}
	?>
	</table>
	<br />
	<br />
</body>
</html>