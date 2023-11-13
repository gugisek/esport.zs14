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
                        <a class="cursor-pointer settingsnav-buttons theme-text-hover duration-150 py-2 text-center">Zwycięscy</a>
                    </nav>
                </header>

                <div id="events_main" class="divide-y divide-white/5 p-5">
                    <ul class="relative m-0 flex list-none justify-between overflow-hidden p-0 transition-[height] duration-200 ease-in-out events-hero-list">
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
                                    Timer
                                </a>
                            </div>
                        </li>

                        <!--Lastes Champions-->
                        <li class="w-[4.5rem] flex-auto">
                            <div class="flex cursor-pointer items-center py-6 pr-2 leading-[1.3rem] rounded-r-2xl no-underline before:mr-2 before:h-px before:w-full before:flex-1 before:bg-[#e0e0e0] before:content-[''] hover:bg-[#bbbbbb20] focus:outline-none dark:before:bg-neutral-300">
                                <a class="text-neutral-500 after:flex after:text-[0.8rem] after:content-[data-content] dark:text-neutral-300">
                                    Ostatni zwycięscy
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

            </main>
        </section>
    </div>
    <script>
        var navButtons = document.querySelectorAll('.events-nav a');

        navButtons.forEach((butt, index)=>{
            butt.addEventListener("click", ()=>{
                navButtons.forEach((elem) =>{
                    elem.classList.remove('theme-text');
                })
                navButtons[index].classList.add('theme-text');
            })
        })

        var heroSwitcherDivs = document.querySelectorAll('.events-hero-list li div');
        var heroSwitcherButtons = document.querySelectorAll('.events-hero-list li div a')


        heroSwitcherDivs.forEach((butt, index)=>{
            butt.addEventListener("click", ()=>{
                heroSwitcherButtons.forEach((elem) =>{
                    elem.classList.remove('theme-text');
                })
                heroSwitcherButtons[index].classList.add('theme-text');
            })
        })

        // function toTest() {
        //     window.location.href = "http://localhost:3000/test";
        // }
        // console.log("test");
    </script>
    <!-- <button onclick="toTest()">test</button> -->
</div>