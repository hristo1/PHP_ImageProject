
<?php require 'includes/init.inc'; ?>

<?php
if (isset($_GET['category'])) {
 if ($_GET['category'] == 1) {
    $page_title = 'Забавни снимски';
    $_SESSION['title'] = $page_title;
  }
  if ($_GET['category'] == 2) {
    $page_title = 'Абстрактни снимски';
    $_SESSION['title'] = $page_title;
  }
  if ($_GET['category'] == 3) {
    $page_title = 'Интересни снимски';
    $_SESSION['title'] = $page_title;
  }
  if ($_GET['category'] == 4) {
    $page_title = 'Пейзажи снимски';
    $_SESSION['title'] = $page_title;
  }
  if ($_GET['category'] == 5) {
    $page_title = 'Други снимски';
    $_SESSION['title'] = $page_title;
  }
}
else{
   $page_title = $_SESSION['title'];
}

?>

<?php require 'includes/header.inc'; ?>
<?php
include_once('functions.php');

 $_SESSION['pageing'] = "pics";
 $_SESSION['pageing2'] = "category_id";

 if (isset($_GET['category'])) {
    $_SESSION['category'] =  $_GET['category'];
    $_SESSION['categoryPageing'] =  $_GET['category'];
    //echo $_SESSION['category'];
 }


$page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
if ($page <= 0) $page = 1;
 
$per_page = 1; 
$startpoint = ($page * $per_page) - $per_page;

$statement = "`records` ORDER BY `id` ASC";

$results = mysqli_query($mysqli,"SELECT * FROM pics  WHERE category_id = ". $_SESSION['category'] ." ORDER BY pic_upload_date DESC LIMIT {$startpoint} , {$per_page}");
 
if (mysqli_num_rows($results) != 0) {
     
    while ($row = mysqli_fetch_array($results)) {      
      $object_title = htmlspecialchars(stripslashes($row['pic_name'].($row['pic_upload_date']?', '.$row['user_id']:'')));
      $small_pic = $pictires_dir.$pictires_prefix.$row['pic_name']; 
       ?>
       <h2 class="imageH2"><?=htmlspecialchars(stripslashes($row["pic_name"]))?></h2>
        <a href="picture_view.php?id=<?=$row['id']?>">
              <img class="img2" src="<?=$small_pic?>" alt="<?=$object_title?>" title="<?=$object_title?>">
        </a>   
    <div class="uploaded">Качено: <?=htmlspecialchars(stripslashes($row["pic_upload_date"]))?></div>
    <?php
    }
  
} else {
     echo "Няма снимки в тази категория.";
}
 
echo pagination($statement,$per_page,$page,$url='?');
?>

<?php require 'includes/footer.inc'; ?>