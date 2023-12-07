<div class="">
  <div class="mx-auto px-4 py-8 sm:px-6 sm:py-8 lg:max-w-7xl lg:px-8">
    <!-- Product -->
    <div
      class="lg:grid lg:grid-cols-7 lg:grid-rows-1 lg:gap-x-8 lg:gap-y-10 xl:gap-x-16"
    >
      <!-- Product image -->
      <div class="lg:col-span-4 lg:row-end-1">
        <div ondrop='dropHandler(event)' ondragover='dragOverHandler(event)' class="eventPhotoContainer aspect-h-3 aspect-w-4 overflow-hidden rounded-lg bg-[#0e0e0e] relative group/item">
          <div title="eventPhoto" class="editable absolute w-full h-full group-edit hidden group-hover/item:block group-hover/item:bg-slate-900/50">
            <div class="h-full flex flex-col justify-center items-center content-center gap-y-4">
              <h1 class="text-2xl text-white">Ustaw zdjęcie wydarzenia</h1>
              <button onclick="chooseNewPhoto()" class="cursor-pointer flex w-min-fit w-max-fit items-center justify-center rounded-md theme-bg theme-bg-hover px-8 py-3 text-base duration-150 font-medium text-white">Wybierz zdjęcie</button>
              <p class="text-xs theme-text mt-2">Przeciągnij i upuść - PNG, JPG, GIF do 5MB</p>
              <input onchange="imgPrev()" class="hidden" type="file" name="eventPhoto" id="eventPhoto">
            </div>
          </div>
          <img id="eventPhotoInput" src="public/img/event1.jpg" alt="Sample of 30 icons with friendly and fun details in outline, filled, and brand color styles." class="object-cover object-center w-full z-998"/>
        </div>
      </div>

      <!-- Product details -->
      <div
        class="mx-auto mt-14 max-w-2xl sm:mt-16 lg:col-span-3 lg:row-span-2 lg:row-end-2 lg:mt-0 lg:max-w-none"
      >
        <div class="flex flex-col-reverse">
          <div class="mt-4">
            <label id="listbox-label" class="block text-sm font-medium leading-6 text-gray-300">Przeznaczenie*</label>
            <div class="relative my-2">
              <button onclick="openFilter('filtr1')" class="relative w-full cursor-default rounded-md bg-[#0e0e0e] focus:text-white py-1.5 pl-3 pr-10 text-left text-gray-400 shadow-sm ring-1 ring-inset ring-[#3d3d3d] focus:outline-none focus:ring-2 theme-ring-focus sm:text-sm sm:leading-6">
                <span id="selectedfiltr1" class="block truncate capitalize">Wybierz</span>
                <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                  <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
                  </svg>
                </span>
              </button>
              <ul id="filtr1" class="hidden absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-[#1c1c1c] py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">
                <li class="text-gray-300 hover:bg-black/30 relative cursor-default select-none py-2 pl-3 pr-9" role="option">
                  <span class="font-normal block truncate capitalize">Wszyscy</span>
                  <span class="theme-text absolute inset-y-0 right-0 flex items-center pr-4">
                    <svg class="hidden h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                    </svg>
                  </span>
                </li>
                <li class="text-gray-300 hover:bg-black/30 relative cursor-default select-none py-2 pl-3 pr-9" role="option">
                  <span class="font-normal block truncate capitalize">Informatycy</span>
                  <span class="theme-text absolute inset-y-0 right-0 flex items-center pr-4">
                    <svg class="hidden h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                    </svg>
                  </span>
                </li>
                <li class="text-gray-300 hover:bg-black/30 relative cursor-default select-none py-2 pl-3 pr-9" role="option">
                  <span class="font-normal block truncate capitalize">Programiści</span>
                  <span class="theme-text absolute inset-y-0 right-0 flex items-center pr-4">
                    <svg class="hidden h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                    </svg>
                  </span>
                </li>
              </ul>
            </div>
            <article title="Tytul" class="editable text-2xl font-bold tracking-tight text-gray-200 sm:text-3xl hover:cursor-pointer hover:outline-2 hover:outline-dashed hover:outline-[var(--text)]"><h1>Wielki Turniej CS:GO Szanajcy</h1></article>

            <h2 id="information-heading" class="sr-only">
              Product information
            </h2>
            <article title="Edycja" class="editable mt-2 text-sm text-gray-500 hover:cursor-pointer hover:outline-2 hover:outline-dashed hover:outline-[var(--text)]"><p>Edycja pierwsza (Zaktualizowano Listopad 27, 2023)</p></article>
          </div>
        </div>
        <article title="Opis" class="editable mt-6 text-gray-400 hover:cursor-pointer hover:outline-2 hover:outline-dashed hover:outline-[var(--text)]"><p>Jest to pierwsza edycja turnieju w grę Counter Strike: Global Offensive w naszej szkole!Zawodnicy będą rywalizować o tytuł najlepszej drużyny w szkole przy tym propagować ducha fair play i dobrej zabawy.</p></article>
        <div  class="mt-10 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-2">
          <a type="button" class="cursor-pointer flex w-full items-center justify-center rounded-md theme-bg theme-bg-hover px-8 py-3 text-base duration-150 font-medium text-white">Zapisz się
          </a>
          <a
            id="shareButton"
            onclick="copyButton('localhost/turniej.php?id=1')"
            type="button"
            class="cursor-pointer flex w-full items-center justify-center rounded-md border border-transparent theme-bg-hover theme-text duration-150 hover:!text-white bg-indigo-50 px-8 py-3 text-base font-medium"
          >
            Udostępnij
          </a>
        </div>
        <!-- model rozgrywek -->
        <div class="mt-10 border-t border-[#3d3d3d] pt-10 relative">
          <h3 class="text-sm font-medium text-gray-300">Model rozgrywek</h3>
          <article title="Model" class="editable mt-4 text-sm text-gray-400 hover:cursor-pointer hover:outline-2 hover:outline-dashed hover:outline-[var(--text)]"><p>Gra będzie się toczyć w 3 fazach:</p><p></br></p><p>- faza grupowa - zdalnie</p><p></br></p><p>- drabinka szwecka - zdalnie</p><p></br></p><p>- finały - stacjonarnie</p></article>
          <div class="absolute right-0 top-5">
              <label class="relative inline-flex items-center cursor-pointer">
              <input type="checkbox" value="" class="sr-only peer hidden" checked onchange="document.querySelectorAll('.editable')[4].classList.toggle('hidden');">
                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:theme-text dark:peer-focus:theme-text dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[var(--text)]"></div>
            </label>
          </div>
        </div>
        <!-- terminy -->
        <div class="mt-10 border-t border-[#3d3d3d] pt-10 relative">
          <h3 class="text-sm font-medium text-gray-300">Terminy</h3>
          <article title="Terminy" class="editable mt-4 text-sm text-gray-400 hover:cursor-pointer hover:outline-2 hover:outline-dashed hover:outline-[var(--text)]"><p>Zgłoszenia są przyjmowane do <span style="color:var(--text)">31 grudnia 2023</span>.</p><p><br /></p><p>Faza grupowa rozpocznie się <span style="color:var(--text)">1 stycznia 2024</span>, będzie trwać przezkolejne 2 tygodnie.</p><p><br ></p><p>Drabinka szwecka rozpocznie się <span style="color:var(--text)">15 stycznia 2024</span>, będzie trwać przezkolejne 2 tygodnie.</p><p><br /></p><p>Finał odbędzie się dnia <span style="color:var(--text)">2 lutego 2024</span> roku podczas dniainformatyka.</p></article>
          <div class="absolute right-0 top-5">
              <label class="relative inline-flex items-center cursor-pointer">
              <input type="checkbox" value="" class="sr-only peer hidden" checked onchange="document.querySelectorAll('.editable')[5].classList.toggle('hidden');">
                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:theme-text dark:peer-focus:theme-text dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[var(--text)]"></div>
            </label>
          </div>
        </div>
        <!-- nagrody -->
         <div class="mt-10 border-t border-[#3d3d3d] pt-10 relative">
          <h3 class="text-sm font-medium text-gray-300">Nagrody</h3>
          <article title="Nagrody" class="editable mt-4 text-sm text-gray-400 hover:cursor-pointer hover:outline-2 hover:outline-dashed hover:outline-[var(--text)]"><p>co XD</p></article>
          <div class="absolute right-0 top-5">
              <label class="relative inline-flex items-center cursor-pointer">
              <input type="checkbox" value="" class="sr-only peer hidden" checked onchange="document.querySelectorAll('.editable')[6].classList.toggle('hidden');">
                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:theme-text dark:peer-focus:theme-text dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[var(--text)]"></div>
            </label>
          </div>
        </div>
        <!-- drużyny -->
        <div class="mt-10 border-t border-[#3d3d3d] pt-10 relative">
          <h3 class="text-sm font-medium text-gray-300">Drużyny</h3>
          <article title="Druzyny" class="editable mt-4 text-sm text-gray-400 hover:cursor-pointer hover:outline-2 hover:outline-dashed hover:outline-[var(--text)]"><p>Organizator przewiduje maksymalnie dwie drużyny z jednej klasy.</p><p><br /></p><p>W drużynie może być maksymalnie<span style="color:var(--text)">5 osób</span> oraz może być rezerwowy.</p></article>
          <div class="absolute right-0 top-5">
              <label class="relative inline-flex items-center cursor-pointer">
              <input type="checkbox" value="" class="sr-only peer hidden" checked onchange="document.querySelectorAll('.editable')[7].classList.toggle('hidden');">
                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:theme-text dark:peer-focus:theme-text dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[var(--text)]"></div>
            </label>
          </div>
        </div>
        <!-- wymogi -->
        <div class="mt-10 border-t border-[#3d3d3d] pt-10 relative">
          <h3 class="text-sm font-medium text-gray-300">Wymogi</h3>
          <article title="Wymogi" class="editable mt-4 text-sm text-gray-400 hover:cursor-pointer hover:outline-2 hover:outline-dashed hover:outline-[var(--text)]"><p>- Oryginalna licencja gry CS:GO</p><p>- Komputer z dostępem do internetu</p><p>- Konta: steam oraz discord</p><p>- Zgoda na przetwarzanie danych osobowych</p></article>
          <div class="absolute right-0 top-5">
              <label class="relative inline-flex items-center cursor-pointer">
              <input type="checkbox" value="" class="sr-only peer hidden" checked onchange="document.querySelectorAll('.editable')[8].classList.toggle('hidden');">
                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:theme-text dark:peer-focus:theme-text dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[var(--text)]"></div>
            </label>
          </div>
        </div>
        <!-- zapisy -->
        <div class="mt-10 border-t border-[#3d3d3d] pt-10 relative">
          <h3 class="text-sm font-medium text-gray-300">Zapisy</h3>
          <article title="Zapisy" class="editable mt-4 text-sm text-gray-400 hover:cursor-pointer hover:outline-2 hover:outline-dashed hover:outline-[var(--text)]"><p>For personal and professional use. You cannot resell or redistributethese icons in their original or modified state.</p></article>
          <div class="absolute right-0 top-5">
              <label class="relative inline-flex items-center cursor-pointer">
              <input type="checkbox" value="" class="sr-only peer hidden" checked onchange="document.querySelectorAll('.editable')[9].classList.toggle('hidden');">
                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:theme-text dark:peer-focus:theme-text dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[var(--text)]"></div>
            </label>
          </div>
        </div>
        <!-- udostępnij -->
        <div class="mt-10 border-t border-[#3d3d3d] pt-10">
          <h3 class="text-sm font-medium text-gray-300">Udostępnij</h3>
          <ul role="list" class="mt-4 flex items-center space-x-6">
            <li>
              <a
                href="#"
                class="flex h-6 w-6 items-center justify-center text-gray-400 hover:text-gray-500"
              >
                <span class="sr-only">Share on Facebook</span>
                <svg
                  class="h-5 w-5"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z"
                    clip-rule="evenodd"
                  />
                </svg>
              </a>
            </li>
            <li>
              <a
                href="#"
                class="flex h-6 w-6 items-center justify-center text-gray-400 hover:text-gray-500"
              >
                <span class="sr-only">Share on Instagram</span>
                <svg
                  class="h-6 w-6"
                  fill="currentColor"
                  viewBox="0 0 24 24"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                    clip-rule="evenodd"
                  />
                </svg>
              </a>
            </li>
            <li>
              <a
                href="#"
                class="flex h-6 w-6 items-center justify-center text-gray-400 hover:text-gray-500"
              >
                <span class="sr-only">Share on Twitter</span>
                <svg
                  class="h-5 w-5"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  aria-hidden="true"
                >
                  <path
                    d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"
                  />
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div
        class="mx-auto mt-16 w-full max-w-2xl lg:col-span-4 lg:mt-0 lg:max-w-none"
      >
        <div>
          <!-- subnawigacja -->
          <div style="overflow-x: auto; overflow-y: hidden;" class="border-b border-[#3d3d3d]">
            <div
              class="-mb-px flex space-x-8"
              aria-orientation="horizontal"
              role="tablist"
            >
              <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-700 hover:border-gray-300 hover:text-gray-800" -->
              <button
                id="btn_wyniki"
                class="duration-150 events-button theme-text text-gray-300 hover:border-gray-300 theme-border theme-text-hover whitespace-nowrap border-b-2 py-6 text-sm font-medium"
                onclick="openTab('wyniki')"
                type="button"
              >
                Wyniki
              </button>
              <button
                id="btn_harmonogram"
                class="duration-150 events-button border-transparent text-gray-300 hover:border-gray-300 theme-border theme-text-hover whitespace-nowrap border-b-2 py-6 text-sm font-medium"
                onclick="openTab('harmonogram')"
                type="button"
              >
                Harmonogram
              </button>
              <button
                id="btn_druzyny"
                class="duration-150 events-button border-transparent text-gray-300 hover:border-gray-300 theme-border theme-text-hover whitespace-nowrap border-b-2 py-6 text-sm font-medium"
                onclick="openTab('druzyny')"
                type="button"
              >
                Drużyny
              </button>
              <button
                id="btn_info"
                class="duration-150 events-button border-transparent text-gray-300 hover:border-gray-300 theme-border theme-text-hover whitespace-nowrap border-b-2 py-6 text-sm font-medium"
                onclick="openTab('info')"
                type="button"
              >
                Informacje
              </button>
            </div>
          </div>

          <!-- 'Customer Reviews' panel, show/hide based on tab state -->
          <div
            id="wyniki"
            class="-mb-10 tab"
          >
            <h3 class="sr-only">Aktualne wyniki</h3>

            <div class="flex space-x-4 text-sm text-gray-500">
              <div class="flex-none py-10">
                <img
                  src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80"
                  alt=""
                  class="h-10 w-10 rounded-full bg-gray-100"
                />
              </div>
              <div class="py-10">
                <h3 class="font-medium text-gray-900">Emily Selman</h3>
                <p><time datetime="2021-07-16">July 16, 2021</time></p>

                <div class="mt-4 flex items-center">
                  <!-- Active: "text-yellow-400", Default: "text-gray-300" -->
                  <svg
                    class="text-yellow-400 h-5 w-5 flex-shrink-0"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <svg
                    class="text-yellow-400 h-5 w-5 flex-shrink-0"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <svg
                    class="text-yellow-400 h-5 w-5 flex-shrink-0"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <svg
                    class="text-yellow-400 h-5 w-5 flex-shrink-0"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <svg
                    class="text-yellow-400 h-5 w-5 flex-shrink-0"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </div>
                <p class="sr-only">5 out of 5 stars</p>

                <div class="prose prose-sm mt-4 max-w-none text-gray-500">
                  <p>
                    This icon pack is just what I need for my latest project.
                    There's an icon for just about anything I could ever need.
                    Love the playful look!
                  </p>
                </div>
              </div>
            </div>
            <div class="flex space-x-4 text-sm text-gray-500">
              <div class="flex-none py-10">
                <img
                  src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80"
                  alt=""
                  class="h-10 w-10 rounded-full bg-gray-100"
                />
              </div>
              <div class="py-10 border-t border-gray-200">
                <h3 class="font-medium text-gray-900">Hector Gibbons</h3>
                <p><time datetime="2021-07-12">July 12, 2021</time></p>

                <div class="mt-4 flex items-center">
                  <!-- Active: "text-yellow-400", Default: "text-gray-300" -->
                  <svg
                    class="text-yellow-400 h-5 w-5 flex-shrink-0"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <svg
                    class="text-yellow-400 h-5 w-5 flex-shrink-0"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <svg
                    class="text-yellow-400 h-5 w-5 flex-shrink-0"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <svg
                    class="text-yellow-400 h-5 w-5 flex-shrink-0"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <svg
                    class="text-yellow-400 h-5 w-5 flex-shrink-0"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </div>
                <p class="sr-only">5 out of 5 stars</p>

                <div class="prose prose-sm mt-4 max-w-none text-gray-500">
                  <p>
                    Blown away by how polished this icon pack is. Everything
                    looks so consistent and each SVG is optimized out of the box
                    so I can use it directly with confidence. It would take me
                    several hours to create a single icon this good, so it's a
                    steal at this price.
                  </p>
                </div>
              </div>
            </div>

            <!-- More reviews... -->
          </div>

          <!-- 'FAQ' panel, show/hide based on tab state -->
          <div
            id="harmonogram"
            class="text-sm text-gray-500 tab hidden"
          >
           <div class="flow-root py-10">
              <ul role="list" class="-mb-8">
                <li>
                  <div class="relative pb-8">
                    <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-[#3d3d3d]" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                      <div>
                        <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-[#0e0e0e]">
                          <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                            <path fill-rule="evenodd" d="M3 2.25a.75.75 0 01.75.75v.54l1.838-.46a9.75 9.75 0 016.725.738l.108.054a8.25 8.25 0 005.58.652l3.109-.732a.75.75 0 01.917.81 47.784 47.784 0 00.005 10.337.75.75 0 01-.574.812l-3.114.733a9.75 9.75 0 01-6.594-.77l-.108-.054a8.25 8.25 0 00-5.69-.625l-2.202.55V21a.75.75 0 01-1.5 0V3A.75.75 0 013 2.25z" clip-rule="evenodd" />
                          </svg> -->
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                            <path fill-rule="evenodd" d="M17.663 3.118c.225.015.45.032.673.05C19.876 3.298 21 4.604 21 6.109v9.642a3 3 0 01-3 3V16.5c0-5.922-4.576-10.775-10.384-11.217.324-1.132 1.3-2.01 2.548-2.114.224-.019.448-.036.673-.051A3 3 0 0113.5 1.5H15a3 3 0 012.663 1.618zM12 4.5A1.5 1.5 0 0113.5 3H15a1.5 1.5 0 011.5 1.5H12z" clip-rule="evenodd" />
                            <path d="M3 8.625c0-1.036.84-1.875 1.875-1.875h.375A3.75 3.75 0 019 10.5v1.875c0 1.036.84 1.875 1.875 1.875h1.875A3.75 3.75 0 0116.5 18v2.625c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625v-12z" />
                            <path d="M10.5 10.5a5.23 5.23 0 00-1.279-3.434 9.768 9.768 0 016.963 6.963 5.23 5.23 0 00-3.434-1.279h-1.875a.375.375 0 01-.375-.375V10.5z" />
                          </svg>
                        </span>
                      </div>
                      <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                        <div>
                          <p class="text-sm text-gray-500">Rozpoczęcie zapisów do <span class="theme-text">fazy grupowej</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-20">1 grudzień</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="relative pb-8">
                    <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-[#3d3d3d]" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                      <div>
                        <span class="h-8 w-8 rounded-full bg-red-500 flex items-center justify-center ring-8 ring-[#0e0e0e]">
                          <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                            <path fill-rule="evenodd" d="M3 2.25a.75.75 0 01.75.75v.54l1.838-.46a9.75 9.75 0 016.725.738l.108.054a8.25 8.25 0 005.58.652l3.109-.732a.75.75 0 01.917.81 47.784 47.784 0 00.005 10.337.75.75 0 01-.574.812l-3.114.733a9.75 9.75 0 01-6.594-.77l-.108-.054a8.25 8.25 0 00-5.69-.625l-2.202.55V21a.75.75 0 01-1.5 0V3A.75.75 0 013 2.25z" clip-rule="evenodd" />
                          </svg> -->
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                            <path fill-rule="evenodd" d="M17.663 3.118c.225.015.45.032.673.05C19.876 3.298 21 4.604 21 6.109v9.642a3 3 0 01-3 3V16.5c0-5.922-4.576-10.775-10.384-11.217.324-1.132 1.3-2.01 2.548-2.114.224-.019.448-.036.673-.051A3 3 0 0113.5 1.5H15a3 3 0 012.663 1.618zM12 4.5A1.5 1.5 0 0113.5 3H15a1.5 1.5 0 011.5 1.5H12z" clip-rule="evenodd" />
                            <path d="M3 8.625c0-1.036.84-1.875 1.875-1.875h.375A3.75 3.75 0 019 10.5v1.875c0 1.036.84 1.875 1.875 1.875h1.875A3.75 3.75 0 0116.5 18v2.625c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625v-12z" />
                            <path d="M10.5 10.5a5.23 5.23 0 00-1.279-3.434 9.768 9.768 0 016.963 6.963 5.23 5.23 0 00-3.434-1.279h-1.875a.375.375 0 01-.375-.375V10.5z" />
                          </svg>

                        </span>
                      </div>
                      <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                        <div>
                          <p class="text-sm text-gray-500">Zakończenie zapisów do <span class="theme-text">fazy grupowej</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-22">31 grudzień</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="relative pb-8">
                    <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-[#3d3d3d]" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                      <div>
                        <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-[#0e0e0e]">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                            <path fill-rule="evenodd" d="M3 2.25a.75.75 0 01.75.75v.54l1.838-.46a9.75 9.75 0 016.725.738l.108.054a8.25 8.25 0 005.58.652l3.109-.732a.75.75 0 01.917.81 47.784 47.784 0 00.005 10.337.75.75 0 01-.574.812l-3.114.733a9.75 9.75 0 01-6.594-.77l-.108-.054a8.25 8.25 0 00-5.69-.625l-2.202.55V21a.75.75 0 01-1.5 0V3A.75.75 0 013 2.25z" clip-rule="evenodd" />
                          </svg> 
                        </span>
                      </div>
                      <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                        <div>
                          <p class="text-sm text-gray-500">Start <span class="theme-text">fazy grupowej</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-28">1 styczeń</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                  <!-- aktulanie -->
                <li>
                  <div class="relative pb-8">
                    <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-[#3d3d3d]" aria-hidden="true"></span>
                    <div class="relative flex space-x-3 border-b theme-border ml-4">
                      <div>
                      </div>
                      <div class="flex min-w-0 flex-1 justify-between space-x-4">
                        <div></div>
                        <div class="whitespace-nowrap text-right text-xs font-medium theme-text italic uppercase">
                          <time datetime="2020-09-30">Aktualnie</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                
                <li>
                  <div class="relative pb-8">
                    <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-[#3d3d3d]" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                      <div>
                        <span class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center ring-8 ring-[#0e0e0e]">

                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                            <path fill-rule="evenodd" d="M4.5 5.653c0-1.426 1.529-2.33 2.779-1.643l11.54 6.348c1.295.712 1.295 2.573 0 3.285L7.28 19.991c-1.25.687-2.779-.217-2.779-1.643V5.653z" clip-rule="evenodd" />
                          </svg>

                        </span>
                      </div>
                      <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                        <div>
                          <p class="text-sm text-gray-500">Maciek <span class="text-gray-600 text-xs">5pi</span> vs Własny Cień <span class="text-gray-600 text-xs">5pi</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">10:30  1 sierpień</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="relative pb-8">
                    <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-[#3d3d3d]" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                      <div>
                        <span class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center ring-8 ring-[#0e0e0e]">

                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                            <path fill-rule="evenodd" d="M4.5 5.653c0-1.426 1.529-2.33 2.779-1.643l11.54 6.348c1.295.712 1.295 2.573 0 3.285L7.28 19.991c-1.25.687-2.779-.217-2.779-1.643V5.653z" clip-rule="evenodd" />
                          </svg>

                        </span>
                      </div>
                      <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                        <div>
                          <p class="text-sm text-gray-500">Maciek <span class="text-gray-600 text-xs">5pi</span> vs Własny Cień <span class="text-gray-600 text-xs">5pi</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">10:30  1 sierpień</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="relative pb-8">
                    <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-[#3d3d3d]" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                      <div>
                        <span class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center ring-8 ring-[#0e0e0e]">

                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                            <path fill-rule="evenodd" d="M4.5 5.653c0-1.426 1.529-2.33 2.779-1.643l11.54 6.348c1.295.712 1.295 2.573 0 3.285L7.28 19.991c-1.25.687-2.779-.217-2.779-1.643V5.653z" clip-rule="evenodd" />
                          </svg>

                        </span>
                      </div>
                      <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                        <div>
                          <p class="text-sm text-gray-500">Maciek <span class="text-gray-600 text-xs">5pi</span> vs Własny Cień <span class="text-gray-600 text-xs">5pi</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">10:30  1 sierpień</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="relative pb-8">
                    <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-[#3d3d3d]" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                      <div>
                        <span class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center ring-8 ring-[#0e0e0e]">

                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                            <path fill-rule="evenodd" d="M4.5 5.653c0-1.426 1.529-2.33 2.779-1.643l11.54 6.348c1.295.712 1.295 2.573 0 3.285L7.28 19.991c-1.25.687-2.779-.217-2.779-1.643V5.653z" clip-rule="evenodd" />
                          </svg>

                        </span>
                      </div>
                      <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                        <div>
                          <p class="text-sm text-gray-500">Maciek <span class="text-gray-600 text-xs">5pi</span> vs Własny Cień <span class="text-gray-600 text-xs">5pi</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">10:30  1 sierpień</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="relative pb-8">
                    <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-[#3d3d3d]" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                      <div>
                        <span class="h-8 w-8 rounded-full bg-red-500 flex items-center justify-center ring-8 ring-[#0e0e0e]">

                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                            <path fill-rule="evenodd" d="M3 2.25a.75.75 0 01.75.75v.54l1.838-.46a9.75 9.75 0 016.725.738l.108.054a8.25 8.25 0 005.58.652l3.109-.732a.75.75 0 01.917.81 47.784 47.784 0 00.005 10.337.75.75 0 01-.574.812l-3.114.733a9.75 9.75 0 01-6.594-.77l-.108-.054a8.25 8.25 0 00-5.69-.625l-2.202.55V21a.75.75 0 01-1.5 0V3A.75.75 0 013 2.25z" clip-rule="evenodd" />
                          </svg> 

                        </span>
                      </div>
                      <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                        <div>
                          <p class="text-sm text-gray-500">Koniec <span class="theme-text">fazy grupowej</p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">20 styczeń</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="relative pb-8">
                    <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-[#3d3d3d]" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                      <div>
                        <span class="h-8 w-8 rounded-full bg-purple-600 flex items-center justify-center ring-8 ring-[#0e0e0e]">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                            <path d="M4.5 4.5a3 3 0 00-3 3v9a3 3 0 003 3h8.25a3 3 0 003-3v-9a3 3 0 00-3-3H4.5zM19.94 18.75l-2.69-2.69V7.94l2.69-2.69c.944-.945 2.56-.276 2.56 1.06v11.38c0 1.336-1.616 2.005-2.56 1.06z" />
                          </svg>
                        </span>
                      </div>
                      <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                        <div>
                          <p class="text-sm text-gray-500">Transmisja na żywo <a href="" target="_blank" class="text-gray-600 text-xs theme-text-hover duration-150">twitch.tv/zs14</a></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">8:00 2 luteń</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="relative pb-8">
                    <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-[#3d3d3d]" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                      <div>
                        <span class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center ring-8 ring-[#0e0e0e]">

                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                            <path fill-rule="evenodd" d="M4.5 5.653c0-1.426 1.529-2.33 2.779-1.643l11.54 6.348c1.295.712 1.295 2.573 0 3.285L7.28 19.991c-1.25.687-2.779-.217-2.779-1.643V5.653z" clip-rule="evenodd" />
                          </svg>

                        </span>
                      </div>
                      <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                        <div>
                          <p class="text-sm text-gray-500"><span class="theme-text">Finał</span> - Essa byq <span class="text-gray-600 text-xs">5pi</span> vs Ostry Cień Mgły <span class="text-gray-600 text-xs">5pi</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">8:00 2 luteń</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="relative pb-8">
                    <div class="relative flex space-x-3">
                      <div>
                        <span class="h-8 w-8 rounded-full bg-yellow-500 flex items-center justify-center ring-8 ring-[#0e0e0e]">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-white">
                            <path fill-rule="evenodd" d="M5.166 2.621v.858c-1.035.148-2.059.33-3.071.543a.75.75 0 00-.584.859 6.753 6.753 0 006.138 5.6 6.73 6.73 0 002.743 1.346A6.707 6.707 0 019.279 15H8.54c-1.036 0-1.875.84-1.875 1.875V19.5h-.75a2.25 2.25 0 00-2.25 2.25c0 .414.336.75.75.75h15a.75.75 0 00.75-.75 2.25 2.25 0 00-2.25-2.25h-.75v-2.625c0-1.036-.84-1.875-1.875-1.875h-.739a6.706 6.706 0 01-1.112-3.173 6.73 6.73 0 002.743-1.347 6.753 6.753 0 006.139-5.6.75.75 0 00-.585-.858 47.077 47.077 0 00-3.07-.543V2.62a.75.75 0 00-.658-.744 49.22 49.22 0 00-6.093-.377c-2.063 0-4.096.128-6.093.377a.75.75 0 00-.657.744zm0 2.629c0 1.196.312 2.32.857 3.294A5.266 5.266 0 013.16 5.337a45.6 45.6 0 012.006-.343v.256zm13.5 0v-.256c.674.1 1.343.214 2.006.343a5.265 5.265 0 01-2.863 3.207 6.72 6.72 0 00.857-3.294z" clip-rule="evenodd" />
                          </svg>


                        </span>
                      </div>
                      <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                        <div>
                          <p class="text-sm text-gray-500">Ogłoszenie wyników</p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-10-04">12:00 2 luteń</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>

          </div>

          <!-- 'License' panel, show/hide based on tab state -->
          <div
            id="druzyny"
            class="pt-10 tab hidden"
          >
            <h3 class="sr-only">License</h3>

            <div class="prose prose-sm max-w-none text-gray-500">
              <h3 class="font-medium text-gray-300">
                Zakwalifikowane drużyny
              </h3>
              <p class="py-2 text-sm">
                Dane aktualizowane są na bieżąco, wszystkie zgłoszone drużyny pojawią się w ciągu 48 godzin od zakończenia zapisów.
              </p>
              <div class="px-2 my-4 w-full">
                <table class="w-full">
                  <tr class="border-t border-[#1c1c1c]">
                    <td class="py-3">
                      <h3 class="text-sm text-gray-400">Boty z 5pi <span class="text-xs text-gray-600">5pi</span> </h3>
                    </td>
                    <td>
                      <div class="tooltip text-gray-600 theme-text-hover">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3" stroke="currentColor" class="icon w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                          </svg>
                          <span class="tooltip-text">Kapitan: discorduser#2137</span>
                      </div>
                    </td>
                    <td class="py-3 h-full flex items-center justify-center gap-2 text-gray-600">
                      <p class="text-sm">6/6</p>
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                      </svg>
                    </td>
                  </tr>

                  <tr class="border-t border-[#1c1c1c]">
                    <td class="py-3">
                      <h3 class="text-sm text-gray-400">Killerek za 5 robi <span class="text-xs text-gray-600">5pi</span> </h3>
                    </td>
                    <td>
                      <div class="tooltip text-gray-600 theme-text-hover">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3" stroke="currentColor" class="icon w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                          </svg>
                          <span class="tooltip-text">Kapitan: killerek#420</span>
                      </div>
                    </td>
                    <td class="py-3 h-full flex items-center justify-center gap-2 text-gray-600">
                      <p class="text-sm">6/6</p>
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                      </svg>
                    </td>
                  </tr>

                  <tr class="border-t border-[#1c1c1c]">
                    <td class="py-3">
                      <h3 class="text-sm text-gray-400">Essy <span class="text-xs text-gray-600">5pi</span> </h3>
                    </td>
                    <td>
                      <div class="tooltip text-gray-600 theme-text-hover">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3" stroke="currentColor" class="icon w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                          </svg>
                          <span class="tooltip-text">Kapitan: dkillerekToBotMordoTakJużJest#123456789</span>
                      </div>
                    </td>
                    <td class="py-3 h-full flex items-center justify-center gap-2 text-gray-600">
                      <p class="text-sm">6/6</p>
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                      </svg>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>

          <div
            id="info"
            class="text-sm text-gray-500 tab hidden"
          >
            <h3 class="sr-only">Frequently Asked Questions</h3>

            <dl>
              <dt class="mt-10 font-medium text-gray-300 text-md">
                Faza grupowa
              </dt>
              <dd class="prose prose-sm mt-2 max-w-none text-gray-500">
                <p>
                  Po wylosowaniu grup kapitanowie drużyn wyznaczonych do rozgrywek odpowiedzialni są za ustalenie dogodnego terminu dla dwóch drużyn.
                  <br><br>
                  W przypadku braku możliwości ustalenia terminu, organizatorzy ustalają termin spotkania, które jeśli się nie odbędzie zostanie uznane za przegrane przez obie strony.
                  <br><br>
                  Zawodnicy zobowiązani są do zgłaszania wyników spotkań do organizatorów.
                  <br><br>
                  Mecz rozgrywany jest do 2 wygranych map, komunikacja powinna odbywać się za pomocą naszego <a href="" class="theme-text">Discorda</a>.
                </p>
              </dd>
              <dt class="mt-10 font-medium text-gray-300">
                Drabinka szwedzka
              </dt>
              <dd class="prose prose-sm mt-2 max-w-none text-gray-500">
                <p>
                  Yes. The icons are drawn on a 24 x 24 pixel grid, but the
                  icons can be scaled to different sizes as needed. We
                  don&#039;t recommend going smaller than 20 x 20 or larger than
                  64 x 64 to retain legibility and visual balance.
                </p>
              </dd>
              <dt class="mt-10 font-medium text-gray-300">
                Faza pucharowa
              </dt>
              <dd class="prose prose-sm mt-2 max-w-none text-gray-500">
                <p>
                  Yes. The icons are drawn on a 24 x 24 pixel grid, but the
                  icons can be scaled to different sizes as needed. We
                  don&#039;t recommend going smaller than 20 x 20 or larger than
                  64 x 64 to retain legibility and visual balance.
                </p>
              </dd>
              <br> <br>
              <p>
                Organizator zastrzega sobie prawo do odwołania turnieju w przypadku braku drużyn.
                <br /><br />
                Organizator jest uprawniony do dyskwalifikacji drużyny lub zawodnika w przypadku złamania regulaminu.
                
              </p>

              <!-- More FAQs... -->
            </dl>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<section id="popupEventBg" class="fixed z-[50] h-0 opacity-0 top-0 left-0 w-full h-full bg-[#0000009e] transition-opacity duration-300"></section>
  <section id="popupEvent" onclick="popupEventOpenClose()" class="z-[60] fixed scale-0 top-0 left-0 w-full h-full">
    <div class="flex items-center justify-center w-full h-full px-2">
      <div onclick="event.cancelBubble=true;" class="bg-[#0e0e0e] md:min-w-[800px] md:w-auto w-full max-w-[800px] max-h-[80vh] overflow-y-auto flex md:flex-row flex-col gap-4 rounded-2xl py-6 sm:px-6  -xl">
        <div id="popupEventItself" class="flex h-auto w-full justify-between flex-col">
          <div class="w-full flex justify-between items-center sm:hidden">
            <span>  </span>
              <a onclick="popupEventOpenClose()" class="-mt-2 pb-3 flex items-center space-x-2 text-gray-500 hover:text-red-600 transition-all duration-500">
                  <p class="uppercase font-medium text-xs">zamknij</p>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
              </a>
          </div>                        
            <div id="pupupEventOutput"></div>
        </div>
      </div>
    </div>
  </section>
  <script>
    localStorage.setItem('EventTempSettings', JSON.stringify(EventTempSettings));
    var editables = document.querySelectorAll('.editable');
    // forWhat = document.getElementById('forIn').value;
    // var resultOfStorage = localStorage.getItem('EventTempSettings')
    // quill.root.innerHTML = JSON.parse(resultOfStorage)[forWhat];
    // alert(forWhat);
    var resultOfStorage = localStorage.getItem('EventTempSettings')
    // console.log('EventTempSettings: ', JSON.parse(resultOfStorage));
  </script>
  <script>
    var eventPhotoContainer = document.querySelector('.eventPhotoContainer');
    function dragenterInner(){
      eventPhotoContainer.classList.add('outline-4');
      eventPhotoContainer.classList.add('outline-dashed');
      eventPhotoContainer.classList.add('outline-[var(--text)]');
    }
    function dragleaveInner(){
      eventPhotoContainer.classList.remove('outline-4');
      eventPhotoContainer.classList.remove('outline-dashed');
      eventPhotoContainer.classList.remove('outline-[var(--text)]');
    }
    function takePhotoFromInput(xd){
      fileTypeMy = xd.type.slice(xd.type.indexOf('/')+1,xd.type.length);
      if((fileTypeMy == 'png' && xd.size < 5000000) || (fileTypeMy == 'jpeg' && xd.size < 5000000) || (fileTypeMy == 'gif' && xd.size < 5000000)){
        const reader = new FileReader();
        reader.onloadend = function() {
            //ustawienie dla wszystkich img o id popup_img_inpt src
            for (let i = 0; i < document.querySelectorAll(`#eventPhotoInput`).length; i++) {
                document.querySelectorAll(`#eventPhotoInput`)[i].src = reader.result;
                var resultOfStorage = localStorage.getItem('EventTempSettings')
                EventTempSettings['eventPhoto'] = reader.result;
                localStorage.setItem('EventTempSettings', JSON.stringify(EventTempSettings));
                // resultOfStorage = localStorage.getItem('EventTempSettings')
                // console.log('EventTempSettings: ', JSON.parse(resultOfStorage));
            }
        }
        if (xd) {
            reader.readAsDataURL(xd);
        } else {
            document.getElementById(`eventPhotoInput`).src = "";
        }
      } else{
        alert('Niedozwolone rozszerzenie pliku lub plik jest za duży')
      }
    }
    eventPhotoContainer.addEventListener('dragenter', ()=>{
      dragenterInner();
    })
    eventPhotoContainer.addEventListener('dragleave', ()=>{
      dragleaveInner()
    })
    function dragOverHandler(ev) {
      // console.log("File(s) in drop zone");

      // Prevent default behavior (Prevent file from being opened)
      ev.preventDefault();
    }
    function dropHandler(ev) {
      // console.log("File(s) dropped");

      // Prevent default behavior (Prevent file from being opened)
      ev.preventDefault();

      if (ev.dataTransfer.items) {
        // Use DataTransferItemList interface to access the file(s)
        [...ev.dataTransfer.items].forEach((item, i) => {
          // If dropped items aren't files, reject them
          if (item.kind === "file") {
            const file = item.getAsFile();
            takePhotoFromInput(file);
            // console.log(`… file[${i}].name = ${file.name}`);
            dragleaveInner();
          }
        });
      } else {
        // Use DataTransfer interface to access the file(s)
        [...ev.dataTransfer.files].forEach((file, i) => {
          // console.log(`… file[${i}].name = ${file.name}`);
        });
      }
    }
    function chooseNewPhoto(){
      var newPhotoInput = document.getElementById('eventPhoto');
      newPhotoInput.click();
    }
    function imgPrev() {
        const file = document.getElementById(`eventPhoto`).files[0];
        takePhotoFromInput(file);
    }
  </script>
  <script>
    function fromLocalStorageToDraft(){
      var resultOfStorage = localStorage.getItem('EventTempSettings');
      var eventPhotoPrev = document.querySelector('#eventPhotoInput');
        var cossss = JSON.parse(resultOfStorage);
          for(let g=0; g<editables.length;g++){
            for(let d=0; d<Object.keys(cossss).length;d++)
              if(editables[g].title == Object.keys(cossss)[d] && Object.keys(cossss)[d]){
                if(editables[g].title == 'eventPhoto'){
                  eventPhotoPrev.src = cossss[Object.keys(cossss)[d]];
                } else{
                  editables[g].innerHTML = cossss[Object.keys(cossss)[d]];
                }
                
            }
          }
    }

    fromLocalStorageToDraft();

    var editables = document.querySelectorAll('.editable');
    // editables.forEach((e,index)=>{
    //   e.addEventListener('click', ()=>{
    //     openPopupEvent(index)
    //   });
    for(let s = 1; s<editables.length; s++){
        editables[s].addEventListener('click', ()=>{
          openPopupEvent(s)
        })
    }
    // })
    function popupEventOpenClose() {
        var editables = document.querySelectorAll('.editable');
        var popup = document.getElementById("popupEvent")
        var popupBg = document.getElementById("popupEventBg")
        popupBg.classList.toggle("opacity-0")
        popupBg.classList.toggle("h-0")
        popup.classList.toggle("scale-0")
        popup.classList.add("duration-200")
        fromLocalStorageToDraft();
    }
    function openPopupEvent(id){
        var popupEventOutput = document.getElementById("pupupEventOutput");
        popupEventOutput.innerHTML =  "<div class='flex justify-center items-center'><div class='flex flex-col justify-center items-center'><div class='animate-spin rounded-full h-32 w-32 border-t-2 border-b-2 border-gray-900'></div><div class='text-white text-xl font-semibold mt-4'>Ładowanie...</div></div>";
        popupEventOpenClose();
        var value = editables[id].innerHTML;
        var kzcx = editables[id].getAttribute('title');
        const url = 'components/panel/events/new_event_editable_edit_popup.php?value='+value+'&for='+kzcx+'';
        fetch(url)
            .then(response => response.text())
            .then(data => {
            const parser = new DOMParser();
            const parsedDocument = parser.parseFromString(data, "text/html");

            // Wstaw zawartość strony (bez skryptów) do "panel_body"
            popupEventOutput.innerHTML = parsedDocument.body.innerHTML;

            // Przechodź przez znalezione skrypty i wykonuj je
            const scripts = parsedDocument.querySelectorAll("script");
            scripts.forEach(script => {
                const scriptElement = document.createElement("script");
                scriptElement.textContent = script.textContent;
                document.body.appendChild(scriptElement);
            });
            });
    }
</script>
<script>
  var editables = document.querySelectorAll('.editable');
  document.addEventListener('keydown', function(event) {
        if (event.key === "Control") {
            editables.forEach((elem)=>{
              elem.classList.toggle('outline-2');
              elem.classList.toggle('outline-dashed');
              elem.classList.toggle('outline-[var(--text)]');
            })
        }
    });
</script>
<script>
    function openTab(tabName) {
        var i;
        var x = document.getElementsByClassName("tab");
        for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
        }
        document.getElementById(tabName).style.display = "block";  
    }

    var eventsButtons = document.querySelectorAll(".events-button");
    function eventsButtonsToggle() {
        for(var i = 0; i < eventsButtons.length; i++) {  
            eventsButtons[i].classList.remove("theme-text");
            eventsButtons[i].classList.add("border-transparent");
        }
    }
    for(var i = 0; i < eventsButtons.length; i++) {  
    eventsButtons[i].addEventListener("click", function() {
      eventsButtonsToggle();
      this.classList.add("theme-text");
      this.classList.remove("border-transparent");

    });
  }
</script>

<script>  
  function copyButton(link) {
    const shareButton = document.getElementById('shareButton');
    const linkToCopy = link;

    // Kopiowanie linku do schowka
    const tempInput = document.createElement('input');
    tempInput.value = linkToCopy;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand('copy');
    document.body.removeChild(tempInput);

    // Zmiana tekstu na przycisku i animacja
    shareButton.textContent = 'Skopiowano';
    shareButton.classList.remove('bg-indigo-50');
    shareButton.classList.add('theme-bg');
    shareButton.classList.add('animate-pulse');
    shareButton.classList.add('!text-white');

    // Po pewnym czasie przywrócenie pierwotnego stanu przycisku
    setTimeout(() => {
      shareButton.classList.remove('theme-bg');
      shareButton.classList.add('bg-indigo-50');
      shareButton.classList.remove('animate-pulse');
      shareButton.classList.remove('!text-white');
      shareButton.textContent = 'Udostępnij';
    }, 2000); // Tutaj możesz zmienić czas, jak długo ma być widoczny stan "Skopiowano" (w milisekundach)
};

</script>

<script>
    function openFilter(filtrId) {
      var filtrLista = document.getElementById(filtrId);
      filtrLista.classList.toggle("hidden");

      const options = filtrLista.querySelectorAll('li[role="option"]');
      options.forEach(option => {
        option.addEventListener("click", function() {
          const value = this.querySelector('.block').textContent.trim();
          options.forEach(option => {
            option.querySelector('svg').classList.add('hidden');
            option.classList.remove('bg-black/20');
          });
          this.querySelector('svg').classList.toggle('hidden');
          this.classList.add('bg-black/20');
          setAndFilter(filtrId,value);

          filtrLista.classList.add('hidden');
        });
      });
    }

    // tak aby jak klikniesz poza wyświetlaną liste to by się zamknęła


    function setAndFilter(id,newValue) {
      document.getElementById("selected"+id).innerHTML = newValue;
      console.log("Wybrana wartość:", newValue);
      // Tutaj można umieścić właściwą logikę filtracji
      // Można wywołać inne funkcje z przekazaną wartością filtr1
    }
  </script>