<?php
$id = $_GET['id'];
$type = $_GET['type'];
if($type=='edit'){
    include "../../../scripts/conn_db.php";
    $sql = "SELECT * FROM teams WHERE team_id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $team_name = $row['name'];
    $team_class = $row['class'];
    $team_status = $row['status_id'];
    $team_group = $row['group_id'];
    $team_profile_img = $row['profile_img'];
    if($team_profile_img==''){
        $team_profile_img = 'team_default.png';
    }
    $team_event = $row['event_id'];
    $team_players = $row['players'];
    $team_id = $row['team_id'];
    
}else if($type=='add'){
    $team_name = '';
    $team_class = '';
    $team_status = 2;
    $team_group = 0;
    $team_profile_img = 'team_default.png';
    $team_event = $id;
    $team_id = '0';
}
?>
<form action="scripts/teams/<?=$type?>_team.php" method="POST" class="text-white flex flex-col h-full gap-4 px-2 pb-8" enctype="multipart/form-data">
    <input type="hidden" name="team_id" value="<?=$id?>">
    <div class="sticky z-[10] top-0 bg-[#0e0e0e] flex flex-row items-center justify-between sm:px-0 px-4 border-b border-white/10">
      <h1 class="font-medium py-6">
        <?php
        if($type=='add'){
            echo 'Dodaj drużynę';
        }else if($type=='edit'){
            echo 'Edytuj drużynę';
        }
        ?>
      </h1>
      <div class="text-center flex items-center">
            <?php
            if($type!='add'){
                echo '
              <button onclick="popupTeamsDelete()" type="button" class="flex items-center rounded-md text-red-500 hover:text-red-700 gap-1 px-4 duration-150 focus:outline-none focus:ring-2 theme-ring-focus focus:ring-offset-2">
                <span class="text-xs uppercase">Usuń</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                  <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd" />
                </svg>
              </button>
                ';
            }
            ?>
            <button class="flex items-center rounded-md text-green-500 hover:text-green-700 px-4 duration-150 focus:outline-none focus:ring-2 theme-ring-focus focus:ring-offset-2">
              <span class="text-xs uppercase">Zapisz</span>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
            </button>
            <button onclick="popupTeamsCloseConfirm()" type="button" class="rounded-md text-gray-300 hover:text-gray-500 hover:rotate-90 duration-150 focus:outline-none focus:ring-2 theme-ring-focus focus:ring-offset-2">
              <span class="sr-only">Zamknij</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
        </div>
    </div>
    <dl class="">
       <div class="grid grid-cols-8 gap-8">
        <div class="col-span-3 h-full flex flex-col justify-center items-center">
          <img id="popup_img_inptTeamProfile" class="object-cover object-center rounded-xl aspect-square max-w-[90%]" src="public/img/teams/<?=$team_profile_img?>" alt="">
          <div class="flex items-center justify-between w-full">
            <label for="fileToUploadTeamProfile" class="cursor-pointer text-xs theme-text-hover text-gray-500 py-2 duration-150">Zmień zdjęcie</label>
            <p class="text-xs text-gray-500">5MB - PNG, JPG, GIF</p>
          </div>
          <input onchange="imgPrev('TeamProfile')" class="hidden" type="file" id="fileToUploadTeamProfile" name="team_profile_img">
        </div>
        <div class="col-span-5">
          <div class="sm:grid grid-cols-4 gap-2">
            <div class="px-4 py-2 sm:px-0 col-span-3">
                <dt class="text-sm font-medium leading-6 text-gray-300">Nazwa drużny</dt>
                <input name="team_name" required type="text" value="<?=$team_name?>" class="capitalize w-full text-gray-400 text-sm focus:text-white bg-[#0e0e0e] focus:ring-0 focus:outline-0 border-b border-white/10 py-2 theme-border-focus duration-150"></input>
            </div>
            <div class="px-4 py-2 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-300">Klasa</dt>
                <input name="team_class" required type="text" value="<?=$team_class?>" class="w-full text-gray-400 text-sm focus:text-white bg-[#0e0e0e] focus:ring-0 focus:outline-0 border-b border-white/10 py-2 theme-border-focus duration-150"></input>
            </div>
          </div>
          <div>
              <label id="listbox-label" class="block text-sm font-medium leading-6 text-gray-300 mt-2">Turniej</label>
              <div class="relative mt-2">
                <select id="team_event_select" name="team_event" onchange="playersInputs()" class="outline-none duration-150 capitalize relative w-full cursor-default rounded-md bg-[#0e0e0e] focus:text-white py-1.5 pl-3 pr-10 text-left text-gray-400 shadow-sm ring-1 ring-inset ring-[#3d3d3d] focus:outline-none focus:ring-2 theme-ring-focus sm:text-sm sm:leading-6" required>
                  <option value="" class="hidden" disabled selected>Wybierz</option>
                  <?php
                    include "../../../scripts/conn_db.php";
                    $sql = "SELECT name, event_id FROM events where status_id=1 or status_id=2";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)) {
                      echo '
                      <option ';
                      if($row['event_id']==$team_event){
                        echo 'selected';
                      }
                      echo ' class="capitalize" value="'.$row['event_id'].'">'.$row['name'].'</option>
                      ';
                    }
                  ?>
                </select>
              </div>
            </div>
          <div class="sm:grid sm:grid-cols-2 gap-2">
            <div>
              <label id="listbox-label" class="block text-sm font-medium leading-6 text-gray-300 mt-2">Status</label>
              <div class="relative mt-2">
                <select name="team_status" class="duration-150 outline-none capitalize relative w-full cursor-default rounded-md bg-[#0e0e0e] focus:text-white py-1.5 pl-3 pr-10 text-left text-gray-400 shadow-sm ring-1 ring-inset ring-[#3d3d3d] focus:outline-none focus:ring-2 theme-ring-focus sm:text-sm sm:leading-6" required>
                  <?php
                    include "../../../scripts/conn_db.php";
                    $sql = "SELECT name, status_id FROM team_status";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)) {
                      echo '
                      <option class="capitalize" ';
                      if($row['status_id']==$team_status){
                        echo 'selected ';
                      }
                      echo 'value="'.$row['status_id'].'">'.$row['name'].'</option>
                      ';
                    }
                  ?>
                </select>
              </div>
            </div>
            <div>
              <label id="listbox-label" class="block text-sm font-medium leading-6 text-gray-300 mt-2">Grupa</label>
              <div id="group_select_body" class="relative mt-2">
                
              </div>
            </div>
          </div>
        </div>
       </div>
       <div id="body_players"></div>
    </dl>
