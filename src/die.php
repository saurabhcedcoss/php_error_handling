<?php
if(file_exists("anyfile.php")) {
  $file = fopen("anyfile.php", "r");
} else {
  die("Error: The file does not exist.");
}
?>