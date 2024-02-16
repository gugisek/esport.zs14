<?php
    include "./scripts/conn_db.php";
    $sql = "SELECT * FROM informations where id=20 or id=21";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $sponsors_info[] = $row['value'];
    }
?>
<section id="bg" class="w-full bg-fixed bg-cover bg-top">
    <div class="py-24 sm:py-32 bg-[#000000c0]">
        <div class="2xl:px-[15%] md:px-[10%] px-[5%]">
            <div class="grid grid-cols-1 items-center gap-x-8 gap-y-16 lg:grid-cols-2">
            <div data-aos="fade-right" data-aos-delay="100" class="mx-auto w-full max-w-xl lg:mx-0">
                <h2 class="text-3xl font-bold tracking-tight text-white"><?=$sponsors_info[0]?></h2>
                <p class="mt-6 leading-8 text-gray-300"><?=$sponsors_info[1]?></p>
                <div class="mt-8 flex items-center gap-x-6">
                <a href="events.php" class="rounded-md theme-bg theme-bg-hover duration-150 theme-shadow-button px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Przekonaj się</a>
                <a href="kontakt.php" class="text-sm font-semibold text-white theme-text-hover duration-300">Napisz do nas <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <div class="mx-auto grid w-full max-w-xl grid-cols-2 items-center gap-y-12 sm:gap-y-14 lg:mx-0 lg:max-w-none lg:pl-8">
                <span data-aos="fade-left" data-aos-delay="100">
                    <a href="" class="hover:shadow-xl max-h-16 aspect-[8/3] hover:scale-105 duration-300 bg-white py-4 px-2 rounded-xl flex items-center justify-center">
                        <img src="public/img/sponsors/rgbpc.png" alt="" class="aspect-[8/3] object-contain">
                    </a>
                </span>
                <span data-aos="fade-left" data-aos-delay="200">
                    <a target="_blank" href="https://www.twitch.tv/events_szanajcy" class="hover:shadow-xl aspect-[8/3] hover:scale-105 max-h-16 duration-300 bg-[#9147ff] py-4 px-2 rounded-xl flex items-center justify-center">
                        <img src="public/img/sponsors/twitch.jpg" alt="" class="aspect-[8/3] object-contain">
                    </a>
                </span>
                <span data-aos="fade-left" data-aos-delay="300">
                    <a target="_blank" href="https://www.zs14.pl" class="hover:shadow-xl aspect-[8/3] max-h-16 hover:scale-105 duration-300 bg-green-100 py-4 px-2 rounded-xl flex items-center justify-center">
                        <img src="public/img/sponsors/logo.webp" alt="" class="aspect-[8/3] object-contain">
                    </a>
                </span>
                <span data-aos="fade-left" data-aos-delay="400">
                    <a target="_blank" href="https://praktyczny-informatyk.pl" class="hover:shadow-xl aspect-[8/3] max-h-16 hover:scale-105 duration-300 bg-[#303030] py-4 px-2 rounded-xl flex items-center justify-center">
                        <img src="public/img/sponsors/praktyczny.png" alt="" class="aspect-[8/3] object-contain">
                    </a>
                </span>
                
                <!-- <img class="max-h-12 w-full object-contain object-left" src="public/img/sponsors/rgbpc.png" alt="Tuple" width="105" height="48"> -->
            </div>
            </div>
        </div>
    </div>
</section>
