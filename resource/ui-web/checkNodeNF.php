<?php require_once('auth.php'); ?>
<?php if (isset($auth) && $auth) {?>
<?php

$nodenfnum = exec("/usr/local/bin/ui-checkNodeNF"); 

echo shell_exec("awk 'NR=={$nodenfnum}{print}' /var/www/html/nodename.txt");

die();
?>
<?php }?>
