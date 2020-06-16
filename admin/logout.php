<?php session_start(); ?>



<?php
 $_SESSION['userSession'] = null;
 $_SESSION['email'] = null;
 header("Location: ../index.php");
?>
