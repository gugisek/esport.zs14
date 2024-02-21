<?php
include "../security.php";
$team_name = $_POST['team_name'];
$team_name = str_replace("'", "''", $team_name);
$team_event_id = $_POST['team_event'];


if($team_name != '' && $team_event_id != '') {
    include "../conn_db.php";
    $sql = "select name from team_groups where name = '$team_name' and event_id = '$team_event_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION['alert'] = 'Grupa o takiej nazwie już istnieje';
        $_SESSION['alert_type'] = 'warning';
    }else{
        $sql = "INSERT INTO team_groups (name, event_id) VALUES ('$team_name', '$team_event_id')";
        mysqli_query($conn, $sql);
        $team_id = mysqli_insert_id($conn);
        //log
            $before = "";
            $after = "Nazwa: $team_name, Event: $team_event_id";
            $after = str_replace("'", "''", $after);
            $object_id=$team_id;
            $object_type="team_groups";
            $action_type="2";
            $desc="Dodano grupę";
            include "../../scripts/log.php";
        //log
        $_SESSION['alert'] = 'Pomyślnie dodano grupę';
        $_SESSION['alert_type'] = 'success';
    }
}else{
    $_SESSION['alert'] = 'Nie wprowadzono wszystkich danych';
    $_SESSION['alert_type'] = 'error';
}
  header ("Location: ../../panel.php");
?>