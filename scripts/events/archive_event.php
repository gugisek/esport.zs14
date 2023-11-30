<?php
    include '../../scripts/security.php';
    include '../../scripts/conn_db.php';

    if(!empty($_POST['event_id'])){
        $id = $_POST['event_id'];
        $sql = "UPDATE `wydarzenia` SET `status` = 'archived' WHERE `wydarzenia`.`id_wydarzenia` = ".$id.";";

        if(mysqli_query($conn, $sql)){
            $_SESSION['alert'] = 'Pomyślnie zmieniono zarchiwizowano wydarzenie';
            $_SESSION['alert_type'] = 'success';

            //log
            //DO UZUPEŁNIENIA
            //logend
            header('Location: ../../panel.php?sub=events');
            exit();
        }else{
            $_SESSION['alert'] = 'Wystąpił błąd podczas archiwizacji';
            $_SESSION['alert_type'] = 'error';
            header('Location: ../../panel.php?sub=events');
            exit();
        }

    } else{
        $_SESSION['alert'] = 'Wystąpił błąd podczas zmiany';
        $_SESSION['alert_type'] = 'error';
        header('Location: ../../panel.php?sub=events');
        exit();
    }
    exit();
    mysqli_close($conn);
?>