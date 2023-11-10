<?php
  session_start();
  if(!isset($_SESSION['logged']))
  {
    header('Location: login.php');
    exit();
  }
  
  $main_name = $_POST['main_name'];
  // zamienienie jednego apostrofu na dwa, żeby nie psuło zapytania
  $main_name = str_replace("'", "''", $main_name);
  $description = $_POST['description'];
  $description = str_replace("'", "''", $description);
  $meta_description = $_POST['meta_description'];
  if (isset($_FILES['fileToUpload']['name'])) {
    $logo = 'active';
  }
  $discord = $_POST['discord'];
  $twitch = $_POST['twitch'];
  $instagram = $_POST['instagram'];
  $strona_szkoly = $_POST['strona_szkoly'];
  $adres_email = $_POST['adres_email'];
  $adm_name = $_POST['adm_name'];

  include "../conn_db.php";

    //log
    $sql = "select * from informations;";
    $result = mysqli_query($conn, $sql);
    $before = "";
    while ($row = $result->fetch_assoc()) {
        $before .= $row['name'].": ".$row['value'] . ",<br/>";
    }
    //zamienienie ' na '' żeby nie psuło zapytania
    $before = str_replace("'", "''", $before);
    //log

    $poprawnie = 0;

    $sql = "select value from informations;";
    $result = mysqli_query($conn, $sql);
    while ($row_check = $result->fetch_assoc()) {
        $check[] = $row_check['value'];
    }
    $check[0] = str_replace("'", "''", $check[0]);
    if($main_name != $check[0]){
        $sql = "UPDATE informations SET value = '$main_name' WHERE informations.name = 'main_name';";
        mysqli_query($conn, $sql);
        $poprawnie++;
    }
    if($description != $check[1]){
        $sql = "UPDATE informations SET value = '$description' WHERE informations.name = 'description';";
        mysqli_query($conn, $sql);
        $poprawnie++;
    }

    if($meta_description != $check[2]){
        $sql = "UPDATE informations SET value = '$meta_description' WHERE informations.name = 'meta_description';";
        mysqli_query($conn, $sql);
        $poprawnie++;
    }
    if(isset($logo)){

        $target_dir = "../../public/img/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

        $img_ext = pathinfo($target_file, PATHINFO_EXTENSION);

        echo $target_file;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
        $checkimg = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($checkimg !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            rename($target_file, $target_dir ."main_logo." . $img_ext);
            include "../conn_db.php";
            $file_name = "main_logo." . $img_ext;
            $sql = "UPDATE informations SET value = '$file_name' WHERE informations.name = 'logo';";
            $conn->query($sql);
            $conn->close();
            //log
            $object_id='0';
            $object_type="informations";
            $before=" ";
            $after="Logo: $file_name";
            $action_type="1";
            $desc="Zmieniono logo strony";
            include "../../scripts/log.php";
            //log
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            $edit_logo = 1;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        }
    }


    if($discord != $check[4]){
        $sql = "UPDATE informations SET value = '$discord' WHERE informations.name = 'discord';";
        mysqli_query($conn, $sql);
        $poprawnie++;
    }

    if($twitch != $check[5]){
        $sql = "UPDATE informations SET value = '$twitch' WHERE informations.name = 'twitch';";
        mysqli_query($conn, $sql);
        $poprawnie++;
    }

    if($instagram != $check[6]){
        $sql = "UPDATE informations SET value = '$instagram' WHERE informations.name = 'instagram';";
        mysqli_query($conn, $sql);
        $poprawnie++;
    }

    if($strona_szkoly != $check[7]){
        $sql = "UPDATE informations SET value = '$strona_szkoly' WHERE informations.name = 'strona_szkoly';";
        mysqli_query($conn, $sql);
        $poprawnie++;
    }

    if($adres_email != $check[8]){
        $sql = "UPDATE informations SET value = '$adres_email' WHERE informations.name = 'adres_email';";
        mysqli_query($conn, $sql);
        $poprawnie++;
    }

    if($adm_name != $check[9]){
        $sql = "UPDATE informations SET value = '$adm_name' WHERE informations.name = 'adm_name';";
        mysqli_query($conn, $sql);
        $poprawnie++;
    }

    if($poprawnie > 0){
        //log
        $sql = "select * from informations;";
        $result = mysqli_query($conn, $sql);
        $after = "";
        while ($row = $result->fetch_assoc()) {
            $after .= $row['name'].": ".$row['value'] . ",<br/>";
        }
        //zamienienie ' na '' żeby nie psuło zapytania
        $after = str_replace("'", "''", $after);
        $object_id="0";
        $object_type="informations";
        $action_type="1";
        $desc="Edytowano informacje o stronie";
        include "../../scripts/log.php";
        //log
    }
  header('Location: ../../panel.php');

?>