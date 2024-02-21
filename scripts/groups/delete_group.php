<?php
include "../security.php";
$team_id = $_GET['id'];
include "../conn_db.php";
$sql_old = "select * from team_groups where group_id = '$team_id'";
$result_old = $conn->query($sql_old);
$row_old = $result_old->fetch_assoc();
$row_old['name'] = str_replace("'", "''", $row_old['name']);
$sql = "DELETE FROM team_groups WHERE group_id = '$team_id';";
mysqli_query($conn, $sql);
//log
    $before = "Nazwa: ".$row_old['name']."<br/>ID wydarzenia: ".$row_old['event_id']."<br/>";
    $after = "";
    $object_id=$team_id;
    $object_type="team_groups";
    $action_type="3";
    $desc="Usunięto grupę";
    include "../../scripts/log.php";
//log
$_SESSION['alert'] = 'Pomyślnie usunięto grupę';
$_SESSION['alert_type'] = 'success';
header("Location: ../../panel.php");
?>