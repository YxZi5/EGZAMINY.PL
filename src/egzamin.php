<?php
	session_set_cookie_params(3600);
	session_start();

	require_once "config.php";

	if (!isset($_GET['nazwa_tabeli']))
	{
		header('Location: index.php');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="static/style.css">
	<title>arkusze</title>
	<style type="text/css">
		.pdf-wrapper {
			width: 85%;
			height: 80%;
			border: 2px solid #ccc;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
			overflow: auto;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			background-color: white;
			margin: auto;
			margin-top: 3%;
		}
		.pdf-wrapper object {
			width: 100%;
			height: 100%;
		}
		.user_name {
			margin-top: 15px;
			text-align: center;
		}
		.inputname_txt {
      width: 200px;
      height: 30px;
      padding-left: 10px;
      padding-bottom: 3px;
      margin: 7px;
      font-size: 17px;
      border-radius: 20px;
      background: white;
      border: none;
      transition: background 0.5s;
      margin-bottom: 5px;
      color: #7D7A79;
		}
		.inputname_txt:focus{
      outline-width: 0;
      background: rgba(31,134,252, 0.15);
      transition: background 0.5s;
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
              <?php
              	error_reporting(0);
              	if (is_zalogowany($_SESSION['zalogowany']) == 1)
              	{
              		echo '<li style="color: green;">Zalogowany [ + ]</li>';
              	}
              	if (($_SESSION['zalogowany']) == 0)
              	{
              		echo '<li><a href="login/">Zaloguj się</a></li>';
              	}
              ?>
              <li><a href="destroy.php">Wyloguj</a></li>
              <li><a href="index.php">Powrót</a></li>
          </ul>
          <a style="text-decoration: none; color: white;" href="index.php"><h1 class="logo">EGZAMINY.PL</h1></a>
      </div>
  </nav>
  <div class="navbar">
</div>
  <div style="display: flex;">
  <div class="frm">
	<?php
		require_once "dbconnect.php";

		$polaczenie = @new mysqli("127.0.0.1", "root", "", "egzaminy");
		if (!$polaczenie)
		{
			echo "Nie udało się polaczyc z baza danych!";
		}
		// function sqli_filltering($query)
		// {
		// 	// if function returned 1 mean that in query is posible sql injection payload
		// 	$payloads = array("'", "OR", "-", "--", "||", "|", "UNION", "LIKE", "-- -", "admin'", "1=1", "or 1=1");
		// 	for ($i = 0; $i <= count($payloads); $i++)
		// 	{
		// 		if (strpos($query, $payloads[$i]) == True)
		// 		{
		// 			header('Location: destroy.php');
		// 			exit();
		// 		}
		// 		else
		// 		{
		// 			return 0;
		// 		}
		// 	}
		// }
		// $file_name = htmlentities($_GET['nazwa_pliku'], ENT_QUOTES, "UTF-8");
		$_SESSION['table_name'] = htmlentities($_GET['nazwa_tabeli'], ENT_QUOTES, "UTF-8");
		if (sqli_filltering($_GET['nazwa_tabeli']) == 1)
		{
			echo '<h1 style="color: red; text-align: center; margin-top: 15px;">SQLI DETECTED!</h1>';
			exit();
		}

		$SQL2 = 'SELECT nazwa_pliku FROM '.$_SESSION['table_name'].';';
		if ($res2 = mysqli_query($polaczenie, $SQL2))
		{
			$ile_wynikow = mysqli_num_rows($res2);
			if ($ile_wynikow > 0)
			{
				$wiersz = mysqli_fetch_array($res2);
				$file_name = $wiersz['nazwa_pliku'];
			}
		}
		else
		{
			header('Location: index.php');
			exit();
		}
		echo '<div class="pdf-wrapper">';
		echo '<object data="arkusze/'.$file_name.'" style="width: 100%; height: 100%;"></object>';
		echo '</div>';

		// echo '<div class="user_name">Imie i nazwisko: <input type="text" class="inputname_txt" name="imie_nazwisko" required></div>';
	?>
	<form action="check.php" method="POST">
		<div class="user_name">Imie i nazwisko: <input type="text" class="inputname_txt" name="imie_nazwisko" required></div>		
	<!-- </form> -->
	</div>
	<div class="pud"> <!--nazwy ,i się kończą!-->
	<!-- <form method="POST" action="check.php"> -->
		<br>
		<br>
		<!-- Imie i nazwisko: <input type="text" class="inputname txt" name="imie_nazwisko" required> -->
		<br>
		<?php
			$_SESSION['wyslano'] = false;
			for ($i = 1; $i<=40; $i++)
			{
				echo 'Pytanie'.$i.':&nbsp;&nbsp;<select name="pytanie'.$i.'">
					<option>A</option>
					<option>B</option>
					<option>C</option>
					<option>D</option>
				</select>';
				echo "<br /> <br />";
			}
			$_SESSION['wyslano'] = true;
		?>
		<br />
		<input type="submit" class="btn" value="Sprawdz" name="spr">
	</form>
	</div>
	<script href="script.js">
</body>
</html>