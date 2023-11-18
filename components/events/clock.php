<section id="bg" style="background-image: url('public/img/green.jpg');" class="bg-cover bg-fixed w-full">
    <section class="bg-[#000000c0] min-h-[100vh] w-full px-[10%] 2xl:px-[15%] pb-12 pt-16 flex grid justify-center items-center align-center">
        <h1 class="text-center text-white text-6xl leading-[1.27]">
            <p>Zaczynamy za: </p>
            <span id="clock"></span>
        </h1>
    </section>
</section>

<script>
    function dataWydarzenia(rok, miesiac, dzien, godzina, minuta, sekunda, milisekunda){
            var teraz = new Date();
            var dataDocelowa = new Date(rok, miesiac, dzien, godzina, minuta, sekunda, milisekunda);
            var czas = dataDocelowa.getTime() - teraz.getTime();

            if(czas > 0){
                let s = czas/1000;
                let min = s/60;
                let h = min/60;
                let days = h/24;
                let months = days/31;

                let sLeft = Math.floor(s % 60);
                let minLeft = Math.floor(min % 60);
                let hLeft = Math.floor(h % 24);
                let daysLeft = Math.floor(days);

                if(minLeft<10){
                    minLeft = "0"+minLeft;
                }
                if(sLeft<10){
                    sLeft = "0"+sLeft;
                }

                if(daysLeft>0){
                    return daysLeft+'<span class="theme-text">d</span> '+ hLeft + '<span class="theme-text">h</span> ' + minLeft + '<span class="theme-text">min</span> ' + sLeft + '<span class="theme-text">s</span>';
                } else{
                    return hLeft + '<span class="theme-text">h</span> ' + minLeft + '<span class="theme-text">min</span> ' + sLeft + '<span class="theme-text">s</span>';
                }
            
                
            } else{
                return '<span class="theme-text">Mamy to!</span> ';
            }
        }

        let clock = document.querySelector('#clock');
        
        function zegar(){
            clock.innerHTML = dataWydarzenia(2024, 1, 20, 9, 0, 0, 0);
        }
        setInterval(zegar, 1000);
</script>