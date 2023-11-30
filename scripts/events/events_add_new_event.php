<?php 
    include "../security.php";
    include "../conn_db.php";

    $value = $_POST['value'];
    $sql = "INSERT INTO `wydarzenia` (`name`, `status`) VALUES ('".$value."', 'active');";

    if(!empty($value)){
        $sql_check = "SELECT * FROM `wydarzenia` where name like '%".$value."%'";
        $result = mysqli_query($conn, $sql_check);
        if(mysqli_num_rows($result)==0){
            if(mysqli_query($conn, $sql)){
                $_SESSION['alert'] = 'Pomyślnie Dodano nowe wydarzenie: '.$value.'';
                $_SESSION['alert_type'] = 'success';

                //log
                //DO UZUPEŁNIENIA
                //logend
            } else{
                $_SESSION['alert'] = 'Wystąpił błąd podczas zmiany';
                $_SESSION['alert_type'] = 'error';
            }
        } else{
            $_SESSION['alert'] = 'Wydarzenie o takiej nazwie już istnieje. Nie wprowadzono zmian';
            $_SESSION['alert_type'] = 'warning';
        }
    } else{
        $_SESSION['alert'] = 'Pole nie zostało wypełnione. Nie wprowadzono zmian';
        $_SESSION['alert_type'] = 'warning';
    }

    mysqli_close($conn);
?>