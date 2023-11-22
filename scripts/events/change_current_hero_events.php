<?php
    include '../../scripts/security.php';
    include '../../scripts/conn_db.php';

    $selected = $_POST['selected'];
    if($selected == '0'){
        
        $selected = 'blank_page';
        $sql = 'update events set value = "'.$selected.'" WHERE event_type_id = 4';
        if(mysqli_query($conn, $sql)){
            $_SESSION['alert'] = 'Pomyślnie zmieniono hero podstrony events na Pustą Stronę';
            $_SESSION['alert_type'] = 'success';

            //log
            //DO UZUPEŁNIENIA
            //logend
        }else{
            $_SESSION['alert'] = 'Wystąpił błąd podczas zmiany';
            $_SESSION['alert_type'] = 'error';
        }
    } else if($selected == '1'){
        $selected = 'clock';
        $sql = 'update events set value = "'.$selected.'" WHERE event_type_id = 4';
        if(mysqli_query($conn, $sql)){
            $_SESSION['alert'] = 'Pomyślnie zmieniono hero podstrony events na Zegar';
            $_SESSION['alert_type'] = 'success';

            //log
            //DO UZUPEŁNIENIA
            //logend
        }else{
            $_SESSION['alert'] = 'Wystąpił błąd podczas zmiany';
            $_SESSION['alert_type'] = 'error';
        }
    } else if($selected == '2'){
        $selected = 'last_champions';
        $sql = 'update events set value = "'.$selected.'" WHERE event_type_id = 4';
        if(mysqli_query($conn, $sql)){
            $_SESSION['alert'] = 'Pomyślnie zmieniono hero podstrony events na Ostatnich Zwycięzców';
            $_SESSION['alert_type'] = 'success';

            //log
            //DO UZUPEŁNIENIA
            //logend
        }else{
            $_SESSION['alert'] = 'Wystąpił błąd podczas zmiany';
            $_SESSION['alert_type'] = 'error';
        }
    } else{

    }
    mysqli_close($conn);
?>