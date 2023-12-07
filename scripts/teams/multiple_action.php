<?php
include "../security.php";
$action = $_POST['action'];
if(!empty($_POST['selected_teams']) && !empty($_POST['action'])) {
    $selected_ids = $_POST['selected_teams'];
    // Zabezpieczenie przed atakami SQL Injection
    $selected_ids = array_map('intval', $selected_ids);
    $ids_to_delete = implode(',', $selected_ids);
    if($action == "delete"){
        include "../../conn_db.php";
        // $sql = "DELETE FROM teams WHERE team_id IN ($ids_to_delete)";
        // if (mysqli_query($conn, $sql)) {
        //     $_SESSION['alert'] = 'Drużyny zostały usunięte';
        //     $_SESSION['alert_type'] = 'success';
        // } else {
        //     $_SESSION['alert'] = 'Wystąpił błąd podczas usuwania drużyn';
        //     $_SESSION['alert_type'] = 'error';
        // }
        // mysqli_close($conn);
    }else if($action == "status"){
        $status_id = $_POST['sec_status'];
        include "../../scripts/conn_db.php";
        $sql = "UPDATE teams SET status_id=$status_id WHERE team_id IN ($ids_to_delete)";
        echo $sql;
    }
    echo $action;
    echo $ids_to_delete;
}else{
    $_SESSION['alert'] = 'Nie wybrano żadnej drużyny';
    $_SESSION['alert_type'] = 'warning';
}
//header ("Location: ../../panel.php");
?>