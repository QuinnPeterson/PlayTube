<?php
	define('DB_HOST', '');
	define('DB_NAME', 'videotube');
	define('DB_USERNAME', '');
	define('DB_PASSWORD', '');
?>

<?php
	ob_start(); //Turn on output buffering
	session_start();
	date_default_timezone_set("US/Eastern");
	
	try{
		$con = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_HOST, DB_USERNAME, DB_PASSWORD);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		$con->exec("SET NAMES UTF8");
	}catch (PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}

?>