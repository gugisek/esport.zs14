<section class="w-full px-[10%] 2xl:px[15%] pb-12 pt-12 flex flex-col items-center">
    <div class="border-b-[1px] border-gray-300 uppercase text-sm flex px-8 flex-row gap-4 2xl:text-lg">
        <a onclick="openWinners('cs')" class="font-[poppins] theme-text font-medium">CS2</a>
        <a onclick="openWinners('lol')" class="font-[poppins] font-medium text-gray-600 theme-text-hover duration-300">LoL</a>
        <a onclick="openWinners('events')" class="font-[poppins] font-medium text-gray-600 theme-text-hover duration-300">Eventy</a>
    </div>
    <h1 class="text-3xl font-bold font-[poppins] text-gray-800 py-[2px]">OSTATNI ZWYCIĘZCY</h1>
    <div id="winners_cs" class="winners border-b-[1px] border-gray-200 grid grid-cols-4 gap-8 mt-12">
        <div class="col-span-2 py-2 pb-4">
            <img src="public/img/winners_example.jpg" alt="" class="w-full shadow-xl rounded-xl">
            <h1 style="text-shadow: 0px 5px 10px black;" class="text-4xl font-[poppins] text-gray-50 italic font-bold -mt-6 text-center">9ine ESPORTS</h1>
        </div>
        <div class="flex col-span-2 flex-col justify-center">
            <p class="font-[poppins] text-xs theme-text">Styczeń 2022</p>
            <h2 class="text-gray-800 font-medium font-[poppins]">Turniej ZS14 Globalna Ofensywa 2022</h2>
            <p class="text-gray-600 font-[poppins] text-sm">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi libero, ut corporis quaerat voluptatum corrupti nulla optio quo non sunt eum!
            </p>
            <a href="events.php" class="2xl:text-md text-xs theme-text-hover items-center flex flex-row gap-2 my-2 uppercase font-[poppins] font-medium text-gray-700 hover:text-black duration-300">
            Zobacz resztę winików
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
            </svg>
        </a>
        </div>
    </div>
    <div id="winners_lol" class="winners duration-300 h-0 w-0 opacity-0 border-b-[1px] border-gray-200 grid grid-cols-4 gap-8 mt-12">
        <div class="col-span-2 py-2 pb-4">
            <img src="public/img/winners_example.jpg" alt="" class="w-full shadow-xl rounded-xl">
            <h1 style="text-shadow: 0px 5px 10px black;" class="text-4xl font-[poppins] text-gray-50 italic font-bold -mt-6 text-center">9ine ESPORTS</h1>
        </div>
        <div class="flex col-span-2 flex-col justify-center">
            <p class="font-[poppins] text-xs theme-text">Styczeń 2022</p>
            <h2 class="text-gray-800 font-medium font-[poppins]">Turniej ZS14 Globalna Ofensywa 2022</h2>
            <p class="text-gray-600 font-[poppins] text-sm">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi libero, ut corporis quaerat voluptatum corrupti nulla optio quo non sunt eum!
            </p>
            <a href="events.php" class="2xl:text-md text-xs theme-text-hover items-center flex flex-row gap-2 my-2 uppercase font-[poppins] font-medium text-gray-700 hover:text-black duration-300">
            Zobacz resztę winików
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
            </svg>
        </a>
        </div>
    </div>
    <div id="winners_events" class="winners duration-300 h-0 w-0 opacity-0 border-b-[1px] border-gray-200 grid grid-cols-4 gap-8 mt-12">
        <div class="col-span-2 py-2 pb-4">
            <img src="public/img/winners_example.jpg" alt="" class="w-full shadow-xl rounded-xl">
            <h1 style="text-shadow: 0px 5px 10px black;" class="text-4xl font-[poppins] text-gray-50 italic font-bold -mt-6 text-center">9ine ESPORTS</h1>
        </div>
        <div class="flex col-span-2 flex-col justify-center">
            <p class="font-[poppins] text-xs theme-text">Styczeń 2022</p>
            <h2 class="text-gray-800 font-medium font-[poppins]">Turniej ZS14 Globalna Ofensywa 2022</h2>
            <p class="text-gray-600 font-[poppins] text-sm">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi libero, ut corporis quaerat voluptatum corrupti nulla optio quo non sunt eum!
            </p>
            <a href="events.php" class="2xl:text-md text-xs theme-text-hover items-center flex flex-row gap-2 my-2 uppercase font-[poppins] font-medium text-gray-700 hover:text-black duration-300">
            Zobacz resztę winików
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
            </svg>
        </a>
        </div>
    </div>
    <a href="" class="mt-4 text-sm font-[poppins] theme-text-hover text-gray-600 duration-300">Zobacz archiwalne wyniki</a>
</section>
<script>
    //var navs_cs = document.querySelectorAll("a#schedule_nav_cs");
    function openWinners(page) {
        var sections = document.querySelectorAll("section.winners");
        var forOpen = document.getElementById("winners_" + page);
        for(var i = 0; i < sections.length; i++) {
            sections[i].style.height = "0";
            sections[i].style.width = "0";
            sections[i].style.opacity = "0";
            sections[i].classList.remove("duration-300");
        }
        forOpen.style.opacity = "1";
        forOpen.style.height = "auto";
        forOpen.style.width = "auto";
        forOpen.classList.add("duration-300");

        // for(var i = 0; i < navs_cs.length; i++) {  
        //     navs_cs[i].classList.remove("theme-text");
        // }
    }
    // for(var i = 0; i < navs_cs.length; i++) {  
    //         navs_cs[i].addEventListener("click", function() {
    //             this.classList.add("theme-text");
    //         });
    //     }
</script>