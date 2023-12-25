<?php
  $id = $_GET['id'];
  include "../../../scripts/conn_db.php";
  $sql1 = "SELECT * FROM events WHERE event_id = '".$id."'";
  $result1 = mysqli_query($conn, $sql1);
  $row = mysqli_fetch_array($result1);
?>
<div class="">
  <div class="mx-auto px-4 py-8 sm:px-6 sm:py-8 lg:max-w-7xl lg:px-8">
    <!-- Product -->
    <div
      class="lg:grid lg:grid-cols-7 lg:grid-rows-1 lg:gap-x-8 lg:gap-y-10 xl:gap-x-16"
    >
      <!-- Product image -->
      <div class="lg:col-span-4 lg:row-end-1">
        <div ondrop='dropHandler(event)' ondragover='dragOverHandler(event)' class="eventPhotoContainer aspect-h-3 aspect-w-4 overflow-hidden rounded-lg bg-[#0e0e0e] relative group/item">
          <div id="Zdjęcie" class="editable absolute w-full h-full group-edit hidden group-hover/item:block group-hover/item:bg-slate-900/50">
            <div class="h-full flex flex-col justify-center items-center content-center gap-y-4">
              <h1 class="text-2xl text-white">Ustaw zdjęcie wydarzenia</h1>
              <button onclick="chooseNewPhoto()" class="cursor-pointer flex w-min-fit w-max-fit items-center justify-center rounded-md theme-bg theme-bg-hover px-8 py-3 text-base duration-150 font-medium text-white">Wybierz zdjęcie</button>
              <p class="text-xs theme-text mt-2">Przeciągnij i upuść - PNG, JPG, GIF do 5MB</p>
              <form action="scripts/events/export_img.php" method="post" enctype="multipart/form-data" class="hidden">
                <input onchange="imgPrev()" class="hidden" type="file" name="fileToUpload" id="fileToUpload">
                <?php
                  if($id == 0){
                    $pre = "SELECT event_id+1 as 'new_id' FROM events ORDER by event_id+1 desc limit 1";
                    $img_id = mysqli_fetch_array(mysqli_query($conn, $pre))[0];
                    echo '<input type="hidden" name="eventPhotoId" id="eventPhotoId" value="'.$img_id.'">';
                  } else{
                    if($row['img']=='' || $row['img']=='NULL' || $row['img']==NULL){
                      $row['img'] = 'event1.jpg';
                    }
                     echo '<input type="hidden" name="eventPhotoId" id="eventPhotoId" value="'.$id.'">';
                  }
                ?>
                <button type="submit" class="ImgExportSubmitButton"></button>
              </form>
            </div>
          </div>
          <?php
            if($id==0){
              echo '<img id="eventPhotoInput" src="public/img/events/event1.jpg" alt="Sample of 30 icons with friendly and fun details in outline, filled, and brand color styles." class="object-cover object-center w-full z-998"/>';
            } else{
              echo '<img id="eventPhotoInput" src="public/img/events/'.$row['img'].'" alt="Sample of 30 icons with friendly and fun details in outline, filled, and brand color styles." class="object-cover object-center w-full z-998"/>';
            }
          ?>
        </div>
      </div>

      <!-- Product details -->
      <div
        class="mx-auto mt-14 max-w-2xl sm:mt-16 lg:col-span-3 lg:row-span-2 lg:row-end-2 lg:mt-0 lg:max-w-none"
      >
        <div class="flex flex-col-reverse">
          <div class="mt-4">
            <label for="Przeznaczenie" class="block text-sm font-medium leading-6 text-gray-300">Przeznaczenie*</label>
            <div class="relative my-2">
              <select id="Przeznaczenie" name="Przeznaczenie" class="editable break-words	w-4/5 outline-none duration-150 capitalize relative cursor-default rounded-md bg-[#0e0e0e] focus:text-white py-1.5 pl-3 pr-10 text-left text-gray-400 text-xs shadow-sm ring-1 ring-inset ring-[#3d3d3d] focus:outline-none focus:ring-2 theme-ring-focus sm:leading-6" required>
                <?php
                if($id==0){
                  echo '<option value="" disabled selected>Wybierz</option>';
                  echo '<option value="all">Wszyscy</option>';
                  echo '<option value="inf">Informatycy</option>';
                  echo '<option value="prg">Programiści</option>';
                } else{
                  if($row['destiny'] == 'all'){
                    // printf('jest all');
                    echo '<option value="all" selected>Wszyscy</option>';
                    echo '<option value="inf">Informatycy</option>';
                    echo '<option value="prg">Programiści</option>';
                  } else if($row['destiny'] == 'prg'){
                    // printf('jest prg');
                    echo '<option value="all">Wszyscy</option>';
                    echo '<option value="inf">Informatycy</option>';
                    echo '<option value="prg" selected>Programiści</option>';
                  } else if($row['destiny'] == 'inf'){
                    // printf('jest inf');
                    echo '<option value="all">Wszyscy</option>';
                    echo '<option value="inf" selected>Informatycy</option>';
                    echo '<option value="prg">Programiści</option>';
                  } else{
                    echo '<option value="" disabled selected>Nie wybrano. Wybierz</option>';
                    echo '<option value="all">Wszyscy</option>';
                    echo '<option value="inf">Informatycy</option>';
                    echo '<option value="prg">Programiści</option>';
                  }
                }
                ?>
              </select>
            </div>
            <article id="Tytuł" class="editable break-words text-2xl font-bold tracking-tight text-gray-200 sm:text-3xl hover:cursor-pointer hover:outline-2 hover:outline-dashed hover:outline-[var(--text)]"><?php if($id == 0){ echo '<h1>np. Wielki Turniej CS:GO Szanajcy</h1>';} else {echo $row['name'];} ?></article>
            <?php
            $month = array('Styczeń', 'Luty', 'Marzec','Kwiecień','Maj','Czerwiec','Lipiec','Sierpień','Wrzesień','Październik','Listopad','Grudzień');
            if($id == 0 || $row['edition'] == 'NULL' || $row['edition'] == NULL || $row['edition'] == ''){
              $today = date('j|n|Y');
              $today = explode('|', $today);
              $today = ''.$month[$today[1]-1].' '.$today[0].', '.$today[2].'';
            } else{
              $today = date('j|n|Y');
              $today = explode('|', $today);
              $today = ''.$month[$today[1]-1].' '.$today[0].', '.$today[2].'';
              $row['edition'] = substr_replace($row['edition'],'(Zaktualizowano '.$today.')',strrpos($row['edition'], '('), strrpos($row['edition'], ')') - strrpos($row['edition'], '(')+1);
            }
            ?>
            <article id="Edycja" class="editable break-words mt-2 text-sm text-gray-500 hover:cursor-pointer hover:outline-2 hover:outline-dashed hover:outline-[var(--text)]"><?php if($id==0){echo '<p>Edycja pierwsza (Zaktualizowano '.$today.')</p>';} else{echo $row['edition'];}?></article>
          </div>
        </div>
        <?php
          if($id == 0 || $row['description'] == 'NULL' || $row['description'] == NULL || $row['description'] == ''){
              $row['description'] = '<p>np. Jest to pierwsza edycja turnieju w grę Counter Strike: Global Offensive w naszej szkole!Zawodnicy będą rywalizować o tytuł najlepszej drużyny w szkole przy tym propagować ducha fair play i dobrej zabawy.</p>';
            } else{
              $row['description'] = $row['description'];
            }
        ?>
        <article id="Opis" class="editable break-words	mt-6 text-gray-400 hover:cursor-pointer hover:outline-2 hover:outline-dashed hover:outline-[var(--text)]"><?=$row['description']?></article>
        <div  class="mt-10 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-2">
          <a type="button" onclick="addNewEvent()" class="cursor-pointer flex w-full items-center justify-center rounded-md theme-bg theme-bg-hover px-8 py-3 text-base duration-150 font-medium text-white"><?php if($id==0){echo 'Dodaj';} else{echo 'Zapisz zmiany';} ?></a>
          <a
            onclick="datePicker()"
            id="dateButton"
            type="button"
            class="cursor-pointer flex w-full items-center justify-center rounded-md border border-transparent theme-bg-hover theme-text duration-150 hover:!text-white bg-indigo-50 px-8 py-3 text-base font-medium"
          >
            <?php if($id==0){echo 'Wybierz datę';} else{echo 'Zmien datę';}?>
          </a>
        </div>
        <!-- model rozgrywek -->
        <div class="mt-10 border-t border-[#3d3d3d] pt-10 relative">
          <h3 class="text-sm font-medium text-gray-300">Model rozgrywek</h3>
          <article id="Model" class="editable break-words	disableable mt-4 text-sm text-gray-400 hover:cursor-pointer hover:outline-2 hover:outline-dashed hover:outline-[var(--text)] <?php if($id==0){echo '';}else{if($row['model']=='' || $row['model']=='NULL' || $row['model']=='off' || $row['model']==NULL){echo 'hidden';} else{echo '';}} ?>"><?php if($id==0){echo '<p>np.<p><br></p>Gra będzie się toczyć w 3 fazach:</p><p></br></p><p>- faza grupowa - zdalnie</p><p></br></p><p>- drabinka szwecka - zdalnie</p><p></br></p><p>- finały - stacjonarnie</p>';}else{if($row['model']=='' || $row['model']=='NULL' || $row['model']=='off' || $row['model']==NULL){echo '<p>np.<p><br></p>Gra będzie się toczyć w 3 fazach:</p><p></br></p><p>- faza grupowa - zdalnie</p><p></br></p><p>- drabinka szwecka - zdalnie</p><p></br></p><p>- finały - stacjonarnie</p>';} else{echo $row['model'];}} ?></article>
          <div class="absolute right-0 top-5">
              <label class="relative inline-flex items-center cursor-pointer">
              <input type="checkbox" value="" class="sr-only peer hidden switcher" <?php if($id==0){echo 'checked';}else{if($row['model']=='' || $row['model']=='NULL' || $row['model']=='off' || $row['model']==NULL){echo '';} else{echo 'checked';}} ?>>
                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:theme-text dark:peer-focus:theme-text dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[var(--text)]"></div>
            </label>
          </div>
        </div>
        <!-- terminy -->
        <div class="mt-10 border-t border-[#3d3d3d] pt-10 relative">
          <h3 class="text-sm font-medium text-gray-300">Terminy</h3>
          <article id="Terminy" class="editable break-words	disableable mt-4 text-sm text-gray-400 hover:cursor-pointer hover:outline-2 hover:outline-dashed hover:outline-[var(--text)] <?php if($id==0){echo '';}else{if($row['terms']=='' || $row['terms']=='NULL' || $row['terms']=='off' || $row['terms']==NULL){echo 'hidden';} else{echo '';}} ?>"><?php if($id==0){echo '<p>np. Zgłoszenia są przyjmowane do <span style="color:var(--text)">31 grudnia 2023</span>.</p><p><br /></p><p>Faza grupowa rozpocznie się <span style="color:var(--text)">1 stycznia 2024</span>, będzie trwać przezkolejne 2 tygodnie.</p><p><br ></p><p>Drabinka szwecka rozpocznie się <span style="color:var(--text)">15 stycznia 2024</span>, będzie trwać przezkolejne 2 tygodnie.</p><p><br /></p><p>Finał odbędzie się dnia <span style="color:var(--text)">2 lutego 2024</span> roku podczas dniainformatyka.</p>';}else{if($row['terms']=='' || $row['terms']=='NULL' || $row['terms']=='off' || $row['terms']==NULL){echo '<p>np. Zgłoszenia są przyjmowane do <span style="color:var(--text)">31 grudnia 2023</span>.</p><p><br /></p><p>Faza grupowa rozpocznie się <span style="color:var(--text)">1 stycznia 2024</span>, będzie trwać przezkolejne 2 tygodnie.</p><p><br ></p><p>Drabinka szwecka rozpocznie się <span style="color:var(--text)">15 stycznia 2024</span>, będzie trwać przezkolejne 2 tygodnie.</p><p><br /></p><p>Finał odbędzie się dnia <span style="color:var(--text)">2 lutego 2024</span> roku podczas dniainformatyka.</p>';} else{echo $row['terms'];}} ?></article>
          <div class="absolute right-0 top-5">
              <label class="relative inline-flex items-center cursor-pointer">
              <input type="checkbox" value="" class="sr-only peer hidden switcher" <?php if($id==0){echo 'checked';}else{if($row['terms']=='' || $row['terms']=='NULL' || $row['terms']=='off' || $row['terms']==NULL){echo '';} else{echo 'checked';}} ?>>
                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:theme-text dark:peer-focus:theme-text dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[var(--text)]"></div>
            </label>
          </div>
        </div>
        <!-- nagrody -->
         <div class="mt-10 border-t border-[#3d3d3d] pt-10 relative">
          <h3 class="text-sm font-medium text-gray-300">Nagrody</h3>
          <article id="Nagrody" class="editable break-words	disableable mt-4 text-sm text-gray-400 hover:cursor-pointer hover:outline-2 hover:outline-dashed hover:outline-[var(--text)] <?php if($id==0){echo '';}else{if($row['prizes']=='' || $row['prizes']=='NULL' || $row['prizes']=='off' || $row['prizes']==NULL){echo 'hidden';} else{echo '';}} ?>"><?php if($id==0){echo '<p>np. co XD</p>';}else{if($row['prizes']=='' || $row['prizes']=='NULL' || $row['prizes']=='off' || $row['prizes']==NULL){echo '<p>np. co XD</p>';} else{echo $row['prizes'];}} ?></article>
          <div class="absolute right-0 top-5">
              <label class="relative inline-flex items-center cursor-pointer">
              <input type="checkbox" value="" class="sr-only peer hidden switcher" <?php if($id==0){echo 'checked';}else{if($row['prizes']=='' || $row['prizes']=='off' || $row['prizes']=='NULL' || $row['prizes']==NULL){echo '';} else{echo 'checked';}} ?>>
                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:theme-text dark:peer-focus:theme-text dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[var(--text)]"></div>
            </label>
          </div>
        </div>
        <!-- drużyny -->
        <div class="mt-10 border-t border-[#3d3d3d] pt-10 relative">
          <h3 class="text-sm font-medium text-gray-300">Drużyny</h3>
          <article id="Drużyny" class="editable break-words	disableable mt-4 text-sm text-gray-400 hover:cursor-pointer hover:outline-2 hover:outline-dashed hover:outline-[var(--text)] <?php if($id==0){echo '';}else{if($row['teams']=='' || $row['teams']=='NULL' || $row['teams']=='off' || $row['teams']==NULL){echo 'hidden';} else{echo '';}} ?>"><?php if($id==0){echo '<p>np. Organizator przewiduje maksymalnie dwie drużyny z jednej klasy.</p><p><br /></p><p>W drużynie może być maksymalnie <span style="color:var(--text)">5 osób</span> oraz może być rezerwowy.</p>';}else{if($row['teams']=='' || $row['teams']=='NULL' || $row['teams']=='off' || $row['teams']==NULL){echo '<p>np. Organizator przewiduje maksymalnie dwie drużyny z jednej klasy.</p><p><br /></p><p>W drużynie może być maksymalnie <span style="color:var(--text)">5 osób</span> oraz może być rezerwowy.</p>';} else{echo $row['teams'];}} ?></article>
          <div class="absolute right-0 top-5">
              <label class="relative inline-flex items-center cursor-pointer">
              <input type="checkbox" value="" class="sr-only peer hidden switcher" <?php if($id==0){echo 'checked';}else{if($row['teams']=='' || $row['teams']=='off' || $row['teams']=='NULL' || $row['teams']==NULL){echo '';} else{echo 'checked';}} ?>>
                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:theme-text dark:peer-focus:theme-text dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[var(--text)]"></div>
            </label>
          </div>
        </div>
        <!-- wymogi -->
        <div class="mt-10 border-t border-[#3d3d3d] pt-10 relative">
          <h3 class="text-sm font-medium text-gray-300">Wymogi</h3>
          <article id="Wymogi" class="editable break-words disableable mt-4 text-sm text-gray-400 hover:cursor-pointer hover:outline-2 hover:outline-dashed hover:outline-[var(--text)] <?php if($id==0){echo '';}else{if($row['requirements']=='' || $row['requirements']=='NULL' || $row['requirements']=='off' || $row['requirements']==NULL){echo 'hidden';} else{echo '';}} ?>"><?php if($id==0){echo '<p>np.<p><br></p>- Oryginalna licencja gry CS:GO</p><p>- Komputer z dostępem do internetu</p><p>- Konta: steam oraz discord</p><p>- Zgoda na przetwarzanie danych osobowych</p>';}else{if($row['requirements']=='' || $row['requirements']=='NULL' || $row['requirements']=='off' || $row['requirements']==NULL){echo '<p>np.<p><br></p>- Oryginalna licencja gry CS:GO</p><p>- Komputer z dostępem do internetu</p><p>- Konta: steam oraz discord</p><p>- Zgoda na przetwarzanie danych osobowych</p>';} else{echo $row['requirements'];}} ?></article>
          <div class="absolute right-0 top-5">
              <label class="relative inline-flex items-center cursor-pointer">
              <input type="checkbox" value="" class="sr-only peer hidden switcher" <?php if($id==0){echo 'checked';}else{if($row['requirements']=='' || $row['requirements']=='NULL' || $row['requirements']=='off' || $row['requirements']==NULL){echo '';} else{echo 'checked';}} ?>>
                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:theme-text dark:peer-focus:theme-text dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[var(--text)]"></div>
            </label>
          </div>
        </div>
        <!-- zapisy -->
        <div class="mt-10 border-t border-[#3d3d3d] pt-10 relative">
          <h3 class="text-sm font-medium text-gray-300">Zapisy</h3>
          <article id="Zapisy" class="editable break-words disableable mt-4 text-sm text-gray-400 hover:cursor-pointer hover:outline-2 hover:outline-dashed hover:outline-[var(--text)] <?php if($id==0){echo '';}else{if($row['sign']=='' || $row['sign']=='off' || $row['sign']=='NULL' || $row['sign']==NULL){echo 'hidden';} else{echo '';}} ?>"><?php if($id==0){echo '<p>np. For personal and professional use. You cannot resell or redistributethese icons in their original or modified state.</p>';}else{if($row['sign']=='' || $row['sign']=='off' || $row['sign']=='NULL' || $row['sign']==NULL){echo '<p>np. For personal and professional use. You cannot resell or redistributethese icons in their original or modified state.</p>';} else{echo $row['sign'];}} ?></article>
          <div class="absolute right-0 top-5">
              <label class="relative inline-flex items-center cursor-pointer">
              <input type="checkbox" value="" class="sr-only peer hidden switcher" <?php if($id==0){echo 'checked';}else{if($row['sign']=='' || $row['sign']=='NULL' || $row['sign']=='off' || $row['sign']==NULL){echo '';} else{echo 'checked';}} ?>>
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
                class="duration-150 events-button border-transparent text-gray-300 hover:border-gray-300 theme-border theme-text-hover whitespace-nowrap border-b-2 py-6 text-sm font-medium"
                type="button"
              >
                Wyniki
              </button>
              <button
                class="duration-150 events-button border-transparent text-gray-300 hover:border-gray-300 theme-border theme-text-hover whitespace-nowrap border-b-2 py-6 text-sm font-medium"
                type="button"
              >
                Harmonogram
              </button>
              <button
                class="duration-150 events-button border-transparent text-gray-300 hover:border-gray-300 theme-border theme-text-hover whitespace-nowrap border-b-2 py-6 text-sm font-medium"
                type="button"
              >
                Drużyny
              </button>
              <button
                class="duration-150 theme-text text-gray-300 hover:border-gray-300 theme-border whitespace-nowrap border-b-2 py-6 text-sm font-medium"
                type="button"
              >
                Informacje
              </button>
            </div>
          </div>
          <div id="info" class="text-sm text-gray-500 tab">
            <article  id="Informacje" class="pt-2 editable break-words hover:cursor-pointer hover:outline-2 hover:outline-dashed hover:outline-[var(--text)]">
              <?php
                if($id==0){
                  echo '<p>Faza grupowa</p><p><br></p><p>Po wylosowaniu grup kapitanowie drużyn wyznaczonych do rozgrywek odpowiedzialni są za ustalenie dogodnego terminu dla dwóch drużyn.</p><p><br></p><p>W przypadku braku możliwości ustalenia terminu, organizatorzy ustalają termin spotkania, które jeśli się nie odbędzie zostanie uznane za przegrane przez obie strony.</p><p><br></p><p>Zawodnicy zobowiązani są do zgłaszania wyników spotkań do organizatorów.</p><p><br></p><p>Mecz rozgrywany jest do 2 wygranych map, komunikacja powinna odbywać się za pomocą naszego <span style="color:var(--text)">Discorda</span>.</p><p>Drabinka szwedzka</p><p><br></p><p>Yes. The icons are drawn on a 24 x 24 pixel grid, but theicons can be scaled to different sizes as needed. We dont recommend going smaller than 20 x 20 or larger than 64 x 64 to retain legibility and visual balance.</p><p><br></p><p>Faza pucharowa</p><p><br></p><p>Yes. The icons are drawn on a 24 x 24 pixel grid, but the icons can be scaled to different sizes as needed. We dont recommend going smaller than 20 x 20 or larger than 64 x 64 to retain legibility and visual balance.</p><p><br></p><p>Organizator zastrzega sobie prawo do odwołania turnieju w przypadku braku drużyn.<p><br /></p><p>Organizator jest uprawniony do dyskwalifikacji drużyny lub zawodnika w przypadku złamania regulaminu.</p>';
                } else{
                  if($row['infos'] =='NULL' || $row['infos'] == NULL || $row['infos']==''){
                    echo '<p>Faza grupowa</p><p><br></p><p>Po wylosowaniu grup kapitanowie drużyn wyznaczonych do rozgrywek odpowiedzialni są za ustalenie dogodnego terminu dla dwóch drużyn.</p><p><br></p><p>W przypadku braku możliwości ustalenia terminu, organizatorzy ustalają termin spotkania, które jeśli się nie odbędzie zostanie uznane za przegrane przez obie strony.</p><p><br></p><p>Zawodnicy zobowiązani są do zgłaszania wyników spotkań do organizatorów.</p><p><br></p><p>Mecz rozgrywany jest do 2 wygranych map, komunikacja powinna odbywać się za pomocą naszego <span style="color:var(--text)">Discorda</span>.</p><p>Drabinka szwedzka</p><p><br></p><p>Yes. The icons are drawn on a 24 x 24 pixel grid, but theicons can be scaled to different sizes as needed. We dont recommend going smaller than 20 x 20 or larger than 64 x 64 to retain legibility and visual balance.</p><p><br></p><p>Faza pucharowa</p><p><br></p><p>Yes. The icons are drawn on a 24 x 24 pixel grid, but the icons can be scaled to different sizes as needed. We dont recommend going smaller than 20 x 20 or larger than 64 x 64 to retain legibility and visual balance.</p><p><br></p><p>Organizator zastrzega sobie prawo do odwołania turnieju w przypadku braku drużyn.<p><br /></p><p>Organizator jest uprawniony do dyskwalifikacji drużyny lub zawodnika w przypadku złamania regulaminu.</p>';
                  } else{
                    echo $row['infos'];
                  }
                }
              ?>
            </article>
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
  <section id="popupEventsCloseBg" class="fixed z-[50] h-0 opacity-0 top-0 left-0 w-full h-full bg-[#0000009e] transition-opacity duration-300"></section>
  <section id="popupEventsClose" class="z-[70] fixed scale-0 top-0 left-0 w-full h-full">
    <div class="flex items-center justify-center w-full h-full px-2">
      <div onclick="event.cancelBubble=true;">
        <div class="relative transform overflow-hidden rounded-lg bg-[#1c1c1c] px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
          <div class="absolute right-0 top-0 hidden pr-4 pt-4 sm:block">
            <button onclick="popupEventsCloseConfirm()" type="button" class="rounded-md text-gray-300 hover:text-gray-500 hover:rotate-90 duration-150 focus:outline-none focus:ring-2 theme-ring-focus focus:ring-offset-2">
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
              <h3 class="text-base font-semibold leading-6 text-gray-200" id="modal-title">Błąd importowania zdjęcia</h3>
              <div class="mt-2">
                <p class="text-sm text-gray-400">Wybrane zdjęcie ma nieprawidłowy format lub ma rozmiar większy niż 5MB</p>
              </div>
            </div>
          </div>
          <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
            <button onclick="popupEventsCloseConfirm()" type="button" class="active:scale-95 duration-150 mt-3 inline-flex w-full justify-center rounded-md px-3 py-2 text-sm font-medium text-gray-300 shadow-sm ring-inset ring-1 ring-[#3d3d3d] hover:bg-[#3d3d3d] duration-150 sm:mt-0 sm:w-auto">Rozumiem</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="popupEventsCloseConfirmBg" class="fixed z-[50] h-0 opacity-0 top-0 left-0 w-full h-full bg-[#0000009e] transition-opacity duration-300"></section>
  <section id="popupEventsCloseConfirm" onclick="popupEventsDelete()" class="z-[70] fixed scale-0 top-0 left-0 w-full h-full">
    <div class="flex items-center justify-center w-full h-full px-2">
      <div onclick="event.cancelBubble=true;" id="pupupEventDeleteOutput">
        <div class="relative transform overflow-hidden rounded-lg bg-[#1c1c1c] px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
          <div class="absolute right-0 top-0 hidden pr-4 pt-4 sm:block">
            <button onclick="popupEventsDelete()" type="button" class="rounded-md text-gray-300 hover:text-gray-500 hover:rotate-90 duration-150 focus:outline-none focus:ring-2 theme-ring-focus focus:ring-offset-2">
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
            <button onclick="popupEventsDeleteConfrim()" type="button" class="active:scale-95 duration-150 inline-flex w-full justify-center rounded-md bg-yellow-600 duration-150 px-3 py-2 text-sm font-medium text-white shadow-sm hover:bg-yellow-500 sm:ml-3 sm:w-auto">Nie zapisuj</button>
            <button onclick="popupEventsDelete()" type="button" class="active:scale-95 duration-150 mt-3 inline-flex w-full justify-center rounded-md px-3 py-2 text-sm font-medium text-gray-300 shadow-sm ring-inset ring-1 ring-[#3d3d3d] hover:bg-[#3d3d3d] duration-150 sm:mt-0 sm:w-auto">Zostań</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="popupEventsAddCloseBg" class="fixed z-[50] h-0 opacity-0 top-0 left-0 w-full h-full bg-[#0000009e] transition-opacity duration-300"></section>
  <section id="popupEventsAddClose" class="z-[70] fixed scale-0 top-0 left-0 w-full h-full">
    <div class="flex items-center justify-center w-full h-full px-2">
      <div onclick="event.cancelBubble=true;" id="pupupFaqDeleteOutput">
        <div class="relative transform overflow-hidden rounded-lg bg-[#1c1c1c] px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
          <div class="absolute right-0 top-0 hidden pr-4 pt-4 sm:block">
            <button onclick="popupEventsAddCloseConfirm()" type="button" class="rounded-md text-gray-300 hover:text-gray-500 hover:rotate-90 duration-150 focus:outline-none focus:ring-2 theme-ring-focus focus:ring-offset-2">
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
              <h3 class="text-base font-semibold leading-6 text-gray-200" id="modal-title"><?php if($id==0){echo 'Dodajesz nowe wydarzenie';} else{echo 'Edutyjesz wydarzenie';} ?></h3>
              <div class="mt-2 flex flex-col gap-y-4">
                <p class="popupEventsAddCloseConfirmPara text-sm text-gray-400 <?php if($id==0){echo '';} else{echo 'edde';} ?>"></p>
                <p class="text-sm text-gray-400"><?php if($id==0){echo 'Czy na pewno chcesz dodać wydarzenie w tej formie?';} else{echo 'Czy na pewno chcesz wprowadzić te zmiany do tego wydarzenia';} ?></p>
              </div>
            </div>
          </div>
          <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
            <button <?php if($id==0){echo 'onclick="callPHP()"';} else{echo 'onclick="callPHPUpdate()"';} ?>  type="button" class="active:scale-95 duration-150 inline-flex w-full justify-center rounded-md bg-yellow-600 duration-150 px-3 py-2 text-sm font-medium text-white shadow-sm hover:bg-yellow-500 sm:ml-3 sm:w-auto"><?php if($id==0){echo 'Dodaję';} else{echo 'Zmieniam';} ?></button>
            <button onclick="popupEventsAddCloseConfirm()" type="button" class="active:scale-95 duration-150 mt-3 inline-flex w-full justify-center rounded-md px-3 py-2 text-sm font-medium text-gray-300 shadow-sm ring-inset ring-1 ring-[#3d3d3d] hover:bg-[#3d3d3d] duration-150 sm:mt-0 sm:w-auto">Zostaję</button>
            <input type="hidden" name="EventId" id="EventId" value="<?php echo $id;?>">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="popupCalCloseBg" class="fixed z-[100] h-0 opacity-0 top-0 left-0 w-full h-full bg-[#0000009e] transition-opacity duration-300"></section>
  <section id="popupCalClose" onclick="popupCalDelete()" class="z-[110] fixed scale-0 top-0 left-0 w-full h-full">
    <div class="flex items-center justify-center w-full h-full px-2">
        <div onclick="event.cancelBubble=true;">
          <div class="relative min-w-[60vw] transform overflow-hidden rounded-lg bg-[#1c1c1c] px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
            <div class="h-full mt-10 text-center lg:col-start-8 lg:col-end-13 lg:row-start-1 lg:mt-9 xl:col-start-9">
                <div class="flex items-center text-gray-900"></div>
              <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js"></script>
              
              <div id="Kalendarz" class="editable aspect-[2/1]"></div>
                <script>
                  var lastInfo='';
                  var calendarEl = document.getElementById("Kalendarz");
                  var calendar = new FullCalendar.Calendar(calendarEl, {
                    locale: 'pl',
                    dateClick: function(info) {
                      if(info.dayEl.style.backgroundColor == 'red'){
                        info.dayEl.removeAttribute('style');
                      } else{
                        info.dayEl.style.backgroundColor = 'red'
                        if(lastInfo!=''){
                          lastInfo.removeAttribute('style');
                        }
                        lastInfo = info.dayEl;
                      }
                    },
                    select: function (info) {
                      // alert("Wybrano datę: " + info.startStr);
                      selectedDate = info.startStr;
                      return selectedDate;
                    },
                    initialView: "dayGridMonth",
                    selectable: true,
                  });
                  calendar.render();
                
                </script>
              </div>
              <div class="text-center theme-text text-2xl mb-4 CurrentDate"><?php if($id==0){echo '';} else{echo 'Ostatnio wybrana data: '.$row['data'];}?></div>
              <div class="text-center">
            <button type="button" onclick="popupCalCloseConfirm()" class="mx-1 inline-flex items-center gap-x-2 rounded-md bg-gray-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Anuluj
            </button>
            <button onclick="saveChangesDate()" type="button" class="inline-flex items-center gap-x-2 rounded-md bg-green-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Zapisz
            </button>
        </div>
            </div>
        </div>
    </div>
  </section>
  <script>
    var editables = document.querySelectorAll('.editable');
    editables[1].addEventListener('change', ()=>{
      var resultOfStorage = localStorage.getItem('EventTempSettings')
        forWhat = editables[1].id;
        EventTempSettings[forWhat] = editables[1].value;
        localStorage.setItem('EventTempSettings', JSON.stringify(EventTempSettings));
    //     var resultOfStorage = localStorage.getItem('EventTempSettings')
    // console.log('EventTempSettings: ', JSON.parse(resultOfStorage));
    })
    var switchers = document.querySelectorAll('.switcher');
    var disableables = document.querySelectorAll('.disableable')
    var disableablesInner = [];
    // disableables.forEach((elem, index)=>{
    //   elem.addEventListener('click', ()=>{
    //     openPopupEvent(index+5)
    //   })
    // })
    switchers.forEach((elem, index)=>{
      elem.addEventListener('change', ()=>{
        if(elem.checked){
          disableAblesAreON(index)
        } else{
        disableAblesAreOff(index)
        }
      })
    })
    function disableAblesAreOff(xd){
      if(xd>=0 && xd<=5){
        disableables[xd].classList.add('hidden');
      switchers[xd].checked = false;
        var resultOfStorage = localStorage.getItem('EventTempSettings')
        forWhat = editables[xd+5].id;
        EventTempSettings[forWhat] = 'off';
        localStorage.setItem('EventTempSettings', JSON.stringify(EventTempSettings));
        // var resultOfStorage = localStorage.getItem('EventTempSettings')
        // console.log('EventTempSettings: ', JSON.parse(resultOfStorage));
      }
    }
    function disableAblesAreON(xd){
      disableables[xd].classList.remove('hidden');
      switchers[xd].checked = true;
      var resultOfStorage = localStorage.getItem('EventTempSettings')
        forWhat = editables[xd+5].id;
        delete EventTempSettings[forWhat]
        localStorage.setItem('EventTempSettings', JSON.stringify(EventTempSettings));
        // var resultOfStorage = localStorage.getItem('EventTempSettings')
        // console.log('EventTempSettings: ', JSON.parse(resultOfStorage));
    }
    function addListenerOpenPopUp(){
          for(let s = 1; s<editables.length-1; s++){
              editables[s].addEventListener('click', ()=>{
                openPopupEvent(s)
              })
          }
        }
        addListenerOpenPopUp()
  </script>
  <script>
    localStorage.setItem('EventTempSettings', JSON.stringify(EventTempSettings));
    var resultOfStorage = localStorage.getItem('EventTempSettings')
  </script>
  <script>
    function popupEventsDelete() {
        var popup = document.getElementById("popupEventsCloseConfirm")
        var popupBg = document.getElementById("popupEventsCloseConfirmBg")
        popupBg.classList.toggle("opacity-0")
        popupBg.classList.toggle("h-0")
        popup.classList.toggle("scale-0")
        popup.classList.add("duration-200")
    }

    function popupEventsDeleteConfrim(){
      popupEventsOpenClose();
      localStorage.removeItem('EventTempSettings');
      EventTempSettings = {};
      localStorage.setItem('EventTempSettings', JSON.stringify(EventTempSettings));
    }
