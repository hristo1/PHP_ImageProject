
<?php require 'includes/init.inc'; ?>
<?$page_title = 'Изтриване на потребител';?>
<?php require 'includes/header.inc'; ?>
 <?
 	$querydel = mysqli_query($mysqli,"DELETE FROM users where id = '".$_GET['id']."'");
 	header("Location: users.php"); 
	exit;
 ?>

<?php require 'includes/footer.inc'; ?>