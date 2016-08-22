<?php
    error_reporting(-1);
    mb_internal_encoding('utf-8');
    header('Content-Type: text/html; charset=utf-8');
    //С помощью CURL запросить данные по адресу:
    // https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json
    //Вывести title и page_id

    $link="https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json";

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $output = curl_exec($ch);
    curl_exec($ch);
    $info = curl_getinfo($ch);
    echo "<br>";
    echo "<pre>";
   // echo $output;
    echo "</pre>";
    $taskList=json_decode($output,TRUE);

    echo "<pre>";
    //echo $taskList;
    echo "</pre>";

    curl_close($ch);

?>