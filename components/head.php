<?php
include "./scripts/conn_db.php";
$sql = "select value from informations where id=1;";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
$main_name = $row['value'];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$main_name?></title>
    <link rel="stylesheet" href="public/global.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="theme.js"></script>
</head>
