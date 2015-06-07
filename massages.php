
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

<?php include_once('functions.php');?>
 <?php  if (!isset($_SESSION['id']) || $_SESSION['role'] != 1) {
 	 header("Location: index.php");
	 exit;
 } ?>
  <div class="datagrid"><table>
        <thead><tr>
            <th align="center">Потребител</th>
            <th align="center">E-mail</th>
            <th align="center">Изпратено</th>
            <th align="center">Съобщение</th>
                  
          </tr></thead>

            <?php
              $results = mysqli_query($mysqli,"SELECT * from contacts");
                              
              if (mysqli_num_rows($results) != 0) {
                   
                  while ($row = mysqli_fetch_array($results)) { ?>
                     <!-- <form action="deluser.php">  <input id="deleteb2" TYPE = "Submit" Name = "Delete" VALUE = "Изтриване на потребител"> </form> -->
                       <tbody><tr><td align="center"><?=htmlspecialchars(stripslashes($row["username"]))?></td>
	                       <td align="center"><?=htmlspecialchars(stripslashes($row['email']))?></td>
	                       <td align="center"><?=htmlspecialchars(stripslashes($row['date']))?></td>
	                       <td align="center"><?=htmlspecialchars(stripslashes($row['massage']))?></td>
                       </tr>
               	<?php
                }
              } else {
                   echo "Няма съобщения.";
              }
            ?>
      </tbody>
    </table>
  </div>



<?php require 'includes/footer.inc'; ?>