<?php
include "../../scripts/security.php";
?>
<!-- drafty/ published czy coś i preview to łtwe będzie bo wystarczy dać publicyty_type i w publikach tylko publiki wyświetlać -->
<section data-aos="fade-right" data-aos-delay="100" class="sm:px-6 lg:px-8 px-4 mt-12">
    <div class="px-4 mb-6 sm:px-0 mt-6 flex md:flex-row flex-col justify-between items-center">
        <div>
            <h3 class="text-base font-semibold leading-7 text-white">Drużny</h3>
            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-400">Dodawaj, edytuj i banuj drużny w turniejach.</p>
        </div>
        <button type="button" onclick="openPopupTeamsAdd()" class="active:scale-95 duration-150 md:mt-0 mt-4 inline-flex items-center gap-x-2 rounded-md bg-green-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Dodaj drużynę
            <svg class="-mr-0.5 h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
      <div>
        <label id="listbox-label" class="block text-sm font-medium leading-6 text-gray-300">Sortowanie</label>
        <div class="relative mt-2">
            <button onclick="openFilter('filtr4')" class="relative w-full cursor-default rounded-md bg-black/10 focus:text-white py-1.5 pl-3 pr-10 text-left text-gray-400 shadow-sm ring-1 ring-inset ring-[#3d3d3d] focus:outline-none focus:ring-2 theme-ring-focus sm:text-sm sm:leading-6">
              <span id="selectedfiltr4" class="block truncate capitalize">Najnowsze</span>
              <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
                </svg>
              </span>
            </button>

            <ul id="filtr4" class="hidden absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-[#1c1c1c] py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">
              <li class="text-gray-300 hover:bg-black/30 relative cursor-default select-none py-2 pl-3 pr-9" role="option">
                <span class="font-normal block truncate capitalize">Najstarsze</span>
                <span class="theme-text absolute inset-y-0 right-0 flex items-center pr-4">
                  <svg class="hidden h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                </span>
              </li>
              </li>
              <li class="text-gray-300 hover:bg-black/30 bg-black/20 relative cursor-default select-none py-2 pl-3 pr-9" role="option">
                <span class="font-normal block truncate capitalize">Najnowsze</span>
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
          <label id="listbox-label" class="block text-sm font-medium leading-6 text-gray-300">Czas</label>
          <select onchange="" id="" name="" class="outline-none duration-150 capitalize relative cursor-default rounded-md bg-[#0e0e0e] focus:text-white py-1.5 pl-3 pr-10 text-left text-gray-400 text-sm w-full mt-2 shadow-sm ring-1 ring-inset ring-[#3d3d3d] focus:outline-none focus:ring-2 theme-ring-focus sm:leading-6">
              <option value="" class="hidden" disabled selected>Zaznaczone</option>
              <option value="status">Zmień status</option>
              <option value="groups">Zmień grupę</option>
              <option value="delete" class="text-red-400">Usuń</option>
          </select>
        </div>
        <div>
          <label id="listbox-label" class="block text-sm font-medium leading-6 text-gray-300">Przeznaczenie</label>
          <select onchange="" id="" name="" class="outline-none duration-150 capitalize relative cursor-default rounded-md bg-[#0e0e0e] focus:text-white py-1.5 pl-3 pr-10 text-left text-gray-400 text-sm w-full mt-2 shadow-sm ring-1 ring-inset ring-[#3d3d3d] focus:outline-none focus:ring-2 theme-ring-focus sm:leading-6">
              <option value="" class="hidden" disabled selected>Zaznaczone</option>
              <option value="status">Zmień status</option>
              <option value="groups">Zmień grupę</option>
              <option value="delete" class="text-red-400">Usuń</option>
          </select>
        </div>
        <div>
          <label id="listbox-label" class="block text-sm font-medium leading-6 text-gray-300">Typ</label>
          <div class="relative mt-2">
            <button onclick="openFilter('filtr3')" class="relative w-full cursor-default rounded-md bg-black/10 focus:text-white py-1.5 pl-3 pr-10 text-left text-gray-400 shadow-sm ring-1 ring-inset ring-[#3d3d3d] focus:outline-none focus:ring-2 theme-ring-focus sm:text-sm sm:leading-6">
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
    </div>

    <ol class="mt-2 divide-y divide-[#3d3d3d] text-sm leading-6 text-gray-500">
      <!-- <li class="py-4 sm:flex hover:bg-[#3d3d3d] duration-150 cursor-pointer">
        <p class="mt-2 flex-auto sm:mt-0 text-gray-300">Wielki Turniej CS:GO Szanajcy <span class="text-xs text-gray-500">Edycja pierwsza</span></p>
        <p class="flex-none sm:ml-6">1 grudnia 2023 - 2 luteń 2023</p>
      </li> -->
      <?php
      include "../../scripts/conn_db.php";
      $sql = "SELECT events.event_id, events.name, events.status_id, max_players_in_team, max_rezerwowy_players_in_team, edition, count(team_id) as 'teams_num' FROM events right join teams on teams.event_id=events.event_id where events.status_id=1 or events.status_id=2 group by events.event_id order by events.event_id desc;";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)) {
        echo '<li class="w-full">
        <div onclick="expandTeamsToggle(`'.$row['event_id'].'`)" aria-controls="event_'.$row['event_id'].'"  class="hover:bg-[#3d3d3d] duration-150 cursor-pointer py-4 w-full flex items-center justify-between">
          '.$row['name'].'<span class="text-xs theme-text capitalize"> ';
          if ($row['status_id'] == 2){
            echo 'szkic';
          }
          echo ' </span> <span class="text-xs text-gray-500 capitalize">'.$row['edition'].'</span>
          <p class="flex items-center justify-center gap-2">
            '.$row['teams_num'].'
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
              <path d="M10 9a3 3 0 100-6 3 3 0 000 6zM6 8a2 2 0 11-4 0 2 2 0 014 0zM1.49 15.326a.78.78 0 01-.358-.442 3 3 0 014.308-3.516 6.484 6.484 0 00-1.905 3.959c-.023.222-.014.442.025.654a4.97 4.97 0 01-2.07-.655zM16.44 15.98a4.97 4.97 0 002.07-.654.78.78 0 00.357-.442 3 3 0 00-4.308-3.517 6.484 6.484 0 011.907 3.96 2.32 2.32 0 01-.026.654zM18 8a2 2 0 11-4 0 2 2 0 014 0zM5.304 16.19a.844.844 0 01-.277-.71 5 5 0 019.947 0 .843.843 0 01-.277.71A6.975 6.975 0 0110 18a6.974 6.974 0 01-4.696-1.81z" />
            </svg>
          </p>
          <p class="flex-none sm:ml-6">
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
          $sql2 = "SELECT teams.team_id, teams.name, team_groups.name as group_name, teams.class, teams.players, teams.profile_img, team_status.name as status_name FROM teams join team_status on team_status.status_id=teams.status_id left join team_groups on team_groups.group_id=teams.group_id WHERE teams.event_id = ".$row['event_id']." order by team_id desc";
          $result2 = mysqli_query($conn, $sql2);
          if(mysqli_num_rows($result2) > 0) {
             echo '
              <tr class="border-[#1c1c1c] w-full border-b sm:mt-0 text-gray-500">
                <td class="py-2">
                  <a onclick="openPopupTeamsAdd(`'.$row['event_id'].'`)" class="flex items-center w-full text-xs theme-text theme-text-hover duration-150 cursor-pointer">
                    Dodaj drużynę
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.8" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                    </svg>
                  </a>
                </td>
                <td></td>
                <td colspan=3 class="text-right">
                  <!-- <span class="text-xs mr-2">Zaznaczone</span> --!>
                  <div class="flex flex-row flex-now items-center justify-end pr-2">
                    <div class="flex items-center">
                      <select onchange="openSecFilterOpen(`'.$row['event_id'].'`)" id="multiple_filter_'.$row['event_id'].'" name="action" class="outline-none duration-150 capitalize relative cursor-default rounded-md bg-[#0e0e0e] focus:text-white py-1.5 pl-3 pr-10 text-left text-gray-400 text-xs shadow-sm ring-1 ring-inset ring-[#3d3d3d] focus:outline-none focus:ring-2 theme-ring-focus sm:leading-6" required>
                        <option value="" class="hidden" disabled selected>Zaznaczone</option>
                        <option value="status">Zmień status</option>
                        <option value="groups">Zmień grupę</option>
                        <option value="delete" class="text-red-400">Usuń</option>
                      </select>
                      <div id="sec_'.$row['event_id'].'"></div>
                    </div>
                    
                    <button class="ml-2 px-2 py-2 rounded-md bg-[#0e0e0e] theme-bg-hover duration-300 hover:text-gray-900 focus:text-white text-gray-400 text-xs shadow-sm ring-1 ring-inset ring-[#3d3d3d] focus:outline-none focus:ring-2 theme-ring-focus sm:leading-6">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                      </svg>
                    </button>
                  </div>
                </td>

              </tr>
              </table>
              <table class="pt-2 w-full text-sm leading-6 text-gray-500">
          ';
            while($row2 = mysqli_fetch_assoc($result2)){
              if($row2['profile_img'] == "") {
                $row2['profile_img'] = "team_default.png";
              }
              $team_players = $row2['players'];
              $team_players = explode(';', $team_players);
              $team_players_slots_count = count($team_players)-1;
              $acsual_team_players_count = 0;
              for($i=0; $i<$team_players_slots_count; $i++){
                if(strstr($team_players[$i], ':&&') == false) {
                  $acsual_team_players_count++;
                }
              }
              
              if($row2['status_name'] == "zdyskwalifikowana") {
                $color = "text-red-600";
              }elseif($row2['status_name'] == "zakwalifikowana") {
                $color = "theme-text";
              }else {
                $color = "text-gray-600";
              }
            echo '
              <tr onclick="openPopupTeamsEdit(`'.$row2['team_id'].'`)" class="border-[#1c1c1c] last:border-[0px] border-b hover:bg-[#3d3d3d] duration-150 cursor-pointer sm:mt-0 text-gray-500">
                <td class="py-2 flex items-center gap-2">
                  <img src="public/img/teams/'.$row2['profile_img'].'" alt="team_profile" class="aspect-square object-cover max-w-[40px] rounded-full">
                  <p class="capitalize">
                  '.$row2['name'].' 
                  <span class="text-xs text-gray-600">'.$row2['class'].'</span>
                  </p>
                </td>
                <td class="uppercase text-xs">'.$row2['group_name'].'</td>
                <td class="'.$color.'">'.$row2['status_name'].'</td>
                <td class="flex-none text-right">'.$acsual_team_players_count.'/'.$row['max_players_in_team'].'</td>
                <td class="px-4 text-right"><input name="selected_teams[]" value="'.$row2['team_id'].'" onclick="event.cancelBubble=true;" class="mt-1" type="checkbox"></td>
              </tr>
            ';
          }
         
          } else {
            echo '<tr class="">
            <td class="py-2 w-full">Nie dodano jeszcze żadnej drużyny, <a onclick="openPopupTeamsAdd(`'.$row['event_id'].'`)" class="theme-text theme-text-hover duration-150 cursor-pointer">dodaj tutaj.</a></td>
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
<hr class="border-white/5">
<div data-aos="fade-right" data-aos-delay="100" class="divide-y divide-white/5" enctype="multipart/form-data">
    <div class="sm:px-6 lg:px-8 px-4">
        <div class="px-4 mb-6 sm:px-0 mt-6 flex flex-row justify-between items-center">
            <div>
                <h3 class="text-base font-semibold leading-7 text-white">Przykładowe wiadomości</h3>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-400">Samplowe wiadomości do odpisywania na zgłoszenia.</p>
            </div>
        </div>
        
        <dl class="mt-6 divide-y divide-gray-200">
        <div data-aos="fade-up" data-aos-delay="'100" data-aos-anchor-placement="top-bottom" class="">
          <dt class="text-lg">
            <!-- Expand/collapse question button -->
            <button onclick="expandTeamsToggle(`txt1`)" type="button" class="pt-5 pb-3 flex w-full items-start justify-between text-left text-gray-400" aria-controls="event_txt1" aria-expanded="false">
              <span class="font-medium text-sm text-gray-300">Odpowiedź na zgłoszenie</span>
              <span class="ml-6 flex h-7 items-center">
                <svg id="svg_event_txt1" class="rotate-0 duration-300 h-6 w-6 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
              </span>
            </button>
          </dt>
          <dd style="scale: 0; height: 0;" class="duration-300 mt-2 pr-12" id="event_txt1">
            <div class="text-xs text-gray-400 pb-4">
              Temat: Potwierdzenie zgłoszenia drużyny do turnieju i ważne informacje
                  <br/><br/>
              Szanowni uczestnicy,
                  <br/>
              Dziękujemy za zgłoszenie drużyny na nadchodzący turniej "Turniej o Mistrzostwo Szanujący CS:2 2024". Cieszymy się, że dołączyliście do naszej imprezy i mamy nadzieję, że będzie to dla Was ekscytujące doświadczenie!
                  <br/><br/>
              Jest nam miło poinformować, że zgłoszenie drużyny zostało przyjęte. Poniżej znajdują się informacje dotyczące dalszych kroków oraz kilka ważnych rzeczy, na które chcielibyśmy zwrócić Waszą uwagę:
                  <br/><br/>
              <b>Dołącz do serwera Discord:</b> Zachęcamy wszystkich uczestników do dołączenia do naszego serwera Discord, gdzie będziemy udostępniać najnowsze informacje dotyczące Turnieju, ogłaszać harmonogramy i umożliwiać komunikację między uczestnikami oraz organizatorami. Link do serwera Discord: https://discord.gg/Q855DA5fDP.
                  <br/><br/>
              <b>Zapoznanie się z regulaminem:</b> Przeczytajcie uważnie regulamin Turnieju, abyście byli dobrze przygotowani na wydarzenie. Regulamin można znaleźć na naszej stronie internetowej pod adresem https://eventy.zs14.rgbpc.pl/regulamin.
                  <br/><br/>
              Jeśli macie jakiekolwiek pytania lub wątpliwości, nie wahajcie się skontaktować z nami poprzez serwer Discord lub odpowiedzcie na tę wiadomość.
                  <br/><br/>
              Życzymy powodzenia i niech najlepszy zespół zwycięży!
                  <br/><br/>
              Z poważaniem,<br/>
              Zespół Organizacyjny Turnieju o Mistrzostwo Szanujący CS:2 2024
            </div>
          </dd>
        </div>
        </div>
    </dl>
    </div>
</div>

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
    function openSecFilterOpen(id) {
      var value = document.getElementById("multiple_filter_"+id).value;
      var secFilter = document.getElementById("sec_"+id);
      console.log(value);
      console.log(id);
      const url_filter = "components/panel/teams/sec_multiple_select.php?variant="+value+"&event_id="+id;
      fetch(url_filter)
        .then(response => response.text())
        .then(data => {
          const parser = new DOMParser();
          const parsedDocument = parser.parseFromString(data, "text/html");

          // Wstaw zawartość strony (bez skryptów) do "panel_body"
          document.getElementById("sec_"+id).innerHTML = parsedDocument.body.innerHTML;

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
        const url = "components/panel/teams/teams_popup.php?id="+id+"&type=add";
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
        const url = "components/panel/teams/teams_popup.php?id="+id+"&type=edit";
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