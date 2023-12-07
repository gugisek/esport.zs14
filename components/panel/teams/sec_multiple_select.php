<?php
include "../../../scripts/security.php";
$variant = $_GET['variant'];
$event_id = $_GET['event_id'];

if($variant!='delete') {
    echo '<select name="sec_'.$variant.'" class="ml-2 outline-none duration-150 capitalize relative cursor-default rounded-md bg-[#0e0e0e] focus:text-white py-1.5 pl-3 pr-10 text-left text-gray-400 text-xs shadow-sm ring-1 ring-inset ring-[#3d3d3d] focus:outline-none focus:ring-2 theme-ring-focus sm:leading-6" required>
        <option value="" class="hidden" disabled selected>Wybierz</option>';
    include "../../../scripts/conn_db.php";
    if($variant == "status"){
        $sql = "SELECT status_id as id, name FROM team_status";
    }else if($variant == "groups"){
        $sql = "SELECT group_id as id, name FROM groups where event_id=$event_id";
    }
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        echo '
            <option class="capitalize" value="'.$row['id'].'">'.$row['name'].'</option>
        ';
    }
    echo '</select>';
}else {
    echo '
    <div class="text-center px-4">
          <h3 class="text-sm font-semibold leading-6 text-gray-300" id="modal-title">
            Czy na pewno chcesz usunąć?
          </h3>
          <div class="mt-1>
            <p class="text-xs text-gray-500">
              Usunięcie drużn jest nieodwracalne. 
            </p>
          </div>
        </div>
    ';
}
?>