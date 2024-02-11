<?php
session_start();
$id = $_POST['eventPhotoId'];
echo basename($_FILES["fileToUpload"]["name"]);
$target_dir = "../../public/img/events/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$img_ext = pathinfo($target_file, PATHINFO_EXTENSION);

//
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
  unlink($target_file);

  // $uploadOk = 0;
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
    rename($target_file, $target_dir . "event_img_" . $id . "." .$img_ext);
    // include "../../scripts/conn_db.php";
    // $file_name = "event_img_" . $id . "." .$img_ext;
    // // $sql = "UPDATE users SET profile_picture = '$file_name' WHERE id = $id";
    // // $conn->query($sql);
    // // $conn->close();



    //log
    //DO UZUPEŁNIENIA
    //logend
    $_SESSION['alert'] = 'Pomyślnie wykonano';
    $_SESSION['alert_type'] = 'success';
    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    header('Location: ../../panel.php');
  } else {
    // echo "Sorry, there was an error uploading your file.";
    $_SESSION['alert'] = 'Wystąpił nieoczekiwany błąd';
    $_SESSION['alert_type'] = 'error';
    header('Location: ../../panel.php');
  }
}
?>