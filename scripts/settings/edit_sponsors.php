<?php
include "../security.php";
include "../../components/loading.php";

$title = $_POST['title'];
$title = str_replace("'", "''", $title);
$description = $_POST['description'];
$description = str_replace("'", "''", $description);

include "../conn_db.php";
if($title != '' and ($description != '' and $description != '<p><br></p>')){
    //log
    $sql = "select * from informations where id=20 or id=21;";
    $result = mysqli_query($conn, $sql);
    $before = "";
    while ($row = $result->fetch_assoc()) {
        $before .= $row['name'].": ".$row['value'] . "<br/>";
    }
    //zamienienie ' na '' żeby nie psuło zapytania
    $before = str_replace("'", "''", $before);
    //log

    $poprawnie = 0;

    $sql = "select value from informations where id=20 or id=21;";
    $result = mysqli_query($conn, $sql);
    while ($row_check = $result->fetch_assoc()) {
        $check[] = str_replace("'", "''", $row_check['value']);
    }

    if($title != $check[0]){
        $sql = "UPDATE informations SET value = '$title' WHERE informations.id = 20;";
        mysqli_query($conn, $sql);
        $poprawnie++;
    }
    if($description != $check[1]){
        $sql = "UPDATE informations SET value = '$description' WHERE informations.id = 21;";
        mysqli_query($conn, $sql);
        $poprawnie++;
    }

    if($poprawnie > 0){
        //log
        $sql = "select * from informations where id=20 or id=21;";
        $result = mysqli_query($conn, $sql);
        $after = "";
        while ($row = $result->fetch_assoc()) {
            $after .= $row['name'].": ".$row['value'] . "<br/>";
        }
        //zamienienie ' na '' żeby nie psuło zapytania
        $after = str_replace("'", "''", $after);
        $object_id="0";
        $object_type="sponsors";
        $action_type="1";
        $desc="Edytowano sekcję sponsorów";
        include "../../scripts/log.php";
        //log
        
        $_SESSION['alert'] = 'Pomyślnie edytowano sekcję sponsorów';
        $_SESSION['alert_type'] = 'success';
    }else {
        $_SESSION['alert'] = 'Nie wprowadzono żadnych zmian';
        $_SESSION['alert_type'] = 'warning';
    }
}else {
    $_SESSION['alert'] = 'Nie wprowadzono wszystkich danych';
    $_SESSION['alert_type'] = 'error';
}
?>
<script>
    window.location.href = "../../panel.php";
</script>
