<!DOCTYPE html>
<html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    	<title><?php $page_title;?></title>
    	<link href="styles/style.css" type="text/css" rel="stylesheet">
    </head>
    <body>  
    	<div align="center">
    		
    		<div id="site"> 
    			<div id="header"></div>
    			
    			
    			<div id="top_menu"> 
                     <div class="top_menu_left">
                        <a href="." class="top_menu_a">Начало</a>
                        <a href="pictures.php" class="top_menu_a">Снимки</a>
                        <a href="users.php" class="top_menu_a">Потребители</a>
                        
                    </div>
                    
                    <?php 
                        if(!isset($_SESSION['role'])){
                    ?>

                            <a href="contact.php" class="top_menu_a">Контакти</a>
                            <div class="top_menu_right">
                            <a href="login.php" class="top_menu_a">Вход</a>
                            <a href="register.php" class="top_menu_a">Регистрация</a>  
                    <?php 
                        }else
                        {
                            if($_SESSION['role']==2){ //user
                    ?>          
                                <a href="contact.php" class="top_menu_a">Контакти</a>
                                <div class="top_menu_right">
                                <a href="upload_picture.php" class="top_menu_a">Качване на снимки</a>
                                <a href="user_images.php" class="top_menu_a">Мойте снимки</a>
                    <?php                      
                            }
                             if($_SESSION['role']==1){ //admin
                    ?>      
                                <a href="statistics.php" class="top_menu_a">Статистика</a>
                                <a href="massages.php" class="top_menu_a">Съобщения</a>
                                <div class="top_menu_right">
                                <a href="upload_picture.php" class="top_menu_a">Качване на снимки</a>
                                <a href="user_images.php" class="top_menu_a">Мойте снимки</a>
                            <?php                      
                            }
                    ?>
                       <a href="logout.php" class="top_menu_a">Изход</a>
                    <?php
                        }
                    ?>
                    </div>

    		
    			</div>
                <div id="user">
                <?php if(isset($_SESSION['username'])){ 
                 ?>
                 <a href="userinfo.php?id=<?=$_SESSION['role']?>" class="users1"><?php echo $_SESSION['username']; ?> </a>
                <?php
                }?>
                </div>
    			
    			<div id="left_menu">
			    	<?php
				    $result = $mysqli->query("SELECT * FROM pic_category");
                    echo "<h2 align='center'>Категории</h2>";
				    while($row = $result->fetch_assoc()){
			    	?>
					<a href="category.php?category=<?=$row['id']?>" class="left_menu_a"><?=htmlspecialchars(stripslashes($row['category_name']))?></a>
					<?php } ?>
    			</div>
    			
    			<div id="content">
                
    				<div id="navigation"> 
    					<!--<a href=".">Начало</a>-->
    					<?php $navigation; ?>
    				</div>