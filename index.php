<?php
$pagetitle = "Home";
include_once('includes/header.php');
$users = new users();
$allusers = $users-> selectall();
print_r($allusers);
?>
        
<?php
include_once('includes/footer.php')
?>