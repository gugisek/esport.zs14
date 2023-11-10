<section id="bg" style="background-image: url('public/img/green.jpg');" class="bg-cover bg-fixed w-full">
    <section class="bg-[#000000c0] min-h-[95vh] w-full px-[10%] 2xl:px-[15%] pb-12 pt-16">
        <div class="flex items-center justify-between">
            <h1 id="schedule_title" class="font-[poppins] 2xl:text-3xl text-2xl font-bold text-gray-100">Aktualne Turnieje w ZS14</h1>
            <div class="uppercase text-sm flex flex-row gap-4 2xl:text-lg text-gray-600">
                <a id="schedule_nav" onclick="openShedule('cs')" class="font-medium cursor-pointer theme-text-hover duration-300 font-[poppins] theme-text">CS2</a>
                <a id="schedule_nav" onclick="openShedule('lol')"class="font-medium text-gray-500 cursor-pointer theme-text-hover duration-300 font-[poppins]">LoL</a>
                <a id="schedule_nav" onclick="openShedule('events')"class="font-medium text-gray-500 cursor-pointer theme-text-hover duration-300 font-[poppins]">Eventy</a>
            </div>
        </div>
        <hr class="my-4 border-gray-500">
        <section id="schedule_cs" class="duration-300 schedule grid grid-cols-3 gap-4">
            <div class="col-span-2">
                <div class="bg-[#0e0e0ec0] rounded-xl uppercase text-xs flex flex-row items-center justify-center w-full gap-4 2xl:text-lg text-gray-600 py-2 mb-2">
                    <a id="schedule_nav_cs" onclick="openScheduleCs('1')" class="cursor-pointer text-gray-400 theme-text-hover duration-300 font-[poppins] theme-text font-medium">Faza grupowa</a>
                    <a id="schedule_nav_cs" onclick="openScheduleCs('2')" class="cursor-pointer text-gray-500 theme-text-hover duration-300 font-[poppins] font-medium">System szwajcarski</a>
                    <a id="schedule_nav_cs" onclick="openScheduleCs('3')" class="cursor-pointer text-gray-500 theme-text-hover duration-300 font-[poppins] font-medium">Finały</a>
                </div>
                <section id="schedule_cs_1" class="schedule_cs grid grid-cols-4 gap-2">
                    <div data-aos="fade-left" class="border-black flex flex-col rounded-xl shadow-xl">
                        <h1 class="py-3 font-bold text-center font-[poppins] italic text-white bg-[#0e0e0e] rounded-t-xl">GRUPA ŚMIERCI</h1>
                        <div class="bg-[#0e0e0e] px-4 pb-4 rounded-b-xl w-full">
                            <table class="w-full">
                                <tr>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">TEAM</th>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">PKT</th>
                                </tr>
                                <tr class="border-b-[1px] border-t-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">Bambiki 5pi</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">2</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 ">Lamusy z 2a</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">RJ45 to rzycie</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                                <tr class="hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">Roz#wiacze</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-1</td>
                                </tr>   
                            </table>
                        </div>  
                    </div>
                    <div class="w-full bg-[#0e0e0e] col-span-4 rounded-xl hidden">
                        <h1 class="py-3 font-bold text-center font-[poppins] italic text-white bg-[#0e0e0e] rounded-t-xl">GRUPA ŚMIERCI</h1>
                        <div class="bg-[#0e0e0e] px-4 pb-4 rounded-b-xl w-full">
                            <table class="w-full">
                                <tr>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">Team</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">RM</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">W</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">R</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">P</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">ZR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">SR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">RR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">Punkty</th>
                                </tr>
                                <tr class="border-b-[1px] border-t-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">Bambiki 5pi</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">14</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">20</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-6</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">4</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">Lamusy z 2a</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">14</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">20</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-6</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">4</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">RJ45 to rzycie</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">14</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">20</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-6</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">4</td>
                                </tr>
                                <tr class="hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">Roz#wiacze</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">14</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">20</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-6</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">4</td>
                                </tr>   
                            </table>
                        </div>
                    </div>
                    <div data-aos="fade-left" class="border-black flex flex-col rounded-xl shadow-xl">
                        <h1 class="py-3 font-bold text-center font-[poppins] italic text-white bg-[#0e0e0e] rounded-t-xl">GRUPA A</h1>
                        <div class="bg-[#0e0e0e] px-4 pb-4 rounded-b-xl w-full">
                            <table class="w-full">
                                <tr>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">TEAM</th>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">PKT</th>
                                </tr>
                                <tr class="border-b-[1px] border-t-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">Bambiki 5pi</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">2</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 ">Lamusy z 2a</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">RJ45 to rzycie</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                                <tr class="hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">Roz#wiacze</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-1</td>
                                </tr>   
                            </table>
                        </div>  
                    </div>
                    <div class="w-full bg-[#0e0e0e] col-span-4 rounded-xl hidden">
                        <h1 class="py-3 font-bold text-center font-[poppins] italic text-white bg-[#0e0e0e] rounded-t-xl">GRUPA A</h1>
                        <div class="bg-[#0e0e0e] px-4 pb-4 rounded-b-xl w-full">
                            <table class="w-full">
                                <tr>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">Team</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">RM</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">W</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">R</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">P</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">ZR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">SR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">RR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">Punkty</th>
                                </tr>
                                <tr class="border-b-[1px] border-t-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">Bambiki 5pi</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">14</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">20</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-6</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">4</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">Lamusy z 2a</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">14</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">20</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-6</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">4</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">RJ45 to rzycie</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">14</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">20</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-6</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">4</td>
                                </tr>
                                <tr class="hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">Roz#wiacze</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">14</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">20</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-6</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">4</td>
                                </tr>   
                            </table>
                        </div>
                    </div>
                    <div data-aos="fade-left" class="border-black flex flex-col rounded-xl shadow-xl">
                        <h1 class="py-3 font-bold text-center font-[poppins] italic text-white bg-[#0e0e0e] rounded-t-xl">GRUPA B</h1>
                        <div class="bg-[#0e0e0e] px-4 pb-4 rounded-b-xl w-full">
                            <table class="w-full">
                                <tr>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">TEAM</th>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">PKT</th>
                                </tr>
                                <tr class="border-b-[1px] border-t-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">Bambiki 5pi</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">2</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 ">Lamusy z 2a</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">RJ45 to rzycie</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                                <tr class="hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">Roz#wiacze</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-1</td>
                                </tr>   
                            </table>
                        </div>  
                    </div>
                    <div class="w-full bg-[#0e0e0e] col-span-4 rounded-xl hidden">
                        <h1 class="py-3 font-bold text-center font-[poppins] italic text-white bg-[#0e0e0e] rounded-t-xl">GRUPA B</h1>
                        <div class="bg-[#0e0e0e] px-4 pb-4 rounded-b-xl w-full">
                            <table class="w-full">
                                <tr>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">Team</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">RM</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">W</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">R</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">P</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">ZR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">SR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">RR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">Punkty</th>
                                </tr>
                                <tr class="border-b-[1px] border-t-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">Bambiki 5pi</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">14</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">20</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-6</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">4</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">Lamusy z 2a</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">14</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">20</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-6</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">4</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">RJ45 to rzycie</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">14</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">20</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-6</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">4</td>
                                </tr>
                                <tr class="hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">Roz#wiacze</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">14</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">20</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-6</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">4</td>
                                </tr>   
                            </table>
                        </div>
                    </div>
                    <div data-aos="fade-left" class="border-black flex flex-col rounded-xl shadow-xl">
                        <h1 class="py-3 font-bold text-center font-[poppins] italic text-white bg-[#0e0e0e] rounded-t-xl">GRUPA C</h1>
                        <div class="bg-[#0e0e0e] px-4 pb-4 rounded-b-xl w-full">
                            <table class="w-full">
                                <tr>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">TEAM</th>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">PKT</th>
                                </tr>
                                <tr class="border-b-[1px] border-t-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">Bambiki 5pi</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">2</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 ">Lamusy z 2a</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">RJ45 to rzycie</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                                <tr class="hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">Roz#wiacze</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-1</td>
                                </tr>   
                            </table>
                        </div>  
                    </div>
                    <div class="w-full bg-[#0e0e0e] col-span-4 rounded-xl hidden">
                        <h1 class="py-3 font-bold text-center font-[poppins] italic text-white bg-[#0e0e0e] rounded-t-xl">GRUPA C</h1>
                        <div class="bg-[#0e0e0e] px-4 pb-4 rounded-b-xl w-full">
                            <table class="w-full">
                                <tr>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">Team</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">RM</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">W</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">R</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">P</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">ZR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">SR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">RR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">Punkty</th>
                                </tr>
                                <tr class="border-b-[1px] border-t-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">Bambiki 5pi</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">14</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">20</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-6</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">4</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">Lamusy z 2a</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">14</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">20</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-6</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">4</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">RJ45 to rzycie</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">14</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">20</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-6</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">4</td>
                                </tr>
                                <tr class="hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">Roz#wiacze</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">14</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">20</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-6</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">4</td>
                                </tr>   
                            </table>
                        </div>
                    </div>
                    <div data-aos="fade-left" class="border-black flex flex-col rounded-xl shadow-xl">
                        <h1 class="py-3 font-bold text-center font-[poppins] italic text-white bg-[#0e0e0e] rounded-t-xl">GRUPA D</h1>
                        <div class="bg-[#0e0e0e] px-4 pb-4 rounded-b-xl w-full">
                            <table class="w-full">
                                <tr>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">TEAM</th>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">PKT</th>
                                </tr>
                                <tr class="border-b-[1px] border-t-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">Bambiki 5pi</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">2</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2 ">Lamusy z 2a</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">RJ45 to rzycie</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">0</td>
                                </tr>
                                <tr class="hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">Roz#wiacze</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-1</td>
                                </tr>   
                            </table>
                        </div>  
                    </div>
                    <div class="w-full bg-[#0e0e0e] col-span-4 rounded-xl hidden">
                        <h1 class="py-3 font-bold text-center font-[poppins] italic text-white bg-[#0e0e0e] rounded-t-xl">GRUPA D</h1>
                        <div class="bg-[#0e0e0e] px-4 pb-4 rounded-b-xl w-full">
                            <table class="w-full">
                                <tr>
                                    <th class="font-[poppins] text-sm text-start text-gray-300 py-2">Team</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">RM</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">W</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">R</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">P</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">ZR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">SR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">RR</th>
                                    <th class="font-[poppins] text-sm text-gray-300 py-2">Punkty</th>
                                </tr>
                                <tr class="border-b-[1px] border-t-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">Bambiki 5pi</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">14</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">20</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-6</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">4</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">Lamusy z 2a</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">14</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">20</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-6</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">4</td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-600 hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">RJ45 to rzycie</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">14</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">20</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-6</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">4</td>
                                </tr>
                                <tr class="hover:bg-[#232323]">
                                    <td class="font-[poppins] text-sm text-gray-300 py-2">Roz#wiacze</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">3</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">1</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">14</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">20</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">-6</td>
                                    <td class="text-sm font-[poppins] theme-text text-center">4</td>
                                </tr>   
                            </table>
                        </div>
                    </div>
                </section>
                <section id="schedule_cs_2" class="schedule_cs duration-300 h-0 w-0 opacity-0 grid grid-cols-4 gap-2">
                    <div  class="border-black flex flex-col rounded-xl shadow-xl pb-4">
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
                    </div>
                </section>
                <section id="schedule_cs_3" class="schedule_cs duration-300 h-0 w-0 opacity-0 grid grid-cols-4 gap-2">
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
                </section>
                
            </div>
            <div class="rounded-2xl text-white bg-top bg-cover bg-fixed shadow-xl">
                <div class="bg-[#0e0e0ec0] py-4 px-4 h-full w-full rounded-2xl flex flex-col justify-between">
                    <div>
                        <p class="font-[poppins] text-xs text-gray-100 text-gray-300 pb-4 uppercase  text-center border-b-[1px] border-[#3d3d3d]">Następne mecze</p>              
                        <div class="border-b-[1px] border-[#3d3d3d] py-2 flex items-center justify-between">
                            <div>
                                <h1 class="text-gray-200 font-[poppins] font-semibold">5pi vs 5pi</h1>
                                <p class="uppercase theme-text font-[poppins] text-xs">Półfinał</p>
                            </div>
                            <div>
                                <p class="theme-text">13:30<span class="text-sm text-gray-300"> 20.02.2023</span></p>
                                <p class="text-xs text-gray-500 text-right">Zdalnie</p>
                            </div>
                        </div>
                        <div class="border-b-[1px] border-[#3d3d3d] py-2 flex items-center justify-between">
                            <div>
                                <h1 class="text-gray-200 font-[poppins] font-semibold">5pi vs 5pi</h1>
                                <p class="uppercase theme-text font-[poppins] text-xs">Półfinał</p>
                            </div>
                            <div>
                                <p class="theme-text">13:30<span class="text-sm text-gray-300"> 20.02.2023</span></p>
                                <p class="text-xs text-gray-500 text-right">Zdalnie</p>
                            </div>
                        </div>
                        <div class="border-b-[1px] text-gray-200     border-[#3d3d3d] py-2 flex items-center justify-between">
                            <div>
                                <h1 class="font-[poppins] font-semibold">Nie ustalono</h1>
                                <p class="uppercase theme-text font-[poppins] text-xs">Finał</p>
                            </div>
                            <div>
                                <p class="theme-text">13:30<span class="text-sm text-gray-300"> 20.02.2023</span></p>
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
        </section>
        <section id="schedule_lol" class="duration-300 h-0 w-0 opacity-0 schedule grid grid-cols-3 gap-4">
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
        </section>
        <section id="schedule_events" class="duration-300 h-0 w-0 opacity-0 schedule grid grid-cols-3 gap-4">
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
        </section>
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
        })
    }
</script>