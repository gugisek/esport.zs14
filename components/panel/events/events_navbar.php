<header class="w-full border-b border-white/5">
    <nav class="w-full px-8 py-3 flex flex-row space-x-5 align-center justify-items-center text-sm font-semibold text-gray-400 events-nav">
        <a class="cursor-pointer settingsnav-buttons theme-text-hover duration-150 py-2 text-center theme-text">Aktualne</a>
        <a class="cursor-pointer settingsnav-buttons theme-text-hover duration-150 py-2 text-center">Zarchiwizowane</a>
    </nav>
</header>
<script defer>
    var navButtons = document.querySelectorAll('.events-nav a');
    var eventsSettingsDivs = document.querySelectorAll('.events-setting-panels');
    var body = document.querySelector('body');

    var popupZXCS = document.querySelectorAll('.OutputPopupContent');
    var popupZXCSInner = '<section id="popupEventsBg" class="fixed z-[50] h-0 opacity-0 top-0 left-0 w-full bg-[#0000009e] transition-opacity duration-150"></section><section id="popupEvents" onclick="popupEventsDelete()" class="z-[60] fixed scale-0 top-0 left-0 w-full h-full"><div class="flex items-center justify-center w-full h-full px-2"><div onclick="event.cancelBubble=true;" class="bg-[#0e0e0e] md:min-w-[800px] md:w-auto w-full max-w-[1200px] min-h-[90vh] max-h-[90vh] overflow-y-auto flex md:flex-row flex-col gap-4 rounded-2xl py-6 sm:px-6  -xl"><div id="popupItself" class="flex h-auto w-full justify-between flex-col"><div class="w-full flex justify-between items-center"><span>  </span><a onclick="popupEventsDelete()" class="cursor-pointer mt-2 pb-1 flex items-center space-x-2 text-gray-200 hover:text-red-600 transition-all duration-300"><p class="uppercase font-bold text-xs italic">zamknij</p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.9" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg></a></div><div id="pupupEventsOutput"></div><span></span></div></div></div></section>';
    var upperPopupZXCS = document.querySelectorAll('.OutputPopup')

    navButtons.forEach((butt, index)=>{
        butt.addEventListener("click", ()=>{
            navButtons.forEach((elem) =>{
                elem.classList.remove('theme-text');
            })
            eventsSettingsDivs.forEach((elem) =>{
                elem.classList.add('hidden');
                // eventsSettingsDivs[index].classList.remove('slide-left-long');
                // body.classList.remove('overflow-x-hidden');
            })
            popupZXCS.forEach((elem)=>{
                elem.innerHTML = '';
            })
            navButtons[index].classList.add('theme-text');
            eventsSettingsDivs[index].classList.remove('hidden');
            popupZXCS[index].innerHTML = popupZXCSInner;
            // body.classList.add('overflow-x-hidden');
            // eventsSettingsDivs[index].classList.add('slide-left-long');
            // var newURL = location.href.split("?")[0];
            // window.history.pushState('object', document.title, newURL);
        })
    })
</script>