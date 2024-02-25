<?php
include "../security.php";
$event_id = $_POST['event_id'];
$faza = $_POST['faza'];
$date_of_spotkanie = $_POST['date_of_spotkanie'];
$team_win = $_POST['team_win'];
$team_los = $_POST['team_los'];
$maps_win = $_POST['maps_win'];
$rounds_win = $_POST['rounds_win'];
$maps_los = $_POST['maps_los'];
$rounds_los = $_POST['rounds_los'];
$description = $_POST['description'];

if ($event_id != '' && $faza != '' && $date_of_spotkanie != '' && $team_win != '' && $team_los != '' && $maps_win != '' && $rounds_win != '' && $maps_los != '' && $rounds_los != '') {
    include "../conn_db.php";
    $sql = "INSERT INTO wyniki (event_id, faza_id, date_of_spotkanie, team_win, team_los, maps_win, rounds_win, maps_los, rounds_los, description) VALUES ('$event_id', '$faza', '$date_of_spotkanie', '$team_win', '$team_los', '$maps_win', '$rounds_win', '$maps_los', '$rounds_los', '$description')";
    mysqli_query($conn, $sql);
    $wyniki_id = mysqli_insert_id($conn);
    //log
    $before = "";
    $after = "Event: $event_id, <br/>Faza: $faza, <br/>Data: $date_of_spotkanie, <br/>Zwycięzca: $team_win, <br/>Przegrany: $team_los, <br/>Mapy zwycięzcy: $maps_win, <br/>Rundy zwycięzcy: $rounds_win, <br/>Mapy przegranego: $maps_los, <br/>Rundy przegranego: $rounds_los, <br/>Opis: $description";
    $after = str_replace("'", "''", $after);
    $object_id = $wyniki_id;
    $object_type = "wyniki";
    $action_type = "2";
    $desc = "Dodano wynik";
    include "../../scripts/log.php";
    //log
    $_SESSION['alert'] = 'Pomyślnie dodano wynik';
    $_SESSION['alert_type'] = 'success';
} else {
    $_SESSION['alert'] = 'Nie wprowadzono wszystkich danych';
    $_SESSION['alert_type'] = 'warning';
}
header ("Location: ../../panel.php");
?>