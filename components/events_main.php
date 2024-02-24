<section class="py-4 2xl:py-8 2xl:px-[15%] md:px-[10%] px-[5%] w-full">
    <div class="w-full py-8 flex md:flex-row flex-col justify-between items-center">
        <h1 class="font-[poppins] 2xl:text-3xl text-2xl font-bold text-gray-800">Nadchodzące wydarzenia</h1>
        <div class="uppercase text-sm flex flex-row gap-4 2xl:text-base text-gray-600">
            <a onclick="callPHP('all')" class="font-[poppins] select_type theme-text-hover theme-text hover:cursor-pointer font-medium">Wszystkie</a>
            <a onclick="callPHP('inf')" class="font-[poppins] select_type theme-text-hover hover:cursor-pointer font-medium">Informatycy</a>
            <a onclick="callPHP('prg')" class="font-[poppins] select_type theme-text-hover hover:cursor-pointer font-medium">Programiści</a>
        </div>
    </div>
    <section id="order_query_result" class="2xl:w-[70vw] md:w-[80vw] w-[90vw] text-white lg:grid-cols-4 grid-cols-2 grid gap-4">
        <?php
            $sql1 = "SELECT * FROM events WHERE status_id = 1 order by event_id DESC";
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
                    $dateofe = $row['data'];
                    $today = explode('-', $today);
                    $today = ''.$today[2].' '.$month[$today[1]-1].' '.$today[0].'';
                    $row['data'] = $today;
                }
                $current = date("Y-m-d");
                if($dateofe < $current){
                    echo '
                    <div onclick="openPopupEvents('.$row['event_id'].')" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="100">
                        <div style="background-image: url('.$row['img'].');" class="relative active:scale-95 bg-zoom cursor-pointer hover:scale-105 duration-300 hover:shadow-[0px_15px_20px_#3d3d3d] aspect-[3/4] flex flex-col justify-end rounded-xl bg-center">
                            <div class="absolute top-0 z-100 rounded-t-lg w-full theme-bg opacity-[0.92] flex flex-row items-center justify-start align-right">
                                <h1 class="white pl-2">AKTUALNIE TRWA</h1>
                                <svg class="h-[24px] w-[24px]">
                                    <circle class = "innerCircle" cx = "50%" cy = "50%" r = "30%" fill = "none" stroke = "#FF0000" stroke-width = "10%">
                                    <animate attributeType="SVG" attributeName="r" begin="0s" dur="1.5s" repeatCount="indefinite" from="1%" to="30%"/>
                                    <animate attributeType="CSS" attributeName="stroke-width" begin="0s"  dur="1.5s" repeatCount="indefinite" from="10%" to="0%" />
                                    <animate attributeType="CSS" attributeName="opacity" begin="0s"  dur="1.5s" repeatCount="indefinite" from="1" to="0"/>
                                    </circle>
                                </svg>
                            </div>
                            <div class="2xl:pb-6 pb-4 pt-32 px-4 rounded-xl bg-gradient-to-t from-black">
                                <p class="font-[poppins] theme-text 2xl:text-sm text-xs uppercase">'.$row["destiny"].'</p>
                                <h1 class="font-[poppins] 2xl:text-2xl md:text-xl text-lg font-medium">'.$row["name"].'</h1>
                                <p class="font-[poppins] text-gray-400 2xl:text-lg md:text-sm text-xs pt-2 uppercase">'.$row['data'].'</p>
                            </div>
                        </div>
                    </div>
                    
                    ';
                } else{
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
                
                }
        ?>
    </section>
    <div class="flex flex-row justify-between items-center">
        <p class=""></p>
        <a href="events.php" class="2xl:text-base text-sm flex flex-row gap-2 my-4 pb-4 uppercase font-[poppins] font-medium text-gray-700 hover:text-black duration-300">
            Pokaż więcej
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
            </svg>
        </a>
    </div>
