<?php 
    include "../security.php";
    include "../conn_db.php";

    $sql = "SELECT * FROM informations WHERE name = 'events_clock_start_time'";
    $sql2 = "SELECT * FROM informations WHERE name = 'events_clock_text'";
    $result = mysqli_fetch_array(mysqli_query($conn, $sql));
    $result2 = mysqli_fetch_array(mysqli_query($conn, $sql2));

    $text = $_POST['clock_text'];
    $time = $_POST['clock_start_time'];


    if(((!empty($text) && $text == $result2[2]) && (!empty($time) && $time==$result[2])) || (($text == '' && $result2[2] == '')&&($time == '' && $result[2] == ''))){
        $_SESSION['alert'] = 'Nie wprowadzono żadnych zmian';
        $_SESSION['alert_type'] = 'warning';
        header('Location: ../../panel.php');
        exit();
    } else if((!empty($text) && $result2[2] != $text)&&(!empty($time) && $time==$result[2])){
        $sql = "UPDATE informations set value = '".$text."' WHERE name = 'events_clock_text'";
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
    } else if((!empty($time) && $result[2] != $time)&&(!empty($text) && $text==$result2[2])){
        $sql = "UPDATE informations set value = '".$time."' WHERE name = 'events_clock_start_time'";
        if(mysqli_query($conn, $sql)){
            $_SESSION['alert'] = 'Pomyślnie edytowano czas rozpoczęcia turnieju';
            $_SESSION['alert_type'] = 'success';

            //log
            //DO UZUPEŁNIENIA
            //logend
            header('Location: ../../panel.php');
            exit();
        }else{
            $_SESSION['alert'] = 'Wystąpił błąd podczas edytowania czasu startu';
            $_SESSION['alert_type'] = 'error';
            header('Location: ../../panel.php');
            exit();
        }
    }else if((!empty($time) && $result[2] != $time)&&(!empty($text) && $text!=$result2[2])){
        $sql1 = "UPDATE informations set value = '".$time."' WHERE name = 'events_clock_start_time'";
        $sql2 = "UPDATE informations set value = '".$text."' WHERE name = 'events_clock_text'";
        if(mysqli_query($conn, $sql2) && mysqli_query($conn,$sql1)){
            $_SESSION['alert'] = 'Pomyślnie edytowano nagłówek i czas startu';
            $_SESSION['alert_type'] = 'success';

            //log
            //DO UZUPEŁNIENIA
            //logend
            header('Location: ../../panel.php');
            exit();
        }else{
            $_SESSION['alert'] = 'Wystąpił błąd podczas edytowania';
            $_SESSION['alert_type'] = 'error';
            header('Location: ../../panel.php');
            exit();
        }
    }else if(empty($text)){
        $_SESSION['alert'] = 'Pole nagłówka musi być wypełnione. Zmiany nie zostały wprowadzone';
        $_SESSION['alert_type'] = 'warning';
        header('Location: ../../panel.php');
        exit();
    }else if(empty($time)){
        $_SESSION['alert'] = 'Pole czasu startu musi być wypełnione. Zmiany nie zostały wprowadzone';
        $_SESSION['alert_type'] = 'warning';
        header('Location: ../../panel.php');
        exit();
    }
    exit();
    mysqli_close($conn);
?>