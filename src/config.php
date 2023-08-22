<?php
	require_once "vendor/autoload.php";

	define('SECRET_KEY', 'my_secret_key');

	use Firebase\JWT\JWT;
	use Firebase\JWT\Key;

	function delete_score_files() {
		$files = glob('wyniki/*');
		foreach ($files as $file) {
			if (is_file($file)) {
				unlink($file);
			}
		}
		if (count(glob('wyniki/*')) == 0) {
			return 1;
		}
		else {
			return 0;
		}
	}

	function is_zalogowany($session) {
		if ($session == 1) {
			return 1;
		}
		else {
			return 0;
		}
	}

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

	function validateToken($token) {
		try {
	  	$decoded = JWT::decode($token, new Key(SECRET_KEY, 'HS256'), array('HS256'));
	    return true;
		} catch (\Firebase\JWT\ExpiredException $e) {
	  	// token wygasł
	    return false;
		} catch (Exception $e) {
	  	// niepoprawny token
	    return false;
	  }
	}
?>

