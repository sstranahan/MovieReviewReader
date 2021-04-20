<?php

    $displayTitle = $_POST['displayTitle'];
    $imgURL = $_POST['imgURL'];
    $mpaaRating = $_POST['mpaaRating'];
    $headline = $_POST['headline'];
    $dateUpdated = $_POST['dateUpdated'];
    $linkURL = $_POST['linkURL'];
    $linkText = $_POST['linkText'];
    $summary = $_POST['summary'];

     $matrix = array();
     if (($fp = fopen("favorites.csv", "r")) !== FALSE)
     {
         while (($row = fgetcsv($fp, 4000, ",")) !== FALSE)
         {
             $matrix[] = $row;
         }

         fclose($fp);
     }

     #Add new favorite to end of matrix
     $matrix[] = array($displayTitle, $imgURL, $mpaaRating, $headline, $dateUpdated, $linkURL, $linkText, $summary);

     #Write the new matrix to the favorites file

     $fp = fopen('favorites.csv', 'w');

     foreach ($matrix as $row)
     {
         fputcsv($fp, $row);
     }

     fclose($fp);

     #Convert the PHP matrix to json and send back to client

     $json = json_encode($matrix);

     header('Content-type: application/json');
     echo $json;

?>