<section class="bg-[#0e0e0e] w-full 2xl:px-[15%] md:px-[10%] px-[5%] z-20">
  <section class="py-8 w-full grid md:grid-cols-4 grid-cols-1 gap-6 text-gray-200">
      <div data-aos="fade-right" data-aos-delay="100" class="py-4">
        <a href="index.php"><img src="public/img/<?=$info[1]?>" alt=""></a>
        <p class="py-4 text-sm font-[poppins] text-gray-300">
          <?= $info[0] ?>
        </p>
      </div>
      <div class="md:pl-8 flex flex-col">
        <h1 class="font-bold text-lg font-[poppins] py-4 uppercase italic">Informacje</h1>
        <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="50" href="regulamin.php" class="theme-text-hover duration-300 font-medium text-gray-300 py-1 text-sm">Regulamin</a>
        <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="100" href="polityka_prywatnosci.php" class="theme-text-hover duration-300 font-medium text-gray-300 py-1 text-sm">Polityka prywatności</a>
        <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="150" href="downloads.php" class="theme-text-hover duration-300 font-medium text-gray-300 py-1 text-sm">Pliki do pobrania</a>
        <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="200" href="autorzy.php" class="theme-text-hover duration-300 font-medium text-gray-300 py-1 text-sm">Autorzy</a>
      </div>
      <div class="md:pl-8 flex flex-col">
        <h1 class="font-bold text-lg font-[poppins] py-4 uppercase italic">Akcje</h1>
        <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250" href="events.php" class="theme-text-hover duration-300 font-medium text-gray-300 py-1 text-sm">Lista eventów</a>
        <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="300" href="stream.php" class="theme-text-hover duration-300 font-medium text-gray-300 py-1 text-sm">Stream</a>
        <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="350" href="zapisy.php" class="theme-text-hover duration-300 font-medium text-gray-300 py-1 text-sm">Zapisy</a>
        <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="400" href="kontakt.php" class="theme-text-hover duration-300 font-medium text-gray-300 py-1 text-sm">Kontakt</a>
      </div>
      <div class="flex flex-col">
        <h1 class="font-bold text-lg font-[poppins] py-4 uppercase italic">Media społecznościowe</h1>
        <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="450" href="<?=$info[2]?>" target="_blank" class="theme-text-hover duration-300 font-medium text-gray-300 py-1 text-sm">Discord</a>
        <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="500" href="<?=$info[3]?>" target="_blank" class="theme-text-hover duration-300 font-medium text-gray-300 py-1 text-sm">Twitch</a>
        <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="550" href="<?=$info[4]?>" target="_blank" class="theme-text-hover duration-300 font-medium text-gray-300 py-1 text-sm">Instagram Spotted</a>
        <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="600" href="<?=$info[5]?>" target="_blank" class="theme-text-hover duration-300 font-medium text-gray-300 py-1 text-sm">Strona szkoły</a>
      </div>
  </section>
  <hr class="border-[#3d3d3d]">
  <section data-aos="fade-down" data-aos-delay="100" data-aos-anchor-placement="top-bottom" class="flex w-full md:flex-row flex-col-reverse justify-between items-center py-12">
    <p class="text-gray-300 text-xs font-[poppins] font-light text-center md:text-left"><a href="panel.php" class="font-[poppins]">ZS14 events 2023</a> - powered by RGBpc.pl designed and created by <a href="https://ui.gugisek.pl" target="_blank" class="font-[poppins] text-gray-100 theme-text-hover duration-300">gugisek</a> and <a href="https://github.com/lefinek" target="_blank" class="font-[poppins] text-gray-100 theme-text-hover duration-300">leff</a></p>
     <div class="flex items-center space-x-6 md:order-2 pb-12 md:pb-0">
        <a href="<?=$info[4]?>" class="text-[#4e4e4e] duration-300 hover:text-pink-500">
          <span class="sr-only">Instagram</span>
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
          </svg>
        </a>
        <a href="<?=$info[2]?>" class="text-[#4e4e4e] duration-300 hover:text-pink-500">
          <span class="sr-only">discord</span>
          <img class="w-[22px] grayscale hover:grayscale-0 duration-300" src="public/img/discord.svg" alt="">
        </a>
        <a href="<?=$info[3]?>" class="text-gray-400 hover:text-gray-300">
          <span class="sr-only">Twitch</span>
          <img class="w-[19px] grayscale hover:grayscale-0 duration-300" src="public/img/twitch_icon.png" alt="">
        </a>
      </div>

  </section>
</section>
<?php include 'components/cookies.php'; ?>