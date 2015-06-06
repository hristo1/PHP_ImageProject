
<?php require 'includes/init.inc'; ?>

<?php
$page_title = 'Мойте снимки';
?>

<?php require 'includes/header.inc'; ?>
<?php
include_once('functions.php');
 if (isset($_GET['id'])) {
   $uimg =  $_GET['id'];
 }
 else{
  $uimg = $_SESSION['id'];
 }
$results = mysqli_query($mysqli,"SELECT * FROM pics where user_id = '$uimg' ORDER BY pic_upload_date  DESC");

  $resultsUser = mysqli_query($mysqli,"SELECT * FROM users where id = '$uimg'");
  if (mysqli_num_rows($resultsUser) != 0) {
    while ($row2 = mysqli_fetch_array($resultsUser)) {  
    $userName = $row2['username'];
    }
  }
if (mysqli_num_rows($results) != 0) {
     
    while ($row = mysqli_fetch_array($results)) {      
      $object_title = htmlspecialchars(stripslashes($row['pic_name'].($row['pic_upload_date']?', '.$row['user_id']:'')));
      $small_pic = $pictires_dir.$pictires_prefix.$row['pic_name']; 
       ?>
       <h1 align="center">Снимки качени от: <?php echo $userName ?></h1>
    <a href="picture_view.php?id=<?=$row['id']?>">
          <img class="img2" src="<?=$small_pic?>" alt="<?=$object_title?>" title="<?=$object_title?>">
        </a>   
    <div class="uploaded">Качено: <?=htmlspecialchars(stripslashes($row["pic_upload_date"]))?></div>
    <?php
    }
  
  } 
  else {
     echo "Няма намерени записи.";
    }
 
?>

<?php require 'includes/footer.inc'; ?>