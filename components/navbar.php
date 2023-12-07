          <?php
          include "scripts/conn_db.php";
          $sql = "SELECT value FROM informations WHERE informations.name = 'logo' or informations.name = 'description' or informations.name = 'discord' or informations.name = 'twitch' or informations.name = 'instagram' or informations.name = 'strona_szkoly';";
          $result = $conn->query($sql);
          while ($row = $result->fetch_assoc()) {
            $info[] = $row['value'];
          }
          $info[0] = nl2br($info[0]);
          ?>
<nav data-aos="fade-down" class="flex flex-col md:flex-row justify-between z-10 items-center absolute top-0 left-0 mx-auto right-0 2xl:w-[70vw] w-[80vw] py-4">
    <a href="index.php"><img class="max-w-[250px]" src="public/img/<?=$info[1]?>" alt=""></a>
    <div class="italic gap-4 uppercase flex flex-row flex-wrap items-center justify-center text-md text-base font-medium text-gray-200 pt-4 pb-2">
        <a href="regulamin.php" class="active:scale-95 theme-text-hover hover:[text-shadow:_2px_5px_20px] shadow-green-400 transition-all duration-150">Regulamin</a>
        <a href="zapisy.php" class="active:scale-95 theme-text-hover hover:[text-shadow:_2px_5px_20px] shadow-green-400 transition-all duration-150">Zapisy</a>
        <a href="stream.php" class="active:scale-95 theme-text-hover hover:[text-shadow:_2px_5px_20px] shadow-green-400 transition-all duration-150">Stream</a>
        <a href="events.php" class="active:scale-95 theme-text theme-text-hover hover:[text-shadow:_2px_5px_20px] shadow-green-400 transition-all duration-150">Eventy</a>
        <a href="kontakt.php" class="active:scale-95 theme-text-hover hover:[text-shadow:_2px_5px_20px] shadow-green-400 transition-all duration-150">Kontakt</a>
    </div>
</nav>