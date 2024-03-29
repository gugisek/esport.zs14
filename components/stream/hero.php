
<section id="bg" style="background-image: url('public/img/green.jpg');" class="bg-cover bg-fixed">
    <section class="py-4 px-[5%] md:px-[10%] 2xl:px-[15%]  bg-[#000000c0]">
        <?php include 'components/navbar.php'; ?>
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
       <section data-aos="fade-up" class="bg-[#0e0e0ef0] md:my-28 my-32 font-[poppins] text-gray-400 md:pt-8 pb-6 flex xl:flex-row flex-col gap-1 xl:justify-evenly justify-center rounded-xl shadow-xl">
            <div class="xl:scale-100 lg:scale-90 md:scale-75 sm:scale-[0.6] scale-[0.5] flex flex-col items-center justify-start">
                <iframe
                class="rounded-xl shadow-2xl"
                src="https://player.twitch.tv/?channel=<?=$profil?>&parent=eventy.zs14.rgbpc.pl&muted=true&autoplay=false"
                frameborder="0"
                scrolling="no"
                allowfullscreen="true"
                height="395"
                width="700">
                </iframe>
                <a href="<?=$link?>" target="_blank" class="md:text-xs text-base font-[poppins] text-gray-600 theme-text-hover duration-300 py-0 pt-2">Twitch.tv/<?=$profil?></a>
            </div>
            <!-- <div class="xl:px-0 px-8">
                <h1 class="font-[poppins] font-bold italic mb-2 text-gray-200">Harmonogram transmisji</h1>
                <div class="flex flex-col py-2"> 
                    <p class="text-xs theme-text">28.10.2023 14:40</p>
                    <p class="text-sm">CS2: Półfinał Maćki z 5pi vs własny cień</p>
                    <hr class="border-[#1c1c1c] mt-2">
                </div>
                <div class="flex flex-col py-2"> 
                    <p class="text-xs theme-text">28.10.2023 14:40</p>
                    <p class="text-sm">CS2: Półfinał Maćki z 5pi vs własny cień</p>
                    <hr class="border-[#1c1c1c] mt-2">
                </div>
                <div class="flex flex-col py-2"> 
                    <p class="text-xs theme-text">28.10.2023 14:40</p>
                    <p class="text-sm">CS2: Półfinał Maćki z 5pi vs własny cień</p>
                    <hr class="border-[#1c1c1c] mt-2">
                </div>
            </div>    -->
        </section>
        
    </section>
</section>