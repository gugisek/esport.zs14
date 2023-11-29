<?php
include "../../scripts/security.php";
?>
<!-- drafty/ published czy coś i preview to łtwe będzie bo wystarczy dać publicyty_type i w publikach tylko publiki wyświetlać -->
<section data-aos="fade-right" data-aos-delay="100" class="sm:px-6 lg:px-8 px-4 mt-12">
    <div class="px-4 mb-6 sm:px-0 mt-6 flex md:flex-row flex-col justify-between items-center">
        <div>
            <h3 class="text-base font-semibold leading-7 text-white">Turnieje, wydarzenia i konkursy</h3>
            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-400">Edytuj, dodawaj i upubliczniaj turnieje i główne informacje o nich.</p>
        </div>
        <button type="button" onclick="openPopupFaqAdd()" class="md:mt-0 mt-4 inline-flex items-center gap-x-2 rounded-md bg-green-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Dodaj wydarzenie
            <svg class="-mr-0.5 h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        <div>
          <label id="listbox-label" class="block text-sm font-medium leading-6 text-gray-300">Czas</label>
          <div class="relative mt-2">
            <button onclick="openFilter('filtr1')" class="relative w-full cursor-default rounded-md bg-[#0e0e0e] focus:text-white py-1.5 pl-3 pr-10 text-left text-gray-400 shadow-sm ring-1 ring-inset ring-[#3d3d3d] focus:outline-none focus:ring-2 theme-ring-focus sm:text-sm sm:leading-6">
              <span id="selectedfiltr1" class="block truncate capitalize">wszystkie</span>
              <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
                </svg>
              </span>
            </button>

            <ul id="filtr1" class="hidden absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-[#1c1c1c] py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">
              <li class="text-gray-300 hover:bg-black/30 relative cursor-default select-none py-2 pl-3 pr-9" role="option">
                <span class="font-normal block truncate capitalize">nadchodzące</span>
                <span class="theme-text absolute inset-y-0 right-0 flex items-center pr-4">
                  <svg class="hidden h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                </span>
              </li>
              <li class="text-gray-300 hover:bg-black/30 relative cursor-default select-none py-2 pl-3 pr-9" role="option">
                <span class="font-normal block truncate capitalize">trwające</span>
                <span class="theme-text absolute inset-y-0 right-0 flex items-center pr-4">
                  <svg class="hidden h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                </span>
              </li>
              <li class="text-gray-300 hover:bg-black/30 bg-black/20 relative cursor-default select-none py-2 pl-3 pr-9" role="option">
                <span class="font-normal block truncate capitalize">wszystkie</span>
                <span class="theme-text absolute inset-y-0 right-0 flex items-center pr-4">
                  <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                </span>
              </li>
              <!-- More items... -->
            </ul>
          </div>
        </div>
        <div>
          <label id="listbox-label" class="block text-sm font-medium leading-6 text-gray-300">Przeznaczenie</label>
          <div class="relative mt-2">
            <button onclick="openFilter('filtr2')" class="relative w-full cursor-default rounded-md bg-[#0e0e0e] focus:text-white py-1.5 pl-3 pr-10 text-left text-gray-400 shadow-sm ring-1 ring-inset ring-[#3d3d3d] focus:outline-none focus:ring-2 theme-ring-focus sm:text-sm sm:leading-6">
              <span id="selectedfiltr2" class="block truncate capitalize">wszyscy</span>
              <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
                </svg>
              </span>
            </button>

            <ul id="filtr2" class="hidden absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-[#1c1c1c] py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">
              <li class="text-gray-300 hover:bg-black/30 relative cursor-default select-none py-2 pl-3 pr-9" role="option">
                <span class="font-normal block truncate capitalize">Informatycy</span>
                <span class="theme-text absolute inset-y-0 right-0 flex items-center pr-4">
                  <svg class="hidden h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                </span>
              </li>
              <li class="text-gray-300 hover:bg-black/30 relative cursor-default select-none py-2 pl-3 pr-9" role="option">
                <span class="font-normal block truncate capitalize">programiści</span>
                <span class="theme-text absolute inset-y-0 right-0 flex items-center pr-4">
                  <svg class="hidden h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                </span>
              </li>
              <li class="text-gray-300 hover:bg-black/30 bg-black/20 relative cursor-default select-none py-2 pl-3 pr-9" role="option">
                <span class="font-normal block truncate capitalize">wszyscy</span>
                <span class="theme-text absolute inset-y-0 right-0 flex items-center pr-4">
                  <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                </span>
              </li>
              <!-- More items... -->
            </ul>
          </div>
        </div>
        <div>
          <label id="listbox-label" class="block text-sm font-medium leading-6 text-gray-300">Typ</label>
          <div class="relative mt-2">
            <button onclick="openFilter('filtr3')" class="relative w-full cursor-default rounded-md bg-[#0e0e0e] focus:text-white py-1.5 pl-3 pr-10 text-left text-gray-400 shadow-sm ring-1 ring-inset ring-[#3d3d3d] focus:outline-none focus:ring-2 theme-ring-focus sm:text-sm sm:leading-6">
              <span id="selectedfiltr3" class="block truncate capitalize">wszystkie</span>
              <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
                </svg>
              </span>
            </button>

            <ul id="filtr3" class="hidden absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-[#1c1c1c] py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">
              <li class="text-gray-300 hover:bg-black/30 relative cursor-default select-none py-2 pl-3 pr-9" role="option">
                <span class="font-normal block truncate capitalize">inne</span>
                <span class="theme-text absolute inset-y-0 right-0 flex items-center pr-4">
                  <svg class="hidden h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                </span>
              </li>
              <li class="text-gray-300 hover:bg-black/30 relative cursor-default select-none py-2 pl-3 pr-9" role="option">
                <span class="font-normal block truncate capitalize">wydarzenie</span>
                <span class="theme-text absolute inset-y-0 right-0 flex items-center pr-4">
                  <svg class="hidden h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                </span>
              </li>
              <li class="text-gray-300 hover:bg-black/30 relative cursor-default select-none py-2 pl-3 pr-9" role="option">
                <span class="font-normal block truncate capitalize">konkurs</span>
                <span class="theme-text absolute inset-y-0 right-0 flex items-center pr-4">
                  <svg class="hidden h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                </span>
              </li>
              <li class="text-gray-300 hover:bg-black/30 relative cursor-default select-none py-2 pl-3 pr-9" role="option">
                <span class="font-normal block truncate capitalize">turniej</span>
                <span class="theme-text absolute inset-y-0 right-0 flex items-center pr-4">
                  <svg class="hidden h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                </span>
              </li>
              <li class="text-gray-300 hover:bg-black/30 bg-black/20 relative cursor-default select-none py-2 pl-3 pr-9" role="option">
                <span class="font-normal block truncate capitalize">wszystkie</span>
                <span class="theme-text absolute inset-y-0 right-0 flex items-center pr-4">
                  <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                </span>
              </li>
              <!-- More items... -->
            </ul>
          </div>
        </div>
        <div>
          <label id="listbox-label" class="block text-sm font-medium leading-6 text-gray-300">Publiczność</label>
          <div class="relative mt-2">
            <button onclick="openFilter('filtr4')" class="relative w-full cursor-default rounded-md bg-[#0e0e0e] focus:text-white py-1.5 pl-3 pr-10 text-left text-gray-400 shadow-sm ring-1 ring-inset ring-[#3d3d3d] focus:outline-none focus:ring-2 theme-ring-focus sm:text-sm sm:leading-6">
              <span id="selectedfiltr4" class="block truncate capitalize">wszystkie</span>
              <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
                </svg>
              </span>
            </button>

            <ul id="filtr4" class="hidden absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-[#1c1c1c] py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">
              <li class="text-gray-300 hover:bg-black/30 relative cursor-default select-none py-2 pl-3 pr-9" role="option">
                <span class="font-normal block truncate capitalize">publiczne</span>
                <span class="theme-text absolute inset-y-0 right-0 flex items-center pr-4">
                  <svg class="hidden h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                </span>
              </li>
              <li class="text-gray-300 hover:bg-black/30 relative cursor-default select-none py-2 pl-3 pr-9" role="option">
                <span class="font-normal block truncate capitalize">szkice</span>
                <span class="theme-text absolute inset-y-0 right-0 flex items-center pr-4">
                  <svg class="hidden h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                </span>
              </li>
              </li>
              <li class="text-gray-300 hover:bg-black/30 bg-black/20 relative cursor-default select-none py-2 pl-3 pr-9" role="option">
                <span class="font-normal block truncate capitalize">wszystkie</span>
                <span class="theme-text absolute inset-y-0 right-0 flex items-center pr-4">
                  <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                </span>
              </li>
              <!-- More items... -->
            </ul>
          </div>
        </div>
    </div>

    <ol class="mt-2 divide-y divide-[#3d3d3d] text-sm leading-6 text-gray-500">
      <li class="py-4 sm:flex hover:bg-[#3d3d3d] duration-150 cursor-pointer">
        <p class="mt-2 flex-auto sm:mt-0 text-gray-300">Wielki Turniej CS:GO Szanajcy <span class="text-xs text-gray-500">Edycja pierwsza</span></p>
        <p class="flex-none sm:ml-6">1 grudnia 2023 - 2 luteń 2023</p>
      </li>
      <li class="py-4 sm:flex hover:bg-[#3d3d3d] duration-150 cursor-pointer">
        <p class="mt-2 flex-auto sm:mt-0 text-gray-300">Turniej Liga Legend Szanajcy <span class="text-xs text-gray-500">Edycja pierwsza</span></p>
        <p class="flex-none sm:ml-6">1 grudnia 2023 - 2 luteń 2023</p>
      </li>
      <li class="py-4 sm:flex hover:bg-[#3d3d3d] duration-150 cursor-pointer">
        <p class="mt-2 flex-auto sm:mt-0 text-gray-300">Truniej wylewu w Fortnite</p>
        <p class="flex-none sm:ml-6">1 grudnia 2023 - 2 luteń 2023</p>
      </li>
      <li class="py-4 sm:flex hover:bg-[#3d3d3d] duration-150 cursor-pointer">
        <p class="mt-2 flex-auto sm:mt-0 text-gray-300">Konkurs na stronkę <span class="text-xs text-gray-500">2023/2024</span></p>
        <p class="flex-none sm:ml-6">1 grudnia 2023 - 2 luteń 2023</p>
      </li>
    </ol>
  </section>
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
 