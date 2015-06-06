
<?php require 'includes/init.inc'; ?>
<?php $page_title = 'Изтриване на потребител';?>
<?php require 'includes/header.inc'; ?>
 <?php 
 if ($_GET['id'] == 1) {
 	echo "<h1>Не може да се трие администратор</h1>";
 }
 else{
 	$querydel = mysqli_query($mysqli,"DELETE FROM users where id = '".$_GET['id']."'");
 	header("Location: users.php"); 
	exit;
 }
 ?>

<?php require 'includes/footer.inc'; ?>