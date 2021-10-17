<?php
	include "src/Environment.class.php";
	new Environment('./config/.env');

	// SET SOME VARIABLES
	$file 			= $_ENV['FILE'];
	$project_path 	= $_ENV['PROJECT_PATH'];

	// EXECUTE IT
	if (isset($_GET['commithash']) && !empty($_GET['commithash'])) {
		$commithash 	= $_GET['commithash'];

		$cmd = '';
		$cmd .= "date" . PHP_EOL;
		$cmd .= "cd {$project_path}" . PHP_EOL;
		$cmd .= "git checkout {$commithash}" . PHP_EOL;

		$fp = fopen($file, 'a+');
		fwrite($fp, $cmd);
		fclose($fp);
		chmod($file, 0777);
	}
	else {
		echo "Hi there! :)";
	}
?>