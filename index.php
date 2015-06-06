<?
/*
 * Начална страница
 */
?>
<? require 'includes/init.inc'; ?>

<?
$page_title = 'Начало';
?>


<? require 'includes/header.inc'; ?>

<h1>Най-новите снимки!</h1>


<?
  $query  = "SELECT * FROM pics  ORDER BY pic_upload_date DESC LIMIT 10";
  $result = $mysqli->query($query);
  $num_results = $result->num_rows;
  if($num_results>0){
?>

<table class="table-view">
  <tr>
	<?
	    $j=0;
	    while($row = $result->fetch_assoc()){
	?>
	<td>
		<?            
		    $object_title = htmlspecialchars(stripslashes($row['pic_name'].($row['pic_upload_date']?', '.$row['user_id']:'')));
			$small_pic = $pictires_dir.$pictires_prefix.$row['pic_name']; 
        ?>
        <a href="picture_view.php?id=<?=$row['id']?>">
        	<img class="img" src="<?=$small_pic?>" alt="<?=$object_title?>" title="<?=$object_title?>">
        </a>              
        <h2 class="name"><?=htmlspecialchars(stripslashes($row['pic_name']))?></h2>
        <? if($row["pic_name"]){?>
           	<div class="uploaded">Качено: <?=htmlspecialchars(stripslashes($row["pic_upload_date"]))?></div>
        <? }?>
        <a href="picture_view.php?id=<?=$row["id"]?>" class="more-info">Повече информация</a>
    </td>
<?
	  if($j==1)
	  {
	    if(($j+1)<$num_results)
	      echo '</tr><tr>';
		$j = 0;
	  }
	  else
	    $j++;  
	}
?>
  </tr>
</table>
<?  	
  }

?>



<? require 'includes/footer.inc'; ?>