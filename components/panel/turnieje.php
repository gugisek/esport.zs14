<?php
include "../../scripts/security.php";
?>
<!-- drafty/ published czy coś i preview to łtwe będzie bo wystarczy dać publicyty_type i w publikach tylko publiki wyświetlać -->
<section data-aos="fade-right" data-aos-delay="100" class="sm:px-6 lg:px-8 px-4 mt-6">
    <div class="px-4 mb-6 sm:px-0 mt-6 flex md:flex-row flex-col justify-between items-center">
        <div>
            <h3 class="text-base font-semibold leading-7 text-white">Wyniki meczy</h3>
            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-400">Dodaj lub usuwaj wyniki spotkań w turniejach.</p>
        </div>
        <!-- <p class="text-xs text-gray-500">Aby dodać wynik rozwiń event</p> -->
    </div>
    <hr class="border-white/5">

    <ol class="mt-2 divide-y divide-[#3d3d3d] text-sm leading-6 text-gray-500">
      <?php
      include "../../scripts/conn_db.php";
      $sql = "SELECT events.event_id, events.name, events.status_id, edition, count(wynik_id) as 'teams_num' FROM events left join wyniki on wyniki.event_id=events.event_id where events.status_id=1 or events.status_id=2 group by events.event_id order by events.event_id desc;";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)) {
        echo '<li class="w-full">
        <div onclick="expandTeamsToggle(`'.$row['event_id'].'`)" aria-controls="event_'.$row['event_id'].'"  class="hover:bg-[#3d3d3d] duration-150 text-gray-300 cursor-pointer py-4 w-full flex items-center justify-between">
          '.$row['name'].'<span class="text-xs theme-text capitalize"> ';
          if ($row['status_id'] == 2){
            echo 'szkic';
          }
          echo ' </span> <span class="text-xs text-gray-500 capitalize">'.$row['edition'].'</span>
          <p class="flex flex-row gap-4 sm:ml-6">
          <span class="flex items-center text-gray-500 justify-center gap-2">
            '.$row['teams_num'].'
            <svg class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z" />
            </svg>
          </span>
          <a onclick="openPopupTeamsAdd(`'.$row['event_id'].'`)" class="active:scale-95 duration-150 cursor-pointer inline-flex items-center rounded-md bg-green-600 p-2 text-xs font-semibold text-white shadow-sm hover:bg-green-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            <svg class=" h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
            </svg>
         </a>
            <svg id="svg_event_'.$row['event_id'].'" class="mt-1.5 rotate-0 text-gray-500 duration-300 h-6 w-6 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
          </p>
        </div>
        <div style="scale: 0; height: 0;" class="duration-300" id="event_'.$row['event_id'].'">
          <div class="text-base text-gray-600 pb-4 max-h-[70vh] pr-2 overflow-y-auto">
            <form method="POST" action="scripts/teams/multiple_action.php">
            <table class="pt-2 w-full text-sm leading-6 text-gray-500">
          ';
          $sql2 = "SELECT wyniki.wynik_id, a.name as 'winner', b.name as 'loser', fazy.name as 'faza', wyniki.date_of_spotkanie, wyniki.maps_win, wyniki.rounds_win, wyniki.maps_los, wyniki.rounds_los from wyniki join teams a on a.team_id=wyniki.team_win join teams b on b.team_id=wyniki.team_los join fazy on fazy.faza_id=wyniki.faza_id where wyniki.event_id=".$row['event_id']." order by wyniki.date_of_spotkanie desc;";
          $result2 = mysqli_query($conn, $sql2);
          if(mysqli_num_rows($result2) > 0) {
             echo '
              <tr class="border-[#1c1c1c] w-full border-b sm:mt-0 text-gray-500">
                <td class="py-2">
                  <!-- <a onclick="openPopupTeamsAdd(`'.$row['event_id'].'`)" class="active:scale-95 duration-150 md:mt-0 mt-4 cursor-pointer inline-flex items-center gap-x-2 rounded-md bg-green-600 px-5 py-2.5 text-xs font-semibold text-white shadow-sm hover:bg-green-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Dodaj wynik
                    <svg class="-mr-0.5 h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                    </svg> --!>
                  </a>
                </td>
                <td></td>
                <td colspan=3 class="text-right">
                </td>

              </tr>
              </table>
              <table class="pt-2 w-full text-sm leading-6 text-gray-500">
          ';
            while($row2 = mysqli_fetch_assoc($result2)){
            echo '
              <tr onclick="openPopupTeamsEdit(`'.$row2['wynik_id'].'`)" class="border-[#1c1c1c] last:border-[0px] border-b hover:bg-[#3d3d3d] duration-150 cursor-pointer sm:mt-0 text-gray-500">
                <td>
                <p class=""><span class="text-green-500">'.$row2['winner'].' </span><span class="text-xs">[Mapy: '.$row2['maps_win'].', Rundy: '.$row2['rounds_win'].']</span> <span class=" text-xs">vs</span> <span class="text-red-500">'.$row2['loser'].' </span><span class="text-xs">[Mapy: '.$row2['maps_los'].', Rundy: '.$row2['rounds_los'].']</span></p>
                </td>
                <td><span class="text-gray-600 text-xs">Faza '.$row2['faza'].'</span></td>
                <td class="text-gray-500 text-right text-xs">'.$row2['date_of_spotkanie'].'</td>
              </tr>
            ';
          }
         
          } else {
            echo '<tr class="">
            <td class="py-2 w-full">Nie dodano jeszcze żadnego wyniku, <a onclick="openPopupTeamsAdd(`'.$row['event_id'].'`)" class="theme-text theme-text-hover duration-150 cursor-pointer">dodaj tutaj.</a></td>
          </tr>';
          }
        echo '
           </table>
            </form>
          </div>
        </div>
      </li>
      ';
      }
      ?>
    </ol>
  </section>
