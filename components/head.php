<?php
include "./scripts/conn_db.php";
$sql = "select value from informations where id=1 or id=12 or id=3;";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    $main_info[] = $row['value'];
}


?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$main_info[1]?>">
    <title><?=$main_info[0]?></title>
    <link rel="stylesheet" href="public/global.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="theme.js"></script>
    <link rel="icon" type="image/x-icon" href="public/img/<?=$main_info[2]?>">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
      <script>
    window.addEventListener('scroll', function() {
      const scrollValue = window.scrollY / (document.body.scrollHeight - window.innerHeight);
      const hue = scrollValue * 1080; // Zmieniając scroll, zmienia kolor tęczy (0-360 stopni)
      document.documentElement.style.setProperty('--scroll', `hsl(${hue}, 70%, 50%)`);
    });
  </script>
</head>
