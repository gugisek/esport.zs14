<?php 
    include "../security.php";
    include "../conn_db.php";

    $sql = "SELECT events.value from events WHERE event_type_id = '1' and input = 'header'";
    $result = mysqli_fetch_array(mysqli_query($conn, $sql))[0];

    if((!empty($_POST['blank_page_text']) && $_POST['blank_page_text'] == $result) || (($_POST['blank_page_text']) == '' && $result == '')){
        $_SESSION['alert'] = 'Nie wprowadzono żadnych zmian';
        $_SESSION['alert_type'] = 'warning';
        header('Location: ../../panel.php');
        exit();
    } else if(!empty($_POST['blank_page_text']) && $result != $_POST['blank_page_text']){
        $text = $_POST['blank_page_text'];
        $sql = "UPDATE events set events.value = '".$text."' WHERE event_type_id = '1' and input = 'header'";
        if(mysqli_query($conn, $sql)){
            $_SESSION['alert'] = 'Pomyślnie edytowano nagłówek';
            $_SESSION['alert_type'] = 'success';

            //log
            //DO UZUPEŁNIENIA
            //logend
            header('Location: ../../panel.php');
            exit();
        }else{
            $_SESSION['alert'] = 'Wystąpił błąd podczas edytowania nagłówka';
            $_SESSION['alert_type'] = 'error';
            header('Location: ../../panel.php');
            exit();
        }
    } else if(empty($_POST['blank_page_text'])){
        $sql = "UPDATE events set events.value = NULL WHERE event_type_id = '1' and input = 'header'";
        if(mysqli_query($conn, $sql)){
            $_SESSION['alert'] = 'Pomyślnie edytowano nagłówek';
            $_SESSION['alert_type'] = 'success';

            //log
            //DO UZUPEŁNIENIA
            //logend
            header('Location: ../../panel.php');
            exit();
        }else{
            $_SESSION['alert'] = 'Wystąpił błąd podczas edytowania nagłówka';
            $_SESSION['alert_type'] = 'error';
            header('Location: ../../panel.php');
            exit();
        }
    exit();
    }
    mysqli_close($conn);
?>