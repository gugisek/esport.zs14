<?php
session_start();
$id = $_POST['popup_personalisation_id'];
$target_dir = "../../public/img/users_pp/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$img_ext = pathinfo($target_file, PATHINFO_EXTENSION);

echo $target_file;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
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
    rename($target_file, $target_dir . $id . "-pp." . $img_ext);
    include "../../scripts/conn_db.php";
    $file_name = $id . "-pp." . $img_ext;
    $sql = "UPDATE users SET profile_picture = '$file_name' WHERE id = $id";
    $conn->query($sql);
    $conn->close();
    //log
    $object_id=$id;
    $object_type="users";
    $before=" ";
    $after="Zdjęcie profilowe: $file_name";
    $action_type="1";
    $desc="Zmieniono zdjęcie profilowe użytkownika";
    include "../../scripts/log.php";
    //log
    $_SESSION['alert'] = 'Zdjęcie profilowe zostało zmienione.';
    $_SESSION['alert_type'] = 'ok';
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

//------------------------------------------------------------------------------
//------------------------------------------------------------------------------
//------------------------------------------------------------------------------

$target_dir = "../../public/img/users_bp/";
$target_file = $target_dir . basename($_FILES["background"]["name"]);

$img_ext = pathinfo($target_file, PATHINFO_EXTENSION);

echo $target_file;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["background"]["tmp_name"]);
  if($check !== false) {
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
if ($_FILES["background"]["size"] > 5000000) {
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
  if (move_uploaded_file($_FILES["background"]["tmp_name"], $target_file)) {
    rename($target_file, $target_dir . $id . "-bp." . $img_ext);
    include "../../scripts/conn_db.php";
    $file_name = $id . "-bp." . $img_ext;
    $sql = "UPDATE users SET background_picture = '$file_name' WHERE id = $id";
    $conn->query($sql);
    $conn->close();
    //log
    $object_id=$id;
    $object_type="users";
    $before=" ";
    $after="Zdjęcie tła: $file_name";
    $action_type="1";
    $desc="Zmieniono zdjęcie tła użytkownika";
    include "../../scripts/log.php";
    //log
    $_SESSION['alert'] = 'Zdjęcie tła zostało zmienione.';
    $_SESSION['alert_type'] = 'ok';
    echo "The file ". htmlspecialchars( basename( $_FILES["background"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
if($uploadOk != 1){
    $_SESSION['alert'] = 'Przesyłanie zdjęcia nie powiodło się.';
    $_SESSION['alert_type'] = 'warn';
}
header('Location: ../../panel.php');
?>