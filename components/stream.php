<?php 
        include 'scripts/conn_db.php';
        $sql = "SELECT * FROM `informations` WHERE `id` = 6";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $link = $row['value'];
        $after_twitch = strstr($link, 'twitch.tv/');
        if ($after_twitch !== false) {
            $profil = substr($after_twitch, strlen('twitch.tv/'));
        }else {
            $profil = "izakoo";
        }
?>
<section class="flex lg:flex-row flex-col-reverse  items-center gap-8 justify-between w-full pb-14 2xl:px-[15%] px-[10%]">
    <div data-aos="fade-right" data-aos-delay="100" class="">
        <iframe
        class="rounded-xl shadow-2xl xl:scale-100 lg:scale-90 md:scale-75 sm:scale-[0.6] scale-[0.5] flex flex-col items-center justify-start"
        src="https://player.twitch.tv/?channel=<?=$profil?>&parent=eventy.zs14.rgbpc.pl&muted=true&autoplay=false"
        frameborder="0"
        scrolling="no"
        allowfullscreen="true"
        height="395"
        width="700">
        </iframe>
    </div>
    <div data-aos="fade-left" data-aos-delay="100" class="font-bold text-gray-800 text-xl lg:text-left text-center">
        <h1 class="font-[roboto]">Zobacz czy właśnie teraz trwa turniej.</h1>
        <p class="font-medium text-sm text-gray-500">Jeśli nie, to sprawdź kiedy będzie następny!</p>
        <div class="flex items-start lg:justify-start justify-center py-2">
            <a href="stream.php" class="theme-border theme-bg-hover theme-shadow-button border-2 mr-3 uppercase rounded-full py-2 px-4 text-gray-800 text-sm hover:text-white transition-all duration-300 font-medium">Stream</a>
            <a href="eventy.php" class="theme-border theme-shadow-button theme-bg border-2 bg-green-500 rounded-full py-2 px-4 text-white uppercase text-sm font-medium transition-all duration-300">EVENTY</a>
        </div>
    </div>
</section>