</form>

<section id="popupTeamsCloseBg" class="fixed z-[50] h-0 opacity-0 top-0 left-0 w-full h-full bg-[#0000009e] transition-opacity duration-300"></section>
  <section id="popupTeamsClose" onclick="popupTeamsDelete()" class="z-[70] fixed scale-0 top-0 left-0 w-full h-full">
    <div class="flex items-center justify-center w-full h-full px-2">
      <div onclick="event.cancelBubble=true;" id="pupupFaqDeleteOutput">
        <div class="relative transform overflow-hidden rounded-lg bg-[#1c1c1c] px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
          <div class="absolute right-0 top-0 hidden pr-4 pt-4 sm:block">
            <button onclick="popupTeamsCloseConfirm()" type="button" class="rounded-md text-gray-300 hover:text-gray-500 hover:rotate-90 duration-150 focus:outline-none focus:ring-2 theme-ring-focus focus:ring-offset-2">
              <span class="sr-only">Zamknij</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          <div class="sm:flex sm:items-start">
            <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-[#3d3d3d] sm:mx-0 sm:h-10 sm:w-10">
              <svg class="h-6 w-6 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
              </svg>
            </div>
            <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
              <h3 class="text-base font-semibold leading-6 text-gray-200" id="modal-title">Masz niezapisane zmiany</h3>
              <div class="mt-2">
                <p class="text-sm text-gray-400">Czy na pewno chcesz wyjść mając niezapisane zmiany? Nie ma możliwości przywrócenia tych zmian.</p>
              </div>
            </div>
          </div>
          <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
            <button onclick="popupTeamsOpenClose()" type="button" class="active:scale-95 duration-150 inline-flex w-full justify-center rounded-md bg-yellow-600 duration-150 px-3 py-2 text-sm font-medium text-white shadow-sm hover:bg-yellow-500 sm:ml-3 sm:w-auto">Nie zapisuj</button>
            <button onclick="popupTeamsCloseConfirm()" type="button" class="active:scale-95 duration-150 mt-3 inline-flex w-full justify-center rounded-md px-3 py-2 text-sm font-medium text-gray-300 shadow-sm ring-inset ring-1 ring-[#3d3d3d] hover:bg-[#3d3d3d] duration-150 sm:mt-0 sm:w-auto">Zostań</button>
          </div>
        </div>
      </div>
    </div>
  </section>

<section id="popupTeamsDeleteBg" class="fixed z-[50] h-0 opacity-0 top-0 left-0 w-full h-full bg-[#0000009e] transition-opacity duration-300"></section>
  <section id="popupTeamsDelete" onclick="popupTeamsDelete()" class="z-[70] fixed scale-0 top-0 left-0 w-full h-full">
    <div class="flex items-center justify-center w-full h-full px-2">
      <div onclick="event.cancelBubble=true;" id="pupupFaqDeleteOutput">
        <div class="relative transform overflow-hidden rounded-lg bg-[#1c1c1c] px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
          <div class="absolute right-0 top-0 hidden pr-4 pt-4 sm:block">
            <button onclick="popupTeamsDelete()" type="button" class="rounded-md text-gray-300 hover:text-gray-500 hover:rotate-90 duration-150 focus:outline-none focus:ring-2 theme-ring-focus focus:ring-offset-2">
              <span class="sr-only">Zamknij</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          <div class="sm:flex sm:items-start">
            <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-[#3d3d3d] sm:mx-0 sm:h-10 sm:w-10">
              <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
              </svg>
            </div>
            <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
              <h3 class="text-base font-semibold leading-6 text-gray-200" id="modal-title">Usuń drużynę</h3>
              <div class="mt-2">
                <p class="text-sm text-gray-400">Czy na pewno chcesz usunąć tą drużynę? Nie ma możliwości przywrócenia tych danych.</p>
              </div>
            </div>
          </div>
          <form action="scripts/teams/delete_team.php?id=<?=$id?>" method="POST" class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
            <button class="active:scale-95 duration-150 inline-flex w-full justify-center rounded-md bg-red-600 duration-150 px-3 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Usuń</button>
            <button onclick="popupTeamsDelete()" type="button" class="active:scale-95 duration-150 mt-3 inline-flex w-full justify-center rounded-md px-3 py-2 text-sm font-medium text-gray-300 shadow-sm ring-inset ring-1 ring-[#3d3d3d] hover:bg-[#3d3d3d] duration-150 sm:mt-0 sm:w-auto">Anuluj</button>
          </form>
        </div>
      </div>
    </div>
  </section>

<script>
    function imgPrev(type) {
        const file = document.getElementById(`fileToUpload${type}`).files[0];
        const reader = new FileReader();
        reader.onloadend = function() {
            //ustawienie dla wszystkich img o id popup_img_inpt src
            for (let i = 0; i < document.querySelectorAll(`#popup_img_inpt${type}`).length; i++) {
                document.querySelectorAll(`#popup_img_inpt${type}`)[i].src = reader.result;
            }
        }
        if (file) {
            reader.readAsDataURL(file);
        } else {
            document.getElementById(`popup_img_inpt${type}`).src = "";
        }
    }
</script>

<script>
  playersInputs();
  function playersInputs(){
    const event_id = document.getElementById("team_event_select").value;
    if (event_id == "") {
      document.getElementById("body_players").innerHTML = "";
      return;
    } else {
      const url_select = "components/panel/teams/group_select.php?event_id="+event_id+"&team_group_id=<?=$team_group?>";
      fetch(url_select)
        .then(response => response.text())
        .then(data => {
          const parser = new DOMParser();
          const parsedDocument = parser.parseFromString(data, "text/html");

          // Wstaw zawartość strony (bez skryptów) do "panel_body"
          document.getElementById("group_select_body").innerHTML = parsedDocument.body.innerHTML;

          // Przechodź przez znalezione skrypty i wykonuj je
          const scripts = parsedDocument.querySelectorAll("script");
          scripts.forEach(script => {
            const scriptElement = document.createElement("script");
            scriptElement.textContent = script.textContent;
            document.body.appendChild(scriptElement);
          });
        });

      const url = "components/panel/teams/players_inputs.php?event_id="+event_id+"&team_id=<?=$team_id?>";
      fetch(url)
        .then(response => response.text())
        .then(data => {
          const parser = new DOMParser();
          const parsedDocument = parser.parseFromString(data, "text/html");

          // Wstaw zawartość strony (bez skryptów) do "panel_body"
          document.getElementById("body_players").innerHTML = parsedDocument.body.innerHTML;

          // Przechodź przez znalezione skrypty i wykonuj je
          const scripts = parsedDocument.querySelectorAll("script");
          scripts.forEach(script => {
            const scriptElement = document.createElement("script");
            scriptElement.textContent = script.textContent;
            document.body.appendChild(scriptElement);
          });
        });
    }
  }

</script>
<script>
    function popupTeamsCloseConfirm() {
        var popup = document.getElementById("popupTeamsClose")
        var popupBg = document.getElementById("popupTeamsCloseBg")
        popupBg.classList.toggle("opacity-0")
        popupBg.classList.toggle("h-0")
        popup.classList.toggle("scale-0")
        popup.classList.add("duration-200")
    }
</script>
<script>
    function popupTeamsDelete() {
        var popup = document.getElementById("popupTeamsDelete")
        var popupBg = document.getElementById("popupTeamsDeleteBg")
        popupBg.classList.toggle("opacity-0")
        popupBg.classList.toggle("h-0")
        popup.classList.toggle("scale-0")
        popup.classList.add("duration-200")
    }
</script>
