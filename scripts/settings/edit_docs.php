<?php
include "../security.php";
$id = $_POST['id'];
$value = $_POST['value'];

include "../conn_db.php";
if($value != '' and $value != '<p><br></p>'){
        $sql = "select * from informations where id = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if($row['value'] != $value){
            $sql = "UPDATE informations SET value = '$value' WHERE id = $id";
            if(mysqli_query($conn, $sql)){
                $_SESSION['alert'] = 'Pomyślnie edytowano '.$row['name'];
                $_SESSION['alert_type'] = 'success';
                //log
                $object_id=$id;
                $object_type="docs";
                $before="Dokument: ".$row['name'].",<br/> Opis: ".$row['value'];
                $after="Dokument: ".$row['name'].",<br/> Opis: $value";
                $action_type="1";
                $desc="Edytowano ".$row['name'];
                include "../log.php";
                //log
                header('Location: ../../panel.php');
                exit();
            }
            else{
                $_SESSION['alert'] = 'Wystąpił błąd podczas edytowania '.$row['name'];
                $_SESSION['alert_type'] = 'error';
                header('Location: ../../panel.php');
                exit();
            }
        }else{
            $_SESSION['alert'] = 'Nie wprowadzono żadnych zmian';
            $_SESSION['alert_type'] = 'warning';
            header('Location: ../../panel.php');
            exit();
        }
}else{
    $_SESSION['alert'] = 'Nie wprowadzono wszystkich danych';
    $_SESSION['alert_type'] = 'error';
    header('Location: ../../panel.php');
    exit();
}