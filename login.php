<?php
 require 'includes/init.inc';

	$page_title = 'Вход';

	if(isset($_POST['submit']))
	{
	  $username = $mysqli->escape_string(trim($_POST['username']));
	  $password = $mysqli->escape_string(trim($_POST['pass'])); 

	  $query = $mysqli->prepare("SELECT * FROM users WHERE username= (?) AND password= (?) ");
	  $query->bind_param("ss", $username, $password);
	   $query -> execute();
	   $result = $query -> get_result();
	  if($row = $result->fetch_assoc())
	  {
	  	 $_SESSION['id'] = $row['id']; 
		 $_SESSION['role'] = $row['role']; 
		 $_SESSION['username'] = $row['username']; 
		 
	  	 header("Location: index.php"); 
		 exit;
	  }
	  else{
	  	  $errorMessage = 'Грешка: невалиднo потребителско име и/или парола!';
	  	}
	  }

	require 'includes/header.inc';
?>
<div align="center"> 

	<?php if(isset($errorMessage)){
		?>
		<div class="errorBlock"><?=$errorMessage?></div>
		<?php
	} ?>
	<??>
	 
	<form method="post" name="f" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form">
	    <div class="form-title">Вход</div>
	
	    <div class="form-row">
	        <label for="usernameid">Потребителско име</label>
	        <input type="text" maxlength="16" name="username" id="usernameid">
	    </div>
	    <div class="form-row">
	        <label for="passid">Парола</label>
	        <input type="password" maxlength="16" name="pass" id="passid">
	    </div>
	    <div align="center">
	        <input type="submit" name="submit" value="Вход">
	    </div>    
	</form>

</div>

<?php require 'includes/footer.inc' ?>