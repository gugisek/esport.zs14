<?php
include "../security.php";
$team_id = $_POST['team_id'];
$team_name = $_POST['team_name'];
$team_name = str_replace("'", "''", $team_name);
$team_class = $_POST['team_class'];
$team_event_id = $_POST['team_event'];
$team_status_id = $_POST['team_status'];
$team_group_id = $_POST['team_group'];
$team_players = 'cap:'.$_POST['cap_name'].'&'.$_POST['cap_pseudo'].'&'.$_POST['cap_discord'].';';
if(isset($_POST['rez_name'])){
    $team_players = $team_players.'rez:'.$_POST['rez_name'].'&'.$_POST['rez_pseudo'].'&'.$_POST['rez_discord'].';';
}
$zawodnik_count = $_POST['normal_players_num']-1;
for($i=$zawodnik_count;$i>=1;$i--){
    $team_players = $team_players.'pl'.$i.':'.$_POST['zawodnik'.$i.'_name'].'&'.$_POST['zawodnik'.$i.'_pseudo'].'&'.$_POST['zawodnik'.$i.'_discord'].';';
}
if ($_FILES['team_profile_img']['name'] != "") {
    $logo = 'active';
}else{
    $logo = '';
}

include "../conn_db.php";
$sql_old = "select * from teams where team_id = '$team_id'";
$result_old = $conn->query($sql_old);
$row_old = $result_old->fetch_assoc();
$row_old['name'] = str_replace("'", "''", $row_old['name']);

if($team_name != $row_old['name'] || $team_class != $row_old['class'] || $team_event_id != $row_old['event_id'] || $team_status_id != $row_old['status_id'] || $team_group_id != $row_old['group_id'] || $_FILES['team_profile_img']['name'] != "" || $team_players != $row_old['players']) {
    $sql = "select name from teams where name = '$team_name' and event_id = '$team_event_id'";
    $result = $conn->query($sql);
    $tmp_name = $result->fetch_assoc();
    if ($result->num_rows > 0 && $tmp_name['name'] != $row_old['name']) {
        $_SESSION['alert'] = 'Drużyna o takiej nazwie już istnieje';
        $_SESSION['alert_type'] = 'warning';
    }else{
        $sql_old = "select * from teams where team_id = '$team_id'";
        $result_old = $conn->query($sql_old);
        $row_old = $result_old->fetch_assoc();
        $sql = "UPDATE teams SET name = '$team_name', class = '$team_class', event_id = '$team_event_id', status_id = '$team_status_id', group_id = '$team_group_id', players='$team_players' WHERE team_id = '$team_id';";
        mysqli_query($conn, $sql);
        //log
            $before = "Nazwa: ".$row_old['name']."<br/>Klasa: ".$row_old['class']."<br/>ID wydarzenia: ".$row_old['event_id']."<br/>ID statusu: ".$row_old['status_id']."<br/>ID grupy: ".$row_old['group_id']."<br/>Zawodnicy: ".$row_old['players'];
            $before = str_replace("'", "''", $before);
            $after = "Nazwa: ".$team_name."<br/>Klasa: ".$team_class."<br/>ID wydarzenia: ".$team_event_id."<br/>ID statusu: ".$team_status_id."<br/>ID grupy: ".$team_group_id."<br/>Zawodnicy: ".$team_players;
            $after = str_replace("'", "''", $after);
            $object_id=$team_id;
            $object_type="teams";
            $action_type="1";
            if($_FILES['team_profile_img']['name'] != ""){
                $desc="Edytowano drużynę i/lub logo";
            }else{
                $desc="Edytowano drużynę";
            }
            include "../../scripts/log.php";
        //log
        $_SESSION['alert'] = 'Pomyślnie edytowano drużynę';
        $_SESSION['alert_type'] = 'success';
    }
    if($logo=='active'){
        if(($_FILES['team_profile_img']['name'] != "")){

            $target_dir = "../../public/img/teams/";
            $target_file = $target_dir . basename($_FILES["team_profile_img"]["name"]);

            $img_ext = pathinfo($target_file, PATHINFO_EXTENSION);

            echo $target_file;
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
            $checkimg = getimagesize($_FILES["team_profile_img"]["tmp_name"]);
            if($checkimg !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
            }

            // Check if file already exists
            // if (file_exists($target_file)) {
            // echo "Sorry, file already exists.";
            // $uploadOk = 0;
            // $_SESSION['alert'] = 'Przesyłany plik nie może mieć takiej samej nazwy jak docelowy plik';
            // $_SESSION['alert_type'] = 'error';
            // }

            // Check file size
            if ($_FILES["team_profile_img"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
            $_SESSION['alert'] = 'Plik jest za duży';
            $_SESSION['alert_type'] = 'error';
            }

            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
            $_SESSION['alert'] = 'Nieprawidłowy format pliku';
            $_SESSION['alert_type'] = 'error';

            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
            if (move_uploaded_file($_FILES["team_profile_img"]["tmp_name"], $target_file)) {
                rename($target_file, $target_dir ."team_".$team_id."profile." . $img_ext);
                include "../conn_db.php";
                $file_name = "team_".$team_id."profile." . $img_ext;
                $sql = "UPDATE teams SET profile_img = '$file_name' WHERE team_id = '$team_id';";
                $conn->query($sql);
                $conn->close();
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    }
}else{
    $_SESSION['alert'] = 'Nie wprowadzono żadnych zmian';
    $_SESSION['alert_type'] = 'warning';
}
header ("Location: ../../panel.php");
?>