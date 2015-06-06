
<?php require 'includes/init.inc'; ?>
<?$page_title = 'Качване на снимка';?>
<?php require 'includes/header.inc';  ?>

<h3>Изберете файл</h3>
<?php if(isset($_SESSION['role'])) {
	?>
<div align="center"> 
	<form action="uploading_picture.php" enctype="multipart/form-data" method="post" name="f" class="form">
		    <div class="form-title">Качване на снимка</div>
		
		    <div class="form-row">
		       <input type="file" name="filep" size=45 required>
		    </div>
		    <div class="form-row">
		    	<br>
		    	<label>Изберете категория</label>
		         <select name="select1">
				  <option value="1">Забавни</option>
				  <option value="2">Абстрактни</option>
				  <option value="3">Интересни</option>
				  <option value="4">Пейзажи</option>
				  <option value="5">Други</option>
				</select> 
		    </div>
		    <div align="center">
		    	<br>
		        <input type="submit" name="submit2" value="Качи">
		    </div>    
	</form>
</div>
<?php } 
else {
	header("Location: login.php");
}?>

<?php require 'includes/footer.inc'; ?>