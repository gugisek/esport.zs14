<?php
    include '../../scripts/security.php';

    function sendToBase($xd){
        include '../../scripts/conn_db.php';
        $sql = "UPDATE informations set value = '".$xd."' WHERE name = 'events_selected_hero'";
        if(mysqli_query($conn, $sql)){
            $_SESSION['alert'] = 'Pomyślnie zmieniono hero podstrony Eventy';
            $_SESSION['alert_type'] = 'success';

            //log
            //DO UZUPEŁNIENIA
            //logend
        }else{
            $_SESSION['alert'] = 'Wystąpił błąd podczas zmiany';
            $_SESSION['alert_type'] = 'error';
        }
    }

    $selected = $_POST['selected'];
    if($selected == '0'){
        sendToBase('blank_page');
    } else if($selected == '1'){
        sendToBase('clock');
    } else if($selected == '2'){
        sendToBase('last_champions');
    } else if($selected == '3'){
        sendToBase('schedule');
    } else{

    }
    mysqli_close($conn);
?>