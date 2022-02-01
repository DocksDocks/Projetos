<?php
session_start();
session_unset();
session_destroy();
if(isset($_GET['deletar']))header('location: ../pagelogin\login.php?deletar=true');
else header('location: ../pagelogin\login.php');
?>