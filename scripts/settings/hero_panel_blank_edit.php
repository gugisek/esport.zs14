<?php 
    include "../security.php";
    include "../conn_db.php";

    $sql = "SELECT value FROM informations WHERE name = 'events_blank_page_text'";
    $result = mysqli_fetch_array(mysqli_query($conn, $sql))[0];

    function goodOrBad($c, $s){
        if(mysqli_query($c, $s)){
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
    }

    if((!empty($_POST['blank_page_text']) && $_POST['blank_page_text'] == $result) || (($_POST['blank_page_text']) == '' && $result == '')){
        $_SESSION['alert'] = 'Nie wprowadzono żadnych zmian';
        $_SESSION['alert_type'] = 'warning';
        header('Location: ../../panel.php');
        exit();
    } else if(!empty($_POST['blank_page_text']) && $result != $_POST['blank_page_text']){
        $text = $_POST['blank_page_text'];
        $sql = "UPDATE informations set value = '".$text."' WHERE name = 'events_blank_page_text'";
        goodOrBad($conn, $sql);
    } else if(empty($_POST['blank_page_text'])){
        $sql = "UPDATE informations set value = NULL WHERE name = 'events_blank_page_text'";
        goodOrBad($conn, $sql);
    exit();
    }
    mysqli_close($conn);
?>