</script>
  <script>
    var sendEventPhotoButton = document.querySelectorAll('.ImgExportSubmitButton')[0];
    var phpstring='';
    function createPostValues(xd){
        for(let y = 0; y<xd.length;y++){
          phpstring = phpstring + xd[y][0]+'='+xd[y][1]+'&'
        }
        phpstring = phpstring.slice(0,phpstring.length-1);
        return phpstring;
      }
    function callPHP() {
      var ext = document.querySelectorAll(`#eventPhotoInput`)[0].title;
      if(ext == 'jpeg'){
        ext = 'jpg'
      }
      var httpc = new XMLHttpRequest();
      var url = "scripts/events/add_event.php";
      var params = JSON.parse(localStorage.getItem('EventTempSettings'));
      var newPhotoInput = document.getElementById('fileToUpload');
      params = Object.keys(params).map((key) => [key, params[key]]);
      params = createPostValues(params);
      httpc.onreadystatechange = function() { //Call a function when the state changes.
          if(httpc.readyState == 4 && httpc.status == 200) { // complete and no errors
              // alert(httpc.responseText);
              if(newPhotoInput.files[0]){
                sendEventPhotoButton.click();
              }
          }
      };
      httpc.open("POST", url, true); // sending as POST
      httpc.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      httpc.send(params+'&ext='+ext);
      if(!newPhotoInput.files[0]){
        location.reload();
      }
    }
    function callPHPUpdate() {
      var ext = document.querySelectorAll(`#eventPhotoInput`)[0].title;
      if(ext == 'jpeg'){
        ext = 'jpg'
      }
      var httpc = new XMLHttpRequest();
      var url = "scripts/events/update_event.php";
      var params = JSON.parse(localStorage.getItem('EventTempSettings'));
      var id = document.querySelector('#EventId').value;
      var newPhotoInput = document.getElementById('fileToUpload');
      params = Object.keys(params).map((key) => [key, params[key]]);
      params = createPostValues(params);
      httpc.onreadystatechange = function() { //Call a function when the state changes.
          if(httpc.readyState == 4 && httpc.status == 200) { // complete and no errors
              // alert(httpc.responseText);
              if(newPhotoInput.files[0]){
                sendEventPhotoButton.click();
              }
          }
      };
      httpc.open("POST", url, true); // sending as POST
      httpc.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      httpc.send(params+'&ext='+ext+'&id='+id);
      if(!newPhotoInput.files[0]){
        location.reload();
      }
    }
  </script>
  <script>
    function popupEventsCloseConfirm() {
        var popup = document.getElementById("popupEventsClose")
        var popupBg = document.getElementById("popupEventsCloseBg")
        popupBg.classList.toggle("opacity-0")
        popupBg.classList.toggle("h-0")
        popup.classList.toggle("scale-0")
        popup.classList.add("duration-200")
    }
    function popupEventsAddCloseConfirm() {
        var popup = document.getElementById("popupEventsAddClose")
        var popupBg = document.getElementById("popupEventsAddCloseBg")
        popupBg.classList.toggle("opacity-0")
        popupBg.classList.toggle("h-0")
        popup.classList.toggle("scale-0")
        popup.classList.add("duration-200")
    }
    function unfilledStringFunc(dx, fd){
      unfilledString = '';
      var resultOfStorage = localStorage.getItem('EventTempSettings');
      var eventPhotoPrev = document.querySelector('#eventPhotoInput');
      
        var cossss = JSON.parse(resultOfStorage);
        for(let g=0; g<fd.length;g++){
          for(let d=0; d<Object.keys(cossss).length;d++)
            if(fd[g] == Object.keys(cossss)[d] && Object.keys(cossss)[d]){
              dx.splice(dx.indexOf(Object.keys(cossss)[d]),1);
            }
          }
          unfilledString = arrayToString(dx);
          return unfilledString;
    }
    function filledStringFunc(dx){
      filledString = '';
      var resultOfStorage = localStorage.getItem('EventTempSettings');
      var eventPhotoPrev = document.querySelector('#eventPhotoInput');

      
        var cossss = JSON.parse(resultOfStorage);
        for(let g=0; g<Object.keys(cossss).length;g++){
            dx.push(Object.keys(cossss)[g])
          }
          filledString = arrayToString(dx);
          return filledString;
    }
