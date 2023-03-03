<?php
	session_start();
	error_reporting(0);

	if ($_SESSION['zalogowany'] !== true)
	{
		header('Location: index.php');
		exit();
	}
	require_once "dbconnect.php";

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

	$polaczenie = @new mysqli("mysql:3306", "root", "root", "egzaminy");

	if (!$polaczenie)
	{
		echo "Nie udało się polaczyc z baza danych!";
	}

	if (isset($_POST['kwalifikacja']) && isset($_POST['miesiac']) && isset($_POST['rok']) && isset($_FILES['file']))
	{
		$_SESSION['file_name'] = $_FILES['file']['name'];

		$kwalifikacja = $_POST['kwalifikacja'];
		$miesiac = $_POST['miesiac'];
		$rok = $_POST['rok'];

		$nazwa = $kwalifikacja.'_'.$miesiac.'_'.$rok;
		$nazwa_egzaminu = htmlentities($nazwa, ENT_QUOTES, "UTF-8");

		// $sql1 = 'CREATE TABLE '.$nazwa_egzaminu.' (idpytania INT, odp TEXT);';
		$sql1 = 'CREATE TABLE '.$nazwa_egzaminu.' (idpytania INT, odp TEXT, nazwa_pliku TEXT);';
		if (sqli_filltering($sql1) == 1)
		{
			header('Location: destroy.php');
		}
		if ($req1 = mysqli_query($polaczenie, $sql1))
		{
			echo '<h1 style="color: green;">Dodano egzamin do bazy!</h1> <br />';
		}
		else
		{
			echo '<h1 style="color: red;">Nie utworzono tabeli</h1> <br />';
		}

		for ($i = 1; $i <= 40; $i++)
		{
			$answer = $_POST['pytanie'.$i];

			// $sql2 = 'INSERT INTO '.$nazwa_egzaminu.' (`idpytania`, `odp`) VALUES ('.$i.', "'.$answer.'");';
			$sql2 = 'INSERT INTO '.$nazwa_egzaminu.' (`idpytania`, `odp`, `nazwa_pliku`) VALUES ('.$i.',"'.$answer.'","'.$_SESSION['file_name'].'");';
			if ($res2 = mysqli_query($polaczenie, $sql2))
			{
				echo '<h1 style="color: green;">Dodano wszystkie odpowiedzi poprawnie!</h1> <br />';
			}
			else
			{
				echo '<h1 style="color: red;">coś nie tak z pytaniami</h1> <br />';
			}
		}
	}

	if (isset($_FILES['file']))
	{
	   $file_name = $_FILES['file']['name'];
	   $file_tmp = $_FILES['file']['tmp_name'];
	   $file_ext = strtolower(end(explode(".", $_FILES['file']['name'])));

	   $file_dest = "arkusze/";

	   $rozszerzenia = array("pdf");
	   $validation = true;

	   if (in_array($file_ext, $rozszerzenia) == false)
	   {
	   	$validation = false;
	   }

	   if ($validation == true)
	   {
	   	$movefile = move_uploaded_file($file_tmp, $file_dest . $file_name);
	   }
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>dodawanie egzaminu</title>
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
              <li><a href="add_egzamin.php">Dodaj egzamin</a></li>
              <li><a href="scores.php">Wyniki</a></li>
              <?php
              	if ($_SESSION['zalogowany'] == 1)
              	{
              		echo '<li style="color: green;">Zalogowany [ + ]</li>';
              	}
              	if ($_SESSION['zalogowany'] == 0)
              	{
              		echo '<li><a href="login.php">Zaloguj się</a></li>';
              	}
              ?>
              <li><a href="destroy.php">Wyloguj</a></li>
              <li><a href="index.php">Powrót</a></li>
          </ul>
          <h1 class="logo">EGZAMINY.PL</h1>
      </div>
  </nav>
  <div class="navbar">
  </div>
  <div>
  <div class="main2">
	<h1 >Dodaj egzamin w formacie PDF:</h1>
	<form action="add_egzamin.php" method="POST" enctype="multipart/form-data">
		<input type="file" id="txt2" class="txt" name="file" id="send_data" required>
		<br />
		<!-- nazwa egzaminu: <input type="text" name="nazwa_egzaminu" required> -->
		kwalifikacja: <input type="text" name="kwalifikacja" class="txt">
		miesiąc: <input type="text" name="miesiac" class="txt">
		rok: <input type="number" name="rok" class="txt">
		<br />
		</div>
		<div class="main">
		<h1>wprowadz poprawne odpowiedzi:</h1>
		<br />
		<?php
			for ($i = 1; $i<=40; $i++)
			{
				echo 'Pytanie'.$i.':<select name="pytanie'.$i.'">
					<option>A</option>
					<option>B</option>
					<option>C</option>
					<option>D</option>
				</select>';
				echo "<br /> <br />";

				$_SESSION['dodany'] = true;
			}
		?>
		<input type="submit" value="DODAJ" class="btn auto">
	</form>
	</div>
	</div>
</body>
</html>