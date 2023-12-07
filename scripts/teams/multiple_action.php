<?php
include "../security.php";
$action = $_POST['action'];
if(!empty($_POST['selected_ids'])) {
    $selected_ids = $_POST['selected_teams'];
    // Zabezpieczenie przed atakami SQL Injection
    $selected_ids = array_map('intval', $selected_ids);
    $ids_to_delete = implode(',', $selected_ids);
    echo $action;
    echo $ids_to_delete;
}else{
    $_SESSION['alert'] = 'Nie wybrano żadnej drużyny';
    $_SESSION['alert_type'] = 'warning';
}
header ("Location: ../../panel.php");
?>