
<?php require 'includes/init.inc'; ?>

<?php
$page_title = 'Потребители';
?>

<?php require 'includes/header.inc'; ?>

<script language="JavaScript" type="text/javascript">
    function checkDelete(){
      return confirm('Сигурни ли сте, че изкате да изтриете потребителя?');
}
</script>

<?php
include_once('functions.php');
$_SESSION['pageing'] = "users";
$id = $_GET['id']; ?>

  <div class="datagrid"><table>
        <thead><tr>
            <th align="center">Потребител</th>
            <th align="center">Качени снимки</th>
            <th align="center">E-mail</th>
            <th align="center">Регистриран</th>
            <?php
            //if (isset($_SESSION['role'])) {
             //
               // if ($_SESSION['role'] == 1 || isset($_SESSION['id']) == '$id') {  
                //echo "<th align='center'>Редакция</th>"; 
              //}
             //}
            if (isset($_SESSION['role'])) {
              
                if($_SESSION['role'] == 1)  {
                echo "<th align='center'>Изтриване</th>";   
              }
            }
            ?>

            
          </tr></thead>

            <?php
              $results = mysqli_query($mysqli,"SELECT users.*, COUNT(pics.id) AS pic_count 
                                                FROM users LEFT JOIN pics
                                                ON users.id = pics.user_id
                                                where users.id = $id  
                                                GROUP BY users.id
                                                ORDER BY datereg asc");
                              
              if (mysqli_num_rows($results) != 0) {
                   
                  while ($row = mysqli_fetch_array($results)) { ?>
                     <!-- <form action="deluser.php">  <input id="deleteb2" TYPE = "Submit" Name = "Delete" VALUE = "Изтриване на потребител"> </form> -->
                       <tbody><tr><td align="center"><?=htmlspecialchars(stripslashes($row["username"]))?></td>
                       <td align="center"><?=htmlspecialchars(stripslashes($row['pic_count']))?></td>
                       <td align="center"><?=htmlspecialchars(stripslashes($row['email']))?></td>
                       <td align="center"><?=htmlspecialchars(stripslashes($row['datereg']))?></td>
                       <?php
                         // if (isset($_SESSION['role'])) {
                          //  if ($_SESSION['role'] == 1 || isset($_SESSION['id']) == '$id') {  
                           //   echo "<td align='center'><a href='deluser.php?id=$row[id]'>Редакция</a></td>"; 
                            //}  
                          //}
                          if (isset($_SESSION['role'])) {
                              if($_SESSION['role'] == 1)  {
                           echo "<td align='center'><a href='deluser.php?id=$row[id]' onclick='return checkDelete()'>Изтриване</a></td>"; 
                              }
                          }?>        
                     </tr>
                <?php
                  }
                
              } else {
                   echo "No records are found.";
              }
            ?>
      </tbody>
    </table>
  </div>



<?php require 'includes/footer.inc'; ?>