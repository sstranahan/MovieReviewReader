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

//    $curl = curl_init($url);
//    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//    $curl_response = curl_exec($curl);
//    if ($curl_response === false) {
//        $info = curl_getinfo($curl);
//        curl_close($curl);
//        die('error occured during curl exec. Additioanl info: ' . var_export($info));
//    }
//    curl_close($curl);
//    $decoded = json_decode($curl_response);
//    if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
//        die('error occured: ' . $decoded->response->errormessage);
//    }
//    echo 'response ok!';
//    var_export($decoded->response);
//
//
//    echo $decoded;



    //$var1 = 12;
    //echo $var1 . "<br>";
    //
    //$s1 = "To be";
    //$s2 = "not to be";
    //$str = $s1." or ".$s2;
    //$n = strlen($str); //18
    //$A = explode(" ", $str); //$A[0] = "To", $A[1] = "be", etc.
    //$s = strstr($str, "be"); //$s = "be or not to be"
    //$str2 = strrev($str); //$str2 = "eb ot ton ro eb oT"
    //$x = 12.3847;
    //$str3 = sprintf("Price: %.2f %s", $x, $str);
    //
    //echo ($s1 . $s2 . "<br>");
    //
    //for ($i=0; $i<sizeof($A); $i++) {
    //    echo $A[$i]. "<br>";
    //}
    //
    //
    //echo $str3 . "<br>";
    //
    //
    //function mySquare($x) {
    //    $z = $x * $x;
    //    return $z;
    //}
    //
    //$x = 10;
    //
    //echo mySquare($x. "<br>");
    //
    //echo "<br>";
    //
    //$z = array();
    //$z['title'] = 'The Hobbit';
    //$z['author'] = 'Tolkein';
    //$z['year'] = 1937;
    //
    ////$z = array('title' => 'The Hobbit',
    ////    'author' => 'Tolkien',
    ////    'year' => 1937);
    //
    //
    //foreach($z as $key => $value)
    //{
    //    echo "<br>" . $key . ": " . $value;
    //}




?>