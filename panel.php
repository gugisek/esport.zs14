<?php
  session_start();
  if(!isset($_SESSION['logged']))
  {
    header('Location: login.php');
    exit();
  }
?>
<!DOCTYPE html>
<html lang="pl">
<?php include 'components/head.php'; ?>
<?php
  include "scripts/conn_db.php";
  $sql = "SELECT background_picture FROM users WHERE users.id = '$_SESSION[login_id]';";
  $result = $conn->query($sql);
  while ($row = $result->fetch_assoc()) {
    $background_picture = $row['background_picture'];
  }
  if ($background_picture == "") {
    $background_picture = "style='background-color:#0e0e0e;'";
    $bg_color = "bg-[#0e0e0e]";
  } else {
    $background_picture = "style='background-image:url(public/img/users_bp/$background_picture);'";
    $bg_color = "bg-black/90";
    echo "
    <style>
    body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            pointer-events: none;
            z-index: -1;
          }
          </style>
          ";
        } 
        ?>
<body <?=$background_picture?> class='bg-cover bg-fixed bg-center bg-no-repeat'>
<?php include 'components/alert.php'; ?>
<!-- <div id="alert" aria-live="assertive" class="opacity-0 duration-150 pointer-events-none fixed z-50 inset-0 flex items-end px-4 py-6 sm:items-start sm:p-6">
  <div class="flex w-full flex-col items-center space-y-4 sm:items-end">
    <div class="pointer-events-auto w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
      <div class="p-4">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <div id="alert_icon" class="px-1"></div>
          </div>
          <div class="ml-3 w-0 flex-1 pt-0.5">
            <p id="alert_title" class="text-sm font-medium text-gray-900">Successfully saved!</p>
            <p id="aler_desc" class="mt-1 text-sm text-gray-500">Anyone with a link can now view this file.</p>
          </div>
          <div class="ml-4 flex flex-shrink-0">
            <button type="button" onclick="alertClose()" class="inline-flex rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
              <span class="sr-only">Close</span>
                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                </svg>
            </button>
          </div>
        </div>
      </div>
      <div id="alert_time" class="transition-all duration-100 w-full border-2"></div>
    </div>
  </div>
</div>
<script>
  if(localStorage.getItem("alert") != null) {
    var alertTitle = document.getElementById("alert_title");
    var alertDesc = document.getElementById("aler_desc");
    var alertBorder = document.getElementById("alert_time");
    var alertIcon = document.getElementById("alert_icon");

    alertDesc.innerHTML = localStorage.getItem("alert_message");

    if(localStorage.getItem("alert") == "success") {
      alertTitle.innerHTML = "Sukces!";
      alertBorder.classList.add("border-green-500");
      alertIcon.innerHTML = '<svg class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>';
    }
    if(localStorage.getItem("alert") == "error") {
      alertTitle.innerHTML = "Błąd!";
      alertBorder.classList.add("border-red-500");
      alertIcon.innerHTML = '<svg class="h-6 w-6 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" /></svg>';
    }
    if(localStorage.getItem("alert") == "warning") {
      alertTitle.innerHTML = "Ostrzeżenie!";
      alertBorder.classList.add("border-yellow-500");
      alertIcon.innerHTML = '<svg viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-yellow-500"><path fill-rule="evenodd" d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" /></svg>';
    }

    document.querySelector(".pointer-events-none").classList.remove("opacity-0");

    function alertClose() {
      document.querySelector(".pointer-events-none").classList.add("opacity-0");
    }
    function alert_time() {
      var alert_time = document.getElementById("alert_time");
      var width = 100;
      var id = setInterval(frame, 50);
      function frame() {
        if (width <= 0) {
          clearInterval(id);
        } else {
          width--;
          alert_time.style.width = width + "%";
        }
      }
    }
    alert_time();
    setTimeout(function() {
    alertClose();
    }, 5300);
    localStorage.removeItem("alert");
    localStorage.removeItem("alert_message");
  }
  
