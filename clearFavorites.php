<?php
$fp = fopen('favorites.csv', 'w');


    fputcsv($fp, (array)"");


fclose($fp);

?>
