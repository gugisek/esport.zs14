<section id="bg" style="background-image: url('public/img/green.jpg');" class="bg-cover bg-fixed w-full">
    <section class="bg-[#000000c0] min-h-[95vh] w-full px-[10%] 2xl:px-[15%] pb-12 pt-16">
        <section class="h-[80px]"></section>
        <div class="flex items-center justify-between">
            <h1 id="schedule_title" class="font-[poppins] 2xl:text-3xl text-2xl font-bold text-gray-100">Turniej CS2 2024</h1>
            <div class="uppercase text-sm flex flex-row gap-4 2xl:text-lg text-gray-600">
                <a id="schedule_nav" onclick="openShedule('cs')" class="font-medium cursor-pointer theme-text-hover duration-300 font-[poppins] theme-text">CS2</a>
                <!-- <a id="schedule_nav" onclick="openShedule('lol')"class="font-medium text-gray-500 cursor-pointer theme-text-hover duration-300 font-[poppins]">LoL</a>
                <a id="schedule_nav" onclick="openShedule('events')"class="font-medium text-gray-500 cursor-pointer theme-text-hover duration-300 font-[poppins]">Eventy</a> -->
            </div>
        </div>
        <hr class="my-4 border-gray-500">
        <section id="schedule_cs" class="duration-300 schedule grid 2xl:grid-cols-3 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 gap-4">
            <div class="col-span-2">
                <div class="bg-[#0e0e0ec0] rounded-xl uppercase text-xs flex flex-row items-center justify-center w-full gap-4 2xl:text-lg text-gray-600 py-2 mb-2">
                    <a id="schedule_nav_cs" onclick="openScheduleCs('1')" class="cursor-pointer text-gray-400 theme-text-hover duration-300 font-[poppins] theme-text font-medium">Faza grupowa</a>
                    <a id="schedule_nav_cs" onclick="openScheduleCs('2')" class="cursor-pointer text-gray-500 theme-text-hover duration-300 font-[poppins] font-medium">Faza Play-off</a>
                    <!-- <a id="schedule_nav_cs" onclick="openScheduleCs('3')" class="cursor-pointer text-gray-500 theme-text-hover duration-300 font-[poppins] font-medium">Finały</a> -->
                </div>
                <section id="schedule_cs_1" class="schedule_cs grid grid-cols-2 2xl:grid-cols-4 lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 gap-2">
                    <div class="border-black flex flex-col rounded-xl shadow-xl">
                        <h1 class="py-3 font-bold text-center font-[poppins] italic text-white bg-[#0e0e0e] rounded-t-xl">GRUPA A</h1>
                        <div class="bg-[#0e0e0e] px-4 pb-4 rounded-b-xl w-full">
                            <table class="w-full">
                                <tr class="border-b-[1px] border-gray-600">
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">TEAM</th>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">PKT</th>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">Zabrakło Cala <span class="text-gray-600 text-xs">4i</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                </tr>
                                <tr class="border-b-[1px] border-t-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">KLAN AZAZELA <span class="text-gray-600 text-xs">4i</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">ELTK <span class="text-gray-600 text-xs">2p</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                                <tr class=" hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">Miernotki <span class="text-gray-600 text-xs">2i</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                            </table>
                        </div>  
                    </div>
                    <div class="w-full bg-[#0e0e0e] 2xl:col-span-4 lg:col-span-4 md:col-span-2 sm:col-span-2 rounded-xl hidden">
                        <h1 class="py-3 font-bold text-center font-[poppins] italic text-white bg-[#0e0e0e] rounded-t-xl">GRUPA A</h1>
                        <div class="bg-[#0e0e0e] px-4 pb-4 rounded-b-xl w-full">
                            <table class="w-full">
                                <tr>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">Team</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">RM</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">W</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">P</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">ZR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">SR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">RR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">Punkty</th>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">Zabrakło Cala <span class="text-gray-600 text-xs">4i</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">26</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">2</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">24</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                </tr>
                                <tr class="border-b-[1px] border-t-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">KLAN AZAZELA <span class="text-gray-600 text-xs">4i</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">26</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">12</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">14</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">ELTK <span class="text-gray-600 text-xs">2p</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">12</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">26</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-14</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                                <tr class=" hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">Miernotki <span class="text-gray-600 text-xs">2i</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">2</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">26</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-24</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>  
                            </table>
                        </div>
                    </div>
                    <div class="border-black flex flex-col rounded-xl shadow-xl">
                        <h1 class="py-3 font-bold text-center font-[poppins] italic text-white bg-[#0e0e0e] rounded-t-xl">GRUPA B</h1>
                        <div class="bg-[#0e0e0e] px-4 pb-4 rounded-b-xl w-full">
                            <table class="w-full">
                                <tr>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">TEAM</th>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">PKT</th>
                                </tr>
                                <tr class="border-b-[1px] border-t-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">TurlajBeczke <span class="text-gray-600 text-xs">5pi</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                </tr>
                                <tr class="border-b-[1px] border-t-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">chude byki <span class="text-gray-600 text-xs"></span>3a</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">SZPFZP <span class="text-gray-600 text-xs">5pi</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                                <tr class="hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">UHO BOYS <span class="text-gray-600 text-xs">3gt</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>   
                            </table>
                        </div>  
                    </div>
                    <div class="w-full bg-[#0e0e0e] 2xl:col-span-4 lg:col-span-4 md:col-span-2 sm:col-span-2 rounded-xl hidden">
                        <h1 class="py-3 font-bold text-center font-[poppins] italic text-white bg-[#0e0e0e] rounded-t-xl">GRUPA B</h1>
                        <div class="bg-[#0e0e0e] px-4 pb-4 rounded-b-xl w-full">
                            <table class="w-full">
                                <tr>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">Team</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">RM</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">W</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">P</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">ZR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">SR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">RR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">Punkty</th>
                                </tr>
                                <tr class="border-b-[1px] border-t-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">TurlajBeczke <span class="text-gray-600 text-xs">5pi</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">26</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">11</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">15</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                </tr>
                                <tr class="border-b-[1px] border-t-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">chude byki <span class="text-gray-600 text-xs">3a</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">SZPFZP <span class="text-gray-600 text-xs">5pi</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                                <tr class="hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">UHO BOYS <span class="text-gray-600 text-xs">3gt</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">11</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">26</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-15</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>   
                            </table>
                        </div>
                    </div>
                    <div class="border-black flex flex-col rounded-xl shadow-xl">
                        <h1 class="py-3 font-bold text-center font-[poppins] italic text-white bg-[#0e0e0e] rounded-t-xl">GRUPA C</h1>
                        <div class="bg-[#0e0e0e] px-4 pb-4 rounded-b-xl w-full">
                            <table class="w-full">
                                <tr>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">TEAM</th>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">PKT</th>
                                </tr>
                                <tr class="border-b-[1px] border-t-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">GODS of 5PD <span class="text-gray-600 text-xs">5pd</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">Virtus Noobs <span class="text-gray-600 text-xs">1i</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                </tr>  
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">Szach Mat <span class="text-gray-600 text-xs">3d</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                                <tr class="  hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">JUK ESPORT <span class="text-gray-600 text-xs">2e</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                                
                                 
                            </table>
                        </div>  
                    </div>
                    <div class="w-full bg-[#0e0e0e] 2xl:col-span-4 lg:col-span-4 md:col-span-2 sm:col-span-2 rounded-xl hidden">
                        <h1 class="py-3 font-bold text-center font-[poppins] italic text-white bg-[#0e0e0e] rounded-t-xl">GRUPA C</h1>
                        <div class="bg-[#0e0e0e] px-4 pb-4 rounded-b-xl w-full">
                            <table class="w-full">
                                <tr>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">Team</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">RM</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">W</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">P</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">ZR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">SR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">RR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">Punkty</th>
                                </tr>
                                <tr class="border-b-[1px] border-t-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">GODS of 5PD <span class="text-gray-600 text-xs">5pd</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">26</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">4</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">22</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                </tr>
                                <tr class=" hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">Virtus Noobs <span class="text-gray-600 text-xs">1i</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">26</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">16</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">10</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                </tr>   
                                <tr class="border-t-[1px] border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">Szach Mat <span class="text-gray-600 text-xs">3d</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">16</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">26</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-10</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                                <tr class=" border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">JUK ESPORT <span class="text-gray-600 text-xs">2e</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">4</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">26</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-22</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="border-black flex flex-col rounded-xl shadow-xl">
                        <h1 class="py-3 font-bold text-center font-[poppins] italic text-white bg-[#0e0e0e] rounded-t-xl">GRUPA D</h1>
                        <div class="bg-[#0e0e0e] px-4 pb-4 rounded-b-xl w-full">
                            <table class="w-full">
                                <tr>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">TEAM</th>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">PKT</th>
                                </tr>
                                <tr class="border-b-[1px] border-t-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">G4rnuchy <span class="text-gray-600 text-xs">4k</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">Papiery rumiankowe Velvet <span class="text-gray-600 text-xs">1b</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">Upos Banditos <span class="text-gray-600 text-xs">2bt</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">VIKINGS 1G <span class="text-gray-600 text-xs">1g</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                                <tr class="hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">Informatycy z przypadku <span class="text-gray-600 text-xs">3i</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                            </table>
                        </div>  
                    </div>
                    <div class="w-full bg-[#0e0e0e] 2xl:col-span-4 lg:col-span-4 md:col-span-2 sm:col-span-2 rounded-xl hidden">
                        <h1 class="py-3 font-bold text-center font-[poppins] italic text-white bg-[#0e0e0e] rounded-t-xl">GRUPA D</h1>
                        <div class="bg-[#0e0e0e] px-4 pb-4 rounded-b-xl w-full">
                            <table class="w-full">
                                <tr>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">Team</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">RM</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">W</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">P</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">ZR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">SR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">RR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">Punkty</th>
                                </tr>
                                <tr class="border-b-[1px] border-t-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">G4rnuchy <span class="text-gray-600 text-xs">4k</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">26</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">15</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">11</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">Papiery rumiankowe Velvet <span class="text-gray-600 text-xs">1b</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">Upos Banditos <span class="text-gray-600 text-xs">2bt</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">VIKINGS 1G <span class="text-gray-600 text-xs">1g</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>    
                                <tr class=" hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 text-ellipsis">Informatycy z przypadku <span class="text-gray-600 text-xs">3i</span></td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">15</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">26</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-11</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </section>
                <section id="schedule_cs_2" class="schedule_cs duration-300 h-0 w-0 opacity-0 grid 2xl:grid-cols-3 lg:grid-cols-3 md:grid-cols-2 gap-8 2xl:divide-x lg:divide-x divide-slate-700">
                    <div class="grid grid-rows-4 gap-10">
                        <div class="flex justify-center items-center">
                            <h1 class="text-2xl theme-text text-center">Ćwierćfinał</h1>
                        </div>
                        <div class="flex flex-col items-center border-[1px] border-gray-200 justify-between h-fit">
                            <div class="px-4 bg-slate-100 flex flex-row items-center justify-between w-full">
                                <p class="text-sm font-bold text-slate-800 py-2 font-[poppins] italic">1 miejsce Grupy A</p>
                                <p class="text-sm font-bold text-slate-800">win/loss</p>
                            </div>
                            <p class="h-[0px]">vs</p>
                            <hr>
                            <div class="px-4 bg-slate-200 flex flex-row items-center justify-between w-full">
                                <p class="text-sm font-bold text-slate-800 py-2 font-[poppins] italic">2 miejsce Grupy B</p>
                                <p class="text-sm font-bold text-slate-800">win/loss</p>
                            </div>
                        </div>
                        <div class="flex flex-col items-center border-[1px] border-gray-200 justify-between h-fit">
                            <div class="px-4 bg-slate-100 flex flex-row items-center justify-between w-full">
                                <p class="text-sm font-bold text-slate-800 py-2 font-[poppins] italic">1 miejsce Grupy B</p>
                                <p class="text-sm font-bold text-slate-800">win/loss</p>
                            </div>
                            <p class="h-[0px]">vs</p>
                            <hr>
                            <div class="px-4 bg-slate-200 flex flex-row items-center justify-between w-full">
                                <p class="text-sm font-bold text-slate-800 py-2 font-[poppins] italic">2 miejsce Grupy A</p>
                                <p class="text-sm font-bold text-slate-800">win/loss</p>
                            </div>
                        </div>
                        <div class="flex flex-col items-center border-[1px] border-gray-200 justify-between h-fit">
                            <div class="px-4 bg-slate-100 flex flex-row items-center justify-between w-full">
                                <p class="text-sm font-bold text-slate-800 py-2 font-[poppins] italic">1 miejsce Grupy C</p>
                                <p class="text-sm font-bold text-slate-800">win/loss</p>
                            </div>
                            <p class="h-[0px]">vs</p>
                            <hr>
                            <div class="px-4 bg-slate-200 flex flex-row items-center justify-between w-full">
                                <p class="text-sm font-bold text-slate-800 py-2 font-[poppins] italic">2 miejsce Grupy D</p>
                                <p class="text-sm font-bold text-slate-800">win/loss</p>
                            </div>
                        </div>
                        <div class="flex flex-col items-center border-[1px] border-gray-200 justify-between h-fit">
                            <div class="px-4 bg-slate-100 flex flex-row items-center justify-between w-full">
                                <p class="text-sm font-bold text-slate-800 py-2 font-[poppins] italic">2 miejsce Grupy C</p>
                                <p class="text-sm font-bold text-slate-800">win/loss</p>
                            </div>
                            <p class="h-[0px]">vs</p>
                            <hr>
                            <div class="px-4 bg-slate-200 flex flex-row items-center justify-between w-full">
                                <p class="text-sm font-bold text-slate-800 py-2 font-[poppins] italic">1 miejsce grupy D</p>
                                <p class="text-sm font-bold text-slate-800">win/loss</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-rows-3 gap-10 2xl:pl-8 lg:pl-8">
                        <div class="flex justify-center items-center">
                            <h1 class="text-2xl theme-text text-center">Półfinał</h1>
                        </div>
                        <div class="flex flex-col items-center border-[1px] border-gray-200 justify-between h-fit">
                            <div class="px-4 bg-slate-100 flex flex-row items-center justify-between w-full">
                                <p class="text-sm font-bold text-slate-800 py-2 font-[poppins] italic">Wygrany A1vsB2</p>
                                <p class="text-sm font-bold text-slate-800">win/loss</p>
                            </div>
                            <hr>
                            <div class="px-4 bg-slate-200 flex flex-row items-center justify-between w-full">
                                <p class="text-sm font-bold text-slate-800 py-2 font-[poppins] italic">Wygrany C1vsD2</p>
                                <p class="text-sm font-bold text-slate-800">win/loss</p>
                            </div>
                        </div>
                        <div class="flex flex-col items-center border-[1px] border-gray-200 justify-between h-fit">
                            <div class="px-4 bg-slate-100 flex flex-row items-center justify-between w-full">
                                <p class="text-sm font-bold text-slate-800 py-2 font-[poppins] italic">Wygrany B1vsA2</p>
                                <p class="text-sm font-bold text-slate-800">win/loss</p>
                            </div>
                            <hr>
                            <div class="px-4 bg-slate-200 flex flex-row items-center justify-between w-full">
                                <p class="text-sm font-bold text-slate-800 py-2 font-[poppins] italic">Wygrany D1vsC2</p>
                                <p class="text-sm font-bold text-slate-800">win/loss</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-rows-4 gap-10 2xl:pl-8 lg:pl-8">
                        <div class="flex justify-center items-center">
                            <h1 class="text-2xl theme-text text-center">Finał</h1>
                        </div>
                        <div></div>
                        <div class="flex flex-col items-center border-[1px] border-gray-200 justify-between h-fit">
                            <div class="px-4 bg-slate-100 flex flex-row items-center justify-between w-full">
                                <p class="text-sm font-bold text-slate-800 py-2 font-[poppins] italic">wygrany A1/B2vsC1/D2</p>
                                <p class="text-sm font-bold text-slate-800">win/loss</p>
                            </div>
                            <hr>
                            <div class="px-4 bg-slate-200 flex flex-row items-center justify-between w-full">
                                <p class="text-sm font-bold text-slate-800 py-2 font-[poppins] italic">wygrany B1/A2vsD1/C2</p>
                                <p class="text-sm font-bold text-slate-800">win/loss</p>
                            </div>
                        </div>
                    </div>
                    <!-- <div  class="border-black flex flex-col rounded-xl shadow-xl pb-4">
                        <h1 class="py-3 font-bold text-center font-[poppins] italic text-white bg-[#1c1c1c] rounded-t-xl">GRUPA ŚMIERCI</h1>
                        <div class="px-4 pt-3 w-full">
                            <table class="w-full">
                                <tr class="border-b-[1px] border-gray-200">
                                    <td class="font-[poppins] text-sm font-medium text-gray-700 pb-2">Bambiki 5pi</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">2</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-200">
                                    <td class="font-[poppins] text-sm font-medium text-gray-700 py-2">Lamusy z 2a</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-200">
                                    <td class="font-[poppins] text-sm font-medium text-gray-700 py-2">RJ45 to rzycie</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                                <tr class="">
                                    <td class="font-[poppins] text-sm font-medium text-gray-700 pt-2">Roz#wiacze</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-1</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="border-black flex flex-col rounded-xl shadow-xl pb-4">
                        <h1 class="py-3 font-bold text-center font-[poppins] italic text-white bg-[#1c1c1c] rounded-t-xl">GRUPA B</h1>
                        <div class="px-4 pt-3 w-full">
                            <table class="w-full">
                                <tr class="border-b-[1px] border-gray-200">
                                    <td class="font-[poppins] text-sm font-medium text-gray-700 pb-2">Bambiki 5pi</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">2</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-200">
                                    <td class="font-[poppins] text-sm font-medium text-gray-700 py-2">Lamusy z 2a</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-200">
                                    <td class="font-[poppins] text-sm font-medium text-gray-700 py-2">RJ45 to rzycie</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                                <tr class="">
                                    <td class="font-[poppins] text-sm font-medium text-gray-700 pt-2">Roz#wiacze</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-1</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="border-black flex flex-col rounded-xl shadow-xl pb-4">
                        <h1 class="py-3 font-bold text-center font-[poppins] italic text-white bg-[#1c1c1c] rounded-t-xl">GRUPA C</h1>
                        <div class="px-4 pt-3 w-full">
                            <table class="w-full">
                                <tr class="border-b-[1px] border-gray-200">
                                    <td class="font-[poppins] text-sm font-medium text-gray-700 pb-2">Bambiki 5pi</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">2</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-200">
                                    <td class="font-[poppins] text-sm font-medium text-gray-700 py-2">Lamusy z 2a</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-200">
                                    <td class="font-[poppins] text-sm font-medium text-gray-700 py-2">RJ45 to rzycie</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                                <tr class="">
                                    <td class="font-[poppins] text-sm font-medium text-gray-700 pt-2">Roz#wiacze</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-1</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="border-black flex flex-col rounded-xl shadow-xl pb-4">
                        <h1 class="py-3 font-bold text-center font-[poppins] italic text-white bg-[#1c1c1c] rounded-t-xl">GRUPA E</h1>
                        <div class="px-4 pt-3 w-full">
                            <table class="w-full">
                                <tr class="border-b-[1px] border-gray-200">
                                    <td class="font-[poppins] text-sm font-medium text-gray-700 pb-2">Bambiki 5pi</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">2</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-200">
                                    <td class="font-[poppins] text-sm font-medium text-gray-700 py-2">Lamusy z 2a</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-200">
                                    <td class="font-[poppins] text-sm font-medium text-gray-700 py-2">RJ45 to rzycie</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                                <tr class="">
                                    <td class="font-[poppins] text-sm font-medium text-gray-700 pt-2">Roz#wiacze</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-1</td>
                                </tr>
                            </table>
                        </div>
                    </div> -->
                </section>
                <!-- <section id="schedule_cs_3" class="schedule_cs duration-300 h-0 w-0 opacity-0 grid 2xl:grid-cols-4 lg:grid-cols-4 md:grid-cols-2 gap-2">
                    <div class="grid grid-rows-4 gap-2">
                        <div class="flex flex-col items-center border-[1px] border-gray-200 justify-between">
                            <div class="px-4 bg-green-100 flex flex-row items-center justify-between w-full">
                                <p class="text-sm font-bold text-green-800 py-2 font-[poppins] italic">5pi</p>
                                <p class="text-sm font-bold text-green-800">3</p>
                            </div>
                            <p class="h-[0px]">vs</p>
                            <div class="px-4 bg-red-200 flex flex-row items-center justify-between w-full">
                                <p class="text-sm font-bold text-red-800 py-2 font-[poppins] italic">Lamusy z 2A</p>
                                <p class="text-sm font-bold text-red-800">1</p>
                            </div>
                        </div>
                        <div class="flex flex-col items-center justify-between rounded-xl">
                            <div class="px-4 rounded-t-xl bg-green-100 flex flex-row items-center justify-between w-full">
                                <p class="text-sm font-bold text-green-800 py-2 font-[poppins] italic">5pi</p>
                                <p class="text-sm font-bold text-green-800">3</p>
                            </div>
                            <p class="h-[0px]">vs</p>
                            <div class="px-4 rounded-b-xl bg-red-200 flex flex-row items-center justify-between w-full">
                                <p class="text-sm font-bold text-red-800 py-2 font-[poppins] italic">Lamusy z 2A</p>
                                <p class="text-sm font-bold text-red-800">1</p>
                            </div>
                        </div>
                        <div class="flex flex-col items-center justify-between rounded-xl">
                            <div class="px-4 rounded-t-xl bg-green-100 flex flex-row items-center justify-between w-full">
                                <p class="text-sm font-bold text-green-800 py-2 font-[poppins] italic">5pi</p>
                                <p class="text-sm font-bold text-green-800">3</p>
                            </div>
                            <p class="h-[0px]">vs</p>
                            <div class="px-4 rounded-b-xl bg-red-200 flex flex-row items-center justify-between w-full">
                                <p class="text-sm font-bold text-red-800 py-2 font-[poppins] italic">Lamusy z 2A</p>
                                <p class="text-sm font-bold text-red-800">1</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-rows-4">

                    </div>
                </section> -->
                
            </div>
            <div class="rounded-2xl text-white bg-top bg-cover bg-fixed shadow-xl col-span-2 sm:col-span-2 md:col-span-2 lg:col-span-1 2xl:col-span-1">
                <div class="bg-[#0e0e0ec0] py-4 px-4 h-full w-full rounded-2xl flex flex-col justify-between">
                    <div>
                        <p class="font-[poppins] text-xs text-gray-100 text-gray-300 pb-4 uppercase  text-center border-b-[1px] border-[#3d3d3d]">Następne mecze</p>              
                        <div class=" text-gray-200   border-[#3d3d3d] py-2 flex items-center justify-between">
                            <div>
                                <h1 class="font-[poppins] font-semibold">KLAN AZAZELA <span class="text-gray-600 text-xs">4i</span> vs Zabrakło Cala <span class="text-gray-600 text-xs">4i</span></h1>
                                <p class="uppercase theme-text font-[poppins] text-xs">Faza Grupowa | Runda 2 | Grupa <span class="theme-text">A</span></p>
                            </div>
                            <div>
                                <p class="theme-text">20:30<span class="text-sm text-gray-300"> 28.02.2024</span></p>
                                <p class="text-xs text-gray-500 text-right">Online</p>
                            </div>
                            <!-- <p class=" text-gray-200 text-sm border-[#3d3d3d] py-2 text-center w-full" >Nie zaplanowano jeszcze następnych spotkań</p> -->
                        </div>
                        <div class=" text-gray-200   border-[#3d3d3d] py-2 flex items-center justify-between">
                            
                            <div>
                                <h1 class="font-[poppins] font-semibold">Papiery rumiankowe Velvet <span class="text-gray-600 text-xs">1b</span> vs Upos Banditos <span class="text-gray-600 text-xs">2bt</span></h1>
                                <p class="uppercase theme-text font-[poppins] text-xs">Faza Grupowa | Runda 1 | Grupa <span class="theme-text">D</span></p>
                            </div>
                            <div>
                                <p class="theme-text">18:30<span class="text-sm text-gray-300"> 29.02.2024</span></p>
                                <p class="text-xs text-gray-500 text-right">Online</p>
                            </div>
                        </div>
                        
                    </div>
                    <a href="index.php" class="text-xs text-gray-400 text-end w-full flex flex-row gap-2 items-center justify-end uppercase font-[poppins] theme-text-hover duration-300">
                        Zobacz więcej
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>
        <!-- <section id="schedule_lol" class="duration-300 h-0 w-0 opacity-0 schedule grid grid-cols-3 gap-4">
            <div class="col-span-2">
                <img src="public/img/schemat.png" class="w-full" alt="">
            </div>
            <div id="bg" class="bg-[#0e0e0e] rounded-2xl text-white bg-top bg-cover bg-fixed shadow-xl">
                <div class="bg-[#0e0e0ee0] py-4 px-4 h-full w-full rounded-2xl flex flex-col justify-between">
                    <div>
                        <p class="font-[poppins] text-xs text-gray-100 text-gray-300 pb-4 uppercase  text-center border-b-[1px] border-[#3d3d3d]">Następne mecze</p>              
                        <div class="border-b-[1px] border-[#3d3d3d] py-2 flex items-center justify-between">
                            <div>
                                <h1 class="text-gray-200 font-[poppins] font-semibold">LOL vs 5pi</h1>
                                <p class="uppercase theme-text font-[poppins] text-xs">Półfinał</p>
                            </div>
                            <div>
                                <p class="text-gray-300">13:30<span class="text-sm"> 20.02.2023</span></p>
                                <p class="text-xs text-gray-500 text-right">Zdalnie</p>
                            </div>
                        </div>
                        <div class="border-b-[1px] border-[#3d3d3d] py-2 flex items-center justify-between">
                            <div>
                                <h1 class="text-gray-200 font-[poppins] font-semibold">5pi vs 5pi</h1>
                                <p class="uppercase theme-text font-[poppins] text-xs">Półfinał</p>
                            </div>
                            <div>
                                <p class="text-gray-300">21:00<span class="text-sm"> 19.03.2023</span></p>
                                <p class="text-xs text-gray-500 text-right">Zdalnie</p>
                            </div>
                        </div>
                        <div class="border-b-[1px] text-gray-200     border-[#3d3d3d] py-2 flex items-center justify-between">
                            <div>
                                <h1 class="font-[poppins] font-semibold">Nie ustalono</h1>
                                <p class="uppercase theme-text font-[poppins] text-xs">Finał</p>
                            </div>
                            <div>
                                <p class="text-gray-300">9:30<span class="text-sm"> 20.03.2023</span></p>
                                <p class="text-xs text-gray-500 text-right">Sala 34 i 35</p>
                            </div>
                        </div>
                    </div>
                    <a href="events.php" class="text-xs text-gray-400 text-end w-full flex flex-row gap-2 items-center justify-end uppercase font-[poppins] theme-text-hover duration-300">
                        Zobacz więcej
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </section> -->
        <!-- <section id="schedule_events" class="duration-300 h-0 w-0 opacity-0 schedule grid grid-cols-3 gap-4">
            <div class="col-span-2">
                <img src="public/img/schemat.png" class="w-full" alt="">
            </div>
            <div id="bg" class="bg-[#0e0e0e] rounded-2xl text-white bg-top bg-cover bg-fixed shadow-xl">
                <div class="bg-[#0e0e0ee0] py-4 px-4 h-full w-full rounded-2xl flex flex-col justify-between">
                    <div>
                        <p class="font-[poppins] text-xs text-gray-100 text-gray-300 pb-4 uppercase  text-center border-b-[1px] border-[#3d3d3d]">Następne mecze</p>              
                        <div class="border-b-[1px] border-[#3d3d3d] py-2 flex items-center justify-between">
                            <div>
                                <h1 class="text-gray-200 font-[poppins] font-semibold">EVENTY vs 5pi</h1>
                                <p class="uppercase theme-text font-[poppins] text-xs">Półfinał</p>
                            </div>
                            <div>
                                <p class="text-gray-300">13:30<span class="text-sm"> 20.02.2023</span></p>
                                <p class="text-xs text-gray-500 text-right">Zdalnie</p>
                            </div>
                        </div>
                        <div class="border-b-[1px] border-[#3d3d3d] py-2 flex items-center justify-between">
                            <div>
                                <h1 class="text-gray-200 font-[poppins] font-semibold">5pi vs 5pi</h1>
                                <p class="uppercase theme-text font-[poppins] text-xs">Półfinał</p>
                            </div>
                            <div>
                                <p class="text-gray-300">21:00<span class="text-sm"> 19.03.2023</span></p>
                                <p class="text-xs text-gray-500 text-right">Zdalnie</p>
                            </div>
                        </div>
                        <div class="border-b-[1px] text-gray-200     border-[#3d3d3d] py-2 flex items-center justify-between">
                            <div>
                                <h1 class="font-[poppins] font-semibold">Nie ustalono</h1>
                                <p class="uppercase theme-text font-[poppins] text-xs">Finał</p>
                            </div>
                            <div>
                                <p class="text-gray-300">9:30<span class="text-sm"> 20.03.2023</span></p>
                                <p class="text-xs text-gray-500 text-right">Sala 34 i 35</p>
                            </div>
                        </div>
                    </div>
                    <a href="events.php" class="text-xs text-gray-400 text-end w-full flex flex-row gap-2 items-center justify-end uppercase font-[poppins] theme-text-hover duration-300">
                        Zobacz więcej
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </section> -->
    </section>
