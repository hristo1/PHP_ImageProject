
<?php 
	session_start(); // използва се сесията
	
	session_destroy(); // унищожава се сесията
	
	header("Location: ."); // Пренасочва към началната страница на сайта
	exit;
?>