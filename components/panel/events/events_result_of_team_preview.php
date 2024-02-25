
<table class="py-2 px-4 my-2 w-full">
<?php
$id = $_GET['id'];
include "../../../scripts/conn_db.php";
$sql = "SELECT wyniki.wynik_id, a.name as 'winner', b.name as 'loser', a.class as 'class_win', b.class as 'class_los', fazy.name as 'faza', wyniki.date_of_spotkanie, wyniki.team_win, wyniki.team_los, wyniki.maps_win, wyniki.rounds_win, wyniki.maps_los, wyniki.rounds_los from wyniki join teams a on a.team_id=wyniki.team_win join teams b on b.team_id=wyniki.team_los join fazy on fazy.faza_id=wyniki.faza_id where wyniki.team_win = '$id' or wyniki.team_los = '$id' order by wyniki.date_of_spotkanie desc;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row4 = $result->fetch_assoc()) {
    $row4['date_of_spotkanie'] = date("d.m.Y H:i", strtotime($row4['date_of_spotkanie']));
    echo '
        
        <tr class="hover:bg-black/30">
            <td class="py-1"><span ';
            if ($row4['team_win'] == $_GET['id']) {
                echo 'class="text-xs text-green-500"';
            } else {
                echo 'class="text-xs text-gray-500"';
            }
            echo '>'.$row4['winner'].'</span> <span class="text-gray-600">'.$row4['class_win'].'</span> vs 
            <span ';
            if ($row4['team_los'] == $_GET['id']) {
                echo 'class="text-xs text-red-500"';
            } else {
                echo 'class="text-xs text-gray-500"';
            }
            echo '>'.$row4['loser'].'</span> <span class="text-gray-600">'.$row4['class_los'].'</span></td>
            <td>Mapy: 
            <span ';
            if ($row4['team_win'] == $_GET['id']) {
                echo 'class="text-xs text-green-500"';
            } else {
                echo 'class="text-xs text-gray-500"';
            }
            echo '>
            '.$row4['maps_win'].'</span> : <span ';
            if ($row4['team_los'] == $_GET['id']) {
                echo 'class="text-xs text-red-500"';
            } else {
                echo 'class="text-xs text-gray-500"';
            }
            echo '>'.$row4['maps_los'].'</span></td>

            <td>Rundy: 
            <span ';
            if ($row4['team_win'] == $_GET['id']) {
                echo 'class="text-xs text-green-500"';
            } else {
                echo 'class="text-xs text-gray-500"';
            }
            echo '>
            '.$row4['rounds_win'].'</span> : <span ';
            if ($row4['team_los'] == $_GET['id']) {
                echo 'class="text-xs text-red-500"';
            } else {
                echo 'class="text-xs text-gray-500"';
            }
            echo '>'.$row4['rounds_los'].'</span></td>

            <td class="text-right">'.$row4['date_of_spotkanie'].'</td>
        </tr>
        
    ';
}
} else {
    echo '<tr><td colspan="4" class="text-center text-xs">Drużyna nie rozegrała jeszcze meczy.</td></tr>';
}
  ?>
</table>

