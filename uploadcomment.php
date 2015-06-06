
<? require 'includes/init.inc'; 
 require 'includes/header.inc'; 
 $page_title = 'Коментари';
 ?>

<?
if(!isset($_SESSION['role'])) {
	header("Location: login.php");
}

if ($_POST["submit"] == "Изпрати")
{
global $pictureID;
	$query = "INSERT into comments (comment, user_id, picture_id) VALUES('".$_POST["comment"]."', '".$_SESSION['id']."', '".$_SESSION['pictureid']."')";
	$mysqli->query($query);
	

	header("Location: picture_view.php?id=".$_SESSION['pictureid']."");
}
?>

<? require 'includes/footer.inc'; ?>