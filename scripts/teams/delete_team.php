<?php
include "../security.php";
$team_id = $_GET['id'];
include "../conn_db.php";
$sql_old = "select * from teams where team_id = '$team_id'";
$result_old = $conn->query($sql_old);
$row_old = $result_old->fetch_assoc();
$row_old['name'] = str_replace("'", "''", $row_old['name']);
$sql = "DELETE FROM teams WHERE team_id = '$team_id';";
mysqli_query($conn, $sql);
//log
    $before = "Nazwa: ".$row_old['name']."<br/>Klasa: ".$row_old['class']."<br/>ID wydarzenia: ".$row_old['event_id']."<br/>ID statusu: ".$row_old['status_id']."<br/>ID grupy: ".$row_old['group_id'];
    $after = "";
    $object_id=$team_id;
    $object_type="teams";
    $action_type="3";
    $desc="Usunięto drużynę";
    include "../../scripts/log.php";
//log
$_SESSION['alert'] = 'Pomyślnie usunięto drużynę';
$_SESSION['alert_type'] = 'success';
header("Location: ../../panel.php");
?>