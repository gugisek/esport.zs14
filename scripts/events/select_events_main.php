<?php
    include '../../scripts/security.php';
    include '../../scripts/conn_db.php';

    if(isset($_POST['order'])){
        if($_POST['order']=='all'){
            $sql1 = "SELECT * FROM events WHERE status_id = 1 and (destiny = 'all' or destiny = 'prg' or destiny = 'inf') order by event_id DESC";
        } else if($_POST['order']=='prg'){
            $sql1 = "SELECT * FROM events WHERE status_id = 1 and (destiny = 'all' or destiny = 'prg') order by event_id DESC";
        } else if($_POST['order']=='inf'){
            $sql1 = "SELECT * FROM events WHERE status_id = 1 and (destiny = 'all' or destiny = 'inf') order by event_id DESC";       
        }
    }
    $result1 = mysqli_query($conn, $sql1);
    while($row = mysqli_fetch_array($result1)) {
        if($row['img']=='' || $row['img']=='NULL'){
            $row['img'] = "'public/img/events/event1.jpg'";
        } else{
            $row['img'] = "'public/img/events/".$row['img']."'";
        }
        if($row['destiny']=='all'){
             $row['destiny'] = 'Dla wszystkich';
        } else if($row['destiny']=='prg'){
            $row['destiny'] = 'Dla programistów';
        } else if($row['destiny']=='inf'){
            $row['destiny'] = 'Dla infromatyków';
        } else{
            $row['destiny'] = '';
        }
        if($row['name']=='' || $row['name']=='NULL'){
            $row['name'] = 'Bez tytułu';
        } else{
            $htmls = array("<p>", "<h1>", "</p>", "</h1>");
            $row['name'] = str_replace($htmls, "", $row['name']);
        }
        if($row['data']=='' || $row['name']=='NULL'){
            $row['data'] = 'Bez daty';
        } else{
            $month = array('stycznia', 'lutego', 'marca','kwietnia','maja','czerwca','lipca','sierpnia','września','października','listopada','grudnia');
            $today = $row['data'];
            $today = explode('-', $today);
            $today = ''.$today[2].' '.$month[$today[1]-1].' '.$today[0].'';
            $row['data'] = $today;
        }
        echo '
            <div onclick="openPopupEvents('.$row['event_id'].')" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="100">
                <div style="background-image: url('.$row['img'].');" class="active:scale-95 bg-zoom cursor-pointer hover:scale-105 duration-300 hover:shadow-[0px_15px_20px_#3d3d3d] aspect-[3/4] flex flex-col justify-end rounded-xl bg-center">
                    <div class="2xl:pb-6 pb-4 pt-32 px-4 rounded-xl bg-gradient-to-t from-black">
                        <p class="font-[poppins] theme-text 2xl:text-sm text-xs uppercase">'.$row["destiny"].'</p>
                        <h1 class="font-[poppins] 2xl:text-2xl md:text-xl text-lg font-medium">'.$row["name"].'</h1>
                        <p class="font-[poppins] text-gray-400 2xl:text-lg md:text-sm text-xs pt-2 uppercase">'.$row['data'].'</p>
                    </div>
                </div>
            </div>
            ';
        }
?>