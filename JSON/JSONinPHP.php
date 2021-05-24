

<?php
//This Function returns the content of a file
  $text = file_get_contents('path/filename.json');

//converts JSON Text into php array of objects
  $arr = json_decode($text);

//converts JSON Text into php array of assosiative array
  $arr = json_decode($text,true);


?>
