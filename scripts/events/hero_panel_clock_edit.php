<?php 
    include "../security.php";
    include "../conn_db.php";

    $sql = "SELECT * FROM events WHERE event_type_id = 2 and input = 'clock_time'";
    $sql2 = "SELECT * FROM events WHERE event_type_id = 2 and input = 'clock_text'";
    $result = mysqli_fetch_array(mysqli_query($conn, $sql));
    $result2 = mysqli_fetch_array(mysqli_query($conn, $sql2));

    $text = $_POST['clock_text'];
    $time = $_POST['clock_start_time'];


    if(((!empty($text) && $text == $result2[3]) && (!empty($time) && $time==$result[3])) || (($text == '' && $result2[3] == '')&&($time == '' && $result[3] == ''))){
        $_SESSION['alert'] = 'Nie wprowadzono żadnych zmian';
        $_SESSION['alert_type'] = 'warning';
        header('Location: ../../panel.php');
        exit();
    } else if((!empty($text) && $result2[3] != $text)&&(!empty($time) && $time==$result[3])){
        $sql = "UPDATE events set events.value = '".$text."' WHERE event_type_id = '2' and input = 'clock_text'";
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
    } else if((!empty($time) && $result[3] != $time)&&(!empty($text) && $text==$result2[3])){
        $sql = "UPDATE events set events.value = '".$time."' WHERE event_type_id = '2' and input = 'clock_time'";
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
    }else if((!empty($time) && $result[3] != $time)&&(!empty($text) && $text!=$result2[3])){
        $sql1 = "UPDATE events set events.value = '".$time."' WHERE event_type_id = '2' and input = 'clock_time'";
        $sql2 = "UPDATE events set events.value = '".$text."' WHERE event_type_id = '2' and input = 'clock_text'";
        if(mysqli_query($conn, $sql1) && mysqli_query($conn,$sql2)){
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