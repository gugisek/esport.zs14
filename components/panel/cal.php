<div data-aos="fade-right" data-aos-delay="100" class="sm:px-6 lg:px-8 px-4 my-12">
    <div class="w-full flex justify-between">
      <h2 class="text-base font-semibold leading-6 text-gray-200">Nadchodzące wydarzenia</h2>
      <button type="button" onclick="openPopupFaqAdd()" class="md:mt-0 mt-4 inline-flex items-center gap-x-2 rounded-md bg-green-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Dodaj zdarzenie
      </button>
    </div>
  <div class="lg:grid lg:grid-cols-12 lg:gap-x-16">
    <div class="mt-10 text-center lg:col-start-8 lg:col-end-13 lg:row-start-1 lg:mt-9 xl:col-start-9">
      <div class="flex items-center text-gray-900"></div>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js"></script>
    
    <div id="calendar" class="max-h-[80%]"></div>
    <script>
      
        var calendarEl = document.getElementById("calendar");
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: "dayGridMonth",
          selectable: true,
          events: [
            // Przykładowe wydarzenia
            {
              title: "Wydarzenie 1",
              start: "2023-11-01",
            },
            {
              title: "Wydarzenie 2",
              start: "2023-11-05",
              end: "2023-11-07",
            },
          ],
          select: function (info) {
            alert("Wybrano datę: " + info.startStr);
          },
        });
        calendar.render();
      
    </script>
    

    </div>
    <ol class="mt-4 divide-y divide-gray-100 text-sm leading-6 lg:col-span-7 xl:col-span-8">
      <li class="relative flex space-x-6 py-6 xl:static">
        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-14 w-14 flex-none rounded-full">
        <div class="flex-auto">
          <h3 class="pr-10 font-semibold text-gray-900 xl:pr-0">Leslie Alexander</h3>
          <dl class="mt-2 flex flex-col text-gray-500 xl:flex-row">
            <div class="flex items-start space-x-3">
              <dt class="mt-0.5">
                <span class="sr-only">Date</span>
                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd" />
                </svg>
              </dt>
              <dd><time datetime="2022-01-10T17:00">January 10th, 2022 at 5:00 PM</time></dd>
            </div>
            <div class="mt-2 flex items-start space-x-3 xl:ml-3.5 xl:mt-0 xl:border-l xl:border-gray-400 xl:border-opacity-50 xl:pl-3.5">
              <dt class="mt-0.5">
                <span class="sr-only">Location</span>
                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z" clip-rule="evenodd" />
                </svg>
              </dt>
              <dd>Starbucks</dd>
            </div>
          </dl>
        </div>
        <div class="absolute right-0 top-6 xl:relative xl:right-auto xl:top-auto xl:self-center">
          <div>
            <button type="button" class="-m-2 flex items-center rounded-full p-2 text-gray-500 hover:text-gray-600" id="menu-0-button" aria-expanded="false" aria-haspopup="true">
              <span class="sr-only">Open options</span>
              <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M3 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM8.5 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM15.5 8.5a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" />
              </svg>
            </button>
          </div>

          <div class="absolute right-0 z-10 mt-2 w-36 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-0-button" tabindex="-1">
            <div class="py-1" role="none">
     
              <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-0-item-0">Edit</a>
              <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-0-item-1">Cancel</a>
            </div>
          </div>
        </div>
      </li>

    </ol>
  </div>
</div>