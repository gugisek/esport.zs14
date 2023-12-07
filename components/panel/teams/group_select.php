
<?php
    $team_event = $_GET['event_id'];
    $team_group_id = $_GET['team_group_id'];
?>
<select name="team_group" class="duration-150 capitalize relative w-full cursor-default rounded-md bg-[#0e0e0e] focus:text-white py-1.5 pl-3 pr-10 text-left text-gray-400 shadow-sm ring-1 ring-inset ring-[#3d3d3d] focus:outline-none outline-none focus:ring-2 theme-ring-focus sm:text-sm sm:leading-6">
    <option value="0">Brak</option>
    <?php
        include "../../../scripts/conn_db.php";
        $sql = "SELECT name, group_id FROM groups where event_id=$team_event";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)) {
            echo '
                <option class="capitalize" ';
                if($row['group_id'] == $team_group_id){
                    echo 'selected';
                }
                echo ' value="'.$row['group_id'].'">'.$row['name'].'</option>
            ';
        }
    ?>
</select>