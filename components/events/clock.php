<section id="bg" style="background-image: url('public/img/green.jpg');" class="bg-cover bg-fixed w-full">
    <section class="bg-[#000000c0] min-h-[100vh] w-full px-[10%] 2xl:px-[15%] pb-12 pt-16 flex grid justify-center items-center align-center">
        <h1 class="text-center text-white text-6xl leading-[1.27]">
            <?php
                $sql = "SELECT * FROM events WHERE event_type_id = 2 and input = 'clock_text'";
                $sql_res = mysqli_fetch_array(mysqli_query($conn, $sql));
                echo '<p>'.$sql_res[3].'</p>'
            ?>
            <span id="clock"></span>
        </h1>
        <?php
            $clock_time = "SELECT events.value FROM events WHERE event_type_id = 2 and input = 'clock_time'";
            $result_clock_time = mysqli_fetch_array(mysqli_query($conn,$clock_time));
                                
            echo '<input name="clock_start_time" type="hidden" value="'.$result_clock_time[0].'">';
        ?>
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

        let czas = document.getElementsByName('clock_start_time')[0].getAttribute('value');
        let godzina; let minuta; let dzien; let miesiac; let rok;

        function start_godzina(){
            godzina = czas.slice(0, czas.indexOf(':'));
            return godzina;
        }
        function start_minuta(){
            minuta = czas.slice(czas.indexOf(':')+1, czas.indexOf(' '))
            minuta == '00' ? minuta =  0 : minuta = minuta;
            return minuta;
        }
        function start_dzien(){
            dzien = czas.slice(czas.indexOf(' ')+1, czas.indexOf('.'))
            dzien[0] == 0?dzien = dzien[1]:dzien = dzien;
            return dzien;
        }
        function start_miesiac(){
            miesiac = czas.slice(czas.indexOf('.')+1, czas.indexOf('.')+3)
            miesiac[0] == 0?miesiac = miesiac[1]-1:miesiac = miesiac-1;
            return miesiac;
        }
        function start_rok(){
            rok = czas.slice(czas.indexOf('.')+4, czas.indexOf('.')+8)
            return rok;
        }
        function zegar(){
            clock.innerHTML = dataWydarzenia(start_rok(), start_miesiac(), start_dzien(), start_godzina(), start_minuta(), 0, 0);
        }
        setInterval(zegar, 1000);
</script>