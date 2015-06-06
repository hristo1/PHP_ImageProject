
<?php require 'includes/init.inc'; ?>

<?php
$page_title = 'Контакти';
?>

<?php require 'includes/header.inc'; ?>

<script type="text/javascript">

  function checkForm(form)
  {
	re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if (!re.test(form.email.value)) {
    	alert("Невалиден E-mail");
		form.email.focus();
      	return false;
    };
    return true;
  }

</script>


<form id="formcon" method="post" name="f" class="form" onsubmit="return checkForm(this)" action="uploadingcontact.php">
	    <div class="form-title">Поле за връзка с нас</div>
	
	    <div class="form-row2">
	        <label for="usernameid">Име</label>
	        <input type="text" maxlength="16" name="username" id="usernameid" required>
	    </div>
	         <div class="form-row2">
			<label>E-mail</label>
            <input type="text" maxlength="16" name="email" id="emailid">
	    </div>
	    <label class="label16" for="passid">Съобщение</label>
	    <div class="form-title3">
	        <textarea style="resize:none"  id="comment1" name="massage" id="comment" rows="5" tabindex="4"   rows="5" required></textarea>
	    </div>
	    <div align="center">
	        <input name="submit" type="submit" value="Изпрати" />
	    </div>    
	</form>					

<?php require 'includes/footer.inc'; ?>