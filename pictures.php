
<?php require 'includes/init.inc'; ?>

<?php
$page_title = 'Снимки';
?>

<?php require 'includes/header.inc'; ?>
<?php
include_once('functions.php');

 $_SESSION['pageing'] = "pics";
 $_SESSION['pageing2'] = "*";
 $_SESSION['categoryPageing'] = null;
$page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
if ($page <= 0) $page = 1;
 
$per_page = 10; 
$startpoint = ($page * $per_page) - $per_page;

$statement = "`records` ORDER BY `id` ASC";

$results = mysqli_query($mysqli,"SELECT * FROM pics ORDER BY pic_upload_date DESC LIMIT {$startpoint} , {$per_page}");
 
if (mysqli_num_rows($results) != 0) {
     
    while ($row = mysqli_fetch_array($results)) {      
      $object_title = htmlspecialchars(stripslashes($row['pic_name'].($row['pic_upload_date']?', '.$row['user_id']:'')));
      $small_pic = $pictires_dir.$pictires_prefix.$row['pic_name']; 
       ?>
        <h2 class="imageH2"><?=htmlspecialchars(stripslashes($row["pic_name"]))?></h2>
        <a href="picture_view.php?id=<?=$row['id']?>">
              <img class="img2" src="<?=$small_pic?>" alt="<?php $object_title?>" title="<?php $object_title?>">
        </a>   
    <div class="uploaded">Качено: <?=htmlspecialchars(stripslashes($row["pic_upload_date"]))?></div>
    <?php
    }
  
} else {
     echo "No records are found.";
}
 
echo pagination($statement,$per_page,$page,$url='?');
?>

<?php require 'includes/footer.inc'; ?>