<div class=" events-setting-panels divide-y divide-white/5 hidden">
    <div class="sm:px-6 lg:px-8">
        <form method="post" enctype="multipart/form-data" action="scripts/events/hero_panel_blank_edit.php" class="px-4 mb-6 sm:px-0 mt-6 flex flex-row justify-between items-center">
            <div class="flex flex-col w-full">
                <div class="flex flex-row justify-between">
                    <div>
                        <h3 class="text-base font-semibold leading-7 text-white">Ustawienia Wydarzeń</h3>
                        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-400">Dodawaj, edytuj i usuwaj wydarzenia, grupy, mecze bezpośrednie.</p>
                    </div>
                    <div class="py-2">
                        <button type="subbmit" class="inline-flex items-center gap-x-2 rounded-md bg-green-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Zapisz
                                <svg class="-mr-0.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"></path>
                                </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-6 border-t border-b border-white/10">
                    <dl class="divide-y divide-white/10">
                        <div class="w-full px-6 py-6">
                            <div class="events_grid px-4 py-2 my-3 grid auto-cols-auto auto-rows-fr grid-cols-4 justify-items-center gap-8">
                                <?php
                                    $sql_get_event_name = 'SELECT * FROM wydarzenia where status = "active"';
                                    $result_sgen = mysqli_query($conn, $sql_get_event_name);

                                    while($row = mysqli_fetch_array($result_sgen)){
                                        echo '
                                            <div class="card_event group/item w-11/12 h-11/12 rounded-xl bg-local bg-cover bg-center bg-no-repeat flex justify-center items-center box-shadow relative" style="background-image:url(public/img/blue.png);">
                                                <div class="card_front_event block group/edit group-hover/item:hidden w-full py-4 uppercase theme-bg text-center text-white text-2xl absolute">
                                                    '.$row[1].'
                                                </div>
                                                <div class="card_back_event group/edit hidden group-hover/item:flex w-full h-full rounded-xl bg-slate-950/[0.5] justify-center absolute">
                                                    <div class="w-1/2 h-full flex flex-col items-center justify-center gap-y-6">
                                                        <form method="post" enctype="multipart/form-data">
                                                            <button type="button" class="inline-flex items-center gap-x-2 rounded-md bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-600">
                                                                Edytuj
                                                                <svg class="-mr-0.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"></path>
                                                                </svg>
                                                            </button>
                                                            <input type="hidden" name="event_id" value="'.$row[0].'" />
                                                        </form>
                                                        <form method="post" enctype="multipart/form-data" action="scripts/events/archive_event.php">
                                                            <button type="submit" class="inline-flex items-center gap-x-2 rounded-md bg-amber-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-amber-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-600">
                                                                Archiwizuj
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                                                </svg>
                                                            </button>
                                                            <input type="hidden" name="event_id" value="'.$row[0].'" />
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                ?>
                                <div class="card_add w-[250px] h-[300px] bg-transparent flex justify-center items-center grid-last">
                                    <div class="event_add_button w-fit h-fit flex flex-row justify-center items-center gap-x-2 group/item hover:cursor-pointer">
                                        <h1 class="text-2xl text-green-500 group-hover/item:text-green-600">Dodaj</h1>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-8 h-8 stroke-green-500 group-hover/item:stroke-green-600">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-span-3 flex flex-row gap-6">
                                <div class="w-auto max-w-[92%] py-2 flex flex-row gap-x-3">
                                    <div class="w-fit">
                                        <div class="px-3 py-2 bg-indigo-600 rounded-lg text-white">Wydarzenia</div>
                                    </div>
                                    <div class="seasons flex flex-row justify-start gap-x-3 overflow-x-auto">
                                        <a draggable="true" class="nav_season_select w-fit px-3 py-2 theme-bg rounded-2xl text-white theme-bg-hover hover:cursor-pointer">2023 Season</a>
                                        <a draggable="true" class="nav_season_select w-fit px-3 py-2 theme-bg rounded-2xl text-white theme-bg-hover hover:cursor-pointer">2022 Season</a>
                                        <a draggable="true" class="nav_season_select w-fit px-3 py-2 theme-bg rounded-2xl text-white theme-bg-hover hover:cursor-pointer">2021 Season</a>
                                        <a draggable="true" class="nav_season_select w-fit px-3 py-2 theme-bg rounded-2xl text-white theme-bg-hover hover:cursor-pointer">2020 Season</a>
                                    </div>
                                </div>
                                <button type="button" class="w-fit md:mt-0 mt-4 bg-transparent inline-flex items-center justify-center rounded-2xl text-white">
                                    <svg class="-mr-0.5 h-6 w-6 rounded-2xl hover:bg-green-400 shadow-xl duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div class="trashbin inline-flex items-center justify-center rounded-2xl" ondragover="allowDrop(event)">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="w-6 h-6 duration-300">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </div>
                            </div> -->
                        </div>
                    </dl>
                    <!-- <div class="sm:px-6 lg:px-8 px-4 text-center">
                        <div class="px-4 sm:px-0 my-6">
                            <button type="subbmit" class="inline-flex items-center gap-x-2 rounded-md bg-green-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Zapisz
                                <svg class="-mr-0.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </div> -->
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    function newEventDivAdd(){
        var newEventDiv = document.createElement('form');
        newEventDiv.setAttribute('class', 'new_card_event group/item w-11/12 h-11/12 rounded-xl bg-local bg-cover bg-center bg-no-repeat flex flex-col gap-y-4 justify-center items-center box-shadow relative');
        newEventDiv.setAttribute('style', 'background-image:url(public/img/blue.png);')
        newEventDiv.setAttribute('method', 'post')
        newEventDiv.setAttribute('enctype', 'multipart/form-data')
        newEventDiv.setAttribute('action', 'scripts/events/hero_panel_blank_edit.php')
        newEventDiv.innerHTML = '<input oninput="rewrite()" type="text" name="nazwa" placeholder="Podaj nazwę" required class="w-full py-4 theme-bg text-center text-white text-2xl"></input><div class="event_remover absolute w-8 h-8 flex justify-center items-center -right-3 -top-3 rounded-2xl bg-red-500 hover:bg-red-600 hover:scale-105 duration-300 hover:cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg></div><button type="button" onclick="callPHP1(`value=`)" class="inline-flex absolute bottom-10 items-center gap-x-2 rounded-md bg-green-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Zatwierdź<svg class="-mr-0.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"></path> </svg></button>';
        return newEventDiv;
    }
    
    function rewrite(){
        let sad = document.getElementsByName('nazwa')[0].value;
        document.querySelector('.new_card_event button').setAttribute('onclick', 'callPHP1("value='+sad+'")')
    }

    var eventGrid = document.querySelector('.events_grid');
    var eventAddButton = document.querySelector('.event_add_button');
    var eventAddButtonH1 = document.querySelector('.event_add_button h1');
    var eventAddButtonSvg = document.querySelector('.event_add_button svg');
    var cardAdd = document.querySelector('.card_add');
    var cardRemover = document.querySelectorAll('.event_remover');
    var tempCards = document.querySelectorAll('.new_card_event');
    
    eventAddButton.addEventListener('click', addNewCard);

    function addNewCard(){
        eventGrid.insertBefore(newEventDivAdd(), cardAdd);
        eventAddButton.removeEventListener('click', addNewCard);
        // eventAddButton.classList.replace('hover:cursor-pointer', 'hover:cursor-not-allowed');
        // eventAddButtonH1.classList.replace('text-green-500','text-slate-500');
        // eventAddButtonH1.classList.remove('group-hover/item:text-green-600');
        // eventAddButtonSvg.classList.replace('stroke-green-500','stroke-slate-500');
        // eventAddButtonSvg.classList.remove('group-hover/item:stroke-green-600');
        // tempCards = document.querySelectorAll('.new_card_event');
        eventAddButton.classList.add('hidden');
        addRemoveListener();
        removing();
    }

    function addRemoveListener(){
        cardRemover = document.querySelectorAll('.event_remover');
        tempCards = document.querySelectorAll('.new_card_event');
        cardRemover.forEach((elem, index) =>{
            elem.addEventListener('click', ()=>{
                eventGrid.removeChild(tempCards[index]);
                eventAddButton.addEventListener('click', addNewCard);
                eventAddButton.classList.remove('hidden');
                // eventAddButton.classList.replace('hover:cursor-not-allowed', 'hover:cursor-pointer');
                // eventAddButtonH1.classList.replace('text-slate-500','text-green-500');
                // eventAddButtonH1.classList.add('group-hover/item:text-green-600');
                // eventAddButtonSvg.classList.replace('stroke-slate-500','stroke-green-500');
                // eventAddButtonSvg.classList.add('group-hover/item:stroke-green-600');
            })
        })
    }

    function removing(){
        cardRemover = document.querySelectorAll('.event_remover');
        cardRemover.forEach((elem, index) =>{
            elem.removeEventListener('click', removing)
        })
    }

    function callPHP1(params) {
            var httpc = new XMLHttpRequest();
            var url = "scripts/events/events_add_new_event.php";

            httpc.onreadystatechange = function() { //Call a function when the state changes.
                if(httpc.readyState == 4 && httpc.status == 200) { // complete and no errors
                    // alert(httpc.responseText);
                    const urlParams = new URLSearchParams(window.location.search);
                    urlParams.set('sub', 'events');
                }
            };
            httpc.open("POST", url, true); // sending as POST
            httpc.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            httpc.send(params);
            window.location.href += '?sub=events';
        }

    // var navSeasonSelectionButtons = document.querySelectorAll('.nav_season_select');
    // var navTrashBin = document.querySelectorAll('.trashbin');
    // var Seasons = document.querySelectorAll('.seasons');
    // navSeasonSelectionButtons.forEach((elem, index)=>{
    //     elem.addEventListener('mousedown', ()=>{
    //         navTrashBin[0].addEventListener('dragover', dragovering(index))
    //         navTrashBin[0].addEventListener('dragleave', dragleaving(index))
    //         navTrashBin[0].addEventListener('drop', dropping(index))
    //     })
    //     elem.addEventListener('dragend', ()=>{
    //         navTrashBin[0].removeEventListener('dragover', dragovering);
    //         navTrashBin[0].removeEventListener('dragleave', dragleaving);
    //         navTrashBin[0].removeEventListener('drop', dropping);
    //         alert('xd');
    //         navTrashBin[0].classList.remove('scale-[2.0]');
    //         navSeasonSelectionButtons[index].classList.add('hover:cursor-pointer');
    //         navSeasonSelectionButtons[index].classList.remove('cursor-grabbing');
            
    //     })
    //     elem.addEventListener('drag', ()=>{
    //         navSeasonSelectionButtons[index].classList.remove('hover:cursor-pointer');
    //         navSeasonSelectionButtons[index].classList.add('cursor-grabbing');
    //     })
    // })
    // function allowDrop(event) {
    //     event.preventDefault();
    // }
    // function drop(event, xd) {
    //     event.preventDefault();
    //     Seasons[0].removeChild(navSeasonSelectionButtons[xd]);
    // }
    // function dragovering(xd){
    //             navTrashBin[0].classList.add('scale-[2.0]');
    //             navSeasonSelectionButtons[xd].classList.remove('cursor-grabbing');
    //             navSeasonSelectionButtons[xd].classList.add('cursor-no-drop');
    //         }
    // function dragleaving(xd){
    //             navTrashBin[0].classList.remove('scale-[2.0]');
    //             navSeasonSelectionButtons[xd].classList.add('cursor-grabbing');
    //             navSeasonSelectionButtons[xd].classList.remove('cursor-no-drop');
    //         }
    // function dropping(xd){
    //             drop(event, xd);
    //         }
</script>