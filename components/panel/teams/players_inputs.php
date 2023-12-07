<?php
$team_id = $_GET['team_id'];
$zawodnik_count = 0;
$cap_name = '';
$cap_pseudo = '';
$cap_discord = '';
$rezerwowy_name = '';
$rezerwowy_pseudo = '';
$rezerwowy_discord = '';
if ($team_id != 0){
  include "../../../scripts/conn_db.php";
  $sql = "SELECT players FROM teams where team_id='$team_id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $team_players = $row['players'];
      $parts = explode(';', $team_players);

      // Inicjowanie zmiennych do przechowywania danych graczy
      $players = [];

      // Przetwarzanie każdej części
      foreach ($parts as $part) {
          // Podział części na klucz i wartość za pomocą separatora ":"
          $subParts = explode(':', $part);
          
          if (count($subParts) === 2) {
              // Pobranie nazwy klucza i danych gracza
              $key = $subParts[0];
              $player_data = explode('&', $subParts[1]);
              
              // Przypisanie danych gracza do tablicy asocjacyjnej
              $players[$key]['name'] = $player_data[0];
              $players[$key]['pseudo'] = $player_data[1];
              $players[$key]['discord'] = $player_data[2];
          }
      }

      // Wyświetlenie danych graczy
      $zawodnik_count = 0;
      foreach ($players as $key => $player) {
          if($key == 'cap'){
            $cap_name = $player['name'];
            $cap_pseudo = $player['pseudo'];
            $cap_discord = $player['discord'];
          }else if($key == 'rez'){
            $rezerwowy_name = $player['name'];
            $rezerwowy_pseudo = $player['pseudo'];
            $rezerwowy_discord = $player['discord'];
          }else{
            $zawodnik_count++;
            $zawodnik_name[$zawodnik_count] = $player['name'];
            $zawodnik_pseudo[$zawodnik_count] = $player['pseudo'];
            $zawodnik_discord[$zawodnik_count] = $player['discord'];
          }
      } 
}
?>
<div class="border-t border-white/10 mt-8">
    <h1 class="text-sm text-gray-400 py-6">Zawodnicy</h1>
    <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-4">
         <?php
          include "../../../scripts/conn_db.php";
          $event_id = $_GET['event_id'];
          $sql = "SELECT max_players_in_team, max_rezerwowy_players_in_team FROM events where event_id='$event_id'";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          $max_players_in_team = $row['max_players_in_team'];
          $i = 0;
          echo '<input type="hidden" name="normal_players_num" value="'.$max_players_in_team.'">';
          while($max_players_in_team+$row['max_rezerwowy_players_in_team']>0){
            if($max_players_in_team==$row['max_players_in_team']){
                $zawodnik = "Kapitan";
            }else if($max_players_in_team+$row['max_rezerwowy_players_in_team']<=$row['max_rezerwowy_players_in_team']){
                $zawodnik = "Rezerwowy";
            }else{
                $zawodnik = "Zawodnik";
            }
            echo '
            <div class="p-3 border';
            if($zawodnik == "Kapitan"){echo ' theme-border';}else {echo ' border-[#3d3d3d]';}
            echo ' rounded-xl">
              <dt class="text-sm font-medium leading-6 text-gray-300 text-xs text-center">'.$zawodnik.'</dt>
              <input name="';
              if($zawodnik == "Kapitan"){echo 'cap_name';}else if($zawodnik == "Rezerwowy"){echo 'rez_name';}else{echo 'zawodnik'.$i.'_name';}
              echo '" type="text" value="';
              if($zawodnik == "Kapitan"){echo $cap_name;}else if($zawodnik == "Rezerwowy"){echo $rezerwowy_name;}else{if($zawodnik_count>=1){echo $zawodnik_name[$zawodnik_count];}}
              echo '" placeholder="Imię i nazwisko" class="placeholder:text-gray-600 capitalize w-full text-gray-400 text-sm focus:text-white bg-[#0e0e0e] focus:ring-0 focus:outline-0 border-b border-white/10 py-2 theme-border-focus duration-150"></input>
              <input name="';
              if($zawodnik == "Kapitan"){echo 'cap_pseudo';}else if($zawodnik == "Rezerwowy"){echo 'rez_pseudo';}else{echo 'zawodnik'.$i.'_pseudo';}
              echo '" type="text" value="';
              if($zawodnik == "Kapitan"){echo $cap_pseudo;}else if($zawodnik == "Rezerwowy"){echo $rezerwowy_pseudo;}else{if($zawodnik_count>=1){echo $zawodnik_pseudo[$zawodnik_count];}}
              echo '" placeholder="Pseudonim" class="placeholder:text-gray-600 w-full text-gray-400 text-sm focus:text-white bg-[#0e0e0e] focus:ring-0 focus:outline-0 border-b border-white/10 py-2 theme-border-focus duration-150"></input>
              <input name="';
              if($zawodnik == "Kapitan"){echo 'cap_discord';}else if($zawodnik == "Rezerwowy"){echo 'rez_discord';}else{echo 'zawodnik'.$i.'_discord';}
              echo '" type="text" value="';
              if($zawodnik == "Kapitan"){echo $cap_discord;}else if($zawodnik == "Rezerwowy"){echo $rezerwowy_discord;}else{if($zawodnik_count>=1){echo $zawodnik_discord[$zawodnik_count];}}
              echo '" placeholder="Discord" class="placeholder:text-gray-600  w-full text-gray-400 text-sm focus:text-white bg-[#0e0e0e] focus:ring-0 focus:outline-0 border-b border-white/10 py-2 theme-border-focus duration-150"></input>
            </div>
            ';
            if($zawodnik != "Kapitan" && $zawodnik != "Rezerwowy"){
              if($zawodnik_count>=1){
                    $zawodnik_count--;
                }
            }
            $i++;
            $max_players_in_team--;
          }
        ?>
    </div>
</div>