</script>
<script>
  var editablesTable = [];
  editables.forEach((elem)=>{
    editablesTable.push(elem.id);
  })
  var unfilledEditables = editablesTable;
  function addNewEvent(){
    popupEventsAddCloseConfirm();
      unfilledString = unfilledStringFunc(unfilledEditables, editablesTable);
      var paragraph = document.querySelector('.popupEventsAddCloseConfirmPara');
      if(unfilledEditables.length == 0){
        paragraph.innerHTML = 'Wypełniono <span style="color:var(--text)">wszystkie</span> pola edycyjne.'
      } else{
        if(paragraph.classList.contains('edde')){
          var filledEditables = [];
          filledString = filledStringFunc(filledEditables);
          if(filledEditables.length == 0){
            paragraph.innerHTML = 'Nie wprowadzono <span style="color:var(--text)">żadnych</span> zmian.'
          } else{
            paragraph.innerHTML = 'W szkicu <span style="color:var(--text)">wypełniono</span> pola '+'<span style="color:var(--text)">('+filledEditables.length+')</span>: <span style="color:var(--text)">'+filledString+'</span>.';
          }
        } else{
          paragraph.innerHTML = 'W szkicu <span style="color:var(--text)">nie</span> zostały wypełnione pola '+'<span style="color:var(--text)">('+unfilledEditables.length+')</span>: <span style="color:var(--text)">'+unfilledString+'</span>.';
        }
      }
  }
  
  function arrayToString(xd){
    var newStringFromArray = '';
    xd.forEach((elem)=>{
      newStringFromArray = newStringFromArray + ', ' + elem;
    })
    newStringFromArray = newStringFromArray.slice(2,newStringFromArray.length);
    return newStringFromArray;
  }