<section id="popupTeamsBg" class="fixed z-[50] h-0 opacity-0 top-0 left-0 w-full h-full bg-[#0000009e] transition-opacity duration-300"></section>
  <section id="popupTeams" onclick="popupTeamsCloseConfirm()" class="z-[60] fixed scale-0 top-0 left-0 w-full h-full">
    <div class="flex items-center justify-center w-full h-full px-2">
      <div onclick="event.cancelBubble=true;" class="bg-[#0e0e0e] md:min-w-[800px] md:w-auto w-full max-w-[800px] max-h-[80vh] overflow-y-auto flex md:flex-row flex-col gap-4 rounded-2xl sm:px-6  -xl">
        <div id="popupItself" class="flex h-auto w-full justify-between flex-col">
          <!-- <div class="w-full flex justify-between items-center sm:hidden">
            <span>  </span>
              <a onclick="popupTeamsCloseConfirm()" class="-mt-2 pb-3 flex items-center space-x-2 text-gray-500 hover:text-red-600 transition-all duration-500">
                  <p class="uppercase font-medium text-xs">zamknij</p>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
              </a>
          </div>                         -->
            <div id="pupupTeamsOutput"></div>
        </div>
      </div>
    </div>
  </section>

  <script>
    function popupTeamsOpenClose() {
       var popup = document.getElementById("popupTeams")
       var popupBg = document.getElementById("popupTeamsBg")
       popupBg.classList.toggle("opacity-0")
       popupBg.classList.toggle("h-0")
       popup.classList.toggle("scale-0")
       popup.classList.add("duration-200")

    }
    function openPopupTeamsAdd(id) {
        var popupFaqOutput = document.getElementById("pupupTeamsOutput");
        //popupFaqOutput.innerHTML =  "<div class='flex justify-center items-center'><div class='flex flex-col justify-center items-center'><div class='animate-spin rounded-full h-32 w-32 border-t-2 border-b-2 border-gray-900'></div><div class='text-white text-xl font-semibold mt-4'>Ładowanie...</div></div>";
        popupFaqOutput.innerHTML = "<div class='w-full flex items-center justify-center z-[999]'><div class='z-[30] bg-black/90 p-4 rounded-xl'><div class='lds-dual-ring'></div></div></div>";
        popupTeamsOpenClose();
        const url = "components/panel/wyniki/wyniki_popup.php?id="+id+"&type=add";
        fetch(url)
            .then(response => response.text())
            .then(data => {
            const parser = new DOMParser();
            const parsedDocument = parser.parseFromString(data, "text/html");

            // Wstaw zawartość strony (bez skryptów) do "panel_body"
            popupFaqOutput.innerHTML = parsedDocument.body.innerHTML;

            // Przechodź przez znalezione skrypty i wykonuj je
            const scripts = parsedDocument.querySelectorAll("script");
            scripts.forEach(script => {
                const scriptElement = document.createElement("script");
                scriptElement.textContent = script.textContent;
                document.body.appendChild(scriptElement);
            });
            });
            
    }
    function openPopupTeamsEdit(id) {
        var popupFaqOutput = document.getElementById("pupupTeamsOutput");
        //popupFaqOutput.innerHTML =  "<div class='flex justify-center items-center'><div class='flex flex-col justify-center items-center'><div class='animate-spin rounded-full h-32 w-32 border-t-2 border-b-2 border-gray-900'></div><div class='text-white text-xl font-semibold mt-4'>Ładowanie...</div></div>";
        popupFaqOutput.innerHTML = "<div class='w-full flex items-center justify-center z-[999]'><div class='z-[30] bg-black/90 p-4 rounded-xl'><div class='lds-dual-ring'></div></div></div>";
        popupTeamsOpenClose();
        const url = "components/panel/wyniki/wyniki_popup.php?id="+id+"&type=edit";
        fetch(url)
            .then(response => response.text())
            .then(data => {
            const parser = new DOMParser();
            const parsedDocument = parser.parseFromString(data, "text/html");

            // Wstaw zawartość strony (bez skryptów) do "panel_body"
            popupFaqOutput.innerHTML = parsedDocument.body.innerHTML;

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
  function expandTeamsToggle(event_id) {
    var target = document.getElementById("event_"+event_id);
    if (target) {
      const expanded = target.getAttribute('aria-expanded') === 'true';

      // Zmień stan aria-expanded na przeciwny (true na false, false na true)
      target.setAttribute('aria-expanded', !expanded);

      // Zmień ikonę rozwijania/zwijania
      const icon = document.getElementById("svg_event_"+event_id);
      if (icon) {
        icon.classList.toggle('rotate-0', expanded);
        icon.classList.toggle('-rotate-180', !expanded);
      }

      // Pokaż lub ukryj odpowiedź na pytanie
      if (expanded) {
        target.style.scale = '0';
        target.style.height = '0';
      } else {
        target.style.scale = '1';
          target.style.height = 'auto';
      }
    }
  }
</script>