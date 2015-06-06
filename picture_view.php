
<?php require 'includes/init.inc'; ?>

<?php
  $page_title = 'Снимки';
?>

<?php require 'includes/header.inc'; ?>
<?php
  $_SESSION['pictureid'] = $_GET['id'];

  $results3 = mysqli_query($mysqli,"SELECT *, COUNT(ID) as total  FROM comments WHERE picture_id = '".$_SESSION['pictureid']."' group by picture_id ");
  $commentcount = 0;
  if (mysqli_num_rows($results3) != 0) {
       
      while ($row = mysqli_fetch_array($results3)) { 
        $commentcount =  $row["total"];
      }  
  } 

   
  $results = mysqli_query($mysqli,"SELECT * FROM pics where id = ". $_GET['id'] ."");
  $results2 = mysqli_query($mysqli,"SELECT * FROM comments where picture_id = ". $_GET['id'] ."");

  $results4 = mysqli_query($mysqli,"SELECT * FROM pics where id = ". $_GET['id'] ."");
   
  if (mysqli_num_rows($results) != 0) {
       
      while ($row = mysqli_fetch_array($results)) {    
        $pictureUserId = $row['user_id'];
        $object_title = htmlspecialchars(stripslashes($row['pic_name'].($row['pic_upload_date']?', '.$row['user_id']:'')));
        $small_pic = $pictires_dir.$pictires_prefix.$row['pic_name'];
         ?>
      <a href="pictures.php?id=<?=$row['id']?>">
            <img  class="img3" src="<?=$small_pic?>" alt="<?php $object_title?>" title="<?php $object_title?>">
          </a>   
      <div class="uploaded">Качено: <?=htmlspecialchars(stripslashes($row["pic_upload_date"]))?>, коментари <?php echo $commentcount?></div>
      <br>
      <?php
      if(isset($_SESSION['id'])){ ?>
        <form action="deleteing.php">  <input id="deleteb" TYPE = "Submit" Name = "Delete" VALUE = "Изтриване на снимка" onclick='return checkDelete()'> </form>
      <?php
  }
      }
    
  } else {
       echo "Грешка.";
  } 
   if (mysqli_num_rows($results2) != 0) {
     while ($row = mysqli_fetch_array($results2)) {  
      $usernamebyID = mysqli_query($mysqli,"SELECT username FROM users where  id = ". $row["user_id"] ."");
      while($user = mysqli_fetch_array($usernamebyID)){ ?>
         <div class="Comment">Потребител: <?=htmlspecialchars(stripslashes($user["username"]))?></div>
      <?php }
      ?>
      <div class="Comment">Дата: <?php $row["comment_date"]?> <?=htmlspecialchars(stripslashes($row["comment_date"]))?>
      <h2 class="comment2"><?=htmlspecialchars(stripslashes($row["comment"]))?></h2>
      </div>
    <?php }
   }
  if(isset($_SESSION['role'])) {
?>
<div id="respond" align="center">
<?php if ($commentcount < 100) {
 ?>
  <h3>Оставете коментар</h3>

  <form action="uploadcomment.php" method="post" id="commentform">


    <label for="comment" class="required" >Коментар</label>
    <textarea style="resize:none" id="comment1" name="comment" id="comment" rows="5" tabindex="4"  required="required" rows="5" style="border:groove 6px grey;"></textarea>
    <input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID" />
    <input name="submit" type="submit" value="Изпрати" />

  </form>
  <?php } ?>
</div>
<?php } ?>

<script language="JavaScript" type="text/javascript">
      function checkDelete(){
        return confirm('Сигурни ли сте, че изкате да изтриете снимка?');
  }
</script>

<? require 'includes/footer.inc'; ?>