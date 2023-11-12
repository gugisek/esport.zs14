<?php
session_start();
include "../../scripts/conn_db.php";
$id = $_POST['popup_role_id'];
$role = $_POST['popup_role'];
$sql = "select id from user_roles where role='$role'";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
$role_id = $row['id'];

$sql = "SELECT role_id, update_date FROM users WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
if ($row['role_id'] != $role_id) {
    
    $sql = "UPDATE `users` SET `role_id` = '$role_id' WHERE `users`.`id` = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        //log
        $object_id=$id;
        $object_type="users";
        $before="Rola: $row[role_id]<br> Data modyfikacji: $row[update_date]";
        $after="Rola: $role_id<br> Data modyfikacji: current_timestamp()";
        $action_type="1";
        $desc="Edytowano role użytkownika";
        include "../../scripts/log.php";
        //log

        //dodanie tablicy alertów do tablicy sesji
        // $xddd = ['Rola nie została zmieniona.', 'ok'];
        // $_SESSION['alert'][0] = $xddd;

        //echo $_SESSION['alert'][0];
        

        $_SESSION['alert'] = 'Rola została zmieniona.';
        $_SESSION['alert_type'] = 'success';
        header('Location: ../../panel.php?page');
    } else {
        header('Location: ../../panel.php?page');
    }
} else {
    
    $_SESSION['alert'] = 'Nie wprowadzono zmian.';
    $_SESSION['alert_type'] = 'warning';
    header('Location: ../../panel.php?page');
}
?>