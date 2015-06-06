<?php

  if($_SESSION['person_type']!=1) 
  {
      header("Location: login.php"); 
      exit;
  }
?>