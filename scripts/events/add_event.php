<?php
    include '../../scripts/security.php';
    include '../../scripts/conn_db.php';
    
    if(isset($_POST['ext'])){
        $ext = $_POST['ext'];
    } else{
        $ext = 'jpg';
    }
    if(isset($_POST['Przeznaczenie'])){
        $for = $_POST['Przeznaczenie'];
    } else{
        $for = 'NULL';
    }
    if(isset($_POST['Tytuł'])){
        $title = $_POST['Tytuł'];
    } else{
        $title = 'NULL';
    }
    if(isset($_POST['Edycja'])){
        $edit = $_POST['Edycja'];
    } else{
        $edit = 'NULL';
    }
    if(isset($_POST['Opis'])){
        $desc = $_POST['Opis'];
    } else{
        $desc = 'NULL';
    }
    if(isset($_POST['Model'])){
        $model = $_POST['Model'];
    } else{
        $model = 'NULL';
    }
    if(isset($_POST['Terminy'])){
        $terms = $_POST['Terminy'];
    } else{
        $terms = 'NULL';
    }
    if(isset($_POST['Nagrody'])){
        $prizes = $_POST['Nagrody'];
    } else{
        $prizes = 'NULL';
    }
    if(isset($_POST['Drużyny'])){
        $teams = $_POST['Drużyny'];
    } else{
        $teams = 'NULL';
    }
    if(isset($_POST['Wymogi'])){
        $req = $_POST['Wymogi'];
    } else{
        $req = 'NULL';
    }
    if(isset($_POST['Zapisy'])){
        $sign = $_POST['Zapisy'];
    } else{
        $sign = 'NULL';
    }
    if(isset($_POST['Informacje'])){
        $info = $_POST['Informacje'];
    } else{
        $info = 'NULL';
    }
    $pre = "SELECT event_id+1 as 'new_id' FROM events ORDER by event_id+1 desc limit 1";
    $row = mysqli_fetch_array(mysqli_query($conn, $pre))[0];
    if(isset($_POST['Kalendarz'])){
        $cal = $_POST['Kalendarz'];
        $sql = "INSERT INTO `events` (`event_id`, `name`, `edition`, `destiny`, `description`, `model`, `terms`, `prizes`, `teams`, `requirements`, `sign`, `img`, `data`, `infos`, `status_id`, `max_players_in_team`, `max_rezerwowy_players_in_team`) VALUES (NULL, '".$title."', '".$edit."', '".$for."', '".$desc."', '".$model."', '".$terms."', '".$prizes."', '".$teams."', '".$req."', '".$sign."', 'event_img_".$row.".".$ext."', '".$cal."', '".$info."', '2', '5', '1');";
        if(mysqli_query($conn, $sql)){
        $_SESSION['alert'] = 'Pomyślnie dodano wydarzenie '.$title;
        $_SESSION['alert_type'] = 'success';

        //log
        //DO UZUPEŁNIENIA
        //logend
    }else{
        $_SESSION['alert'] = 'Wystąpił błąd podczas dodawania wydarzenia';
        $_SESSION['alert_type'] = 'error';
    }
    } else{
        $sql = "INSERT INTO `events` (`event_id`, `name`, `edition`, `destiny`, `description`, `model`, `terms`, `prizes`, `teams`, `requirements`, `sign`, `img`, `data`, `infos`, `status_id`, `max_players_in_team`, `max_rezerwowy_players_in_team`) VALUES (NULL, '".$title."', '".$edit."', '".$for."', '".$desc."', '".$model."', '".$terms."', '".$prizes."', '".$teams."', '".$req."', '".$sign."', 'event_img_".$row.".".$ext."', NULL, '".$info."', '2', '5', '1');";
        if(mysqli_query($conn, $sql)){
        $_SESSION['alert'] = 'Pomyślnie dodano wydarzenie '.$title;
        $_SESSION['alert_type'] = 'success';

        //log
        //DO UZUPEŁNIENIA
        //logend
    }else{
        $_SESSION['alert'] = 'Wystąpił błąd podczas dodawania wydarzenia';
        $_SESSION['alert_type'] = 'error';
    }
    }
    mysqli_close($conn);
?>