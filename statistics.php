
<?php require 'includes/init.inc'; ?>

<?php
$page_title = 'Потребители';
?>

<?php require 'includes/header.inc'; ?>
 <div id = "statistic-left"> <h1>Последни качени снимки</h1> <br>
<?
  $results = mysqli_query($mysqli,"SELECT * FROM pics ORDER BY pic_upload_date DESC limit 5"); 
  if (mysqli_num_rows($results) != 0) {
     while ($row = mysqli_fetch_array($results)) {    
        $pictureUserId = $row['user_id'];
        $object_title = htmlspecialchars(stripslashes($row['pic_name'].($row['pic_upload_date']?', '.$row['user_id']:'')));
        $small_pic = $pictires_dir.$pictires_prefix.$row['pic_name'];
         ?>
            
            <a href="pictures.php?id=<?=$row['id']?>">
            <img  class="img4" src="<?=$small_pic?>" alt="<?=$object_title?>" title="<?=$object_title?>">
            </a>   
      <div class="uploaded">Качено: <?=htmlspecialchars(stripslashes($row["pic_upload_date"]))?></div>
      <br>

      <?
      if(isset($_SESSION['id'])){ ?>
        <form action="deleteing.php" id="delbut">  <input id="deleteb" TYPE = "Submit" Name = "Delete" VALUE = "Изтриване на снимка"> </form>
      <?
  }
  }
}
 ?>
 </div>
 <div id = "statistic-right"> <h1>Последно регистриране потребители</h1>
   <?
$results = mysqli_query($mysqli,"SELECT * FROM users ORDER BY datereg DESC limit 5"); 
  if (mysqli_num_rows($results) != 0) {
     while ($user = mysqli_fetch_array($results)) {  ?>
        <div id="leftuser">
        <a href="userinfo.php?id=<?=$row['id']?>" id = "users23"> <h2>Потребител: <?echo $user['username']?> </h2> </a>  
         <p id = "pusers">Дата на регистрация: <?echo $user['datereg']?> </p>
         </div>
        <?
      }
    }
    ?>  
 </div>

<?php require 'includes/footer.inc'; ?>