</section>
<script>
    var navs_cs = document.querySelectorAll("a#schedule_nav_cs");
    function openScheduleCs(page) {
        var sections = document.querySelectorAll("section.schedule_cs");
        var forOpen = document.getElementById("schedule_cs_" + page);
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

        for(var i = 0; i < navs_cs.length; i++) {  
            navs_cs[i].classList.remove("theme-text");
        }
    }
    for(var i = 0; i < navs_cs.length; i++) {  
            navs_cs[i].addEventListener("click", function() {
                this.classList.add("theme-text");
            });
        }

    var navs = document.querySelectorAll("a#schedule_nav");
    function openShedule(object) {
        var sections = document.querySelectorAll("section.schedule");
        var forOpen = document.getElementById("schedule_" + object);
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

        for(var i = 0; i < navs.length; i++) {  
            navs[i].classList.remove("theme-text");
        }        
    }
    for(var i = 0; i < navs.length; i++) {  
            navs[i].addEventListener("click", function() {
                this.classList.add("theme-text");
            });
        }

    var sections = document.querySelectorAll("section");
    var href = window.location.href;
    if(href.includes('events.php')){
        sections[2].classList.remove('pt-16');
        sections[2].classList.add('pt-36');
        sections[2].classList.remove('min-h-[95vh]')
        sections[2].classList.add('min-h-[100vh]');
    }

    var childsCsSection = document.querySelector('#schedule_cs_1').children;

    for(let j = 0; j<childsCsSection.length; j+=2){
        childsCsSection[j].addEventListener('click', ()=>{
            for(let k = 0; k<childsCsSection.length; k+=2){
                if(childsCsSection[k+1].classList.contains('order-first')){
                    childsCsSection[k+1].classList.remove('scale-up-hor-left');
                    childsCsSection[k+1].classList.add('hidden');
                    childsCsSection[k].classList.remove('hidden');
                    childsCsSection[k].classList.add('scale-up-hor-left');
                    childsCsSection[k].classList.remove('order-first');
                }
            }

            childsCsSection[j+1].classList.remove('scale-down-hor-left');
            childsCsSection[j].classList.add('hidden');
            childsCsSection[j+1].classList.remove('hidden');
            childsCsSection[j+1].classList.add('order-first');
            childsCsSection[j+1].classList.add('col-span-2');
            childsCsSection[j+1].classList.add('scale-up-hor-left');
        })
    }
    for(let j = 1; j<childsCsSection.length; j+=2){
        childsCsSection[j].addEventListener('click', ()=>{
            childsCsSection[j].classList.remove('scale-up-hor-left');
            childsCsSection[j].classList.add('scale-down-hor-left');
            setTimeout(()=>{
                childsCsSection[j].classList.add('hidden');
                childsCsSection[j-1].classList.remove('hidden');
            },220);
            childsCsSection[j-1].classList.add('scale-up-hor-left');
            childsCsSection[j-1].classList.remove('order-first');
            childsCsSection[j-1].classList.remove('col-span-2');
        })
    }
</script>