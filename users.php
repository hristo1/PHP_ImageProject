
<?php require 'includes/init.inc'; ?>

<?php
$page_title = 'Потребители';
?>

<?php require 'includes/header.inc'; ?>
<?
include_once('functions.php');
$_SESSION['pageing'] = "users";
$_SESSION['pageing2'] = "*";
$_SESSION['categoryPageing'] = null;
$page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
if ($page <= 0) $page = 1;
$statement = "";
$per_page = 10; 
$startpoint = ($page * $per_page) - $per_page;
$test = 1;
$results = mysqli_query($mysqli,"SELECT users.*, COUNT(pics.id) AS pic_count 
                                  FROM users LEFT JOIN pics
                                  ON users.id = pics.user_id
                                  GROUP BY users.id
                                  ORDER BY pic_count desc
                                  LIMIT {$startpoint} , {$per_page}"); 
   
    ?> 
          <div class="datagrid"><table>
          <thead><tr>
            <th align="center">Потребител</th>
            <th align="center">Качени снимки</th>
            <th align="center">Виж всички снимки на потребителя</th>
            <?
                if (isset($_SESSION['role'])) {
                if ($_SESSION['role'] == 1) {  
                echo "<th align='center'>Редакция</th>"; 
              }
             }
             if (isset($_SESSION['role'])) {
              
                if($_SESSION['role'] == 1)  {
                echo "<th align='center'>Информация</th>";   
              }
            }
             ?>  
          </tr></thead>
    <?

if (mysqli_num_rows($results) != 0) {
     
    while ($row = mysqli_fetch_array($results)) { 
       ?>


          <tbody><tr>
            <td align="center"><?=htmlspecialchars(stripslashes($row["username"]))?></td>
            <td align="center"><?=htmlspecialchars(stripslashes($row['pic_count']))?></td>
            <td align="center"><a href="user_images.php?id=<?=$row['id']?>">Виж</a></td>
            <? 
              if (isset($_SESSION['role'])) {
              if ($_SESSION['role'] == 1 ) {  
              echo "<td align='center'><a href=''>Редакция</a></td>"; 
              }  
           }
              if (isset($_SESSION['role'])) {
               if($_SESSION['role'] == 1)  {
                  echo "<td align='center'><a href='userinfo.php?id=$row[id]' onclick='return checkDelete()'>Инфо</a></td>"; 
                 }
              }
           ?>
          </tr>
  <?
    }
  ?>
       </tbody>
        </table>
      </div>
  <?
} else {
     echo "Няма намерени потребители.";
}

 
echo pagination($statement,$per_page,$page,$url='?');
?>

<?php require 'includes/footer.inc'; ?>