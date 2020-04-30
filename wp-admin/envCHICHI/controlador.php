<?php

if(isset($_POST["Import"])){

	$conn =new mysqli(getenv("MYSQL_SERVICE_HOST"), getenv("DB_USER"), getenv("DB_PASS") ,  getenv("DB_NAME"));

	$query = '';
	$sqlScript = $_FILES["file"];
	foreach ($sqlScript as $line)	{
		
		$startWith = substr(trim($line), 0 ,2);
		$endWith = substr(trim($line), -1 ,1);
		
		if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
			continue;
		}
			
		$query = $query . $line;
		if ($endWith == ';') {
			mysqli_query($conn,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
			$query= '';		
		}
	}
	echo '<div class="success-response sql-import-response">SQL file imported successfully</div>';
}
?>