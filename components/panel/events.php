<div class="w-full" data-aos="fade-right" data-aos-delay="100">
    <!-- <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-semibold text-gray-300">Events</h1>
    </div> -->
    <div class="panel_body w-full h-full">
        <section data-aos="fade-right" data-aos-delay="100" class="aos-init aos-animate h-full">
            <main>
                <header class="w-full border-b border-white/5">
                    <nav class="w-full px-8 py-3 flex flex-row space-x-5 align-center justify-items-center text-sm font-semibold text-gray-400 events-nav">
                        <a class="cursor-pointer settingsnav-buttons theme-text-hover duration-150 py-2 text-center theme-text">Hero</a>
                        <a class="cursor-pointer settingsnav-buttons theme-text-hover duration-150 py-2 text-center">Champions</a>
                    </nav>
                </header>

                <div id="events_main" class="divide-y divide-white/5 events-setting-panels flex flex-col">
                    <form action="scripts/settings/edit_info.php" method="POST" class="divide-y divide-white/5" enctype="multipart/form-data">
                        <ul class="relative m-0 flex list-none justify-between overflow-hidden p-5 transition-[height] duration-200 ease-in-out events-hero-list">
                        <!--Blank page-->
                            <li data-te-stepper-step-ref data-te-stepper-step-active class="w-[4.5rem] flex-auto">
                                <div class="flex cursor-pointer items-center pl-2 py-6 leading-[1.3rem] no-underline after:ml-2 after:h-px after:w-full after:flex-1 after:bg-[#e0e0e0] rounded-l-2xl after:content-[''] hover:bg-[#bbbbbb20] focus:outline-none dark:after:bg-neutral-300">
                                    <a  class="font-medium text-neutral-500 after:flex after:text-[0.8rem] dark:text-neutral-300 theme-text">
                                        Pusta strona
                                    </a>
                                </div>
                            </li>

                            <!--Clock-->
                            <li class="w-[4.5rem] flex-auto">
                                <div class="flex cursor-pointer items-center py-6 leading-[1.3rem] no-underline before:mr-2 before:h-px before:w-full before:flex-1 before:bg-[#e0e0e0] before:content-[''] after:ml-2 after:h-px after:w-full after:flex-1 after:bg-[#e0e0e0] after:content-['']  hover:bg-[#bbbbbb20] dark:after:bg-neutral-300">
                                    <a data-te-stepper-head-text-ref class="text-neutral-500 after:flex after:text-[0.8rem] after:content-[data-content] dark:text-neutral-300">
                                        Zegar
                                    </a>
                                </div>
                            </li>

                            <!--Lastes Champions-->
                            <li class="w-[4.5rem] flex-auto">
                                <div class="flex cursor-pointer items-center py-6 pr-2 leading-[1.3rem] rounded-r-2xl no-underline before:mr-2 before:h-px before:w-full before:flex-1 before:bg-[#e0e0e0] before:content-[''] hover:bg-[#bbbbbb20] focus:outline-none dark:before:bg-neutral-300">
                                    <a class="text-neutral-500 after:flex after:text-[0.8rem] after:content-[data-content] dark:text-neutral-300">
                                        Ostatni Zwycięzcy
                                    </a>
                                </div>
                            </li>
                        </ul>

                        <div class="sm:px-6 lg:px-8">
                            <div class="px-4 mb-6 sm:px-0 mt-6 flex flex-row justify-between items-center events-settings">
                                <div class="flex flex-col w-full">
                                    <div class="flex flex-row justify-between">
                                        <div>
                                            <h3 class="text-base font-semibold leading-7 text-white">Ustawienia Pustej Strony</h3>
                                            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-400">Dodaj lub edytuj zapis na pustym hero podstrony events.</p>
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
                                            <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                                <div class="flex flew-row space-x-2 items-center">
                                                    <dt class="text-sm font-medium leading-6 py-4 text-white">Teskt nagłówka</dt>
                                                    <a  tabindex="0" role="link" aria-label="tooltip 2" class="focus:outline-none focus:ring-gray-300 rounded-full focus:ring-offset-2 focus:ring-2 focus:bg-gray-200 relative my-28 md:my-0 md:mx-64" onmouseover="showTooltip(2)" onfocus="showTooltip(2)" onmouseout="hideTooltip(2)">
                                                        <div class=" cursor-pointer">
                                                            <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.529 7.988a2.502 2.502 0 0 1 5 .191A2.441 2.441 0 0 1 10 10.582V12m-.01 3.008H10M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                                            </svg>
                                                        </div>
                                                        <div id="tooltip2" role="tooltip" class="z-20 -mt-20 w-64 absolute transition duration-150 ease-in-out left-0 ml-8 shadow-lg theme-bg p-1 rounded hidden">
                                                            <svg class="absolute left-0 -ml-2 bottom-0 top-0 h-full" width="9px" height="16px" viewBox="0 0 9 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <g id="Tooltips-" transform="translate(-874.000000, -1029.000000)" fill="var(--text)">
                                                                        <g id="Group-3-Copy-16" transform="translate(850.000000, 975.000000)">
                                                                            <g id="Group-2" transform="translate(24.000000, 0.000000)">
                                                                                <polygon id="Triangle" transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) " points="4.5 57.5 12.5 66.5 -3.5 66.5"></polygon>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            <img src="public/img/events_hero_tooltip.png" alt="test" class="w-[34vh]">
                                                        </div>
                                                    </a>
                                                </div>
                                                <input name="main_name" placeholder="Brak tekstu" type="text" value="" class="focus:outline-0 invalid:border-red-600 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white py-4  bg-[#0e0e0e]/0 mt-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0">
                                            </div>
                                        </dl>
                                        <div class="sm:px-6 lg:px-8 px-4 text-center">
                                        <div class="px-4 sm:px-0 my-6">
                                            <button type="subbmit" class="inline-flex items-center gap-x-2 rounded-md bg-green-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                                Zapisz
                                                <svg class="-mr-0.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 mb-6 sm:px-0 mt-6 flex flex-row justify-between items-center hidden events-settings">
                                <div>
                                    <h3 class="text-base font-semibold leading-7 text-white">Ustawienia Wyglądu Zegara</h3>
                                    <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-400">Edytuj wygląd i dane wyświetlane przez zegar.</p>
                                </div>
                            </div>
                            <div class="px-4 mb-6 sm:px-0 mt-6 flex flex-row justify-between items-center hidden events-settings">
                                <div>
                                    <h3 class="text-base font-semibold leading-7 text-white">Ustawienia edycji komponentu Champions</h3>
                                    <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-400">Edytuj tekst, dodawaj i zmieniaj zdjęcia dla komponentu Ostatnich Zwycięzców.</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </main>
        </section>
    </div>
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
                    eventsSettingsDivs[index].classList.remove('slide-left-long');
                    body.classList.remove('overflow-x-hidden');
                })
                navButtons[index].classList.add('theme-text');
                eventsSettingsDivs[index].classList.remove('hidden');
                body.classList.add('overflow-x-hidden');
                eventsSettingsDivs[index].classList.add('slide-left-long');

            })
        })


        var heroSwitcherDivs = document.querySelectorAll('.events-hero-list li div');
        var heroSwitcherButtons = document.querySelectorAll('.events-hero-list li div a')
        var eventsSettingsArticle = document.querySelectorAll('.events-settings');


        heroSwitcherDivs.forEach((butt, index)=>{
            butt.addEventListener("click", ()=>{
                heroSwitcherButtons.forEach((elem) =>{
                    elem.classList.remove('theme-text');
                })
                eventsSettingsArticle.forEach((elem) =>{
                    elem.classList.add('hidden');
                    eventsSettingsArticle[index].classList.remove('slide-left-long');
                    body.classList.remove('overflow-x-hidden');
                })
                heroSwitcherButtons[index].classList.add('theme-text');
                body.classList.add('overflow-x-hidden');
                eventsSettingsArticle[index].classList.remove('hidden');
                eventsSettingsArticle[index].classList.add('slide-left-long');
            })
        })

        var eventsHeroTooltip2 = document.getElementById("tooltip2");

        function showTooltip(flag) {
            if(flag == 2){
                eventsHeroTooltip2.classList.remove("hidden");
            }
        }
        function hideTooltip(flag) {
            if(flag == 2){
                eventsHeroTooltip2.classList.add("hidden");
            }
        }

        // function toTest() {
        //     window.location.href = "http://localhost:3000/test";
        // }
        // console.log("test");
    </script>
    <!-- <button onclick="toTest()">test</button> -->
</div>