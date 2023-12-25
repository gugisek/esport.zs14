<div class=" events-setting-panels divide-y divide-white/5">
    <ul class="relative m-0 flex list-none justify-between overflow-hidden p-5 transition-[height] duration-200 ease-in-out events-hero-list">
        <?php
            include "../../../scripts/security.php";
            include "../../../scripts/conn_db.php";
            $selected_nav = "SELECT value FROM informations WHERE name = 'events_selected_hero'";
            $selected_nav_result = mysqli_query($conn, $selected_nav);
            $selected = mysqli_fetch_array($selected_nav_result);
            $type;

            if($selected[0] == 'blank_page'){
                $type = 0;
            } else if($selected[0] == 'clock'){
                $type = 1;
            } else if($selected[0] == 'last_champions'){
                $type = 2;
            } else if($selected[0] == 'schedule'){
                $type = 3;
            }

            echo '<input type="hidden" value="'.$type.'" id="selected_hero_nav">';
        ?>
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
            <div class="flex cursor-pointer items-center py-6 leading-[1.3rem] no-underline before:mr-2 before:h-px before:w-full before:flex-1 before:bg-[#e0e0e0] before:content-[''] after:ml-2 after:h-px after:w-full after:flex-1 after:bg-[#e0e0e0] after:content-['']  hover:bg-[#bbbbbb20] dark:after:bg-neutral-300">
                <a data-te-stepper-head-text-ref class="text-neutral-500 after:flex after:text-[0.8rem] after:content-[data-content] dark:text-neutral-300">
                    Ostatni Zwycięzcy
                </a>
            </div>
        </li>
    <!---Schedule-->
        <li class="w-[4.5rem] flex-auto">
           <div class="flex cursor-pointer items-center py-6 pr-2 leading-[1.3rem] rounded-r-2xl no-underline before:mr-2 before:h-px before:w-full before:flex-1 before:bg-[#e0e0e0] before:content-[''] hover:bg-[#bbbbbb20] focus:outline-none dark:before:bg-neutral-300">
                <a class="text-neutral-500 after:flex after:text-[0.8rem] after:content-[data-content] dark:text-neutral-300">
                    Tabele
                </a>
            </div>
        </li>
    </ul>

    <div class="sm:px-6 lg:px-8">
        <form method="post" enctype="multipart/form-data" action="scripts/settings/hero_panel_blank_edit.php" class="px-4 mb-6 sm:px-0 mt-6 flex flex-row justify-between items-center events-settings">
            <div class="flex flex-col w-full">
                <div class="flex flex-row justify-between">
                    <div>
                        <h3 class="text-base font-semibold leading-7 text-white">Ustawienia Pustej Strony</h3>
                        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-400">Dodaj lub edytuj zapis na pustym hero podstrony events.</p>
                    </div>
                    <div class="py-2 flex gap-x-2">
                        <?php
                            if($selected[0] == 'blank_page'){
                                echo "<button disabled class='inline-flex items-center gap-x-2 rounded-md bg-slate-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-slate-500 hover:cursor-not-allowed duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-600'>Wybrano </button>";
                            } else {
                                $xd = "callPHP('selected=0')";
                                echo '<button type="button" onclick="'.$xd.'" class="inline-flex items-center gap-x-2 rounded-md bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-600">Wybierz<svg class="-mr-0.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"></path></svg></button>';
                            }
                        ?>
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
                                <a  tabindex="0" role="link" aria-label="tooltip 2" class="focus:outline-none focus:ring-gray-300 rounded-full focus:ring-offset-2 focus:ring-2 focus:bg-gray-200 relative my-28 md:my-0 md:mx-64">
                                     <div class="cursor-pointer tooltiphover">
                                         <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.529 7.988a2.502 2.502 0 0 1 5 .191A2.441 2.441 0 0 1 10 10.582V12m-.01 3.008H10M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                        </svg>
                                    </div>
                                    <div id="tooltip2" role="tooltip" class="tooltip z-20 -mt-20 w-64 absolute transition duration-150 ease-in-out left-0 ml-8 shadow-lg theme-bg p-1 rounded hidden">
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
                                        <img src="public/img/events_hero_tooltip.png" alt="test">
                                    </div>
                                </a>
                            </div>
                            <?php
                                $blank_page_text = "SELECT value FROM informations WHERE name = 'events_blank_page_text'";
                                $result_blank_page_text = mysqli_fetch_array(mysqli_query($conn,$blank_page_text));
                                
                                echo ' <input name="blank_page_text" placeholder="Brak tekstu" type="text" value="'.$result_blank_page_text[0].'" class="focus:outline-0 invalid:border-red-600 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white py-4  bg-[#0e0e0e]/0 mt-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0">';
                            ?>
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
        </form>
        <form method="post" enctype="multipart/form-data" action="scripts/settings/hero_panel_clock_edit.php" class="px-4 mb-6 sm:px-0 mt-6 flex flex-row justify-between items-center hidden events-settings">
            <div class="flex flex-col w-full">
                <div class="flex flex-row justify-between">
                    <div>
                        <h3 class="text-base font-semibold leading-7 text-white">Ustawienia Wyglądu Zegara</h3>
                        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-400">Edytuj wygląd i dane wyświetlane przez zegar.</p>
                    </div>
                    <div class="py-2 flex gap-x-2">
                        <?php
                            if($selected[0] == 'clock'){
                                echo "<button disabled class='inline-flex items-center gap-x-2 rounded-md bg-slate-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-slate-500 hover:cursor-not-allowed duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-600'>Wybrano </button>";
                            } else {
                                $xd = "callPHP('selected=1')";
                                echo '<button type="button" onclick="'.$xd.'" class="inline-flex items-center gap-x-2 rounded-md bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-600">Wybierz<svg class="-mr-0.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"></path></svg></button>';
                            }
                        ?>
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
                                <dt class="text-sm font-medium leading-6 py-4 text-white">Teskt ponad zegarem</dt>
                                <a  tabindex="0" role="link" aria-label="tooltip 2" class="focus:outline-none focus:ring-gray-300 rounded-full focus:ring-offset-2 focus:ring-2 focus:bg-gray-200 relative my-28 md:my-0 md:mx-64">
                                    <div class="cursor-pointer tooltiphover">
                                        <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.529 7.988a2.502 2.502 0 0 1 5 .191A2.441 2.441 0 0 1 10 10.582V12m-.01 3.008H10M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                        </svg>
                                    </div>
                                    <div id="tooltip2" role="tooltip" class="tooltip z-20 -mt-20 w-64 absolute transition duration-150 ease-in-out left-0 ml-8 shadow-lg theme-bg p-1 rounded hidden">
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
                                        <img src="public/img/events_clock_text_tooltip.png" alt="test">
                                    </div>
                                </a>
                            </div>
                            <?php
                                $clock_text = "SELECT value FROM informations WHERE name = 'events_clock_text'";
                                $result_clock_text = mysqli_fetch_array(mysqli_query($conn,$clock_text));
                                
                                echo '<input name="clock_text" type="text" value="'.$result_clock_text[0].'" class="focus:outline-0 invalid:border-red-600 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white py-4  bg-[#0e0e0e]/0 mt-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0">';
                            ?>
                        </div>
                        <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <div class="flex flew-row space-x-2 items-center">
                                <dt class="text-sm font-medium leading-6 py-4 text-white">Data rozpoczęcia nadchodzącego turnieju</dt>
                            </div>
                            <?php
                                $clock_time = "SELECT value FROM informations WHERE name = 'events_clock_start_time'";
                                $result_clock_time = mysqli_fetch_array(mysqli_query($conn,$clock_time));
                                
                                echo '<input name="clock_start_time" type="text" value="'.$result_clock_time[0].'" placeholder="00:00 dd.mm.rrrr" class="focus:outline-0 invalid:border-red-600 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white py-4  bg-[#0e0e0e]/0 mt-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0">';
                            ?>
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
        </form>
        <div class="px-4 mb-6 sm:px-0 mt-6 flex flex-row justify-between items-center hidden events-settings">
            <div class="flex flex-col w-full">
                <div class="flex flex-row justify-between">
                    <div>
                        <h3 class="text-base font-semibold leading-7 text-white">Ustawienia edycji komponentu Champions</h3>
                        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-400">Edytuj tekst, dodawaj i zmieniaj zdjęcia dla komponentu Ostatnich Zwycięzców.</p>
                    </div>
                    <div class="py-2 flex gap-x-2">
                         <?php
                            if($selected[0] == 'last_champions'){
                                echo "<button disabled class='inline-flex items-center gap-x-2 rounded-md bg-slate-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-slate-500 hover:cursor-not-allowed duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-600'>Wybrano </button>";
                            } else {
                                $xd = "callPHP('selected=2')";
                                echo '<button type="button" onclick="'.$xd.'" class="inline-flex items-center gap-x-2 rounded-md bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-600">Wybierz<svg class="-mr-0.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"></path></svg></button>';
                            }
                        ?>
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
                            <div>
                                <div class="flex flew-row space-x-2 items-center">
                                    <dt class="text-sm font-medium leading-6 py-4 text-white">Nazwy elementów nawigacji</dt>
                                    <a  tabindex="0" role="link" aria-label="tooltip 2" class="focus:outline-none focus:ring-gray-300 rounded-full focus:ring-offset-2 focus:ring-2 focus:bg-gray-200 relative my-28 md:my-0 md:mx-64">
                                        <div class="cursor-pointer tooltiphover">
                                            <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.529 7.988a2.502 2.502 0 0 1 5 .191A2.441 2.441 0 0 1 10 10.582V12m-.01 3.008H10M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                            </svg>
                                        </div>
                                        <div id="tooltip2" role="tooltip" class="tooltip z-20 -mt-20 w-64 absolute transition duration-150 ease-in-out left-0 ml-8 shadow-lg theme-bg p-1 rounded hidden">
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
                                            <img src="public/img/events_champions_nav_texts_tooltip.png" alt="test">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="nav_inputs sm:grid col-span-2 gap-3">
                                <div class="nav_input order-last flex flex-row justify-between">
                                    <input name="nav_input_0" type="text" value="" oninput="reWriteValue(0)" placeholder="Podaj nazwę elementu nawigacyjnego" class="w-11/12 focus:outline-0 invalid:border-red-600 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white py-4  bg-[#0e0e0e]/0 mt-1 text-sm leading-6 text-gray-400">
                                    <div class="w-1/12 flex items-center justify-center">
                                        <button type="button" class="add_nav_elem md:mt-0 mt-4 bg-transparent inline-flex items-center justify-center rounded-2xl text-white">
                                                <svg class="-mr-0.5 h-5 w-5 rounded-2xl hover:bg-green-400 shadow-xl duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                                                </svg>
                                        </button>
                                        <div class="w-6 h-6">
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <div>
                                <div class="flex flew-row space-x-2 items-center">
                                    <dt class="text-sm font-medium leading-6 py-4 text-white">Tytuły panelu zwycięzców</dt>
                                    <a  tabindex="0" role="link" aria-label="tooltip 2" class="focus:outline-none focus:ring-gray-300 rounded-full focus:ring-offset-2 focus:ring-2 focus:bg-gray-200 relative my-28 md:my-0 md:mx-64">
                                        <div class="cursor-pointer tooltiphover">
                                            <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.529 7.988a2.502 2.502 0 0 1 5 .191A2.441 2.441 0 0 1 10 10.582V12m-.01 3.008H10M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                            </svg>
                                        </div>
                                        <div id="tooltip2" role="tooltip" class="tooltip z-20 -mt-20 w-64 absolute transition duration-150 ease-in-out left-0 ml-8 shadow-lg theme-bg p-1 rounded hidden">
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
                                            <img src="public/img/events_champions_title_texts_tooltip.png" alt="test">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="title_inputs sm:grid col-span-2">
                                <input name="title_input_0" type="text" value="" oninput="reWriteValue(0)" placeholder="Podaj nazwę nagłówka" class="title_input order-last focus:outline-0 invalid:border-red-600 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white py-4  bg-[#0e0e0e]/0 mt-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0">
                            </div>
                        </div>
                        <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <div>
                                <div class="flex flew-row space-x-2 items-center">
                                    <dt class="text-sm font-medium leading-6 py-4 text-white">Zdjęcia i pseduonimy panelu zwycięzców</dt>
                                    <a  tabindex="0" role="link" aria-label="tooltip 2" class="focus:outline-none focus:ring-gray-300 rounded-full focus:ring-offset-2 focus:ring-2 focus:bg-gray-200 relative my-28 md:my-0 md:mx-64">
                                        <div class="cursor-pointer tooltiphover">
                                            <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.529 7.988a2.502 2.502 0 0 1 5 .191A2.441 2.441 0 0 1 10 10.582V12m-.01 3.008H10M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                            </svg>
                                        </div>
                                        <div id="tooltip2" role="tooltip" class="tooltip z-20 -mt-20 w-64 absolute transition duration-150 ease-in-out left-0 ml-8 shadow-lg theme-bg p-1 rounded hidden">
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
                                            <img src="public/img/events_champions_photo_tooltip.png" alt="test">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="players_inputs sm:grid col-span-2 gap-8">
                                <div class="player_input order-last flex flex-row justify-between">
                                    <div class="w-10/12">
                                        <input name="players_input_0" type="text" value="" oninput="reWriteValueChampios(0)" placeholder="Podaj pseudonim zawodnika/podpis zdjęcia" class="w-full focus:outline-0 invalid:border-red-600 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white py-4 bg-[#0e0e0e]/0 mt-1 text-sm leading-6 text-gray-400">
                                        <dd class="w-full">
                                            <div class="relative max-w-[200px] flex align-center justify-center items-center">
                                                <!-- <img id="popup_img_inpt_0" src="" alt="logo" class="w-full pb-4 md:mt-0 mt-4 object-contain">
                                                <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Korusiwo</p> -->
                                            </div>
                                            <input type="file" name="fileToUpload_0" onchange="imgPrev('')" id="fileToUpload_0" class="cursor-copy md:min-w-[400px] w-full mt-1 flex justify-center rounded-md border-2 border-dashed theme-border text-gray-300 px-6 pt-5 pb-6">
                                            <p class="text-xs text-gray-500 mt-2">Przeciągnij i upuść - PNG, JPG, GIF do 5MB</p>
                                        </dd>
                                    </div>
                                    <div class="w-1/12 flex items-center justify-center">
                                        <button type="button" class="add_player_elem md:mt-0 mt-4 bg-transparent inline-flex items-center justify-center rounded-2xl text-white">
                                                <svg class="-mr-0.5 h-5 w-5 rounded-2xl hover:bg-green-400 shadow-xl duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                                                </svg>
                                        </button>
                                        <div class="w-6 h-6">
                                        </div>
                                    </div>
                                </div>
                            </div>
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
        </div>
        <div class="px-4 mb-2 sm:px-0 mt-6 flex flex-row justify-between items-center events-settings">
            <div class="flex flex-col w-full">
                <div class="flex flex-row justify-between">
                    <div>
                        <h3 class="text-base font-semibold leading-7 text-white">Ustawienia Tabel</h3>
                        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-400">Wybierz panel Tabele, jako hero na podstronie events.</p>
                    </div>
                    <div class="py-2 flex gap-x-2">
                        <?php
                            if($selected[0] == 'schedule'){
                                echo "<button disabled class='inline-flex items-center gap-x-2 rounded-md bg-slate-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-slate-500 hover:cursor-not-allowed duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-600'>Wybrano </button>";
                            } else {
                                $xd = "callPHP('selected=3')";
                                echo '<button type="button" onclick="'.$xd.'" class="inline-flex items-center gap-x-2 rounded-md bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-600">Wybierz<svg class="-mr-0.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"></path></svg></button>';
                            }
                        ?>
                    </div>
                </div>
                <div class="mt-6 border-t border-white/10">
                    <dl class="divide-y divide-white/10">
                        <div class="py-2">
                            <div class="flex flew-row space-x-2 items-center">
                                <dt class="mt-1 max-w-2xl text-sm leading-6 text-gray-400 py-4 flex flex-row gap-x-1">
                                    <div>Jeśli chcesz dokonać edycji podpanelu Tabele kliknij</div>
                                    <a class="font-semibold leading-6 text-white cursor-pointer theme-text-hover duration-150 teleport flex content-center items-center gap-x-1">tutaj<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                    </svg></a>
                                </dt>
                            </div>
                        </div>
                    </dl>
                    <div class="sm:px-6 lg:px-8 px-4 text-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
 <script>
    var teleport = document.querySelector('.teleport');
    var navButtons = document.querySelectorAll('.events-nav a');
    var eventsSettingsDivs = document.querySelectorAll('.events-setting-panels');
    teleport.addEventListener("click", ()=>{
                navButtons.forEach((elem) =>{
                    elem.classList.remove('theme-text');
                })
                eventsSettingsDivs.forEach((elem) =>{
                    elem.classList.add('hidden');
                    // eventsSettingsDivs[index].classList.remove('slide-left-long');
                    // body.classList.remove('overflow-x-hidden');
                })
                navButtons[2].classList.add('theme-text');
                eventsSettingsDivs[2].classList.remove('hidden');
                // body.classList.add('overflow-x-hidden');
                // eventsSettingsDivs[index].classList.add('slide-left-long');

    })

    var heroSwitcherDivs = document.querySelectorAll('.events-hero-list li div');
        var heroSwitcherButtons = document.querySelectorAll('.events-hero-list li div a')
        var eventsSettingsArticle = document.querySelectorAll('.events-settings');

        var heroSelectedSwitcherButton = document.querySelector('#selected_hero_nav');

        eventsSettingsArticle.forEach((elem)=>{
            elem.classList.add('hidden');
        })
        heroSwitcherButtons.forEach((elem)=>{
            elem.classList.remove('theme-text');
        })

        eventsSettingsArticle[heroSelectedSwitcherButton.value].classList.remove('hidden');
        heroSwitcherButtons[heroSelectedSwitcherButton.value].classList.add('theme-text');


        heroSwitcherDivs.forEach((butt, index)=>{
            butt.addEventListener("click", ()=>{
                heroSwitcherButtons.forEach((elem) =>{
                    elem.classList.remove('theme-text');
                })
                eventsSettingsArticle.forEach((elem) =>{
                    elem.classList.add('hidden');
                    //eventsSettingsArticle[index].classList.remove('slide-left-long');
                    //body.classList.remove('overflow-x-hidden');
                })
                heroSwitcherButtons[index].classList.add('theme-text');
                //body.classList.add('overflow-x-hidden');
                eventsSettingsArticle[index].classList.remove('hidden');
                //eventsSettingsArticle[index].classList.add('slide-left-long');
            })
        })

        function callPHP(params) {
            var httpc = new XMLHttpRequest();
            var url = "scripts/settings/change_current_hero_events.php";

            httpc.onreadystatechange = function() { //Call a function when the state changes.
                if(httpc.readyState == 4 && httpc.status == 200) { // complete and no errors
                    // alert(httpc.responseText);
                    location.reload();
                }
            };
            httpc.open("POST", url, true); // sending as POST
            httpc.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            httpc.send(params);
            
        }

        //var eventsHeroTooltip2 = document.getElementById("tooltip2");
        var eventsToolTips = document.querySelectorAll('.tooltip')
        var eventsToolTipsHover = document.querySelectorAll('.tooltiphover')

        eventsToolTipsHover.forEach((elem, index) =>{
            elem.addEventListener('mouseover', ()=>{
                eventsToolTips[index].classList.remove('hidden')
            })
            elem.addEventListener('mouseout', ()=>{
                eventsToolTips[index].classList.add('hidden')
            })
        })

        var buttonToAddNavElement = document.querySelectorAll('.add_nav_elem');
        var buttonToRemNavElement = document.querySelectorAll('.rem_nav_elem');
        var navInputsDiv = document.querySelector('.nav_inputs');
        var navInputs = document.querySelectorAll('.nav_input');
        var titleInputsDiv = document.querySelector('.title_inputs');
        var titleInputs = document.querySelectorAll('.title_input')
        var navInputsCounter;
        var freeIndexes = [1,2,3];

        function navInputAdd(xd){
            // let input = document.createTextNode = '<div id = "n'+xd+'" oninput="reWriteValue('+xd+')" class="nav_input gap-x-2 flex flex-row justify-between"> <input name="nav_input_'+xd+'" type="text" value="" placeholder="Podaj nazwę elementu nawigacyjnego" class="w-11/12 focus:outline-0 invalid:border-red-600 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white py-4  bg-[#0e0e0e]/0 mt-1 text-sm leading-6 text-gray-400"> <div class="w-1/12 flex items-center justify-center"> <button type="button" onclick="whyyyyRem('+xd+')" id = "b'+xd+'" class="rem_nav_elem md:mt-0 mt-4 bg-transparent inline-flex items-center justify-center rounded-2xl text-white"> <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="-mr-0.5 h-6 w-6 rounded-2xl hover:stroke-red-400 shadow-xl duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg> </button> <div class="w-6 h-6"></div> </div> </div>';
            // return input;

            let e7 = document.createElement('div');
            e7.setAttribute('id','n'+xd+'');
            e7.setAttribute('oninput','reWriteValue('+xd+')');
            e7.setAttribute('class','nav_input gap-x-2 flex flex-row justify-between');
            e7.innerHTML = '<input name="nav_input_'+xd+'" type="text" value="" placeholder="Podaj nazwę elementu nawigacyjnego" class="w-11/12 focus:outline-0 invalid:border-red-600 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white py-4  bg-[#0e0e0e]/0 mt-1 text-sm leading-6 text-gray-400"> <div class="w-1/12 flex items-center justify-center"> <button type="button" onclick="whyyyyRem('+xd+')" id = "b'+xd+'" class="rem_nav_elem md:mt-0 mt-4 bg-transparent inline-flex items-center justify-center rounded-2xl text-white"> <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="-mr-0.5 h-6 w-6 rounded-2xl hover:stroke-red-400 shadow-xl duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg> </button> <div class="w-6 h-6"></div> </div>';

            return e7;
        }

        function titleInputAdd(xd){
            let titleInput = document.createTextNode = '<input name="title_input_'+xd+'" type="text" value="" placeholder="Podaj nazwę nagłówka" oninput="reWriteValue('+xd+')" class="title_input focus:outline-0 invalid:border-red-600 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white py-4  bg-[#0e0e0e]/0 mt-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0">';
            return titleInput;
        }

        whyyyy();

        function whyyyy(){
            buttonToAddNavElement = document.querySelectorAll('.add_nav_elem');
            navInputs = document.querySelectorAll('.nav_input');
            titleInputs = document.querySelectorAll('.title_input')
            buttonToAddNavElement.forEach((elem, index)=>{
                elem.addEventListener('click', ()=>{
                    navInputsCounter = navInputsDiv.childElementCount;
                    if(navInputsCounter >3){
                        return freeIndexes;
                    } else{
                        index = freeIndexes.shift();
                        navInputsDiv.insertBefore(navInputAdd(index),navInputsDiv.childNodes[0]);

                        //navInputsDiv.innerHTML = navInputsDiv.innerHTML+navInputAdd(index);
                        titleInputsDiv.innerHTML =titleInputAdd(index)+titleInputsDiv.innerHTML;
                        return freeIndexes;
                    }
                })
            })
        }

        function whyyyyRem(u){
            freeIndexes.push(u);
            n = u;
            u = 'n'+u;
            navInputsDiv.removeChild(document.getElementById(u));
            titleInputsDiv.removeChild(document.getElementsByName('title_input_'+n)[0]);
            navInputsCounter = navInputsCounter -1;
            
            return navInputsCounter;
            return freeIndexes;
        }

        function reWriteValue(zm){
            let inpoot = document.getElementsByName('nav_input_'+zm);
            inpoot[0].setAttribute('value', inpoot[0].value);

            let titleInpoot = document.getElementsByName('title_input_'+zm);
            titleInpoot[0].setAttribute('value', titleInpoot[0].value);
        }

        function reWriteValueChampios(zm){
            let championNickInpoot = document.getElementsByName('players_input_'+zm);
            championNickInpoot[0].setAttribute('value', championNickInpoot[0].value);
        }

        var buttonToAddPlayerElement = document.querySelectorAll('.add_player_elem');
        var buttonToRemPlayerElement = document.querySelectorAll('.rem_player_elem');
        var playerInputsDiv = document.querySelector('.players_inputs');
        var playerInputs = document.querySelectorAll('.player_input');
        var playerInputsCounter;
        var freePlayerIndexes = [1,2,3,4];


        function championPhotoTextInputAdd(jk){
            // let photoTextInput = '<div id= "m'+jk+'" class="player_input order-last flex flex-row justify-between"><div class="w-10/12"><input name="players_input_'+jk+'" type="text" value="" oninput="reWriteValueChampios('+jk+')" placeholder="Podaj pseudonim zawodnika/podpis zdjęcia" class="w-full focus:outline-0 invalid:border-red-600 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white py-4  bg-[#0e0e0e]/0 mt-1 text-sm leading-6 text-gray-400"><dd class="w-full"><div class="relative max-w-[200px] flex align-center justify-center items-center"><!-- <img id="popup_img_inpt_'+jk+'" src="" alt="logo" class="w-full pb-4 md:mt-0 mt-4 object-contain"><p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Korusiwo</p> --></div><input type="file" name="fileToUpload_'+jk+'" onchange="imgPrev('+' '+', '+jk+')" id="fileToUpload_'+jk+'" class="cursor-copy md:min-w-[400px] w-full mt-1 flex justify-center rounded-md border-2 border-dashed theme-border text-gray-300 px-6 pt-5 pb-6"><p class="text-xs text-gray-500 mt-2">Przeciągnij i upuść - PNG, JPG, GIF do 5MB</p></dd></div><div class="w-1/12 flex items-center justify-center"> <button type="button" onclick="championRemElement('+jk+')" id = "k'+jk+'" class="rem_player_elem md:mt-0 mt-4 bg-transparent inline-flex items-center justify-center rounded-2xl text-white"> <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="-mr-0.5 h-6 w-6 rounded-2xl hover:stroke-red-400 shadow-xl duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg> </button> <div class="w-6 h-6"></div> </div></div>';
            // return photoTextInput;

            let e1 = document.createElement('div');
            e1.setAttribute('id', 'm'+jk+'');
            e1.setAttribute('class', 'player_input flex flex-row justify-between');
            e1.innerHTML = '<div class="w-10/12"><input name="players_input_'+jk+'" type="text" value="" oninput="reWriteValueChampios('+jk+')" placeholder="Podaj pseudonim zawodnika/podpis zdjęcia" class="w-full focus:outline-0 invalid:border-red-600 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white py-4  bg-[#0e0e0e]/0 mt-1 text-sm leading-6 text-gray-400"><dd class="w-full"><div class="relative max-w-[200px] flex align-center justify-center items-center"><!-- <img id="popup_img_inpt_'+jk+'" src="" alt="logo" class="w-full pb-4 md:mt-0 mt-4 object-contain"><p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Korusiwo</p> --></div><input type="file" name="fileToUpload_'+jk+'" onchange="imgPrev('+' '+', '+jk+')" id="fileToUpload_'+jk+'" class="cursor-copy md:min-w-[400px] w-full mt-1 flex justify-center rounded-md border-2 border-dashed theme-border text-gray-300 px-6 pt-5 pb-6"><p class="text-xs text-gray-500 mt-2">Przeciągnij i upuść - PNG, JPG, GIF do 5MB</p></dd></div><div class="w-1/12 flex items-center justify-center"> <button type="button" onclick="championRemElement('+jk+')" id = "k'+jk+'" class="rem_player_elem md:mt-0 mt-4 bg-transparent inline-flex items-center justify-center rounded-2xl text-white"> <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="-mr-0.5 h-6 w-6 rounded-2xl hover:stroke-red-400 shadow-xl duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg> </button> <div class="w-6 h-6"></div> </div>';
            return e1;
        }

        championAddElement();

        function championAddElement(){
            buttonToAddPlayerElement = document.querySelectorAll('.add_player_elem');
            playerInputs = document.querySelectorAll('.player_input');
            buttonToAddPlayerElement.forEach((elem, index)=>{
                elem.addEventListener('click', ()=>{
                    playerInputsCounter = playerInputsDiv.childElementCount;
                    if(playerInputsCounter >4){
                        return freePlayerIndexes;
                    } else{
                        index = freePlayerIndexes.shift();

                        playerInputsDiv.insertBefore(championPhotoTextInputAdd(index),playerInputsDiv.childNodes[0]);
                        //playerInputsDiv.append(championPhotoTextInputAdd(index));
                        return freePlayerIndexes;
                    }
                })
            })
        }

        function championRemElement(u){
            freePlayerIndexes.push(u);
            n = u;
            u = 'm'+u;
            playerInputsDiv.removeChild(document.getElementById(u));
            playerInputsCounter = playerInputsCounter -1;
            
            return playerInputsCounter;
            return freePlayerIndexes;
        }

        function imgPrev(type, kl) {
            const file = document.getElementById(`fileToUpload_${kl}${type}`).files[0];
            const reader = new FileReader();
            reader.onloadend = function() {
                //ustawienie dla wszystkich img o id popup_img_inpt src
                for (let i = 0; i < document.querySelectorAll(`#popup_img_inpt_${kl}${type}`).length; i++) {
                    document.querySelectorAll(`#popup_img_inpt_${kl}${type}`)[i].src = reader.result;
                }


            }
            if (file) {
                reader.readAsDataURL(file);
            } else {
                document.getElementById(`popup_img_inpt_${kl}${type}`).src = "";
            }

            if(document.getElementById(`popup_img_inpt_${kl}${type}`).src == ""){
                document.getElementById(`popup_img_inpt_${kl}${type}`).classList.add('hidden');
            } else{
                document.getElementById(`popup_img_inpt_${kl}${type}`).classList.remove('hidden');
            }
        }
 </script>