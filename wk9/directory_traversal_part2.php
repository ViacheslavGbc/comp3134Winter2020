  GNU nano 2.9.3            directory_traversal_part2.php

<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);


$whitelist = array('/');

  if (in_array($_GET['q'], $whitelist)) {
        $path=isset($_GET['q'])? $_GET['q'] : '.';
  } else {
        //include('home.php');
  }


print "<pre>";
print_r(scandir($path));
print "</pre>";
?>
         