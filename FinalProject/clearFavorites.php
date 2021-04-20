<?php
$fp = fopen('favorites.csv', 'w');


    fputcsv($fp, (array)"");  // Will clear the file


fclose($fp);

?>
