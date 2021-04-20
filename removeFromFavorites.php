<?php

    $id = $_POST['id'];

    $matrix = array();

    if (($fp = fopen("favorites.csv", "r")) !== FALSE)
    {
        while (($row = fgetcsv($fp, 4000, ",")) !== FALSE)
        {
            $matrix[] = $row;
        }

        fclose($fp);
    }

    array_splice($matrix, $id, 1);

    $fp = fopen('favorites.csv', 'w');

    foreach ($matrix as $row)
    {
        fputcsv($fp, $row);
    }

    fclose($fp);


    $json = json_encode($matrix);

    header('Content-type: application/json');
    echo $json;