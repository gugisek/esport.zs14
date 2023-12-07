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
                        </div>
                    </dl>
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
</script>