</script>
<script>
  function datePicker(){
    popupCalCloseConfirm();
    setTempEvent();
  }
  function popupCalCloseConfirm() {
        var popup = document.getElementById("popupCalClose")
        var popupBg = document.getElementById("popupCalCloseBg")
        popupBg.classList.toggle("opacity-0")
        popupBg.classList.toggle("h-0")
        popup.classList.toggle("scale-0")
        popup.classList.add("duration-200")
    }

    function popupCalDelete() {
        var popup = document.getElementById("popupCalClose")
        var popupBg = document.getElementById("popupCalCloseBg")
        popupBg.classList.toggle("opacity-0")
        popupBg.classList.toggle("h-0")
        popup.classList.toggle("scale-0")
        popup.classList.add("duration-200")
    }
    function saveChangesDate(){
        var resultOfStorage = localStorage.getItem('EventTempSettings')
        // console.log('EventTempSettings: ', JSON.parse(resultOfStorage));
        forWhat = 'Kalendarz';
        EventTempSettings[forWhat] = selectedDate;
        localStorage.setItem('EventTempSettings', JSON.stringify(EventTempSettings));
        // resultOfStorage = localStorage.getItem('EventTempSettings')
        // console.log('EventTempSettings: ', JSON.parse(resultOfStorage));
        popupCalCloseConfirm()
    }
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
      fileName = fileTypeMy;
      if((fileTypeMy == 'png' && xd.size < 5000000) || (fileTypeMy == 'jpeg' && xd.size < 5000000) || (fileTypeMy == 'gif' && xd.size < 5000000)){
        const reader = new FileReader();
        reader.onloadend = function() {
            //ustawienie dla wszystkich img o id popup_img_inpt src
            for (let i = 0; i < document.querySelectorAll(`#eventPhotoInput`).length; i++) {
                document.querySelectorAll(`#eventPhotoInput`)[i].src = reader.result;
                document.querySelectorAll(`#eventPhotoInput`)[i].title = fileName;
                var resultOfStorage = localStorage.getItem('EventTempSettings')
                EventTempSettings['Zdjęcie'] = reader.result;
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
        // alert('Niedozwolone rozszerzenie pliku lub plik jest za duży')
        popupEventsCloseConfirm()
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
      var newPhotoInput = document.getElementById('fileToUpload');
      newPhotoInput.click();
    }
    function imgPrev() {
        const file = document.getElementById(`fileToUpload`).files[0];
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
              if(editables[g].id == Object.keys(cossss)[d] && Object.keys(cossss)[d]){
                if(editables[g].id == 'Zdjęcie'){
                  eventPhotoPrev.src = cossss[Object.keys(cossss)[d]];
                } else if(editables[g].id == 'Przeznaczenie'){
                  editables[g].value = cossss[Object.keys(cossss)[d]];
                } else if(editables[g].id == 'Kalendarz'){
                } else if(cossss[Object.keys(cossss)[d]] == 'off'){
                  disableAblesAreOff(editablesTable.indexOf(editables[g].id)-5);
                } else{
                  editables[g].innerHTML = cossss[Object.keys(cossss)[d]];
                }
            }
          }
    }

    fromLocalStorageToDraft();
    function popupEventOpenClose() {
        var popup = document.getElementById("popupEvent")
        var popupBg = document.getElementById("popupEventBg")
        popupBg.classList.toggle("opacity-0")
        popupBg.classList.toggle("h-0")
        popup.classList.toggle("scale-0")
        popup.classList.add("duration-200")
    }
    function openPopupEvent(id){
        var popupEventOutput = document.getElementById("pupupEventOutput");
        popupEventOutput.innerHTML =  "<div class='flex justify-center items-center'><div class='flex flex-col justify-center items-center'><div class='animate-spin rounded-full h-32 w-32 border-t-2 border-b-2 border-gray-900'></div><div class='text-white text-xl font-semibold mt-4'>Ładowanie...</div></div>";
        popupEventOpenClose();
        var value;
        if(id>0){
         value = editables[id].innerHTML;
        } else{
          value = '';
        }
        var kzcx = editables[id].getAttribute('id');
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

  //   var eventsButtons = document.querySelectorAll(".events-button");
  //   function eventsButtonsToggle() {
  //       for(var i = 0; i < eventsButtons.length; i++) {  
  //           eventsButtons[i].classList.remove("theme-text");
  //           eventsButtons[i].classList.add("border-transparent");
  //       }
  //   }
  //   for(var i = 0; i < eventsButtons.length; i++) {  
  //   eventsButtons[i].addEventListener("click", function() {
  //     eventsButtonsToggle();
  //     this.classList.add("theme-text");
  //     this.classList.remove("border-transparent");

  //   });
  // }
</script>
