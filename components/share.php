<?php
if (isset($_GET['share'])) {
    $id = $_GET['share'];
    $id_szyfr = base64_decode($id);
    $sql = "SELECT * FROM `events` WHERE `event_id` = '$id_szyfr' and (status_id = 1 or status_id = 2 or status_id = 3)";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo '
        <script>
        openPopupEvents(' . $id_szyfr . ');
        </script>
        ';
    }
}
?>