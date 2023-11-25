<?php
include "../../../scripts/security.php";
include "../../../scripts/conn_db.php";
$sql = "select * from informations where id=20 or id=21;";
$result = mysqli_query($conn, $sql);
while ($row = $result->fetch_assoc()) {
    $sponsors[] = $row['value'];
}
?>
<section class="w-full bg-fixed bg-cover bg-top">
    <div class="py-24 sm:py-32">
        <div class="2xl:px-[15%] md:px-[10%] px-[5%]">
            <div class="grid grid-cols-1 items-center gap-x-8 gap-y-16 lg:grid-cols-2">
                <form action="scripts/settings/edit_sponsors.php" method="POST" data-aos="fade-right" data-aos-delay="100" class="mx-auto w-full max-w-xl lg:mx-0">
                    <input required name="title" class="text-3xl font-bold tracking-tight text-white pb-6 w-full focus:outline-0 invalid:border-red-600 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white  bg-[#0e0e0e]/0 mt-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0" value="<?=$sponsors[0]?>">
                    <textarea name="description" required rows="3" class="leading-6 text-gray-300 w-full focus:outline-0 invalid:border-red-600 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white bg-[#0e0e0e]/0 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0"><?=$sponsors[1]?></textarea>
                    <div class="mt-8 flex items-center gap-x-6">
                    <button class="rounded-md bg-green-600 hover:bg-green-500 duration-150 px-6 py-2.5 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Zapisz</button>
                    <a class="text-sm font-semibold text-gray-400">Kliknij na informacje, aby je edytować</a>
                    </div>
                </form>
                <div class="mx-auto grid w-full max-w-xl grid-cols-2 items-center gap-y-12 sm:gap-y-14 lg:mx-0 lg:max-w-none lg:pl-8">
                    <span data-aos="fade-left" data-aos-delay="100">
                        <a href="" class="hover:shadow-xl max-h-16 aspect-[8/3] hover:scale-105 duration-300 bg-white py-4 px-2 rounded-xl flex items-center justify-center">
                            <img src="public/img/sponsors/rgbpc.png" alt="" class="aspect-[8/3] object-contain">
                        </a>
                    </span>
                    <span data-aos="fade-left" data-aos-delay="200">
                        <a href="" class="hover:shadow-xl aspect-[8/3] hover:scale-105 max-h-16 duration-300 bg-[#9147ff] py-4 px-2 rounded-xl flex items-center justify-center">
                            <img src="public/img/sponsors/twitch.jpg" alt="" class="aspect-[8/3] object-contain">
                        </a>
                    </span>
                    <span data-aos="fade-left" data-aos-delay="300">
                        <a href="" class="hover:shadow-xl aspect-[8/3] max-h-16 hover:scale-105 duration-300 bg-green-100 py-4 px-2 rounded-xl flex items-center justify-center">
                            <img src="public/img/sponsors/logo.webp" alt="" class="aspect-[8/3] object-contain">
                        </a>
                    </span>
                    <span data-aos="fade-left" data-aos-delay="400">
                        <a href="" class="hover:shadow-xl aspect-[8/3] max-h-16 hover:scale-105 duration-300 bg-[#303030] py-4 px-2 rounded-xl flex items-center justify-center">
                            <img src="public/img/sponsors/praktyczny.png" alt="" class="aspect-[8/3] object-contain">
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
