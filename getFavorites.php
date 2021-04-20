<?php


$matrix = array();
if (($fp = fopen("favorites.csv", "r")) !== FALSE)
{
    while (($row = fgetcsv($fp, 4000, ",")) !== FALSE)
    {
        $matrix[] = $row;
    }

    fclose($fp);
}

#Convert the PHP matrix to json and send back to client

$json = json_encode($matrix);

header('Content-type: application/json');
echo $json;

?>