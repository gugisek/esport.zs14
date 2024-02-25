<?php
include "../security.php";
$wynik_id = $_GET['id'];
include "../conn_db.php";
$sql_old = "select * from wyniki where wynik_id = '$wynik_id'";
$result_old = $conn->query($sql_old);
$row_old = $result_old->fetch_assoc();
$sql = "DELETE FROM wyniki WHERE wynik_id = '$wynik_id'";
mysqli_query($conn, $sql);
//log
    $before = "Wynik_id: $wynik_id, <br/>Wygrani: ".$row_old['team_win'].", <br/>Przegrani: ".$row_old['team_los'].", <br/>Mapy wygranych: ".$row_old['maps_win'].", <br/>Rundy wygranych: ".$row_old['rounds_win'].", <br/>Mapy przegranych: ".$row_old['maps_los'].", <br/>Rundy przegranych: ".$row_old['rounds_los'].", <br/>Opis: ".$row_old['description']." <br/>Data: ".$row_old['date_of_spotkanie']." <br/>Faza: ".$row_old['faza_id']." <br/>Event: ".$row_old['event_id'];
    $after = "";
    $object_id=$wynik_id;
    $object_type="results";
    $action_type="3";
    $desc="Usunięto wynik";
    include "../../scripts/log.php";
//log
$_SESSION['alert'] = 'Pomyślnie usunięto wynik';
$_SESSION['alert_type'] = 'success';
header("Location: ../../panel.php");
?>