<section id="bg" class="duration-300 bg-fixed bg-cover bg-top w-full h-screen">
    <section class="flex py-4 2xl:px-[15%] px-[10%] h-screen py-0 2xl:py-32 bg-[#000000c0] flex-col items-cener justify-between">
        <section data-aos="zoom-out-up" data-aos-anchor-placement="top-center" data-aos-easing="linear" class="2xl:py-32 xl:py-32 py-28 font-[lexend] flex flex-col items-start justify-center gap-5">
            <h1 class="textoutlined font-bold 2xl:text-6xl text-4xl text-white uppercase w-2/3 font-[poppins]">Witamy w strefie eventów<br> w <span class="theme-text transition-all duration-300">zespole szkół nr. 14</span></h1>
            <p class="font-[poppins] w-1/2 text-gray-300 text-md 2xl:text-lg font-medium">Znajdziesz tutaj wszytko o nadchodzących wydarzeniach dla naszych uczniów!</p>
            <div class="flex items-start justify-center">
                <button class="theme-border theme-bg-hover theme-shadow-button border-2 mr-3 border-green-500 uppercase rounded-full py-2 px-4 text-white transition-all duration-300 font-medium">Stream</button>
                <button class="theme-border theme-shadow-button theme-bg border-2 border-green-500 bg-green-500 rounded-full py-2 px-4 text-white uppercase font-medium hover:shadow-[0px_5px_20px] hover:shadow-green-500 transition-all duration-300">EVENTY</button>
            </div>
        </section>
        <section data-aos="zoom-out-up" data-aos-duration="500" data-aos-easing="linear" data-aos-anchor-placement="bottom-bottom" class="absolute 2xl:w-[70vw] w-[80vw] mx-auto bottom-6 left-0 right-0 grid grid-cols-4 2xl:gap-6 gap-4 pb-8">
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="100" >
                <div onclick="motyw('purple')" class="cursor-pointer hover:shadow-[#a600cf] rounded-lg aspect-video bg-cover bg-center hover:scale-105 transition-all duration-300 hover:shadow-xl" style="background-image: url('public/img/purple.jpg');"></div>
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="200">
                <div onclick="motyw('green')" class="cursor-pointer hover:shadow-[#22c55e] rounded-lg aspect-video bg-cover bg-center hover:scale-105 transition-all duration-300 hover:shadow-xl" style="background-image: url('public/img/green.jpg');"></div>
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="300">
                <div onclick="motyw('yellow')" class="cursor-pointer hover:shadow-[#eab308] rounded-lg aspect-video bg-cover bg-center hover:scale-105 transition-all duration-300 hover:shadow-xl" style="background-image: url('public/img/yellow.jpg');"></div>
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="400">
                <div onclick="motyw('blue')" class="cursor-pointer hover:shadow-[#27cbff] rounded-lg aspect-video bg-cover bg-center hover:scale-105 transition-all duration-300 hover:shadow-xl" style="background-image: url('public/img/blue.jpg');"></div>
            </div>
        </section>
    </section>
</section>
<script>
    
    // function motyw(motyw) {
    //         var items_text_color = document.querySelectorAll('.text-green-500');
    //         var items_border_color = document.querySelectorAll('.border-green-500');
    //         var items_bg_color = document.querySelectorAll('.bg-green-500');
    //         var items_hover_text_color = document.querySelectorAll('.hover_text_green');
    //        //var items_hover_text_color = document.querySelectorAll('.hover:text-green-400');
    //        //var items_hover_border_color = document.querySelectorAll('.hover:border-green-400');
    //        //var items_hover_bg_color = document.querySelectorAll('.hover:bg-green-400');
    //         var items_shadow_color = document.querySelectorAll('.shadow-green-500');
    //        //var items_hover_shadow_color = document.querySelectorAll('.hover:shadow-green-500');
    //        //var items_text_shadow_color = document.querySelectorAll('.hover:[text-shadow:_2px_5px_20px]');
    //        //var items_hover_text_shadow_color = document.querySelectorAll('.hover:[text-shadow:_2px_5px_20px]');
    //     if (motyw == 'pierwszy') {
    //         document.getElementById('bg').style.backgroundImage = "url('public/img/bg8.jpg')";
    //         var kolor = "#a600cf";
            
    //         var i = 0;
    //         for (i = 0; i < items_text_color.length; i++) {
    //             items_text_color[i].style.color = kolor;
    //         }
    //         for (i = 0; i < items_border_color.length; i++) {
    //             items_border_color[i].style.borderColor = kolor;
    //         }
    //         for (i = 0; i < items_bg_color.length; i++) {
    //             items_bg_color[i].style.backgroundColor = kolor;
    //         }
    //         for (i = 0; i < items_hover_text_color.length; i++) {
    //             items_hover_text_color[i].classList.add('hover:text-purple-400');
    //         }
            

    //     }
    //     if (motyw == 'drugi') {
    //         document.getElementById('bg').style.backgroundImage = "url('public/img/bg3.jpg')";
    //         var kolor = "#22c55e";
            
    //         var i = 0;
    //         for (i = 0; i < items_text_color.length; i++) {
    //             items_text_color[i].style.color = kolor;
    //         }
    //         for (i = 0; i < items_border_color.length; i++) {
    //             items_border_color[i].style.borderColor = kolor;
    //         }
    //         for (i = 0; i < items_bg_color.length; i++) {
    //             items_bg_color[i].style.backgroundColor = kolor;
    //         }
    //         for (i = 0; i < items_hover_text_color.length; i++) {
    //             items_hover_text_color[i].classList.add('hover:text-purple-400');
    //         }
    //     }
    //     if (motyw == 'trzeci') {
    //         document.getElementById('bg').style.backgroundImage = "url('public/img/bg4.jpg')";
    //         var kolor = "#e1dc18";
            
    //         var i = 0;
    //         for (i = 0; i < items_text_color.length; i++) {
    //             items_text_color[i].style.color = kolor;
    //         }
    //         for (i = 0; i < items_border_color.length; i++) {
    //             items_border_color[i].style.borderColor = kolor;
    //         }
    //         for (i = 0; i < items_bg_color.length; i++) {
    //             items_bg_color[i].style.backgroundColor = kolor;
    //         }
    //         for (i = 0; i < items_hover_text_color.length; i++) {
    //             items_hover_text_color[i].classList.add('hover:text-purple-400');
    //         }
    //     }
    //     if (motyw == 'czwarty') {
    //         document.getElementById('bg').style.backgroundImage = "url('public/img/bg6.png')";
    //         var kolor = "#27cbff";
            
    //         var i = 0;
    //         for (i = 0; i < items_text_color.length; i++) {
    //             items_text_color[i].style.color = kolor;
    //         }
    //         for (i = 0; i < items_border_color.length; i++) {
    //             items_border_color[i].style.borderColor = kolor;
    //         }
    //         for (i = 0; i < items_bg_color.length; i++) {
    //             items_bg_color[i].style.backgroundColor = kolor;
    //         }
    //         for (i = 0; i < items_hover_text_color.length; i++) {
    //             items_hover_text_color[i].classList.add('hover:text-purple-400');
    //         }
    //     }
        
    // }
</script>