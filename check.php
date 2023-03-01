<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EGZAMIN</title>
	<link rel="stylesheet" href="static/style.css">
</head>
<body>
<style type="text/css">
	body
	{
		background-color: #202124;
		font-family: Comfortaa;
		color: #fff;
	}
	td, th {
		border: 1px solid black;
		text-align: center;
	}
	table {
		min-width: 60%;
		margin: auto;
	}
</style>
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
          			session_start();
          			error_reporting(0);
          			if ($_SESSION['zalogowany'] == 1)
          			{
	          			echo '<li><a href="add_egzamin.php">Dodaj egzamin</a></li>';
	          			echo '<li style="color: green;">Zalogowany [ + ]</li>';
          			}
          			if ($_SESSION['zalogowany'] == 0)
          			{
          				echo '<li><a href="login.php">Zaloguj się</a></li>';
          			}
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

<table>
<?php
	session_start();

	function sqli_filltering($query)
	{
		// if function returned 1 mean that in query is posible sql injection payload
		$payloads = array("'", "OR", "-", "--", "||", "|", "UNION", "LIKE", "-- -", "admin'", "1=1", "or 1=1");
		for ($i = 0; $i <= count($payloads); $i++)
		{
			if (strpos($query, $payloads[$i]) == True)
			{
				// echo 'SQL Injection detected! - detected payload: '.$payloads[$i].' <br />';
				return 1;
			}
			else
			{
				return 0;
			}
		}
	}

	// sprawdzenie czy wszystkie pytania posiadaja odpowiedz
	// uzydkownik nie moze miec dostepu do tego pliku jezeli nie wypełnił formularza
	for ($i = 1; $i<=40; $i++)
	{
		if (!isset($_POST['pytanie'.$i]))
		{
			header('Location: index.php');
		}
	}

	if (!isset($_POST['imie_nazwisko'])) {
		header('Location: index.php');
	}

	require_once "dbconnect.php";

	$polaczenie = @new mysqli("127.0.0.1", "root", "", "egzaminy");
	if (!$polaczenie)
	{
		echo "Nie udało się polaczyc z baza danych!";
	}

	if ($_SESSION['wyslano'] == true)
	{
		echo '<tr>
			<td>Numer Pytania</td>
			<td>Wynik</td>
			<td>Odpowiedz poprawna</td>
			<td>twoja odpowiedz</td>
		</tr>';
		// echo 'Numer pytania | wynik | odpowiedz poprawna | twoja odpowiedz | <a href="index.php">powrót</a> <br />';
		$poprawnych = 0;
		for ($i = 1; $i<=40; $i++)
		{
			$sql = 'SELECT * FROM '.$_SESSION['table_name'].' WHERE idpytania='.$i.';';
			$odp = $_POST['pytanie'.$i];

			if (sqli_filltering($sql) == 1)
			{
				header('Location: destroy.php');
			}

			if ($res = mysqli_query($polaczenie, $sql))
			{
				$wiersz = mysqli_fetch_array($res);
				$answer = $wiersz['odp'];
				if ($odp == $answer)
				{
					echo '<tr>
						<td><h3 style="color: green;">Pytanie '.$i.'</td>
						<td><h3 style="color: green;">Poprawne</td>
						<td><h3 style="color: green;">'.$answer.'</td>
						<td><h3 style="color: green;">'.$odp.'</td>
					</tr>';
					// echo '<h3 style="color: green;">Pytanie'.$i.' - poprawne - '.$answer.' - '.$odp.'</h3>';
					$poprawnych += 1;
				}
				else
				{
					echo '<tr>
						<td><h3 style="color: red;">Pytanie '.$i.'</td>
						<td><h3 style="color: red;">niepoprawnie</td>
						<td><h3 style="color: red;">'.$answer.'</td>
						<td><h3 style="color: red;">'.$odp.'</td>
					</tr>';
					// echo '<h3 style="color: red;">Pytanie'.$i.' - niepoprawnie - '.$answer.' - '.$odp.'</h3>';
				}
			}
		}

		$datetime = date('d-m-y');
		$date = strval($datetime);

		// $sql2 = 'INSERT INTO `wyniki` (`data`, `nazwa_egzaminu`, `imie_nazwisko`, `wynik`) VALUES ('.$date.', '.$_SESSION['table_name'].', '.$_POST['imie_nazwisko'].', '.$poprawnych.')';
		$sql2 = 'INSERT INTO `wyniki` (`data`, `nazwa_egzaminu`, `imie_nazwisko`, `wynik`) VALUES (CURRENT_DATE(), "'.$_SESSION['table_name'].'"'.', "'.$_POST['imie_nazwisko'].'"'.', "'.$poprawnych.' / 40'.'"'.')';
		if (sqli_filltering($sql2) == 1) {
			header('Location: destroy.php');
		}
		if ($res2 = mysqli_query($polaczenie, $sql2)) {
			echo '<h3 style="text-align: center;">Egzamin wykonany poprawnie. Dane zapisane w bazie</h3> <br />';
			echo '<tr>
				<td style="text-align: right;" colspan="4"><h2>Wynik: '.$poprawnych.'</h2></td>
			</tr>';
		}
		else {
			echo "nie dziala";
		}
		// echo '<tr>
		// 	<td style="text-align: right;" colspan="4"><h2>Wynik: '.$poprawnych.'</h2></td>
		// </tr>';
		// echo "<h1>Wynik: ".$poprawnych."</h1>";
	}
	else
	{
		header("Location: index.php");
		exit();
	}
?>
</table>
</body>
</html>