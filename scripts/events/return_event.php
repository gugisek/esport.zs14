<?php
    include '../../scripts/security.php';
    include '../../scripts/conn_db.php';

    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }

    $sql = "UPDATE events set status_id = 2 WHERE events.event_id = '".$id."'";
    if(mysqli_query($conn, $sql)){
        $_SESSION['alert'] = 'Pomyślnie przywrócono wydarzenie.';
        $_SESSION['alert_type'] = 'success';
        //log
        //DO UZUPEŁNIENIA
        //logend
    }else{
        $_SESSION['alert'] = 'Wystąpił błąd podczas przywracania wydarzenia';
        $_SESSION['alert_type'] = 'error';
    }
?>