<?php require 'includes/init.inc'; ?>
<?php
$page_title = 'Изтриване';
?>

<?php require 'includes/header.inc'; ?>

<?php
if(!isset($_SESSION['role'])) {
	header("Location: login.php");
}

	$results = mysqli_query($mysqli,"SELECT * FROM pics where id = ". $_SESSION['pictureid']."");
	if (mysqli_num_rows($results) != 0) {
       
      while ($img = mysqli_fetch_array($results)) { 
      	if ($_SESSION['id'] == $img['user_id'] || $_SESSION['role'] == 1) {
      		echo "Снимката е изтрита";
                  $query = "DELETE FROM `projectdb`.`pics` WHERE `pics`.`id` = ". $_SESSION['pictureid']."";
                  $mysqli->query($query);
      	
      	}
      	else{
                  echo "Нямате право да изтриете снимката";
            }     
      	
      }
 	}



?>

<?php require 'includes/footer.inc'; ?>