<!DOCTYPE html>
<html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    	<title><?=$page_title;?></title>
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
                    
                    <? 
                        if(!isset($_SESSION['role'])){
                    ?>

                            <a href="contact.php" class="top_menu_a">Контакти</a>
                            <div class="top_menu_right">
                            <a href="login.php" class="top_menu_a">Вход</a>
                            <a href="register.php" class="top_menu_a">Регистрация</a>  
                    <? 
                        }else
                        {
                            if($_SESSION['role']==2){ //user
                    ?>          
                                <a href="contact.php" class="top_menu_a">Контакти</a>
                                <div class="top_menu_right">
                                <a href="upload_picture.php" class="top_menu_a">Качване на снимки</a>
                                <a href="user_images.php" class="top_menu_a">Мойте снимки</a>
                    <?                      
                            }
                             if($_SESSION['role']==1){ //admin
                    ?>      
                                <a href="statistics.php" class="top_menu_a">Статистика</a>
                                <div class="top_menu_right">
                                <a href="upload_picture.php" class="top_menu_a">Качване на снимки</a>
                                <a href="user_images.php" class="top_menu_a">Мойте снимки</a>
                            <?                      
                            }
                    ?>
                       <a href="logout.php" class="top_menu_a">Изход</a>
                    <?
                        }
                    ?>
                    </div>

    		
    			</div>
                <div id="user">
                <? if(isset($_SESSION['username'])){ 
                 ?>
                 <a href="useredit.php?id=<?=$_['id']?>" class="users1"><? echo $_SESSION['username']; ?> </a>
                <?
                }?>
                </div>
    			
    			<div id="left_menu">
			    	<?
				    $result = $mysqli->query("SELECT * FROM pic_category");
                    echo "<h2 align='center'>Категории</h2>";
				    while($row = $result->fetch_assoc()){
			    	?>
					<a href="category.php?category=<?=$row['id']?>" class="left_menu_a"><?=htmlspecialchars(stripslashes($row['category_name']))?></a>
					<? } ?>
    			</div>
    			
    			<div id="content">
                
    				<div id="navigation"> 
    					<!--<a href=".">Начало</a>-->
    					<?$navigation;?>
    				</div>