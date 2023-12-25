<div class=" events-setting-panels divide-y divide-white/5 hidden">
    <div class="sm:px-6 lg:px-8">
        <div class="px-4 mb-6 sm:px-0 mt-6 flex flex-row justify-between items-center">
            <div class="flex flex-col w-full">
                <div class="flex flex-row justify-between">
                    <div>
                        <h3 class="text-base font-semibold leading-7 text-white">Ustawienia Wydarzeń</h3>
                        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-400">Przeglądaj zarchwizowane wydarzenia, przywracaj je.</p>
                    </div>
                    <!-- <div class="py-2">
                        <button type="button" onclick="openPopupEvents(0)" class="inline-flex items-center gap-x-2 rounded-md bg-green-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Dodaj
                                <svg class="-mr-0.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"></path>
                                </svg>
                        </button>
                    </div> -->
                </div>
                <div class="mt-6 border-t border-b border-white/10">
                    <dl class="divide-y divide-white/10">
                        <div class="w-full py-6 px-6">
                            <section class="w-full text-white lg:grid-cols-4 grid-cols-2 grid gap-4 justify-between">
                                <!-- <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="100" class="order-first">
                                    <div onclick="openPopupEvents(0)" class="bg-transparent cursor-pointer hover:scale-[1.02] duration-300 aspect-[4/5] flex flex-col justify-center rounded-xl border-2 border-green-600 border-dashed">
                                        <div class="flex flex-col-reverse justify-center items-center gap-y-4">
                                            <h1 class="font-[poppins] 2xl:text-2xl md:text-xl text-lg font-medium text-center text-green-600">Dodaj Event</h1>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-8 h-8 stroke-green-600">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                            </svg>
                                        </div>
                                    </div>
                                </div> -->
                                <?php
                                include "../../scripts/conn_db.php";
                                $sql1 = "SELECT * FROM events WHERE status_id = 3 order by event_id desc";
                                $result1 = mysqli_query($conn, $sql1);
                                if(mysqli_num_rows($result1)<1){
                                    echo '
                                        <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="100" class="order-first">
                                            <div class="bg-transparent duration-300 aspect-[4/5] flex flex-col justify-center rounded-xl border-2 border-slate-600 border-dashed">
                                                <div class="flex flex-col-reverse justify-center items-center gap-y-4">
                                                    <h1 class="font-[poppins] 2xl:text-2xl md:text-xl text-lg font-medium text-center text-slate-600">Brak zarchiwizowamych wydarzeń</h1>
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                }
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
                                        if($row['status_id']==3){
                                            $status = 'zarchiwizowany';
                                            $color = 'text-amber-600';
                                        } else if($row['status_id']==4){
                                            $status = 'nieaktywny';
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
                                                            <button type="button" onclick="openPopupEventsPreview('.$row['event_id'].')" class="inline-flex items-center gap-x-2 rounded-md bg-slate-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-slate-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                                                Podgląd
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                                                    <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="py-2">
                                                            <button type="button" onclick="returnEvent('.$row['event_id'].')" class="inline-flex items-center gap-x-2 rounded-md bg-teal-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-teal-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                                                Przywróć
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                            <div class="py-2">
                                                                <button type="button" onclick="rewriteId('.$row['event_id'].')" class="inline-flex gap-x-2 items-center rounded-md bg-red-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                                                        Usuń
                                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
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
                            </div>
                            </div>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="popupEventsArchivedDeleteBg" class="fixed z-[50] h-0 opacity-0 top-0 left-0 w-full h-full bg-[#0000009e] transition-opacity duration-300"></section>
  <section id="popupEventsArchivedDelete" onclick="popupEventsArchOpenClose()" class="z-[70] fixed scale-0 top-0 left-0 w-full h-full">
    <div class="flex items-center justify-center w-full h-full px-2">
      <div onclick="event.cancelBubble=true;" id="pupupEventDeleteOutput">
        <div class="relative transform overflow-hidden rounded-lg bg-[#1c1c1c] px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
          <div class="absolute right-0 top-0 hidden pr-4 pt-4 sm:block">
            <button onclick="popupEventsArchOpenClose()" type="button" class="rounded-md text-gray-300 hover:text-gray-500 hover:rotate-90 duration-150 focus:outline-none focus:ring-2 theme-ring-focus focus:ring-offset-2">
              <span class="sr-only">Zamknij</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          <div class="sm:flex sm:items-start">
            <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-[#3d3d3d] sm:mx-0 sm:h-10 sm:w-10">
              <svg class="h-6 w-6 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
              </svg>
            </div>
            <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
              <h3 class="text-base font-semibold leading-6 text-gray-200" id="modal-title">Usuwasz wydarzenie</h3>
              <div class="mt-2">
                <p class="text-sm text-gray-400">Czy na pewno chcesz usunąć to wydarzenie? Nie ma możliwości jego przywrócenia.</p>
              </div>
            </div>
          </div>
          <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
            <button id="eventDeleter" type="button" class="active:scale-95 duration-150 inline-flex w-full justify-center rounded-md bg-red-600 duration-150 px-3 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Usuń</button>
            <button onclick="popupEventsArchOpenClose()" type="button" class="active:scale-95 duration-150 mt-3 inline-flex w-full justify-center rounded-md px-3 py-2 text-sm font-medium text-gray-300 shadow-sm ring-inset ring-1 ring-[#3d3d3d] hover:bg-[#3d3d3d] duration-150 sm:mt-0 sm:w-auto">Zostań</button>
          </div>
        </div>
      </div>
    </div>
  </section>
<script>
    var selectedDate;
    function popupEventsArchOpenClose() {
        var popup = document.getElementById("popupEventsArchivedDelete")
        var popupBg = document.getElementById("popupEventsArchivedDeleteBg")
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
    function rewriteId(xd){
        popupEventsArchOpenClose();
        var eventDeleter = document.getElementById('eventDeleter');
        eventDeleter.setAttribute('onclick', 'removeEvent('+xd+')')
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
     function returnEvent(id){
        var httpc = new XMLHttpRequest();
        var url = "scripts/events/return_event.php";
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
    function removeEvent(id){
        var httpc = new XMLHttpRequest();
        var url = "scripts/events/deactive_event.php";
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
    function openPopupEventsPreview(id){
        var popupOutput = document.getElementById("pupupEventsOutput");
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
    function popupEventsDelete() {
        var popup = document.getElementById("popupEvents")
        var popupBg = document.getElementById("popupEventsBg")
        popupBg.classList.toggle("opacity-0")
        popupBg.classList.toggle("h-0")
        popup.classList.toggle("scale-0")
        popup.classList.add("duration-200")
    }
    //ustawienie gdby popup jest otwarty o aby klawisz "esc" zamykał go
    document.addEventListener('keydown', function(event) {
        if (event.key === "Escape") {
            if (document.getElementById("popupEvents").classList.contains("scale-0") == false) {
                popupEventsArchOpenClose();
            }
        }
    });
</script>