<?php
include "../security.php";
$wynik_id = $_POST['wynik_id'];
$event_id = $_POST['event_id'];
$faza = $_POST['faza'];
$date_of_spotkanie = $_POST['date_of_spotkanie'];
$date_of_spotkanie = date("Y-m-d H:i:s", strtotime($date_of_spotkanie));
$team_win = $_POST['team_win'];
$team_los = $_POST['team_los'];
$maps_win = $_POST['maps_win'];
$rounds_win = $_POST['rounds_win'];
$maps_los = $_POST['maps_los'];
$rounds_los = $_POST['rounds_los'];
$description = $_POST['description'];

if ($event_id != '' && $faza != '' && $date_of_spotkanie != '' && $team_win != '' && $team_los != '' && $maps_win != '' && $rounds_win != '' && $maps_los != '' && $rounds_los != '') {
    include "../conn_db.php";
    $sql_old = "select * from wyniki where wynik_id = '$wynik_id'";
    $result_old = $conn->query($sql_old);
    $row_old = $result_old->fetch_assoc();

    if ($row_old['event_id'] != $event_id || $row_old['faza_id'] != $faza || $row_old['date_of_spotkanie'] != $date_of_spotkanie || $row_old['team_win'] != $team_win || $row_old['team_los'] != $team_los || $row_old['maps_win'] != $maps_win || $row_old['rounds_win'] != $rounds_win || $row_old['maps_los'] != $maps_los || $row_old['rounds_los'] != $rounds_los || $row_old['description'] != $description) {
        $sql = "UPDATE wyniki SET event_id = '$event_id', faza_id = '$faza', date_of_spotkanie = '$date_of_spotkanie', team_win = '$team_win', team_los = '$team_los', maps_win = '$maps_win', rounds_win = '$rounds_win', maps_los = '$maps_los', rounds_los = '$rounds_los', description = '$description' WHERE wynik_id = '$wynik_id'";
        mysqli_query($conn, $sql);
        //log
        $before = "Event: ".$row_old['event_id'].", <br/>Faza: ".$row_old['faza_id'].", <br/>Data: ".$row_old['date_of_spotkanie'].", <br/>Zwycięzca: ".$row_old['team_win'].", <br/>Przegrany: ".$row_old['team_los'].", <br/>Mapy zwycięzcy: ".$row_old['maps_win'].", <br/>Rundy zwycięzcy: ".$row_old['rounds_win'].", <br/>Mapy przegranego: ".$row_old['maps_los'].", <br/>Rundy przegranego: ".$row_old['rounds_los'].", <br/>Opis: ".$row_old['description'];
        $after = "Event: $event_id, <br/>Faza: $faza, <br/>Data: $date_of_spotkanie, <br/>Zwycięzca: $team_win, <br/>Przegrany: $team_los, <br/>Mapy zwycięzcy: $maps_win, <br/>Rundy zwycięzcy: $rounds_win, <br/>Mapy przegranego: $maps_los, <br/>Rundy przegranego: $rounds_los, <br/>Opis: $description";
        $object_id = $wynik_id;
        $object_type = "wyniki";
        $action_type = "1";
        $desc = "Edytowano wynik";
        include "../../scripts/log.php";
        //log
        $_SESSION['alert'] = 'Pomyślnie edytowano wynik';
        $_SESSION['alert_type'] = 'success';
    }else{
        $_SESSION['alert'] = 'Nie wprowadzono żadnych zmian';
        $_SESSION['alert_type'] = 'warning';
    }
    
} else {
    $_SESSION['alert'] = 'Nie wprowadzono wszystkich danych';
    $_SESSION['alert_type'] = 'warning';
}
header ("Location: ../../panel.php");
?>