<?php
include "../security.php";
include "../../components/loading.php";

$odbiorca = $_POST['odbiorca'];
$odbiorca = str_replace("'", "''", $odbiorca);
$nadawca = $_POST['nadawca'];
$nadawca = str_replace("'", "''", $nadawca);
$title = $_POST['title'];
$title = str_replace("'", "''", $title);
$tresc = $_POST['tresc'];
$tresc = str_replace("'", "''", $tresc);

include "../conn_db.php";
if($odbiorca != '' and $nadawca != '' and $title != '' and ($tresc != '' and $tresc != '<p><br></p>')){
    //log
    $sql = "select * from informations where id=16 or id=17 or id=18 or id=19;";
    $result = mysqli_query($conn, $sql);
    $before = "";
    while ($row = $result->fetch_assoc()) {
        $before .= $row['name'].": ".$row['value'] . ",<br/>";
    }
    //zamienienie ' na '' żeby nie psuło zapytania
    $before = str_replace("'", "''", $before);
    //log

    $poprawnie = 0;

    $sql = "select value from informations where id=16 or id=17 or id=18 or id=19;";
    $result = mysqli_query($conn, $sql);
    while ($row_check = $result->fetch_assoc()) {
        $check[] = str_replace("'", "''", $row_check['value']);
    }

    if($title != $check[0]){
        $sql = "UPDATE informations SET value = '$title' WHERE informations.id = 16;";
        mysqli_query($conn, $sql);
        $poprawnie++;
    }
    if($odbiorca != $check[2]){
        $sql = "UPDATE informations SET value = '$odbiorca' WHERE informations.id = 18;";
        mysqli_query($conn, $sql);
        $poprawnie++;
    }
    if($nadawca != $check[1]){
        $sql = "UPDATE informations SET value = '$nadawca' WHERE informations.id = 17;";
        mysqli_query($conn, $sql);
        $poprawnie++;
    }
    if($tresc != $check[3]){
        $sql = "UPDATE informations SET value = '$tresc' WHERE informations.id = 19;";
        mysqli_query($conn, $sql);
        $poprawnie++;
    }

    if($poprawnie > 0){
        //log
        $sql = "select * from informations where id=16 or id=17 or id=18 or id=19;";
        $result = mysqli_query($conn, $sql);
        $after = "";
        while ($row = $result->fetch_assoc()) {
            $after .= $row['name'].": ".$row['value'] . ",<br/>";
        }
        //zamienienie ' na '' żeby nie psuło zapytania
        $after = str_replace("'", "''", $after);
        $object_id="0";
        $object_type="zapisy";
        $action_type="1";
        $desc="Edytowano przykładowe zgłoszenie";
        include "../../scripts/log.php";
        //log
        //alert
        $_SESSION['alert'] = 'Pomyślnie edytowano przykładowe zgłoszenie';
        $_SESSION['alert_type'] = 'success';
    }else
    {
        $_SESSION['alert'] = 'Nie wprowadzono żadnych zmian';
        $_SESSION['alert_type'] = 'warning';
    }

}else{
    $_SESSION['alert'] = 'Nie wprowadzono wszystkich danych';
    $_SESSION['alert_type'] = 'error';
}

?>
<script>
   window.location.href = "../../panel.php";
</script>