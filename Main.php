<?php

    $str = $_GET['searchTerm'];
    $startYr = $_GET['startYear'];
    $endYr = $_GET['endYear'];
    $offset = $_GET['offset'];

    $apiKey = "gYhUcj8o2vphuHoUDazCRNfpwVc37ALv";
 //   $url = "http://api.nytimes.com/svc/search/v2/articlesearch.json?q=".$str."&api-key=".$apiKey;
    $url2 = "https://api.nytimes.com/svc/movies/v2/reviews/search.json?query=".$str."&opening-date=".$startYr."-01-01:"
        .$endYr."-01-01&api-key=jjLhMLHHp43pEGBw0HaJEqcehYpMiiCA&offset=".$offset;

    $jsonstr = file_get_contents($url2);

    $json = json_encode($jsonstr);

    header('Content-type: application/json');
    echo $jsonstr;


?>