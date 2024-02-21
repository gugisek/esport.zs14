<?php 
include 'scripts/conn_db.php';
$id = $_SESSION['login_id'];
$sql = "SELECT profile_picture FROM users where id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if($row['profile_picture'] == NULL){
  $profile_picture = "public/img/users_pp/default.png";
} else {
  $profile_picture = "public/img/users_pp/" . $row['profile_picture'];
}
$sql = "SELECT value FROM informations WHERE informations.name = 'logo';";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
  $info[] = $row['value'];
}
$sql = "SELECT COUNT(*) FROM events WHERE events.status_id = '1';";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
  $active_events = $row['COUNT(*)'];
}
$sql = "SELECT COUNT(*) FROM events";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
  $all_events = $row['COUNT(*)'];
}
?>
<div class="flex grow flex-col gap-y-5 overflow-y-auto lg:bg-black/10 bg-[#0e0e0e] px-6 ring-1 ring-white/5">
      <div class="flex h-16 shrink-0 items-center">
        <a href="https://eventy.zs14.rgbpc.pl/"><img class="h-8 w-auto" src="public/img/<?=$info[0]?>" alt="logo"></a>
      </div>
      <nav class="flex flex-1 flex-col">
        <ul role="list" class="flex flex-1 flex-col gap-y-7">
          <li>
            <ul role="list" class="-mx-2 space-y-1">
              <li class="active:scale-95 duration-150">
                <!-- Current: "bg-gray-800 text-white", Default: "text-gray-400 hover:text-white hover:bg-gray-800" -->
                <a id="dashboard" onclick="forOpen('components/panel/dashboard.php')" class="font-[poppins] sidenav-button-active sidenav-button text-gray-400 hover:bg-[#3d3d3d] hover:text-white duration-150 cursor-pointer group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205 3 1m1.5.5-1.5-.5M6.75 7.364V3h-3v18m3-13.636 10.5-3.819" />
                  </svg>

                    Strona główna
                </a>
              </li>
              <li class="active:scale-95 duration-150">
                <a id="events" onclick="forOpen('components/panel/events.php')" class="font-[poppins] hover:bg-[#3d3d3d] hover:text-white duration-150 cursor-pointer sidenav-button text-gray-400 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 1 1 0-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 0 1-1.44-4.282m3.102.069a18.03 18.03 0 0 1-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 0 1 8.835 2.535M10.34 6.66a23.847 23.847 0 0 0 8.835-2.535m0 0A23.74 23.74 0 0 0 18.795 3m.38 1.125a23.91 23.91 0 0 1 1.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 0 0 1.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 0 1 0 3.46" />
                  </svg>

                   Eventy
                   <span class="ml-auto w-9 min-w-max whitespace-nowrap rounded-full bg-black/10 px-2.5 py-0.5 text-center text-xs font-medium leading-5 text-gray-500 border border-[#3d3d3d]" aria-hidden="true"><?=$active_events?>/<?=$all_events?></span>
                </a>
              </li>
              <li class="active:scale-95 duration-150">
                <a id="cal" onclick="forOpen('components/panel/cal.php')" class="font-[poppins] sidenav-button text-gray-400 hover:bg-[#3d3d3d] hover:text-white duration-150 cursor-pointer group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                  </svg>

                    Harmonogram
                </a>
              </li>
              <li class="active:scale-95 duration-150">
                <a id="teams" onclick="forOpen('components/panel/teams.php')" class="font-[poppins] sidenav-button text-gray-400 hover:bg-[#3d3d3d] hover:text-white duration-150 cursor-pointer group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                  </svg>

                    Drużyny
                </a>
              </li>
              <li class="active:scale-95 duration-150">
                <a id="groups" onclick="forOpen('components/panel/groups.php')" class="font-[poppins] sidenav-button text-gray-400 hover:bg-[#3d3d3d] hover:text-white duration-150 cursor-pointer group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
                  </svg>
                    Grupy
                </a>
              </li>
              <li class="active:scale-95 duration-150">
                <a id="turnieje" onclick="forOpen('components/panel/turnieje.php')" class="font-[poppins] sidenav-button text-gray-400 hover:bg-[#3d3d3d] hover:text-white duration-150 cursor-pointer group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                  <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z" />
                  </svg>
                    Wyniki meczy
                </a>
              </li>
              <li class="active:scale-95 duration-150">
                <a id="users" onclick="forOpen('components/panel/users.php')" class="font-[poppins] sidenav-button text-gray-400 hover:bg-[#3d3d3d] hover:text-white duration-150 cursor-pointer group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                  </svg>

                    Użytkownicy
                </a>
              </li>
              <li class="active:scale-95 duration-150">
                <a id="settings" onclick="forOpen('components/panel/settings.php')" class="font-[poppins] sidenav-button text-gray-400 hover:bg-[#3d3d3d] hover:text-white duration-150 cursor-pointer group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                  <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                  Ustawienia
                </a>
              </li>
            </ul>
          </li>
          <!-- <li>
            <div class="text-xs font-semibold leading-6 text-gray-400">Your teams</div>
            <ul role="list" class="-mx-2 mt-2 space-y-1">
              <li>
                <a href="#" class="text-gray-400 hover:text-white hover:bg-gray-800 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                  <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-700 bg-gray-800 text-[0.625rem] font-medium text-gray-400 group-hover:text-white">P</span>
                  <span class="truncate">CS2 ZS14 2023</span>
                </a>
              </li>
              <li>
                <a href="#" class="text-gray-400 hover:text-white hover:bg-gray-800 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                  <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-700 bg-gray-800 text-[0.625rem] font-medium text-gray-400 group-hover:text-white">P</span>
                  <span class="truncate">Protocol</span>
                </a>
              </li>
              <li>
                <a href="#" class="text-gray-400 hover:text-white hover:bg-gray-800 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                  <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-700 bg-gray-800 text-[0.625rem] font-medium text-gray-400 group-hover:text-white">T</span>
                  <span class="truncate">Tailwind Labs</span>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="-mx-6 mt-auto flex items-center">

            <a href="#" class="w-[75%] flex items-center gap-x-4 px-6 py-3 text-sm font-medium leading-6 text-white  hover:bg-[#3d3d3d] duration-150 cursor-pointer">
              <img class="h-8 w-8 rounded-full bg-gray-800 object-cover" src="<?=$profile_picture?>" alt="">
              <span class="sr-only">Your profile</span>
              <span aria-hidden="true" class="font-[poppins] text-xs 2xl:text-sm"><?php echo $_SESSION['user']?></span>
            </a>
            <a href="scripts/logout.php" class="w-[25%] h-full flex items-center justify-center gap-x-4 px-6 py-3 text-sm font-semibold leading-6 text-white  hover:bg-[#3d3d3d] duration-150 cursor-pointer">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
              </svg>

            </a>

          </li>
        </ul>
      </nav>
    </div>
