<?php
    include "./scripts/conn_db.php";
    $sql = "SELECT * FROM informations where id=9 or id=5";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $contact_info[] = $row['value'];
    }
?>
<section id="bg" class="bg-cover bg-fixed">
    <section class="pt-4 bg-[#000000c0]">
        <?php include 'components/navbar.php'; ?>
       <section class="py-32 md:mt-0 sm:mt-14 mt-28">
            <div class="mx-auto max-w-2xl p-8 text-center">
                <h2 data-aos="fade-right" data-aos-delay="200" class="text-3xl font-bold tracking-tight text-gray-100 sm:text-4xl">Pliki do pobrania</h2>
                <p data-aos="fade-right" data-aos-delay="300"  class="mt-2 leading-8 text-gray-300">Znajdziesz tu wszystkie pliki, które mogą Ci się przydać w ramach tej witryny.</p>
            </div>
       </section>
       <section data-aos="fade-up" class="bg-black/80 font-[poppins] py-8 text-gray-400 text-justify">
            <a href="public/downloads/zgoda_na_przetwarzanie_wizerunku.pdf" target="_blank" class="2xl:mx-[15%] md:mx-[10%] mx-[5%] border-t block border-white/10 hover:bg-[#3d3d3d] cursor-pointer duration-150">
                <dl class="divide-y divide-white/10">
                <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm flex items-center font-medium leading-6 py-4 text-white normal-case">Zgoda na przetwarzanie wizerunku</dt>
                    <dd class="flex items-center mt-2 text-sm text-gray-400 sm:mt-0 sm:col-span-2 gap-4 justify-between"><div>zgoda_na_przetwarzanie_wizerunku.pdf</div><div class="theme-text">Pobierz</div></dd>
                </div>
                </dl>
            </a>
            <!-- <div onclick="" class="2xl:mx-[15%] md:mx-[10%] mx-[5%] border-t border-white/10 hover:bg-[#3d3d3d] cursor-pointer duration-150">
                <dl class="divide-y divide-white/10">
                <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm flex items-center font-medium leading-6 py-4 text-white normal-case">Zgoda na przetwarzanie wizerunku</dt>
                    <dd class="flex items-center mt-2 text-sm text-gray-400 sm:mt-0 sm:col-span-2 gap-4 justify-between"><div>zgoda_na_przetwarzanie_wizerunku.pdf</div><div class="theme-text">Pobierz</div></dd>
                </div>
                </dl>
            </div> -->
        </section>
    </section>
</section>