</script> -->
<!-- <div class="z-[-1]" style=" position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.9); pointer-events: none;"></div> -->
<div>
  <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
  <?php include 'components/panel/navbar_mobile.php'?>

  <!-- Static sidebar for desktop -->
  <div class="hidden xl:fixed xl:inset-y-0 xl:z-50 xl:flex xl:w-72 xl:flex-col">
    <!-- Sidebar component, swap this element with another sidebar if you like -->  
    <?php include 'components/panel/navbar.php'; ?>
  </div>

  <div class="xl:pl-72">
    <!-- Sticky search header -->
    <div <?=$background_picture?> class="sticky top-0 z-40 bg-cover bg-fixed bg-center bg-no-repeat">
      <div class="flex h-16 shrink-0 items-center gap-x-6 border-b border-white/5 <?=$bg_color?> px-4 shadow-sm sm:px-6 lg:px-8">
        <button id="nav_m_open_button" type="button" class="-m-2.5 p-2.5 text-white xl:hidden">
          <span class="sr-only">Open sidebar</span>
          <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10zm0 5.25a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
          </svg>
        </button>

        <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">
          <form class="flex flex-1" action="#" method="GET">
            <label for="search-field" class="sr-only">Search</label>
            <div class="relative w-full">
              <svg class="pointer-events-none absolute inset-y-0 left-0 h-full w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
              </svg>
              <input id="search-field" class="block h-full w-full border-0 bg-transparent py-0 pl-8 pr-0 text-white focus:ring-0 sm:text-sm" placeholder="Search..." type="search" name="search">
            </div>
          </form>
        </div>
      </div>
    </div>

    <div id="panel_body">
      
    </div>
  </div>
</div>

<script>
  //skrypt otwiera podstrony panelu
function forOpen(site) {
  var panel_body = document.getElementById("panel_body");
  panel_body.innerHTML =  "<div data-aos='zoom-in' data-aos-delay='100' class='flex justify-center items-center h-[80vh]'><div class='flex flex-col justify-center items-center'><div class='animate-spin rounded-full h-32 w-32 border-t-2 border-b-2 border-gray-900'></div><div class='text-white text-xl font-semibold mt-4'>Ładowanie...</div></div>";
  const url = site;
  fetch(url)
    .then(response => response.text())
    .then(data => {
      const parser = new DOMParser();
      const parsedDocument = parser.parseFromString(data, "text/html");

      // Wstaw zawartość strony (bez skryptów) do "panel_body"
      panel_body.innerHTML = parsedDocument.body.innerHTML;

      // Przechodź przez znalezione skrypty i wykonuj je
      const scripts = parsedDocument.querySelectorAll("script");
      scripts.forEach(script => {
        const scriptElement = document.createElement("script");
        scriptElement.textContent = script.textContent;
        document.body.appendChild(scriptElement);
      });

      // Zapisz URL w localStorage
      localStorage.setItem("panelPage", site);
    });
}

  var sidenavButtons = document.querySelectorAll(".sidenav-button");
    function sidenavButtonsToggle() {
        for(var i = 0; i < sidenavButtons.length; i++) {  
            sidenavButtons[i].classList.remove("sidenav-button-active");
        }
    }
    for(var i = 0; i < sidenavButtons.length; i++) {  
    sidenavButtons[i].addEventListener("click", function() {
      sidenavButtonsToggle();
      this.classList.add("sidenav-button-active");
    });
  }
  // skrypt otwiera zapamiętaną ostatnią podstronę panelu
  var panelPage = localStorage.getItem("panelPage");
  if (panelPage == null) {
    forOpen('components/panel/dashboard.php');
  } else {
    forOpen(panelPage);
    document.getElementById("dashboard").classList.remove("sidenav-button-active");
    document.getElementById(panelPage.replace("components/panel/", "").replace(".php", "")).classList.add("sidenav-button-active");
  }
</script>
 <script>
    const button = document.querySelector('#nav_m_close_button')
    const openButton = document.querySelector('#nav_m_open_button')
    const sidebar = document.querySelector('#sidenav_mobile')
    const backdrop = document.querySelector('#backdrop')

    function toggleNavMobile() {
      sidebar.classList.toggle('left-[-100%]')
      backdrop.classList.toggle('opacity-0')
      sidebar.classList.toggle('pointer-events-none')
      backdrop.classList.toggle('pointer-events-none')
    }
    button.addEventListener('click', () => {
      toggleNavMobile()
    })

    openButton.addEventListener('click', () => {
        toggleNavMobile()
    })
    </script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();

    var theme = localStorage.getItem("theme");
    if (theme == null) {
      motyw("green");
    } else {
      motyw(theme);
    }
  </script>
</body>
</html>