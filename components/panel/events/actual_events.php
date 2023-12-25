<div class=" events-setting-panels divide-y divide-white/5">
    <div class="sm:px-6 lg:px-8">
        <div class="px-4 mb-6 sm:px-0 mt-6 flex flex-row justify-between items-center">
            <div class="flex flex-col w-full">
                <div class="flex flex-row justify-between">
                    <div>
                        <h3 class="text-base font-semibold leading-7 text-white">Ustawienia Wydarzeń</h3>
                        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-400">Dodawaj, edytuj i usuwaj wydarzenia. Publikuj i archiwizuj.</p>
                    </div>
                    <div class="py-2">
                        <button type="button" onclick="openPopupEvents(0)" class="inline-flex items-center gap-x-2 rounded-md bg-green-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Dodaj
                                <svg class="-mr-0.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"></path>
                                </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-6 border-t border-b border-white/10">
                    <dl class="divide-y divide-white/10">
                        <div class="w-full py-6 px-6">
                            <section class="w-full text-white lg:grid-cols-4 grid-cols-2 grid gap-4 justify-between">
                                <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="100" class="order-first">
                                    <div onclick="openPopupEvents(0)" class="bg-transparent cursor-pointer hover:scale-[1.02] duration-300 aspect-[4/5] flex flex-col justify-center rounded-xl border-2 border-green-600 border-dashed">
                                        <div class="flex flex-col-reverse justify-center items-center gap-y-4">
                                            <h1 class="font-[poppins] 2xl:text-2xl md:text-xl text-lg font-medium text-center text-green-600">Dodaj Event</h1>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-8 h-8 stroke-green-600">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                include "../../scripts/conn_db.php";
                                $sql1 = "SELECT * FROM events WHERE status_id in(1,2) order by event_id desc";
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
                                            $month = array('stycznia', 'luetgo', 'marca','kwietnia','maja','czerwca','lipca','sierpnia','września','października','listopada','grudnia');
                                            $today = $row['data'];
                                            $today = explode('-', $today);
                                            $today = ''.$today[2].' '.$month[$today[1]-1].' '.$today[0].'';
                                            $row['data'] = $today;
                                        }
                                        if($row['status_id']==1){
                                            $status = 'opublikowany';
                                            $color = 'text-green-600';
                                        } else if($row['status_id']==2){
                                            $status = 'szkic';
                                            $color = 'text-indigo-600';
                                        }
                                        echo '
                                            <div data-aos="fade-up"data-aos-anchor-placement="center-bottom" data-aos-delay="400" class="relative aspect-[4/5] group/item rounded-lg">
                                                <div style="background-image: url('.$row['img'].');" class=" absolute  cursor-pointer rounded-lg duration-300 w-full h-full flex flex-col justify-end bg-center bg-zoom">
                                                    <div class="2xl:pb-6 pb-4 pt-32 px-4 rounded-lg">
                                                        <p class="font-[poppins] theme-text 2xl:text-sm text-xs uppercase">'.$row["destiny"].'</p>
                                                        <h1 class="font-[poppins] 2xl:text-2xl md:text-xl text-lg font-medium">'.$row["name"].'</h1>
                                                        <p class="font-[poppins] text-gray-400 2xl:text-lg md:text-sm text-xs pt-2 uppercase">'.$row['data'].'</p>
                                                    </div>
                                                </div>
                                                <div class="bg-gray-400/25 group/edit group-hover/item:flex hidden absolute w-full h-full flex-col justify-center rounded-lg">
                                                    <div class="flex flex-col justify-center rounded-lg">
                                                        <div class="w-full flex flex-col items-center justify-center mb-12">
                                                            <h1 class="font-[poppins] text-2xl font-medium uppercase '.$color.'">'.$status.'</h1>
                                                            <p class="font-[poppins] theme-text text-2xl pt-2 uppercase w-full text-center font-medium">ID: '.$row['event_id'].'</p>
                                                        </div>
                                                        <div class="w-full flex flex-col justify-center items-center">
                                                            <div class="py-2">
                                                                <button type="button" onclick="openPopupEvents('.$row['event_id'].')" class="inline-flex gap-x-2 items-center rounded-md bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                                                        Edytuj
                                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                                                                        </svg>
                                                                </button>
                                                            </div>
                                                            ';
                                                            if($row['status_id']==2){
                                                                echo '
                                                                    <div class="py-2">
                                                                        <button type="button" onclick="publishEvent('.$row['event_id'].')" class="inline-flex items-center gap-x-2 rounded-md bg-green-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                                                                Publikuj
                                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15m0-3-3-3m0 0-3 3m3-3V15" />
                                                                                </svg>
                                                                        </button>
                                                                    </div>
                                                                ';
                                                            } else if($row['status_id']==1){
                                                                echo '
                                                                    <div class="py-2">
                                                                        <button type="button" onclick="hideEvent('.$row['event_id'].')" class="inline-flex items-center gap-x-2 rounded-md bg-slate-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-slate-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                                                                Ukryj
                                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                                                                                </svg>
                                                                        </button>
                                                                    </div>
                                                                ';
                                                            }
                                                            echo '
                                                            <div class="py-2">
                                                                <button type="button" onclick="archiveEvent('.$row['event_id'].')" class="inline-flex gap-x-2 items-center rounded-md bg-amber-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-amber-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                                                        Archiwizuj
                                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                                                        </svg>
                                                                </button>
                                                            </div>  
                                                        </div>            
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                ?>
                            </section>
                            <div class="OutputPopup">
                            <div class="OutputPopupContent">
                            <section id="popupEventsBg" class="fixed z-[50] h-0 opacity-0 top-0 left-0 w-full bg-[#0000009e] transition-opacity duration-150"></section>
                                <section id="popupEvents" onclick="popupEventsDelete()" class="z-[60] fixed scale-0 top-0 left-0 w-full h-full">
                                    <div class="flex items-center justify-center w-full h-full px-2">
                                    <div onclick="event.cancelBubble=true;" class="bg-[#0e0e0e] md:min-w-[800px] md:w-auto w-full max-w-[1200px] min-h-[90vh] max-h-[90vh] overflow-y-auto flex md:flex-row flex-col gap-4 rounded-2xl py-6 sm:px-6  -xl">
                                        <div id="popupItself" class="flex h-auto w-full justify-between flex-col">
                                        <div class="w-full flex justify-between items-center">
                                            <span>  </span>
                                            <a onclick="popupEventsDelete()" class="cursor-pointer mt-2 pb-1 flex items-center space-x-2 text-gray-200 hover:text-red-600 transition-all duration-300">
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
                            </div>
                            </div>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var selectedDate;
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
    function setTempEvent(){
        if(Object.hasOwn(EventTempSettings, 'Kalendarz')){
            localStorage.setItem('EventTempSettings', JSON.stringify(EventTempSettings));
            resultOfStorage = localStorage.getItem('EventTempSettings')
            var cossss = JSON.parse(resultOfStorage);
            var selectedDate = cossss['Kalendarz'];
            var calendarPara = document.querySelector('.CurrentDate');
            calendarPara.innerHTML = 'Ostatnio wybrana data: '+selectedDate;
        } else{
            var selectedDate = '';
        }
        return selectedDate;
    }
    function publishEvent(id){
        var httpc = new XMLHttpRequest();
        var url = "scripts/events/publish_event.php";
        httpc.onreadystatechange = function() { //Call a function when the state changes.
            if(httpc.readyState == 4 && httpc.status == 200) { // complete and no errors
                // alert(httpc.responseText);
                location.reload();
            }
        };
        httpc.open("POST", url, true); // sending as POST
        httpc.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        httpc.send('id='+id);
    }
    function hideEvent(id){
        var httpc = new XMLHttpRequest();
        var url = "scripts/events/hide_event.php";
        httpc.onreadystatechange = function() { //Call a function when the state changes.
            if(httpc.readyState == 4 && httpc.status == 200) { // complete and no errors
                // alert(httpc.responseText);
                location.reload();
            }
        };
        httpc.open("POST", url, true); // sending as POST
        httpc.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        httpc.send('id='+id);
    }
    function archiveEvent(id){
        var httpc = new XMLHttpRequest();
        var url = "scripts/events/archive_event.php";
        httpc.onreadystatechange = function() { //Call a function when the state changes.
            if(httpc.readyState == 4 && httpc.status == 200) { // complete and no errors
                // alert(httpc.responseText);
                location.reload();
            }
        };
        httpc.open("POST", url, true); // sending as POST
        httpc.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        httpc.send('id='+id);
    }
    function openPopupEvents(id){
        setTempEvent();
        var popupOutput = document.getElementById("pupupEventsOutput");
        //popupOutput.innerHTML =  "<div class='flex justify-center items-center'><div class='flex flex-col justify-center items-center'><div class='animate-spin rounded-full h-32 w-32 border-t-2 border-b-2 border-gray-900'></div><div class='text-white text-xl font-semibold mt-4'>Ładowanie...</div></div>";
        popupOutput.innerHTML =  "<div class='w-full flex items-center justify-center z-[999]'><div class='z-[30] bg-black/90 p-4 rounded-xl'><div class='lds-dual-ring'></div></div></div>";
        popupEventsOpenClose();
        const url = "components/panel/events/create_new_event_popup.php?id="+id;
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