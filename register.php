<?php
 require 'includes/init.inc';

	$page_title = 'Регистрация';
	$navigation = ' / <a href="'.$_SERVER['PHP_SELF'].'">Регистрация</a>';
	$submit = null;

	if(isset($_POST['submit1']))
	{
		$username = $mysqli->escape_string(trim($_POST['username']));
		$email = $mysqli->escape_string(trim($_POST['email']));
		$password = $mysqli->escape_string(trim($_POST['pass']));  
		$query = "INSERT INTO users (username, password, email) VALUES('$username', '$password', '$email')";
		$infoMessage = $query;
		$result = $mysqli->query($query);
	 	header("Location: login.php");
	 	exit;
	}
	else{

	}

	require 'includes/header.inc';
?>

<div align="center"> 
	<script type="text/javascript">

  function checkForm(form)
  {
    if(form.username.value == "") {
      alert("Въведете потребителско име");
      form.username.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.username.value)) {
      alert("Потребителско име може да садържа само латински букви, цифри и  ''_''");
      form.username.focus();
      return false;
    }
	re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if (!re.test(form.email.value)) {
    	alert("Невалиден E-mail");
		form.email.focus();
      	return false;
    };

    if(form.pass.value != "" && form.pass.value == form.pass2.value) {
      if(form.pass.value.length < 4) {
        alert("Паролата трябва да е минимум 4 символа");
        form.pass.focus();
        return false;
      }
      if(form.pass.value == form.username.value) {
        alert("Паролата трябва да е различна от потребителско име");
        form.pass.focus();
        return false;
      }

    } else {
      alert("Паролите не съвпадат");
      form.pass.focus();
      return false;
    }

    alert("Успешна регистрация, " + form.username.value);
    return true;
  }

</script>

	<form method="post" name="f" class="form" onsubmit="return checkForm(this)">
	    <div class="form-title">Регистрация</div>
	
	    <div class="form-row">
	        <label for="usernameid">Потребителско име</label>
	        <input type="text" maxlength="16" name="username" id="usernameid">
	    </div>
	         <div class="form-row">
			<label>E-mail</label>
            <input type="text" maxlength="16" name="email" id="emailid"/>
	    </div>
	    <div class="form-row">
	        <label for="passid">Парола</label>
	        <input type="password" maxlength="16" name="pass" id="passid">
	    </div>
	     <div class="form-row">
			<label>Потвърдете парола</label>
            <input type="password" maxlength="16" name="pass2" id="passid"/>
	    </div>
	    <div align="center">
	        <input type="submit" name="submit1" value="Регистрация">
	    </div>    
	</form>

	

</div>

<?php require 'includes/footer.inc' ?>