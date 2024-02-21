<?php
include "../../scripts/security.php";
?>
<!-- drafty/ published czy coś i preview to łtwe będzie bo wystarczy dać publicyty_type i w publikach tylko publiki wyświetlać -->
<section data-aos="fade-right" data-aos-delay="100" class="sm:px-6 lg:px-8 px-4 mt-6">
    <div class="px-4 mb-6 sm:px-0 mt-6 flex md:flex-row flex-col justify-between items-center">
        <div>
            <h3 class="text-base font-semibold leading-7 text-white">Grupy</h3>
            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-400">Dodawaj, edytuj i banuj grupy w turniejach.</p>
        </div>
        <button type="button" onclick="openPopupGroupsAdd()" class="active:scale-95 duration-150 md:mt-0 mt-4 inline-flex items-center gap-x-2 rounded-md bg-green-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Dodaj grupę
            <svg class="-mr-0.5 h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>
<hr class="border-white/5">
    <ol class="mt-2 divide-y divide-[#3d3d3d] text-sm leading-6 text-gray-500">
      <!-- <li class="py-4 sm:flex hover:bg-[#3d3d3d] duration-150 cursor-pointer">
        <p class="mt-2 flex-auto sm:mt-0 text-gray-300">Wielki Turniej CS:GO Szanajcy <span class="text-xs text-gray-500">Edycja pierwsza</span></p>
        <p class="flex-none sm:ml-6">1 grudnia 2023 - 2 luteń 2023</p>
      </li> -->
      <?php
      include "../../scripts/conn_db.php";
      $sql = "SELECT events.event_id, events.name, events.status_id, max_players_in_team, max_rezerwowy_players_in_team, edition, count(group_id) as 'groups_num' FROM events left join team_groups on team_groups.event_id=events.event_id where events.status_id=1 or events.status_id=2 group by events.event_id order by events.event_id desc;";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)) {
        echo '<li class="w-full">
        <div onclick="expandTeamsToggle(`'.$row['event_id'].'`)" aria-controls="event_'.$row['event_id'].'"  class="hover:bg-[#3d3d3d] duration-150 cursor-pointer py-4 w-full flex items-center justify-between">
          '.$row['name'].'<span class="text-xs theme-text capitalize"> ';
          if ($row['status_id'] == 2){
            echo 'szkic';
          }
          echo ' </span> <span class="text-xs text-gray-500 capitalize">'.$row['edition'].'</span>
          <p class="flex flex-row gap-4 sm:ml-6">
          <span class="flex items-center justify-center gap-2">
            '.$row['groups_num'].'
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
            </svg>
          </span>
            <svg id="svg_event_'.$row['event_id'].'" class="rotate-0 duration-300 h-6 w-6 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
          </p>
        </div>
        <div style="scale: 0; height: 0;" class="duration-300" id="event_'.$row['event_id'].'">
          <div class="text-base text-gray-600 pb-4 max-h-[70vh] pr-2 overflow-y-auto">
            <form method="POST" action="scripts/teams/multiple_action.php">
            <table class="pt-2 w-full text-sm leading-6 text-gray-500">
          ';
          $sql2 = "SELECT team_groups.group_id, team_groups.name, COUNT(teams.team_id) AS num_teams FROM team_groups LEFT JOIN teams ON team_groups.group_id = teams.group_id WHERE team_groups.event_id = ".$row['event_id']." GROUP BY team_groups.group_id, team_groups.name order by group_id desc";
          $result2 = mysqli_query($conn, $sql2);
          if(mysqli_num_rows($result2) > 0) {
             echo '
              <tr class="border-[#1c1c1c] w-full border-b sm:mt-0 text-gray-500">
                <td class="py-2">
                  <a onclick="openPopupGroupsAdd(`'.$row['event_id'].'`)" class="flex items-center w-full text-xs theme-text theme-text-hover duration-150 cursor-pointer">
                    Dodaj grupę
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.8" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                    </svg>
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
              <tr onclick="openPopupGroupsEdit(`'.$row2['group_id'].'`)" class="border-[#1c1c1c] last:border-[0px] border-b hover:bg-[#3d3d3d] duration-150 cursor-pointer sm:mt-0 text-gray-500">
                <td class="py-2 flex items-center gap-2">
                  <p class="capitalize">
                  '.$row2['name'].' 
                  </p>
                </td>
                <td></td>
                <td class="flex-none">
                
                </td>
                <td class="text-right">
                <span class="flex items-center justify-end gap-2">
                    '.$row2['num_teams'].'
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                    </svg>
                </span></td>
              </tr>
            ';
          }
         
          } else {
            echo '<tr class="">
            <td class="py-2 w-full">Nie dodano jeszcze żadnej grupy, <a onclick="openPopupTeamsAdd(`'.$row['event_id'].'`)" class="theme-text theme-text-hover duration-150 cursor-pointer">dodaj tutaj.</a></td>
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
    function openPopupGroupsAdd(id) {
        var popupFaqOutput = document.getElementById("pupupTeamsOutput");
        //popupFaqOutput.innerHTML =  "<div class='flex justify-center items-center'><div class='flex flex-col justify-center items-center'><div class='animate-spin rounded-full h-32 w-32 border-t-2 border-b-2 border-gray-900'></div><div class='text-white text-xl font-semibold mt-4'>Ładowanie...</div></div>";
        popupFaqOutput.innerHTML = "<div class='w-full flex items-center justify-center z-[999]'><div class='z-[30] bg-black/90 p-4 rounded-xl'><div class='lds-dual-ring'></div></div></div>";
        popupTeamsOpenClose();
        const url = "components/panel/groups/groups_popup.php?id="+id+"&type=add";
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
    function openPopupGroupsEdit(id) {
        var popupFaqOutput = document.getElementById("pupupTeamsOutput");
        //popupFaqOutput.innerHTML =  "<div class='flex justify-center items-center'><div class='flex flex-col justify-center items-center'><div class='animate-spin rounded-full h-32 w-32 border-t-2 border-b-2 border-gray-900'></div><div class='text-white text-xl font-semibold mt-4'>Ładowanie...</div></div>";
        popupFaqOutput.innerHTML = "<div class='w-full flex items-center justify-center z-[999]'><div class='z-[30] bg-black/90 p-4 rounded-xl'><div class='lds-dual-ring'></div></div></div>";
        popupTeamsOpenClose();
        const url = "components/panel/groups/groups_popup.php?id="+id+"&type=edit";
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
 
 <script>
  // Pobierz wszystkie przyciski "Expand/collapse question"
  // const questionButtons = document.querySelectorAll('#events_teams_button');

  // // Dodaj obsługę kliknięcia dla każdego przycisku
  // questionButtons.forEach(button => {
  //   button.addEventListener('click', () => {
  //     const targetId = button.getAttribute('aria-controls');
  //     const target = document.getElementById(targetId);

  //     if (target) {
  //       const expanded = button.getAttribute('aria-expanded') === 'true';

  //       // Zmień stan aria-expanded na przeciwny (true na false, false na true)
  //       button.setAttribute('aria-expanded', !expanded);

  //       // Zmień ikonę rozwijania/zwijania
  //       const icon = button.querySelector('svg');
  //       if (icon) {
  //         icon.classList.toggle('rotate-0', expanded);
  //         icon.classList.toggle('-rotate-180', !expanded);
  //       }

  //       // Pokaż lub ukryj odpowiedź na pytanie
  //       if (expanded) {
  //         target.style.scale = '0';
  //         target.style.height = '0';
  //       } else {
  //         target.style.scale = '1';
  //           target.style.height = 'auto';
  //       }
  //     }
  //   });
  // });
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