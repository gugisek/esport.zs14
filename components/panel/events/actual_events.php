<div class=" events-setting-panels divide-y divide-white/5">
    <div class="sm:px-6 lg:px-8">
        <div class="px-4 mb-6 sm:px-0 mt-6 flex flex-row justify-between items-center">
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
                        <div class="w-full py-6 px-6">
                            <section class="w-full text-white lg:grid-cols-4 grid-cols-2 grid gap-4 justify-between">
                                <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="100" class="order-first">
                                    <!-- <div style="background-image: url('public/img/event1.jpg');" class="bg-zoom cursor-pointer hover:scale-[1.02] duration-300 saturate-[0.2] hover:saturate-[0.8] aspect-[3/4] flex flex-col justify-center rounded-xl bg-center">
                                        <div class="flex flex-col justify-center items-center rounded-xl bg-gradient-to-t from-black">
                                            <h1 class="font-[poppins] 2xl:text-2xl md:text-xl text-lg font-medium text-center theme-text">Dodaj nowy Event</h1>
                                        </div>
                                    </div> -->
                                    <div onclick="openPopupEvents(1)" class="bg-transparent cursor-pointer hover:scale-[1.02] duration-300 aspect-[3/4] flex flex-col justify-center rounded-xl border-2 border-green-600 border-dashed">
                                        <div class="flex flex-col-reverse justify-center items-center rounded-xl bg-gradient-to-t from-black gap-y-4">
                                            <h1 class="font-[poppins] 2xl:text-2xl md:text-xl text-lg font-medium text-center text-green-600">Dodaj Event</h1>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-8 h-8 stroke-green-600">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                            </svg>
                                        </div>
                                    </div>
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
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
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
    // function newEventDivAdd(){
    //     var newEventDiv = document.createElement('form');
    //     newEventDiv.setAttribute('class', 'new_card_event group/item w-11/12 h-11/12 rounded-xl bg-local bg-cover bg-center bg-no-repeat flex flex-col gap-y-4 justify-center items-center box-shadow relative');
    //     newEventDiv.setAttribute('style', 'background-image:url(public/img/blue.png);')
    //     newEventDiv.setAttribute('method', 'post')
    //     newEventDiv.setAttribute('enctype', 'multipart/form-data')
    //     newEventDiv.setAttribute('action', 'scripts/events/hero_panel_blank_edit.php')
    //     newEventDiv.innerHTML = '<input oninput="rewrite()" type="text" name="nazwa" placeholder="Podaj nazwę" required class="w-full py-4 theme-bg text-center text-white text-2xl"></input><div class="event_remover absolute w-8 h-8 flex justify-center items-center -right-3 -top-3 rounded-2xl bg-red-500 hover:bg-red-600 hover:scale-105 duration-300 hover:cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg></div><button type="button" onclick="callPHP1(`value=`)" class="inline-flex absolute bottom-10 items-center gap-x-2 rounded-md bg-green-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Zatwierdź<svg class="-mr-0.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"></path> </svg></button>';
    //     return newEventDiv;
    // }
    
    // function rewrite(){
    //     let sad = document.getElementsByName('nazwa')[0].value;
    //     document.querySelector('.new_card_event button').setAttribute('onclick', 'callPHP1("value='+sad+'")')
    // }

    // var eventGrid = document.querySelector('.events_grid');
    // var eventAddButton = document.querySelector('.event_add_button');
    // var eventAddButtonH1 = document.querySelector('.event_add_button h1');
    // var eventAddButtonSvg = document.querySelector('.event_add_button svg');
    // var cardAdd = document.querySelector('.card_add');
    // var cardRemover = document.querySelectorAll('.event_remover');
    // var tempCards = document.querySelectorAll('.new_card_event');
    
    // eventAddButton.addEventListener('click', addNewCard);

    // function addNewCard(){
    //     eventGrid.insertBefore(newEventDivAdd(), cardAdd);
    //     eventAddButton.removeEventListener('click', addNewCard);
    //     eventAddButton.classList.add('hidden');
    //     addRemoveListener();
    //     removing();
    // }

    // function addRemoveListener(){
    //     cardRemover = document.querySelectorAll('.event_remover');
    //     tempCards = document.querySelectorAll('.new_card_event');
    //     cardRemover.forEach((elem, index) =>{
    //         elem.addEventListener('click', ()=>{
    //             eventGrid.removeChild(tempCards[index]);
    //             eventAddButton.addEventListener('click', addNewCard);
    //             eventAddButton.classList.remove('hidden');
    //         })
    //     })
    // }

    // function removing(){
    //     cardRemover = document.querySelectorAll('.event_remover');
    //     cardRemover.forEach((elem, index) =>{
    //         elem.removeEventListener('click', removing)
    //     })
    // }

    // function callPHP1(params) {
    //         var httpc = new XMLHttpRequest();
    //         var url = "scripts/events/events_add_new_event.php";

    //         httpc.onreadystatechange = function() { //Call a function when the state changes.
    //             if(httpc.readyState == 4 && httpc.status == 200) { // complete and no errors
    //                 // alert(httpc.responseText);
    //                 const urlParams = new URLSearchParams(window.location.search);
    //                 urlParams.set('sub', 'events');
    //             }
    //         };
    //         httpc.open("POST", url, true); // sending as POST
    //         httpc.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //         httpc.send(params);
    //         window.location.href += '?sub=events';
    //     }
</script>