
<?php require 'includes/init.inc'; ?>
<?php $page_title = 'Качване на снимка';?>
<?php require 'includes/header.inc'; ?>

<?php

if(!isset($_SESSION['role'])) {
	header("Location: login.php");
}

if (isset($_POST["submit2"]) == "Качи")
{
$folder = "images/Uploaded/";


move_uploaded_file($_FILES["filep"]["tmp_name"] , "$folder".$_FILES["filep"]["name"]);

echo "<p align=center>".$_FILES["filep"]["name"]." се качва...";

$results2 = mysqli_query($mysqli,"SELECT *, COUNT(ID) as total  FROM pics WHERE user_id = '".$_SESSION['id']."' group by user_id ");
 $userpics = 0;
if (mysqli_num_rows($results2) != 0) {
     
    while ($row = mysqli_fetch_array($results2)) { 
    $userpics =  $row["total"];
    }  
} 

if ($_FILES["filep"]["name"] != "" && $userpics <= 10) {
	$query = "INSERT INTO `projectdb`.`pics` (`pic_name`, `pic_upload_date`, `category_id`, `user_id`) VALUES ('".$_FILES['filep']['name']."', CURRENT_TIMESTAMP, '".$_POST['select1']."', '".$_SESSION['id']."')";
	$mysqli->query($query);
	echo "Вид: " . $_FILES["filep"]["type"] . "<br />";
	echo "Размер: " . ($_FILES["filep"]["size"] / 1024) . " Kb<br />";
	echo "<br>";

	if($result) { echo "Снимката е запазена"; }
	else {
		echo "Проблем";
	}
}
else{
	echo "<h1 align='center' class='warning'>Достигнат лимит на качване.Може да запазвате до 10 снимки!</h1>";
}
}
?>

<?php require 'includes/footer.inc'; ?>