<?php
  $id = $_GET['id'];
  $id_szyfr = base64_encode($id);
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
        <div
          class="aspect-h-3 aspect-w-4 overflow-hidden rounded-lg bg-[#0e0e0e]"
        >
          <img
            data-aos="fade-left" data-aos-delay="100"
            <?php
                echo 'src="public/img/events/'.$row['img'].'"';
            ?>
            class="object-cover object-center w-full"
          />
        </div>
      </div>

      <!-- Product details -->
      <div
        class="mx-auto mt-14 max-w-2xl sm:mt-16 lg:col-span-3 lg:row-span-2 lg:row-end-2 lg:mt-0 lg:max-w-none"
      >
        <div class="flex flex-col-reverse">
          <div class="mt-4">
            <p data-aos="fade-right" class="theme-text text-xs uppercase">
                <?php 
                    if($row['destiny'] == 'all'){
                    echo 'Wszyscy';
                  } else if($row['destiny'] == 'prg'){
                    echo 'Programiści';
                  } else if($row['destiny'] == 'inf'){
                    echo 'Informatycy';
                  } else{
                    echo 'Nie wybrano';
                  }
                ?>
            </p>
            <h1
              data-aos="fade-right" data-aos-delay="100" class="text-2xl font-bold tracking-tight text-gray-200 sm:text-3xl"
            >
            <?php
                $htmls = array("<p>", "<h1>", "</p>", "</h1>");
                $row['name'] = str_replace($htmls, "", $row['name']);
                echo $row['name'];
            ?>
            </h1>

            <h2 id="information-heading" class="sr-only">
              Product information
            </h2>
            <p data-aos="fade-right" data-aos-delay="200" data-aos-anchor-placement="top-bottom" class="mt-2 text-sm text-gray-500">
                <?php
                    $row['edition'] = str_replace($htmls, "", $row['edition']);
                    echo $row['edition'];
                ?>
            </p>
          </div>
        </div>

        <p data-aos="fade-right" data-aos-delay="300" data-aos-anchor-placement="top-bottom" class="mt-6 text-gray-400">
            <?php
                $row['description'] = str_replace($htmls, "", $row['description']);
                echo $row['description'];
            ?>
        </p>

        <div data-aos="fade-right" data-aos-delay="400" data-aos-anachor-placement="top-bottom" class="mt-10 md:grid hidden grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-2">
          <a
            onclick="location.replace('zapisy.php')"
            type="button"
            class="cursor-pointer flex w-full items-center justify-center rounded-md theme-bg theme-bg-hover px-8 py-3 text-base duration-150 font-medium text-white"
          >
            Zapisz się
          </a>
          <a
            id="shareButton"
            onclick="copyButton('https://eventy.zs14.rgbpc.pl/?share=<?=$id_szyfr?>')"
            type="button"
            class="cursor-pointer flex w-full items-center justify-center rounded-md border border-transparent theme-bg-hover theme-text duration-150 hover:!text-white bg-indigo-50 px-8 py-3 text-base font-medium"
          >
            Udostępnij
          </a>
        </div>
        <div class="md:hidden mt-10 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-2">
          <a
            onclick="location.replace('zapisy.php')"
            type="button"
            class="cursor-pointer flex w-full items-center justify-center rounded-md theme-bg theme-bg-hover px-8 py-3 text-base duration-150 font-medium text-white"
          >
            Zapisz się
          </a>
          <a
            id="shareButton"
            onclick="copyButton('https://eventy.zs14.rgbpc.pl/?share=<?=$id_szyfr?>')"
            type="button"
            class="cursor-pointer flex w-full items-center justify-center rounded-md border border-transparent theme-bg-hover theme-text duration-150 hover:!text-white bg-indigo-50 px-8 py-3 text-base font-medium"
          >
            Udostępnij
          </a>
        </div>
        <!-- model rozgrywek -->
        <?php 
            if($row['model']=='' || $row['model']=='NULL' || $row['model']=='off' || $row['model']==NULL){
                echo '';
            } else{
                echo '
                    <article class="mt-4 text-sm text-gray-400">
                        <div class="mt-10 border-t border-[#3d3d3d] pt-10">
                            <h3 class="text-sm font-medium text-gray-300">Model rozgrywek</h3>
                ';
                echo $row['model'];
                echo '
                        </div>
                    </article>
                ';
            }
        ?>
        <!-- terminy -->
        <?php 
            if($row['terms']=='' || $row['terms']=='NULL' || $row['terms']=='off' || $row['terms']==NULL){
                echo '';
            } else{
                echo '
                    <article class="mt-4 text-sm text-gray-400">
                        <div class="mt-10 border-t border-[#3d3d3d] pt-10">
                            <h3 class="text-sm font-medium text-gray-300">Terminy</h3>
                ';
                echo $row['terms'];
                echo '
                        </div>
                    </article>
                ';
            }
        ?>
        <!-- nagrody -->
        <?php 
            if($row['prizes']=='' || $row['prizes']=='NULL' || $row['prizes']=='off' || $row['prizes']==NULL){
                echo '';
            } else{
                echo '
                    <article class="mt-4 text-sm text-gray-400">
                        <div class="mt-10 border-t border-[#3d3d3d] pt-10">
                            <h3 class="text-sm font-medium text-gray-300">Nagrody</h3>
                ';
                echo $row['prizes'];
                echo '
                        </div>
                    </article>
                ';
            }
        ?>
        <!-- drużyny -->
        <?php 
            if($row['teams']=='' || $row['teams']=='NULL' || $row['teams']=='off' || $row['teams']==NULL){
                echo '';
            } else{
                echo '
                    <article class="mt-4 text-sm text-gray-400">
                        <div class="mt-10 border-t border-[#3d3d3d] pt-10">
                            <h3 class="text-sm font-medium text-gray-300">Drużyny</h3>
                ';
                echo $row['teams'];
                echo '
                        </div>
                    </article>
                ';
            }
        ?>
        <!-- wymogi -->
        <?php 
            if($row['requirements']=='' || $row['requirements']=='NULL' || $row['requirements']=='off' || $row['requirements']==NULL){
                echo '';
            } else{
                echo '
                    <article class="mt-4 text-sm text-gray-400">
                        <div class="mt-10 border-t border-[#3d3d3d] pt-10">
                            <h3 class="text-sm font-medium text-gray-300">Wymogi</h3>
                ';
                echo $row['requirements'];
                echo '
                        </div>
                    </article>
                ';
            }
        ?>
        <!-- zapisy -->
        <?php 
            if($row['sign']=='' || $row['sign']=='NULL' || $row['sign']=='off' || $row['sign']==NULL){
                echo '';
            } else{
                echo '
                    <article class="mt-4 text-sm text-gray-400">
                        <div class="mt-10 border-t border-[#3d3d3d] pt-10">
                            <h3 class="text-sm font-medium text-gray-300">Zapisy</h3>
                ';
                echo $row['sign'];
                echo '
                        </div>
                    </article>
                ';
            }
        ?>
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
          <div id="wyniki" class="pt-10 tab">
            <div class="prose prose-sm max-w-none text-gray-500">
              <h3 class="font-medium text-gray-300">
                Aktualne wyniki
              </h3>
              <p class="py-2 text-sm">
                Znajdziesz tutaj wyniki jakie są w poszczególnych fazach turnieju. <br/>Dane staramy się uzupełniać na bieżąco.
              </p>
            </div>
            <br/>
            <p class="text-xs theme-text text-gray-300 font-semibold py-2 uppercase">Faza pucharowa</p>
            <hr class="border-white/10">
            <div class="text-xs text-gray-500 py-4 px-2">
              <?php
              $sql = "SELECT * from wyniki where wyniki.event_id = $id and wyniki.faza_id != 1";
              $result = mysqli_query($conn, $sql);
              if(mysqli_num_rows($result) > 0){
                $sql2 = "SELECT wyniki.wynik_id, a.name as 'winner', a.profile_img as 'winner_img', b.profile_img as 'loser_img', b.name as 'loser', a.class as 'class_win', b.class as 'class_los', fazy.name as 'faza', wyniki.date_of_spotkanie, wyniki.team_win, wyniki.team_los, wyniki.maps_win, wyniki.rounds_win, wyniki.maps_los, wyniki.rounds_los from wyniki join teams a on a.team_id=wyniki.team_win join teams b on b.team_id=wyniki.team_los join fazy on fazy.faza_id=wyniki.faza_id where wyniki.event_id = $id and wyniki.faza_id = 4 order by wyniki.date_of_spotkanie desc;";
                $result2 = mysqli_query($conn, $sql2);
                if(mysqli_num_rows($result2) > 0){
                  echo '<p class="text-xs text-yellow-600 text-center border-b border-white/10 pb-2 my-1">Finały</p>
                  <table class="w-full">';
                  while($row = mysqli_fetch_assoc($result2)) {
                    if($row['winner_img'] == "") {
                              $row['winner_img'] = "team_default.png";
                    }
                    if($row['loser_img'] == "") {
                              $row['loser_img'] = "team_default.png";
                    }
                    echo '
                      <tr class="hover:bg-black/30">
                        <td class="text-sm flex flex-wrap flex-row gap-2 items-center">
                          <span class="flex flex-row gap-2 items-center">
                            <img src="public/img/teams/'.$row['winner_img'].'" alt="team_profile" class="aspect-square object-cover max-w-[25px] my-1 rounded-full">
                            <span class="text-green-600">'.$row['winner'].'</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-yellow-600">
                              <path fill-rule="evenodd" d="M5.166 2.621v.858c-1.035.148-2.059.33-3.071.543a.75.75 0 0 0-.584.859 6.753 6.753 0 0 0 6.138 5.6 6.73 6.73 0 0 0 2.743 1.346A6.707 6.707 0 0 1 9.279 15H8.54c-1.036 0-1.875.84-1.875 1.875V19.5h-.75a2.25 2.25 0 0 0-2.25 2.25c0 .414.336.75.75.75h15a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-2.25-2.25h-.75v-2.625c0-1.036-.84-1.875-1.875-1.875h-.739a6.706 6.706 0 0 1-1.112-3.173 6.73 6.73 0 0 0 2.743-1.347 6.753 6.753 0 0 0 6.139-5.6.75.75 0 0 0-.585-.858 47.077 47.077 0 0 0-3.07-.543V2.62a.75.75 0 0 0-.658-.744 49.22 49.22 0 0 0-6.093-.377c-2.063 0-4.096.128-6.093.377a.75.75 0 0 0-.657.744Zm0 2.629c0 1.196.312 2.32.857 3.294A5.266 5.266 0 0 1 3.16 5.337a45.6 45.6 0 0 1 2.006-.343v.256Zm13.5 0v-.256c.674.1 1.343.214 2.006.343a5.265 5.265 0 0 1-2.863 3.207 6.72 6.72 0 0 0 .857-3.294Z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-600 text-xs">'.$row['class_win'].'</span>
                          </span>
                          vs
                          <span class="flex flex-row gap-2 items-center">
                            <img src="public/img/teams/'.$row['loser_img'].'" alt="team_profile" class="aspect-square object-cover max-w-[25px] my-1 rounded-full">
                            <span class="">'.$row['loser'].'</span>
                            <span class="text-gray-600 text-xs">'.$row['class_los'].'</span>
                          </span>
                        </td>
                        <td class="text-right">
                            <span class="text-xs">Mapy: </span>
                            <span class="text-xs text-green-600">'.$row['maps_win'].'</span>
                             : 
                            <span class="text-xs">'.$row['maps_los'].'</span>
                        </td>
                        <td class="text-right">
                            <span class="text-xs">Rundy: </span>
                            <span class="text-xs text-green-600">'.$row['rounds_win'].'</span>
                             : 
                            <span class="text-xs">'.$row['rounds_los'].'</span>
                        </td>
                      </tr>
                    ';
                  }
                  echo '</table>';
                }

                $sql3 = "SELECT wyniki.wynik_id, a.name as 'winner', a.profile_img as 'winner_img', b.profile_img as 'loser_img', b.name as 'loser', a.class as 'class_win', b.class as 'class_los', fazy.name as 'faza', wyniki.date_of_spotkanie, wyniki.team_win, wyniki.team_los, wyniki.maps_win, wyniki.rounds_win, wyniki.maps_los, wyniki.rounds_los from wyniki join teams a on a.team_id=wyniki.team_win join teams b on b.team_id=wyniki.team_los join fazy on fazy.faza_id=wyniki.faza_id where wyniki.event_id = $id and wyniki.faza_id = 3 order by wyniki.date_of_spotkanie desc;";
                $result3 = mysqli_query($conn, $sql3);
                if(mysqli_num_rows($result3) > 0){
                  echo '<p class="text-xs text-gray-500 text-center border-b border-white/10 pb-2 my-1">Półfinały</p>
                  <table class="w-full">';
                  while($row = mysqli_fetch_assoc($result3)) {
                    if($row['winner_img'] == "") {
                              $row['winner_img'] = "team_default.png";
                    }
                    if($row['loser_img'] == "") {
                              $row['loser_img'] = "team_default.png";
                    }
                    echo '
                      <tr class="hover:bg-black/30">
                        <td class="text-sm flex flex-wrap flex-row gap-2 items-center">
                          <span class="flex flex-row gap-2 items-center">
                            <img src="public/img/teams/'.$row['winner_img'].'" alt="team_profile" class="aspect-square object-cover max-w-[25px] my-1 rounded-full">
                            <span class="text-green-600">'.$row['winner'].'</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-yellow-600">
                              <path fill-rule="evenodd" d="M5.166 2.621v.858c-1.035.148-2.059.33-3.071.543a.75.75 0 0 0-.584.859 6.753 6.753 0 0 0 6.138 5.6 6.73 6.73 0 0 0 2.743 1.346A6.707 6.707 0 0 1 9.279 15H8.54c-1.036 0-1.875.84-1.875 1.875V19.5h-.75a2.25 2.25 0 0 0-2.25 2.25c0 .414.336.75.75.75h15a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-2.25-2.25h-.75v-2.625c0-1.036-.84-1.875-1.875-1.875h-.739a6.706 6.706 0 0 1-1.112-3.173 6.73 6.73 0 0 0 2.743-1.347 6.753 6.753 0 0 0 6.139-5.6.75.75 0 0 0-.585-.858 47.077 47.077 0 0 0-3.07-.543V2.62a.75.75 0 0 0-.658-.744 49.22 49.22 0 0 0-6.093-.377c-2.063 0-4.096.128-6.093.377a.75.75 0 0 0-.657.744Zm0 2.629c0 1.196.312 2.32.857 3.294A5.266 5.266 0 0 1 3.16 5.337a45.6 45.6 0 0 1 2.006-.343v.256Zm13.5 0v-.256c.674.1 1.343.214 2.006.343a5.265 5.265 0 0 1-2.863 3.207 6.72 6.72 0 0 0 .857-3.294Z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-600 text-xs">'.$row['class_win'].'</span>
                          </span>
                          vs
                          <span class="flex flex-row gap-2 items-center">
                            <img src="public/img/teams/'.$row['loser_img'].'" alt="team_profile" class="aspect-square object-cover max-w-[25px] my-1 rounded-full">
                            <span class="">'.$row['loser'].'</span>
                            <span class="text-gray-600 text-xs">'.$row['class_los'].'</span>
                          </span>
                        </td>
                        <td class="text-right">
                            <span class="text-xs">Mapy: </span>
                            <span class="text-xs text-green-600">'.$row['maps_win'].'</span>
                             : 
                            <span class="text-xs">'.$row['maps_los'].'</span>
                        </td>
                        <td class="text-right">
                            <span class="text-xs">Rundy: </span>
                            <span class="text-xs text-green-600">'.$row['rounds_win'].'</span>
                             : 
                            <span class="text-xs">'.$row['rounds_los'].'</span>
                        </td>
                      </tr>
                    ';
                  }
                  echo '</table>';
                }

                $sql4 = "SELECT wyniki.wynik_id, a.name as 'winner', a.profile_img as 'winner_img', b.profile_img as 'loser_img', b.name as 'loser', a.class as 'class_win', b.class as 'class_los', fazy.name as 'faza', wyniki.date_of_spotkanie, wyniki.team_win, wyniki.team_los, wyniki.maps_win, wyniki.rounds_win, wyniki.maps_los, wyniki.rounds_los from wyniki join teams a on a.team_id=wyniki.team_win join teams b on b.team_id=wyniki.team_los join fazy on fazy.faza_id=wyniki.faza_id where wyniki.event_id = $id and wyniki.faza_id = 2 order by wyniki.date_of_spotkanie desc;";
                $result4 = mysqli_query($conn, $sql4);
                if(mysqli_num_rows($result4) > 0){
                  echo '<p class="text-xs text-gray-500 text-center border-b border-white/10 pb-2 my-1">Ćwierćfinały</p>
                  <table class="w-full">';
                  while($row = mysqli_fetch_assoc($result4)) {
                    if($row['winner_img'] == "") {
                              $row['winner_img'] = "team_default.png";
                    }
                    if($row['loser_img'] == "") {
                              $row['loser_img'] = "team_default.png";
                    }
                    echo '
                      <tr class="hover:bg-black/30">
                        <td class="text-sm flex flex-wrap flex-row gap-2 items-center">
                          <span class="flex flex-row gap-2 items-center">
                            <img src="public/img/teams/'.$row['winner_img'].'" alt="team_profile" class="aspect-square object-cover max-w-[25px] my-1 rounded-full">
                            <span class="text-green-600">'.$row['winner'].'</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-yellow-600">
                              <path fill-rule="evenodd" d="M5.166 2.621v.858c-1.035.148-2.059.33-3.071.543a.75.75 0 0 0-.584.859 6.753 6.753 0 0 0 6.138 5.6 6.73 6.73 0 0 0 2.743 1.346A6.707 6.707 0 0 1 9.279 15H8.54c-1.036 0-1.875.84-1.875 1.875V19.5h-.75a2.25 2.25 0 0 0-2.25 2.25c0 .414.336.75.75.75h15a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-2.25-2.25h-.75v-2.625c0-1.036-.84-1.875-1.875-1.875h-.739a6.706 6.706 0 0 1-1.112-3.173 6.73 6.73 0 0 0 2.743-1.347 6.753 6.753 0 0 0 6.139-5.6.75.75 0 0 0-.585-.858 47.077 47.077 0 0 0-3.07-.543V2.62a.75.75 0 0 0-.658-.744 49.22 49.22 0 0 0-6.093-.377c-2.063 0-4.096.128-6.093.377a.75.75 0 0 0-.657.744Zm0 2.629c0 1.196.312 2.32.857 3.294A5.266 5.266 0 0 1 3.16 5.337a45.6 45.6 0 0 1 2.006-.343v.256Zm13.5 0v-.256c.674.1 1.343.214 2.006.343a5.265 5.265 0 0 1-2.863 3.207 6.72 6.72 0 0 0 .857-3.294Z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-600 text-xs">'.$row['class_win'].'</span>
                          </span>
                          vs
                          <span class="flex flex-row gap-2 items-center">
                            <img src="public/img/teams/'.$row['loser_img'].'" alt="team_profile" class="aspect-square object-cover max-w-[25px] my-1 rounded-full">
                            <span class="">'.$row['loser'].'</span>
                            <span class="text-gray-600 text-xs">'.$row['class_los'].'</span>
                          </span>
                        </td>
                        <td class="text-right">
                            <span class="text-xs">Mapy: </span>
                            <span class="text-xs text-green-600">'.$row['maps_win'].'</span>
                             : 
                            <span class="text-xs">'.$row['maps_los'].'</span>
                        </td>
                        <td class="text-right">
                            <span class="text-xs">Rundy: </span>
                            <span class="text-xs text-green-600">'.$row['rounds_win'].'</span>
                             : 
                            <span class="text-xs">'.$row['rounds_los'].'</span>
                        </td>
                      </tr>
                    ';
                  }
                  echo '</table>';
                }
              }else{
                echo 'Aktualnie brak wyników w tej fazie.';
              }
              ?>
            </div>
            <br/>
            <p class="text-xs theme-text text-gray-300 font-semibold py-2 uppercase">Faza grupowa</p>
            <hr class="border-white/10 pb-4">
              <div class="px-2">
                <?php
                  $sql = "select name, group_id from team_groups where event_id = '".$id."' order by name asc";
                  $result = mysqli_query($conn, $sql);
                  if (mysqli_num_rows($result) > 0) {
                    while($row3 = mysqli_fetch_assoc($result)) {
                      echo '<p class="text-xs text-gray-400 py-2 uppercase">'.$row3['name'].'</p>';
                      echo '<hr class="border-white/10">';
                      echo '<table class="w-full text-xs text-gray-500 my-4">';
                      $sql2 = "
                      SELECT 
                            teams.team_id, 
                            teams.name, 
                            teams.class, 
                            teams.profile_img, 
                            team_status.name AS status, 
                            COALESCE(points.points, 0) AS points, 
                            COALESCE(przegrane.przegrane, 0) AS przegrane
                        FROM 
                            teams
                        JOIN 
                            team_status ON team_status.status_id = teams.status_id
                        LEFT JOIN 
                            (SELECT team_win, COUNT(wynik_id) AS points FROM wyniki where faza_id = 1 GROUP BY team_win) AS points ON points.team_win = teams.team_id
                        LEFT JOIN 
                            (SELECT team_los, COUNT(wynik_id) AS przegrane FROM wyniki where faza_id = 1 GROUP BY team_los) AS przegrane ON przegrane.team_los = teams.team_id
                        where group_id = '".$row3['group_id']."' and teams.event_id = '".$id."'
                        GROUP BY 
                            teams.team_id
                        ORDER BY 
                            points DESC, przegrane DESC, teams.name ASC";

                      $result2 = mysqli_query($conn, $sql2);
                      if (mysqli_num_rows($result2) > 0) {
                        while($row2 = mysqli_fetch_assoc($result2)) {
                          if($row2['profile_img'] == "") {
                            $row2['profile_img'] = "team_default.png";
                          }
                          $mecze = $row2['points'] + $row2['przegrane'];
                          echo '<tr onclick="expandResultsToggle(`'.$row2['team_id'].'`)" class="py-2 hover:bg-white/10 cursor-pointer transition-all duration-150">
                            <td class="text-sm flex flex-row gap-2 items-center">
                            <img src="public/img/teams/'.$row2['profile_img'].'" alt="team_profile" class="aspect-square object-cover max-w-[25px] my-1 rounded-full">
                            
                            '.$row2['name'].' <span class="text-gray-600 text-xs">'.$row2['class'].'</span></td>
                            <td>';
                            if($row2['status'] == 'zakwalifikowana'){
                              echo 'W turnieju';
                            }elseif($row2['status'] == 'zdyskwalifikowana'){
                              echo '<span class="text-red-500">Zdyskwalifikowana</span>';
                            }elseif($row2['status'] == 'wyszli z grupy'){
                              echo '<span class="text-green-500"Zakwalifikowana</span>';
                            }elseif($row2['status'] == 'niezakwalifikowana'){
                              echo '<span class="text-red-500">Niezakwalifikowana</span>';
                            }elseif($row2['status'] == 'wygrała turniej'){
                              echo '<span class="flex flex-row items-center gap-1 text-yellow-500">Wygrała turniej!
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 0 0 2.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 0 1 2.916.52 6.003 6.003 0 0 1-5.395 4.972m0 0a6.726 6.726 0 0 1-2.749 1.35m0 0a6.772 6.772 0 0 1-3.044 0" />
                              </svg>
                              </span>';
                            }elseif($row2['status'] == 'zakwalifikowana do kolejnej fazy'){
                              echo '<span class="theme-text">Zakwalifikowana do kolejnej fazy</span>';
                            }elseif($row2['status'] == 'nie wyszła z grupy'){
                              echo '<span class="">Nie wyszła z grupy</span>';
                            }else{
                              echo $row2['status'];
                            }
                            echo '</td>
                            <td>
                            <span class="flex flex-row items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 36 36" aria-hidden="true" role="img" class="w-3.5 h-3.5 iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet"><path fill="#CCD6DD" d="M24 29l5-5L6 1H1v5z"/><path fill="#9AAAB4" d="M1 1v5l23 23l2.5-2.5z"/><path fill="#D99E82" d="M33.424 32.808c.284-.284.458-.626.531-.968l-5.242-6.195l-.701-.702c-.564-.564-1.57-.473-2.248.205l-.614.612c-.677.677-.768 1.683-.204 2.247l.741.741l6.15 5.205c.345-.072.688-.247.974-.532l.613-.613z"/><path d="M33.424 32.808c.284-.284.458-.626.531-.968l-1.342-1.586l-.737 3.684c.331-.077.661-.243.935-.518l.613-.612zm-3.31-5.506l-.888 4.441l1.26 1.066l.82-4.1zm-1.401-1.657l-.701-.702a1.2 1.2 0 0 0-.326-.224l-.978 4.892l1.26 1.066l.957-4.783l-.212-.249zm-2.401-.888a2.02 2.02 0 0 0-.548.392l-.614.611a1.981 1.981 0 0 0-.511.86c-.142.51-.046 1.035.307 1.387l.596.596l.77-3.846c0-.001 0-.001 0 0z" fill="#BF6952"/><circle fill="#8A4633" cx="33.25" cy="33.25" r="2.75"/><path fill="#FFAC33" d="M29.626 22.324a1.033 1.033 0 0 1 0 1.462l-6.092 6.092a1.033 1.033 0 1 1-1.462-1.462l6.092-6.092a1.033 1.033 0 0 1 1.462 0z"/><circle fill="#FFAC33" cx="22.072" cy="29.877" r="1.75"/><circle fill="#FFAC33" cx="29.626" cy="22.323" r="1.75"/><circle fill="#FFCC4D" cx="22.072" cy="29.877" r="1"/><circle fill="#FFCC4D" cx="29.626" cy="22.323" r="1"/><path fill="#FFAC33" d="M33.903 29.342a.762.762 0 0 1 0 1.078l-3.476 3.475a.762.762 0 1 1-1.078-1.078l3.476-3.475a.762.762 0 0 1 1.078 0z"/><path fill="#CCD6DD" d="M12 29l-5-5L30 1h5v5z"/><path fill="#9AAAB4" d="M35 1v5L12 29l-2.5-2.5z"/><path fill="#D99E82" d="M2.576 32.808a1.946 1.946 0 0 1-.531-.968l5.242-6.195l.701-.702c.564-.564 1.57-.473 2.248.205l.613.612c.677.677.768 1.683.204 2.247l-.741.741l-6.15 5.205a1.946 1.946 0 0 1-.974-.532l-.612-.613z"/><path d="M2.576 32.808a1.946 1.946 0 0 1-.531-.968l1.342-1.586l.737 3.684a1.932 1.932 0 0 1-.935-.518l-.613-.612zm3.31-5.506l.888 4.441l-1.26 1.066l-.82-4.1zm1.401-1.657l.701-.702a1.2 1.2 0 0 1 .326-.224l.978 4.892l-1.26 1.066l-.957-4.783l.212-.249zm2.401-.888c.195.095.382.225.548.392l.613.612c.254.254.425.554.511.86c.142.51.046 1.035-.307 1.387l-.596.596l-.769-3.847c0-.001 0-.001 0 0z" fill="#BF6952"/><circle fill="#8A4633" cx="2.75" cy="33.25" r="2.75"/><path fill="#FFAC33" d="M6.374 22.324a1.033 1.033 0 0 0 0 1.462l6.092 6.092a1.033 1.033 0 1 0 1.462-1.462l-6.092-6.092a1.033 1.033 0 0 0-1.462 0z"/><circle fill="#FFAC33" cx="13.928" cy="29.877" r="1.75"/><circle fill="#FFAC33" cx="6.374" cy="22.323" r="1.75"/><circle fill="#FFCC4D" cx="13.928" cy="29.877" r="1"/><circle fill="#FFCC4D" cx="6.374" cy="22.323" r="1"/><path fill="#FFAC33" d="M2.097 29.342a.762.762 0 0 0 0 1.078l3.476 3.475a.762.762 0 1 0 1.078-1.078l-3.476-3.475a.762.762 0 0 0-1.078 0z"/></svg>
                            '.$mecze.'
                            </span>
                            </td>
                            <td >
                            <span class="flex flex-row items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-yellow-600">
  <path fill-rule="evenodd" d="M5.166 2.621v.858c-1.035.148-2.059.33-3.071.543a.75.75 0 0 0-.584.859 6.753 6.753 0 0 0 6.138 5.6 6.73 6.73 0 0 0 2.743 1.346A6.707 6.707 0 0 1 9.279 15H8.54c-1.036 0-1.875.84-1.875 1.875V19.5h-.75a2.25 2.25 0 0 0-2.25 2.25c0 .414.336.75.75.75h15a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-2.25-2.25h-.75v-2.625c0-1.036-.84-1.875-1.875-1.875h-.739a6.706 6.706 0 0 1-1.112-3.173 6.73 6.73 0 0 0 2.743-1.347 6.753 6.753 0 0 0 6.139-5.6.75.75 0 0 0-.585-.858 47.077 47.077 0 0 0-3.07-.543V2.62a.75.75 0 0 0-.658-.744 49.22 49.22 0 0 0-6.093-.377c-2.063 0-4.096.128-6.093.377a.75.75 0 0 0-.657.744Zm0 2.629c0 1.196.312 2.32.857 3.294A5.266 5.266 0 0 1 3.16 5.337a45.6 45.6 0 0 1 2.006-.343v.256Zm13.5 0v-.256c.674.1 1.343.214 2.006.343a5.265 5.265 0 0 1-2.863 3.207 6.72 6.72 0 0 0 .857-3.294Z" clip-rule="evenodd" />
</svg>

                            '.$row2['points'].'
                            </span>
                            </td>
                          </tr>
                          <tr>
                          <td style="scale: 0; height: 0;" colspan="4" id="result_'.$row2['team_id'].'" class="transition-all duration-150 px-2 border-[#1c1c1c] hidden border-y sm:mt-0 text-gray-500 col-span-3"></td>
                          </tr>
                          ';
                        }
                      } else {
                        echo '<tr><td><span class="text-xs text-gray-500 ">Brak uczestników w tej grupie.</span></td></tr>';
                      }
                      echo '</table>';
                    }
                  } else {
                    echo '<span class="text-xs text-gray-500 ">Aktualnie brak wyników w tej fazie.</span>';
                  }
                ?>
              </div>

          </div>

          <!-- 'FAQ' panel, show/hide based on tab state -->
          <div id="harmonogram" class="text-sm text-gray-500 tab hidden">
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
                          <p class="text-sm text-gray-500">Rozpoczęcie zapisów do <span class="theme-text">Turnieju</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-20">12 lutego</time>
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
                          <p class="text-sm text-gray-500">Zakończenie zapisów do <span class="theme-text">Turnieju</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-22">19 lutego</time>
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
                          <p class="text-sm text-gray-500">Losowanie grup <span class="theme-text">Turnieju</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-20">23 lutego</time>
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
                          <time datetime="2020-09-28">24 lutego</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="first_round_control hover:bg-slate-500/25 hover:cursor-pointer">
                  <div class="relative pb-8">
                    <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-[#3d3d3d]" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                      <div>
                        <span class="h-8 w-8 rounded-full theme-bg flex items-center justify-center ring-8 ring-[#0e0e0e]">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
                          </svg>
                        </span>
                      </div>
                      <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                        <div class="flex flex-row items-center justify-center">
                          <p class="text-sm text-gray-500"><span class="theme-text">Pierwsza</span> runda w grupach</p>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 ">
                            <path class="arrow" fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                          </svg>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-28">24-28 lutego</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="first_round">
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
                          <p class="text-sm text-gray-500">ELTK <span class="text-gray-600 text-xs">2p</span> vs KLAN AZAZELA <span class="text-gray-600 text-xs">4i</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">0:2 | Grupa A</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="first_round">
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
                          <p class="text-sm text-gray-500">Miernotki <span class="text-gray-600 text-xs">2i</span> vs Zabrakło Cala <span class="text-gray-600 text-xs">4i</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">0:2 | Grupa A</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="first_round">
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
                          <p class="text-sm text-gray-500">chude byki <span class="text-gray-600 text-xs">3a</span> vs KOKENERGY <span class="text-gray-600 text-xs">5pi</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">2:0 | Grupa B</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="first_round">
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
                          <p class="text-sm text-gray-500">TurlajBeczke <span class="text-gray-600 text-xs">5pi</span> vs UHO BOYS <span class="text-gray-600 text-xs">3gt</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">2:0 | Grupa B</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="first_round">
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
                          <p class="text-sm text-gray-500">Gods of 5PD <span class="text-gray-600 text-xs">5pd</span> vs JUK ESPORT <span class="text-gray-600 text-xs">2e</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">2:0 | Grupa C</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="first_round">
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
                          <p class="text-sm text-gray-500">Szach Mat <span class="text-gray-600 text-xs">3d</span> vs Virtus Noobs <span class="text-gray-600 text-xs">1i</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">0:2 | Grupa C</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="first_round">
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
                          <p class="text-sm text-gray-500">G4rnuchy <span class="text-gray-600 text-xs">4k</span> vs Informatycy z przypadku <span class="text-gray-600 text-xs">3i</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">2:0 | Grupa D</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="first_round">
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
                          <p class="text-sm text-gray-500">Papiery rumiankowe Velvet <span class="text-gray-600 text-xs">1b</span> vs Upos Banditos <span class="text-gray-600 text-xs">2bt</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">0:2 | Grupa D</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <!-- <li>
                  <div class="relative pb-8">
                    <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-[#3d3d3d]" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                      <div>
                        <span class="h-8 w-8 rounded-full bg-red-500 flex items-center justify-center ring-8 ring-[#0e0e0e]">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
                          </svg>
                        </span>
                      </div>
                      <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                        <div>
                          <p class="text-sm text-gray-500"><span class="theme-text">Koniec</span> pierwszej rundy</p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-28">28 lutego</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li> -->
                
                
                <li class="second_round_control hover:bg-slate-500/25 hover:cursor-pointer">
                  <div class="relative pb-8">
                    <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-[#3d3d3d]" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                      <div>
                        <span class="h-8 w-8 rounded-full theme-bg flex items-center justify-center ring-8 ring-[#0e0e0e]">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
                          </svg>
                        </span>
                      </div>
                      <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                        <div class="flex flex-row items-center justify-center roll_out">
                          <p class="text-sm text-gray-500"><span class="theme-text">Druga</span> runda w grupach</p>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 ">
                            <path class="arrow" fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                          </svg>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-28">28 lutego - 5 marca</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="second_round">
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
                          <p class="text-sm text-gray-500">ELTK <span class="text-gray-600 text-xs">2p</span> vs Miernotki <span class="text-gray-600 text-xs">2i</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">2:0 | Grupa A</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="second_round">
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
                          <p class="text-sm text-gray-500">KLAN AZAZELA <span class="text-gray-600 text-xs">4i</span> vs Zabrakło Cala <span class="text-gray-600 text-xs">4i</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">2:1 | Grupa A</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="second_round">
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
                          <p class="text-sm text-gray-500">chude byki <span class="text-gray-600 text-xs">3a</span> vs TurlajBeczke <span class="text-gray-600 text-xs">5pi</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">0:2 | Grupa B</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="second_round">
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
                          <p class="text-sm text-gray-500">KOKENERGY <span class="text-gray-600 text-xs">5pi</span> vs UHO BOYS <span class="text-gray-600 text-xs">3gt</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">1:2 | Grupa B</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="second_round">
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
                          <p class="text-sm text-gray-500">Gods of 5PD <span class="text-gray-600 text-xs">5pd</span> vs Szach Mat <span class="text-gray-600 text-xs">3d</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">2:0 | Grupa C</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="second_round">
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
                          <p class="text-sm text-gray-500">JUK ESPORT <span class="text-gray-600 text-xs">2e</span> vs Virtus Noobs <span class="text-gray-600 text-xs">1i</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">2:1 | Grupa C</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="second_round">
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
                          <p class="text-sm text-gray-500">G4rnuchy <span class="text-gray-600 text-xs">4k</span> vs Papiery rumiankowe Velvet <span class="text-gray-600 text-xs">1b</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">2:0 | Grupa D</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="second_round">
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
                          <p class="text-sm text-gray-500">VIKINGS 1G <span class="text-gray-600 text-xs">1g</span> vs Upos Banditos <span class="text-gray-600 text-xs">2bt</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">0:2 | Walkover | Grupa D</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <!-- <li>
                  <div class="relative pb-8">
                    <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-[#3d3d3d]" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                      <div>
                        <span class="h-8 w-8 rounded-full bg-red-500 flex items-center justify-center ring-8 ring-[#0e0e0e]">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
                          </svg>
                        </span>
                      </div>
                      <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                        <div>
                          <p class="text-sm text-gray-500"><span class="theme-text">Koniec</span> drugiej rundy</p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-28">5 marca</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li> -->

                <li class="third_round_control hover:bg-slate-500/25 hover:cursor-pointer">
                  <div class="relative pb-8">
                    <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-[#3d3d3d]" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                      <div>
                        <span class="h-8 w-8 rounded-full theme-bg flex items-center justify-center ring-8 ring-[#0e0e0e]">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
                          </svg>
                        </span>
                      </div>
                      <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                        <div class="flex flex-row items-center justify-center roll_out">
                          <p class="text-sm text-gray-500"><span class="theme-text">Trzecia</span> runda w grupach</p>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 ">
                            <path class="arrow" fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                          </svg>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-28">5 - 10 marca</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="third_round">
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
                          <p class="text-sm text-gray-500">ELTK <span class="text-gray-600 text-xs">2p</span> vs Zabrakło Cala <span class="text-gray-600 text-xs">4i</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">0:2 | Grupa A</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="third_round">
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
                          <p class="text-sm text-gray-500">Miernotki <span class="text-gray-600 text-xs">2i</span> vs KLAN AZAZELA <span class="text-gray-600 text-xs">4i</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">0:2 | Grupa A</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="third_round">
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
                          <p class="text-sm text-gray-500">chude byki <span class="text-gray-600 text-xs">3a</span> vs UHO BOYS <span class="text-gray-600 text-xs">3gt</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">0:2 | Grupa B</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="third_round">
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
                          <p class="text-sm text-gray-500">TurlajBeczke <span class="text-gray-600 text-xs">5pi</span> vs KOKENERGY <span class="text-gray-600 text-xs">5pi</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">2:0 | Walkover | Grupa B</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="third_round">
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
                          <p class="text-sm text-gray-500">Gods of 5PD <span class="text-gray-600 text-xs">5pd</span> vs Virtus Noobs <span class="text-gray-600 text-xs">1i</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">2:0 | Grupa C</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="third_round">
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
                          <p class="text-sm text-gray-500">Szach Mat <span class="text-gray-600 text-xs">3d</span> vs JUK ESPORT <span class="text-gray-600 text-xs">2e</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">0:2 | Grupa C</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="third_round">
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
                          <p class="text-sm text-gray-500">Upos Banditos <span class="text-gray-600 text-xs">2bt</span> vs Informatycy z przypadku <span class="text-gray-600 text-xs">3i</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">2:1 | Grupa D</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="third_round">
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
                          <p class="text-sm text-gray-500">Papiery rumiankowe Velvet <span class="text-gray-600 text-xs">1b</span> vs VIKINGS 1G <span class="text-gray-600 text-xs">1g</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">2:0 | Walkover | Grupa D</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <!-- <li>
                  <div class="relative pb-8">
                    <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-[#3d3d3d]" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                      <div>
                        <span class="h-8 w-8 rounded-full bg-red-500 flex items-center justify-center ring-8 ring-[#0e0e0e]">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
                          </svg>
                        </span>
                      </div>
                      <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                        <div>
                          <p class="text-sm text-gray-500"><span class="theme-text">Koniec</span> trzeciej rundy</p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-28">10 marca</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li> -->

                <li class="fourth_round_control hover:bg-slate-500/25 hover:cursor-pointer">
                  <div class="relative pb-8">
                    <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-[#3d3d3d]" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                      <div>
                        <span class="h-8 w-8 rounded-full theme-bg flex items-center justify-center ring-8 ring-[#0e0e0e]">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
                          </svg>
                        </span>
                      </div>
                      <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                        <div class="flex flex-row items-center justify-center roll_out">
                          <p class="text-sm text-gray-500"><span class="theme-text">Czwarta</span> runda w grupach</p>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 ">
                            <path class="arrow" fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                          </svg>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-28">10-13 marca</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="fourth_round">
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
                          <p class="text-sm text-gray-500">G4rnuchy <span class="text-gray-600 text-xs">4k</span> vs Upos Banditos <span class="text-gray-600 text-xs">2bt</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">1:2 | Grupa D</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="fourth_round">
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
                          <p class="text-sm text-gray-500">Informatycy z przypadku <span class="text-gray-600 text-xs">3i</span> vs VIKINGS 1G <span class="text-gray-600 text-xs">1g</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">2:0 | Walkover | Grupa D</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <!-- <li>
                  <div class="relative pb-8">
                    <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-[#3d3d3d]" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                      <div>
                        <span class="h-8 w-8 rounded-full bg-red-500 flex items-center justify-center ring-8 ring-[#0e0e0e]">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
                          </svg>
                        </span>
                      </div>
                      <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                        <div>
                          <p class="text-sm text-gray-500"><span class="theme-text">Koniec</span> czwartej rundy</p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-28">13 marca</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li> -->

                <li class="fiveth_round_control hover:bg-slate-500/25 hover:cursor-pointer">
                  <div class="relative pb-8">
                    <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-[#3d3d3d]" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                      <div>
                        <span class="h-8 w-8 rounded-full theme-bg flex items-center justify-center ring-8 ring-[#0e0e0e]">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
                          </svg>
                        </span>
                      </div>
                      <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                        <div class="flex flex-row items-center justify-center roll_out">
                          <p class="text-sm text-gray-500"><span class="theme-text">Piąta</span> runda w grupach</p>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 ">
                            <path class="arrow" fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                          </svg>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-28">13-16 marca</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="fiveth_round">
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
                          <p class="text-sm text-gray-500">G4rnuchy <span class="text-gray-600 text-xs">4k</span> vs VIKINGS 1G <span class="text-gray-600 text-xs">1g</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">2:0 | Walkover | Grupa D</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="fiveth_round">
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
                          <p class="text-sm text-gray-500">Papiery rumiankowe Velvet <span class="text-gray-600 text-xs">1b</span> vs Informatycy z przypadku <span class="text-gray-600 text-xs">3i</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">0:2 | Walkover | Grupa D</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <!-- <li>
                  <div class="relative pb-8">
                    <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-[#3d3d3d]" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                      <div>
                        <span class="h-8 w-8 rounded-full bg-red-500 flex items-center justify-center ring-8 ring-[#0e0e0e]">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
                          </svg>
                        </span>
                      </div>
                      <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                        <div>
                          <p class="text-sm text-gray-500"><span class="theme-text">Koniec</span> piątej rundy</p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-28">16 marca</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li> -->

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
                          <time datetime="2020-09-30">16 marca</time>
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
                          <p class="text-sm text-gray-500">Początek <span class="theme-text">fazy play-off</p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">16 marca</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="quarter_round_control hover:bg-slate-500/25 hover:cursor-pointer">
                  <div class="relative pb-8">
                    <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-[#3d3d3d]" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                      <div>
                        <span class="h-8 w-8 rounded-full theme-bg flex items-center justify-center ring-8 ring-[#0e0e0e]">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
                          </svg>
                        </span>
                      </div>
                      <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                        <div class="flex flex-row items-center justify-center roll_out">
                          <p class="text-sm text-gray-500"><span class="theme-text">Runda</span> Ćwierćfinałowa</p>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 ">
                            <path class="arrow" fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                          </svg>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-28">16-20 marca</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="quarter_round">
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
                          <p class="text-sm text-gray-500">Klan Azazela <span class="text-gray-600 text-xs">4i</span> vs UHO BOYS <span class="text-gray-600 text-xs">3gt</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">1:2 | Ćwierćfinał</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="quarter_round">
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
                          <p class="text-sm text-gray-500">TurlajBeczke <span class="text-gray-600 text-xs">5pi</span> vs Zabrakło Cala <span class="text-gray-600 text-xs">4i</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">2:0 | Ćwierćfinał</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="quarter_round">
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
                          <p class="text-sm text-gray-500">GODS of 5PD <span class="text-gray-600 text-xs">5pd</span> vs G4rnuchy <span class="text-gray-600 text-xs">4k</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">2:0 | Ćwierćfinał</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="quarter_round">
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
                          <p class="text-sm text-gray-500">Upos Banditos <span class="text-gray-600 text-xs">2bt</span> vs JUK ESPORT <span class="text-gray-600 text-xs">2e</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">2:1 | Ćwierćfinał</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="half_round_control hover:bg-slate-500/25 hover:cursor-pointer">
                  <div class="relative pb-8">
                    <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-[#3d3d3d]" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                      <div>
                        <span class="h-8 w-8 rounded-full theme-bg flex items-center justify-center ring-8 ring-[#0e0e0e]">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
                          </svg>
                        </span>
                      </div>
                      <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                        <div class="flex flex-row items-center justify-center roll_out">
                          <p class="text-sm text-gray-500"><span class="theme-text">Runda</span> półfinałowa</p>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 ">
                            <path class="arrow" fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                          </svg>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-28">20-23 marca</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="half_round">
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
                          <p class="text-sm text-gray-500">UHO BOYS <span class="text-gray-600 text-xs">3gt</span> <span class="theme-text">vs</span> Gods of 5PD <span class="text-gray-600 text-xs">5pd</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">1:2 | Półfinał</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="half_round">
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
                          <p class="text-sm text-gray-500">TurlajBeczke <span class="text-gray-600 text-xs">5pi</span><span class="theme-text"> vs</span> Upos Banditos <span class="text-gray-600 text-xs">2bt</span></span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">2:0 | Półfinał</time>
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
                          <p class="text-sm text-gray-500">Koniec <span class="theme-text">fazy play-off</p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30">23 marca</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <!-- <li>
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
                </li> -->

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
                          <p class="text-sm text-gray-500"><span class="theme-text">Finał</span> - Gods of 5PD <span class="text-gray-600 text-xs">5pd</span> <span class="theme-text">vs</span> TurlajBeczke <span class="text-gray-600 text-xs">5pi</span></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30" class="truncate">1:2 | 27 marca</time>
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
                          <p class="text-sm text-gray-500">Transmisja na żywo <a href="https://www.twitch.tv/events_szanajcy" target="_blank" class="text-gray-600 text-xs theme-text-hover duration-150">twitch.tv/eventy_szanajcy</a></p>
                        </div>
                        <div class="whitespace-nowrap text-right text-sm text-gray-500">
                          <time datetime="2020-09-30" class="truncate">27 marca 12:00</time>
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
                          <time datetime="2020-10-04" class="truncate">27 marca</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>

            </div>
          </div>

          <!-- 'License' panel, show/hide based on tab state -->
          <div id="druzyny" class="pt-10 tab hidden">
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
                  <?php
                  $sql = "SELECT teams.team_id, teams.name, team_groups.name as group_name, teams.class, teams.players, teams.profile_img, team_status.name as status_name, events.max_players_in_team as max_players_in_team FROM teams join events on events.event_id = teams.event_id join team_status on team_status.status_id=teams.status_id left join team_groups on team_groups.group_id=teams.group_id WHERE teams.event_id = ".$id." order by team_id DESC";
                  $result2 = mysqli_query($conn, $sql);
          if(mysqli_num_rows($result2) > 0) {

             echo '

              </table>
              <table class="pt-2 w-full text-sm leading-6 text-gray-500">
          ';
            while($row2 = mysqli_fetch_assoc($result2)){
              $team_id = $row2['team_id'];
              if($row2['profile_img'] == "") {
                $row2['profile_img'] = "team_default.png";
              }
              $team_players = $row2['players'];
              $team_players_names = $row2['players']; 
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
              <tr onclick="expandTeamsToggle(`'.$row2['team_id'].'`)" class="hover:bg-[#3d3d3d] duration-150 cursor-pointer border-[#1c1c1c] last:border-[0px] border-b sm:mt-0 text-gray-500">
                <td class="py-2 flex items-center gap-2">
                  <img src="public/img/teams/'.$row2['profile_img'].'" alt="team_profile" class="aspect-square object-cover max-w-[40px] rounded-full">
                  <p class="capitalize">
                  '.$row2['name'].' 
                  <span class="text-xs text-gray-600">'.$row2['class'].'</span>
                  </p>
                </td>
                <td class="uppercase text-xs">'.$row2['group_name'].'</td>
                <!-- <td>
                      <div class="tooltip text-gray-600 theme-text-hover">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3" stroke="currentColor" class="icon w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                          </svg>
                          <span class="tooltip-text">Kapitan: discorduser#2137</span>
                      </div>
                </td> --!>
                <td class="'.$color.' text-xs">';
                if($row2['status_name'] == 'zakwalifikowana'){
                              echo 'Zakwalifikowana';
                            }elseif($row2['status_name'] == 'zdyskwalifikowana'){
                              echo '<span class="text-red-500">Zdyskwalifikowana</span>';
                            }elseif($row2['status_name'] == 'wyszli z grupy'){
                              echo '<span class="text-green-500"Zakwalifikowana</span>';
                            }elseif($row2['status_name'] == 'niezakwalifikowana'){
                              echo '<span class="text-red-500">Niezakwalifikowana</span>';
                            }elseif($row2['status_name'] == 'wygrała turniej'){
                              echo '<span class="flex flex-row items-center gap-1 text-yellow-500">Wygrała turniej!
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 0 0 2.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 0 1 2.916.52 6.003 6.003 0 0 1-5.395 4.972m0 0a6.726 6.726 0 0 1-2.749 1.35m0 0a6.772 6.772 0 0 1-3.044 0" />
                              </svg>
                              </span>';
                            }elseif($row2['status_name'] == 'zakwalifikowana do kolejnej fazy'){
                              echo '<span class="theme-text">Zakwalifikowana do kolejnej fazy</span>';
                            }elseif($row2['status_name'] == 'nie wyszła z grupy'){
                              echo '<span class="">Nie wyszła z grupy</span>';
                            }else{
                              echo $row2['status_name'];
                            }
                echo '</td>
                <td class="text-right">'.$acsual_team_players_count.'/'.$row2['max_players_in_team'].'</td>
                <td class="ml-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                </svg>
                </td>
              </tr>
              <tr style="scale: 0; height: 0;" id="event_'.$row2['team_id'].'" class="transition-all duration-150 px-2 border-[#1c1c1c] hidden border-b sm:mt-0 text-gray-500">
                <td colspan="6" class="py-2 gap-2 w-full hover:bg-black/5">
                  <p class="text-xs capitalized">';
                  // Rozbijamy string na części na podstawie średników
                    $string = $team_players_names;
// Rozbijamy string na części na podstawie średników
$parts = explode(';', $string);

// Inicjalizujemy zmienne na dane
$kapitan = "";
$rezerwowy = "";
$players = [];

foreach ($parts as $part) {
    // Rozbijamy każdą część na klucz i wartość na podstawie dwukropka
    $subparts = explode(':', $part);
    if(count($subparts) === 2){
        $key = $subparts[0];
        $value = $subparts[1];
        // W zależności od klucza przetwarzamy dane
        switch ($key) {
            case 'cap':
                $kapitan_parts = explode('&', $value);
                $kapitan_name_parts = explode(' ', $kapitan_parts[0]);
                $kapitan = $kapitan_name_parts[0]; // Pierwszy element po & to imię kapitana
                $kapitan_pseudonym = '"'.$kapitan_parts[1].'"'; // Drugi element po & to pseudonim kapitana
                break;
            case 'rez':
                $rezerwowy_parts = explode('&', $value);
                $rezerwowy_name_parts = explode(' ', $rezerwowy_parts[0]);
                $rezerwowy = $rezerwowy_name_parts[0]; // Pierwszy element po & to imię rezerwowego
                $rezerwowy_pseudonym = '"'. $rezerwowy_parts[1] .'"'; // Drugi element po & to pseudonim rezerwowego
                break;
            default:
                // Przetwarzamy dane graczy
                $player_parts = explode('&', $value);
                $player_name_parts = explode(' ', $player_parts[0]);
                $player_name = $player_name_parts[0]; // Imię
                $player_pseudonym = '"'.$player_parts[1].'"'; // Pseudonim
                if ($player_name !== "") {
                    $players[] = "$player_name $player_pseudonym";
                }
                break;
        }
    }
}

// Formatujemy dane w pożądany sposób
$result = "";
if ($kapitan !== "") {
    $result .= "Kapitan: $kapitan $kapitan_pseudonym";
}
if (!empty($players)) {
    $result .= ", " . implode(", ", $players);
}
if ($rezerwowy !== "") {
    $result .= ", Rezerwowy: $rezerwowy $rezerwowy_pseudonym";
}
if ($kapitan === "" && empty($players) && $rezerwowy === "") {
    $result = "Brak zawodników w drużynie.";
}

echo $result;

                  
                  echo '</p>
                </td>
              </tr>
            ';
          }
         
          } else {
            echo '<tr class="">
            <td class="py-2 w-full text-xs">Nie dodano jeszcze żadnej drużyny.</td>
          </tr>';
          }
                  ?>
                </table>
              </div>
            </div>
          </div>

          <div
            id="info"
            class="text-sm text-gray-500 pt-10 tab hidden"
          >
            <h3 class="sr-only">Frequently Asked Questions</h3>

            <dl>
              <?php 
              $sql_inf = "SELECT * FROM events where event_id = ".$id."";
              $result_inf = mysqli_query($conn, $sql_inf);
              if($row = mysqli_fetch_assoc($result_inf)){
                if($row['infos']=='' || $row['infos']=='NULL' || $row['infos']=='off' || $row['infos']==NULL){
                    echo '';
                } else{
                    // echo '
                    //     <article class="mt-4 text-sm text-gray-400">
                    //         <div class="mt-10 border-t border-[#3d3d3d] pt-10">
                    //             <h3 class="text-sm font-medium text-gray-300">Zapisy</h3>
                    //     ';
                    echo $row['infos'];
                    // echo '
                    //         </div>
                    //     </article>
                    //     ';
                    }
                  }
                ?>
              <!-- More FAQs... -->
            </dl>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>

  var arrows = document.querySelectorAll('.arrow');

  var firstRoundControl = document.querySelector('.first_round_control');
  var firstRounds = document.querySelectorAll('.first_round');

  var alternativeArrow = 'M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z';
  var defaultArrow = 'M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z';

  firstRounds.forEach((e)=>{
    e.classList.add('hidden');
  })

  firstRoundControl.addEventListener("click", ()=>{
    firstRounds.forEach((e)=>{
      e.classList.toggle('hidden');
      if(!e.classList.contains('hidden')){
        arrows[0].setAttribute('d', alternativeArrow)
      } else{
        arrows[0].setAttribute('d', defaultArrow)
      }
    })
  })

  var secondRoundControl = document.querySelector('.second_round_control');
  var secondRounds = document.querySelectorAll('.second_round');

  secondRounds.forEach((e)=>{
    e.classList.add('hidden');
  })

  secondRoundControl.addEventListener("click", ()=>{
    secondRounds.forEach((e)=>{
      e.classList.toggle('hidden');
      if(!e.classList.contains('hidden')){
        arrows[1].setAttribute('d', alternativeArrow)
      } else{
        arrows[1].setAttribute('d', defaultArrow)
      }
    })
  })

  var thirdRoundControl = document.querySelector('.third_round_control');
  var thirdRounds = document.querySelectorAll('.third_round');

  thirdRounds.forEach((e)=>{
    e.classList.add('hidden');
  })

  thirdRoundControl.addEventListener("click", ()=>{
    thirdRounds.forEach((e)=>{
      e.classList.toggle('hidden');
      if(!e.classList.contains('hidden')){
        arrows[2].setAttribute('d', alternativeArrow)
      } else{
        arrows[2].setAttribute('d', defaultArrow)
      }
    })
  })

  var fourthRoundControl = document.querySelector('.fourth_round_control');
  var fourthRounds = document.querySelectorAll('.fourth_round');

  fourthRounds.forEach((e)=>{
    e.classList.add('hidden');
  })

  fourthRoundControl.addEventListener("click", ()=>{
    fourthRounds.forEach((e)=>{
      e.classList.toggle('hidden');
      if(!e.classList.contains('hidden')){
        arrows[3].setAttribute('d', alternativeArrow)
      } else{
        arrows[3].setAttribute('d', defaultArrow)
      }
    })
  })

  var fivethRoundControl = document.querySelector('.fiveth_round_control');
  var fivethRounds = document.querySelectorAll('.fiveth_round');

  fivethRounds.forEach((e)=>{
    e.classList.add('hidden');
  })

  fivethRoundControl.addEventListener("click", ()=>{
    fivethRounds.forEach((e)=>{
      e.classList.toggle('hidden');
      if(!e.classList.contains('hidden')){
        arrows[4].setAttribute('d', alternativeArrow)
      } else{
        arrows[4].setAttribute('d', defaultArrow)
      }
    })
  })

  var playOffQuarterRoundControl = document.querySelector('.quarter_round_control');
  var QuarterRounds = document.querySelectorAll('.quarter_round');
  
  QuarterRounds.forEach((e)=>{
    e.classList.add('hidden');
  })

  playOffQuarterRoundControl.addEventListener("click", ()=>{
    QuarterRounds.forEach((e)=>{
      e.classList.toggle('hidden');
      if(!e.classList.contains('hidden')){
        arrows[5].setAttribute('d', alternativeArrow)
      } else{
        arrows[5].setAttribute('d', defaultArrow)
      }
    })
  })

  var playOffHalfRoundControl = document.querySelector('.half_round_control');
  var HalfRounds = document.querySelectorAll('.half_round');
  
  HalfRounds.forEach((e)=>{
    e.classList.add('hidden');
  })

    playOffHalfRoundControl.addEventListener("click", ()=>{
    HalfRounds.forEach((e)=>{
      e.classList.toggle('hidden');
      if(!e.classList.contains('hidden')){
        arrows[6].setAttribute('d', alternativeArrow)
      } else{
        arrows[6].setAttribute('d', defaultArrow)
      }
    })
  })

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
        target.style.display = 'none';
      } else {
        target.style.scale = '1';
        target.style.display = 'table-row';
          target.style.height = 'auto';
      }
    }
  }

  function expandResultsToggle(event_id) {
    var target = document.getElementById("result_"+event_id);
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
        target.style.display = 'none';
      } else {
        target.style.scale = '1';
        target.style.display = 'table-cell';
          target.style.height = 'auto';
      }
      const url_select = "components/panel/events/events_result_of_team_preview.php?id="+event_id;
      fetch(url_select)
        .then(response => response.text())
        .then(data => {
          const parser = new DOMParser();
          const parsedDocument = parser.parseFromString(data, "text/html");
          target.innerHTML = parsedDocument.body.innerHTML;

          // Przechodź przez znalezione skrypty i wykonuj je
          // const scripts = parsedDocument.querySelectorAll("script");
          // scripts.forEach(script => {
          //   const scriptElement = document.createElement("script");
          //   scriptElement.textContent = script.textContent;
          //   document.body.appendChild(scriptElement);
          // });
        });
    }
  }

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