</section>


 <section id="popupEventsBg" class="fixed z-[50] h-0 opacity-0 top-0 left-0 w-full bg-[#0000009e] transition-opacity duration-150"></section>
  <section id="popupEvents" onclick="popupEventsOpenClose()" class="z-[60] fixed scale-0 top-0 left-0 w-full h-full">
    <div class="flex items-center justify-center w-full h-full px-2">
      <div onclick="event.cancelBubble=true;" class="bg-[#0e0e0e] md:min-w-[800px] md:w-auto w-full max-w-[1200px] min-h-[90vh] max-h-[90vh] overflow-y-auto flex md:flex-row flex-col gap-4 rounded-2xl py-6 sm:px-6  -xl">
        <div id="popupItself" class="flex h-auto w-full justify-between flex-col">
          <div class="w-full flex justify-between items-center">
            <span>  </span>
              <a onclick="popupEventsOpenClose()" class="cursor-pointer mt-2 pb-1 flex items-center space-x-2 text-gray-200 hover:text-red-600 transition-all duration-300">
                  <p class="uppercase font-bold text-xs italic">zamknij</p>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.9" stroke="currentColor" class="w-5 h-5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
              </a>
          </div>                        
            <div id="pupupEventsOutput"></div>
            <span></span>
        </div>
      </div>
    </div>
  </section>

<script>
    var selectors = document.querySelectorAll('.select_type');
    selectors.forEach((elem,index)=>{
        elem.addEventListener('click', ()=>{
            selectors.forEach((e)=>{
                e.classList.remove('theme-text');
            })
        selectors[index].classList.add('theme-text');
        })
    })

    function callPHP(v){
        var httpc = new XMLHttpRequest();
        var url = "scripts/events/select_events_main.php";
        httpc.onreadystatechange = function() { //Call a function when the state changes.
            if(httpc.readyState == 4 && httpc.status == 200) { // complete and no errors
                document.querySelector('#order_query_result').innerHTML = httpc.responseText;
                // alert(httpc.responseText);
                // location.reload();
            }
        };
        httpc.open("POST", url, true); // sending as POST
        httpc.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        httpc.send('order='+v);
    }

    function popupEventsOpenClose() {
        var popup = document.getElementById("popupEvents")
        var popupBg = document.getElementById("popupEventsBg")
        popupBg.classList.toggle("opacity-0")
        popupBg.classList.toggle("h-0")
        popupBg.classList.toggle("h-full")
        popup.classList.toggle("scale-0")
        popup.classList.add("duration-200")
        //ustawienie tak aby nie dało się przewinąć strony pod popupem
        if (popup.classList.contains("scale-0")) {
            document.body.style.overflowY = "auto";

        } else {
            document.body.style.overflowY = "hidden";
        }
    }
    function openPopupEvents(id){
        var popupOutput = document.getElementById("pupupEventsOutput");
        //popupOutput.innerHTML =  "<div class='flex justify-center items-center'><div class='flex flex-col justify-center items-center'><div class='animate-spin rounded-full h-32 w-32 border-t-2 border-b-2 border-gray-900'></div><div class='text-white text-xl font-semibold mt-4'>Ładowanie...</div></div>";
        popupOutput.innerHTML =  "<div class='w-full flex items-center justify-center z-[999]'><div class='z-[30] bg-black/90 p-4 rounded-xl'><div class='lds-dual-ring'></div></div></div>";
        popupEventsOpenClose();
        const url = "components/panel/events/events_preview.php?id="+id;
        fetch(url)
            .then(response => response.text())
            .then(data => {
            const parser = new DOMParser();
            const parsedDocument = parser.parseFromString(data, "text/html");

            // Wstaw zawartość strony (bez skryptów) do "panel_body"
            popupOutput.innerHTML = parsedDocument.body.innerHTML;

            // Przechodź przez znalezione skrypty i wykonuj je
            const scripts = parsedDocument.querySelectorAll("script");
            scripts.forEach(script => {
                const scriptElement = document.createElement("script");
                scriptElement.textContent = script.textContent;
                document.body.appendChild(scriptElement);
            });
            });
    }
    //ustawienie gdby popup jest otwarty o aby klawisz "esc" zamykał go
    document.addEventListener('keydown', function(event) {
        if (event.key === "Escape") {
            if (document.getElementById("popupEvents").classList.contains("scale-0") == false) {
                popupEventsOpenClose();
            }
        }
    });
</script>