<?php 
// ----------TWO WAYS TO SEND AND FETCH DATA BY AJAX -------------

//LOOPING CAN'T WORK APPROPRIATELY HERE, AS WHILE SENDING AND GETTING THE FIRST AJAX REQUEST,
// THE ENTRE LOOP RUNS AND FINISHES, THUS THE LAST VALUE OF URL IS ONLY ACCEPTED!!
// THIS CAUSES AJAX NOT RUNNING AND FETCH DATA APPROPRIATELY BY JS LOOP!!... 


//ONE
// $(document).ready(function() {

//     var lastIdBefore = $(".specAjaxBtn").last().attr("id");

//     var lastId = ((Number(lastIdBefore)) + 1);

//     for (let i = 0; i < lastId; i++) {

//         var IdScript = "#" + i;
//         var url = $(IdScript).data("remote");


//         $.post("ajax.php", {
//                 sendingTo: "urls",
//                 mainurl: url
//             }, function(data, status) {
//                 $(IdScript).attr("data-original-title", data);
//                 console.log(url+IdScript);
//         });
//         console.log(IdScript);



//         if(i == lastId){
//             return false;
//         }

//     }

// });



//TWO

$sn = 0;
$id = '$("#'.$sn.'")';
$varUrl = '$url'.$sn;

$executingUrl = $id.'.data("remote");';

?>



<script>

$(document).ready(function () {

    // $url0 = $("#0").data("remote");
    <?php  echo $varUrl . " = " . $executingUrl;  ?>

    $url1 = $("#1").data("remote");
    $url2 = $("#2").data("remote");
    $url3 = $("#3").data("remote");
    $url4 = $("#4").data("remote");
    $url5 = $("#5").data("remote");


    $.post("ajax.php", {
        sendingTo: "urls",
        mainurl: $url0
    }, function (data, status) {
        $("#0").attr("data-original-title", data);
    });

    $.post("ajax.php", {
        sendingTo: "urls",
        mainurl: $url1
    }, function (data, status) {
        $("#1").attr("data-original-title", data);
    });

    $.post("ajax.php", {
        sendingTo: "urls",
        mainurl: $url2
    }, function (data, status) {
        $("#2").attr("data-original-title", data);
    });

    $.post("ajax.php", {
        sendingTo: "urls",
        mainurl: $url3
    }, function (data, status) {
        $("#3").attr("data-original-title", data);
    });

    $.post("ajax.php", {
        sendingTo: "urls",
        mainurl: $url4
    }, function (data, status) {
        $("#4").attr("data-original-title", data);
    });

    $.post("ajax.php", {
        sendingTo: "urls",
        mainurl: $url5
    }, function (data, status) {
        $("#5").attr("data-original-title", data);
    });
    return false;

});

</script>