<?php

if (isset($_POST["sendingTo"])) {
    $fetchUrlData = $_POST["mainurl"];

    $ch = curl_init();
    $fetchUrl = $fetchUrlData;
    curl_setopt($ch, CURLOPT_URL, $fetchUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    echo $result;
    curl_close($ch);

}



?>