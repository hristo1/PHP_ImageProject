
<?php require 'includes/init.inc'; ?>

<?php
	$page_title = 'Контакти';
?>

<?php require 'includes/header.inc'; ?>
	<?php

	if ($_POST["submit"])
	{

		$query = "INSERT into contacts (username, email, massage) VALUES('".$_POST["username"]."', '".$_POST['email']."', '".$_POST['massage']."')";
		$mysqli->query($query);
		?>
			<h1 id="massage1">Съобщението е изпратено</h1>
		<?php
	}
?>

<?php require 'includes/footer.inc'; ?>