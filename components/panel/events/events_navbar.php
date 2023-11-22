<header class="w-full border-b border-white/5">
    <nav class="w-full px-8 py-3 flex flex-row space-x-5 align-center justify-items-center text-sm font-semibold text-gray-400 events-nav">
        <a class="cursor-pointer settingsnav-buttons theme-text-hover duration-150 py-2 text-center theme-text">Hero</a>
        <a class="cursor-pointer settingsnav-buttons theme-text-hover duration-150 py-2 text-center">Champions</a>
    </nav>
</header>
<script>
    var navButtons = document.querySelectorAll('.events-nav a');
    var eventsSettingsDivs = document.querySelectorAll('.events-setting-panels');
    var body = document.querySelector('body');

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
            navButtons[index].classList.add('theme-text');
            eventsSettingsDivs[index].classList.remove('hidden');
            // body.classList.add('overflow-x-hidden');
            // eventsSettingsDivs[index].classList.add('slide-left-long');

        })
    })
</script>