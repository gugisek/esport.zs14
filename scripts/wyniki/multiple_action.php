<?php
include "../security.php";
$action = $_POST['action'];
if(!empty($_POST['selected_teams']) && !empty($_POST['action'])) {
    $selected_ids = $_POST['selected_teams'];
    // Zabezpieczenie przed atakami SQL Injection
    $selected_ids = array_map('intval', $selected_ids);
    $ids_to_delete = implode(',', $selected_ids);
    if($action == "delete"){
        include "../../scripts/conn_db.php";
        $sql = "DELETE FROM teams WHERE team_id IN ($ids_to_delete)";
        $sql_old = "select * from teams where team_id IN ($ids_to_delete)";
        $result_old = $conn->query($sql_old);
        while($row_old = $result_old->fetch_assoc()) {
            $before = "Nazwa: ".$row_old['name']."<br/>Klasa: ".$row_old['class']."<br/>ID wydarzenia: ".$row_old['event_id']."<br/>ID statusu: ".$row_old['status_id']."<br/>ID grupy: ".$row_old['group_id']."<br/>Zawodnicy: ".$row_old['players'];
            $before = str_replace("'", "''", $before);
            $object_id=$row_old['team_id'];
            $object_type="teams";
            $action_type="3";
            $desc="Usunięto drużynę";
            include "../../scripts/log.php";
        }
        if (mysqli_query($conn, $sql)) {
            $_SESSION['alert'] = 'Drużyny zostały usunięte';
            $_SESSION['alert_type'] = 'success';
        } else {
            $_SESSION['alert'] = 'Wystąpił błąd podczas usuwania drużyn';
            $_SESSION['alert_type'] = 'error';
        }
        
    }else if($action == "status"){
        $status_id = $_POST['sec_status'];
        include "../../scripts/conn_db.php";
        $sql = "UPDATE teams SET status_id=$status_id WHERE team_id IN ($ids_to_delete)";
        if (mysqli_query($conn, $sql)) {
            //log
            $before = 'Zmieniane id: '.$ids_to_delete;
            $after = 'Zmieniane id: '.$ids_to_delete.'<br/>ID statusu: '.$status_id;
            $object_id=$ids_to_delete;
            $object_type="teams";
            $action_type="1";
            $desc="Zmieniono statusy drużyn";
            include "../../scripts/log.php";
            //log
            $_SESSION['alert'] = 'Statusy drużyn zostały zmienione';
            $_SESSION['alert_type'] = 'success';
        } else {
            $_SESSION['alert'] = 'Wystąpił błąd podczas zmiany statusów drużyn';
            $_SESSION['alert_type'] = 'error';
        }
    }else if ($action == "groups") {
        $group_id = $_POST['sec_groups'];
        include "../../scripts/conn_db.php";
        $sql = "UPDATE teams SET group_id=$group_id WHERE team_id IN ($ids_to_delete)";
        if (mysqli_query($conn, $sql)) {
            //log
            $before = 'Zmieniane id: '.$ids_to_delete;
            $after = 'Zmieniane id: '.$ids_to_delete.'<br/>ID grupy: '.$group_id;
            $object_id=$ids_to_delete;
            $object_type="teams";
            $action_type="1";
            $desc="Zmieniono grupy drużyn";
            include "../../scripts/log.php";
            //log
            $_SESSION['alert'] = 'Grupy drużyn zostały zmienione';
            $_SESSION['alert_type'] = 'success';
        } else {
            $_SESSION['alert'] = 'Wystąpił błąd podczas zmiany grup drużyn';
            $_SESSION['alert_type'] = 'error';
        }
    }
}else{
    $_SESSION['alert'] = 'Nie wybrano żadnej drużyny';
    $_SESSION['alert_type'] = 'warning';
}
header ("Location: ../../panel.php");
?>