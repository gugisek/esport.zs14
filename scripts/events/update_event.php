<?php
    include '../../scripts/security.php';
    include '../../scripts/conn_db.php';

    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }
    
    $sql1 = "SELECT * FROM events WHERE status_id in(1,2) and event_id = '".$id."'";
    $result1 = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_array($result1);

    if(isset($_POST['Przeznaczenie'])){
        $for = $_POST['Przeznaczenie'];
    } else{
        $for = $row['destiny'];
    }
    if(isset($_POST['Tytuł'])){
        $title = $_POST['Tytuł'];
    } else{
        $title = $row['name'];
    }
    if(isset($_POST['Edycja'])){
        $edit = $_POST['Edycja'];
    } else{
        $edit = $row['edition'];
    }
    if(isset($_POST['Opis'])){
        $desc = $_POST['Opis'];
    } else{
        $desc = $row['description'];
    }
    if(isset($_POST['Model'])){
        $model = $_POST['Model'];
    } else{
        $model = $row['model'];
    }
    if(isset($_POST['Terminy'])){
        $terms = $_POST['Terminy'];
    } else{
        $terms = $row['terms'];
    }
    if(isset($_POST['Nagrody'])){
        $prizes = $_POST['Nagrody'];
    } else{
        $prizes = $row['prizes'];
    }
    if(isset($_POST['Drużyny'])){
        $teams = $_POST['Drużyny'];
    } else{
        $teams = $row['teams'];
    }
    if(isset($_POST['Wymogi'])){
        $req = $_POST['Wymogi'];
    } else{
        $req = $row['requirements'];
    }
    if(isset($_POST['Zapisy'])){
        $sign = $_POST['Zapisy'];
    } else{
        $sign = $row['sign'];
    }
    if(isset($_POST['Informacje'])){
        $info = $_POST['Informacje'];
    } else{
        $info = $row['infos'];
    }
    if(isset($_POST['Kalendarz'])){
        $cal = $_POST['Kalendarz'];
        $sql = "UPDATE events SET name = '".$title."', edition = '".$edit."', destiny = '".$for."', description = '".$desc."', model = '".$model."', terms = '".$terms."', prizes = '".$prizes."', teams = '".$teams."', requirements = '".$req."', sign = '".$sign."', data = '".$cal."', infos = '".$info."', status_id = 2, max_players_in_team = 5, max_rezerwowy_players_in_team = 1 WHERE event_id = ".$id."";
        if(mysqli_query($conn, $sql)){
        $_SESSION['alert'] = 'Pomyślnie edytowano wydarzenie.';
        $_SESSION['alert_type'] = 'success';
        //log
        //DO UZUPEŁNIENIA
        //logend
        }else{
            $_SESSION['alert'] = 'Wystąpił błąd podczas edytowania wydarzenia';
            $_SESSION['alert_type'] = 'error';
        }
    } else{
        if($row['data'] == '' || $row['data'] == 'NULL' || $row['data'] == NULL){
            $sql = "UPDATE events SET name = '".$title."', edition = '".$edit."', destiny = '".$for."', description = '".$desc."', model = '".$model."', terms = '".$terms."', prizes = '".$prizes."', teams = '".$teams."', requirements = '".$req."', sign = '".$sign."', data = NULL, infos = '".$info."', status_id = 2, max_players_in_team = 5, max_rezerwowy_players_in_team = 1 WHERE event_id = ".$id."";
        } else{
            $sql = "UPDATE events SET name = '".$title."', edition = '".$edit."', destiny = '".$for."', description = '".$desc."', model = '".$model."', terms = '".$terms."', prizes = '".$prizes."', teams = '".$teams."', requirements = '".$req."', sign = '".$sign."', data = '".$row['data']."', infos = '".$info."', status_id = 2, max_players_in_team = 5, max_rezerwowy_players_in_team = 1 WHERE event_id = ".$id."";
        }
        if(mysqli_query($conn, $sql)){
        $_SESSION['alert'] = 'Pomyślnie edytowano wydarzenie.';
        $_SESSION['alert_type'] = 'success';
        //log
        //DO UZUPEŁNIENIA
        //logend
        }else{
            $_SESSION['alert'] = 'Wystąpił błąd podczas edytowania wydarzenia';
            $_SESSION['alert_type'] = 'error';
        }
    }
    mysqli_close($conn);
?>