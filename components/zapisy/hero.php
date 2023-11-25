<section id="bg" class="bg-cover bg-fixed">
    <section class="py-4 px-[5%] md:px-[10%] bg-[#000000c0]">
        <?php include 'components/navbar.php'; ?>
       <section class="md:pt-32 pt-48 md:pb-32 pb-28">
        <h1 class="text-center font-[poppins] font-bold text-4xl text-white">Zapisy</h1>
       </section>
       <section data-aos="fade-up" class="bg-[#0e0e0ef0] font-[poppins] text-gray-400 p-8 mb-4 text-justify rounded-xl shadow-xl">
        <div class="mx-auto max-w-3xl divide-y-2 divide-gray-200">
      <dl class="mt-6 divide-y divide-[#1c1c1c]">
        <?php
        $sql = "SELECT * FROM zapisy";
        $result = mysqli_query($conn, $sql);
        $i=1;
        while($row = mysqli_fetch_assoc($result)) {
         echo '<div data-aos="fade-up" data-aos-delay="'.$i.'00" data-aos-anchor-placement="top-bottom" class="">
          <dt class="text-lg">
            <!-- Expand/collapse question button -->
            <button type="button" class="pt-5 theme-text-hover pb-3 flex w-full items-start justify-between text-left text-gray-300" aria-controls="faq-'.$i.'" aria-expanded="false">
              <span class="font-medium font-[poppins] duration-300">'.$row['question'].'</span>
              <span class="ml-6 flex h-7 items-center">
                <svg class="rotate-0 duration-300 h-6 w-6 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
              </span>
            </button>
          </dt>
          <dd style="scale: 0; height: 0;" class="duration-300 mt-2 pr-12" id="faq-'.$i.'">
                  <div class="text-base pb-4">'.$row['answer'].'</div>
          </dd>
        </div>
        ';
        $i++;
        }
       ?>
        <!-- More questions... -->
      </dl>
    </div>
    </section>
    <?php
    $sql = "SELECT * FROM informations WHERE id=16 or id=17 or id=18 or id=19;";
    $result = mysqli_query($conn, $sql);
    while ($row = $result->fetch_assoc()) {
        $info_zapisy[] = $row['value'];
    }
    ?>
        <section data-aos="fade-up" class="bg-[#0e0e0ef0] font-[poppins] text-gray-400 p-8 text-justify rounded-xl shadow-xl">
            <div class="mx-auto max-w-3xl">
                <p class="pb-8 font-[poppins] text-gray-200 font-medium">Przykładowe zgłosznie</p>
                <div class="flex flex-col gap-4">
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
                        <div class="relative rounded-md border theme-border shadow-sm transition-all duration-300">
                            <p class="absolute bg-[#0e0e0e] -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium font-[poppins] theme-text italic uppercase">Odbiorca</p>
                            <div class="bg-[#0e0e0e] px-3 py-2 rounded-md block w-full border-0 p-0 text-gray-400 font-[poppins] focus:ring-0 focus:outline-0 sm:text-sm transition-all duration-300">
                            <?=$info_zapisy[2]?>
                            </div>
                        </div>
                        <div class="relative rounded-md border theme-border shadow-sm transition-all duration-300">
                            <p class="absolute bg-[#0e0e0e] -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium font-[poppins] theme-text italic uppercase">Nadawca</p>
                            <div class="bg-[#0e0e0e] px-3 py-2 rounded-md block w-full border-0 p-0 text-gray-400 font-[poppins] focus:ring-0 focus:outline-0 sm:text-sm transition-all duration-300">
                            <?=$info_zapisy[1]?>
                            </div>
                        </div>
                    </div>
                    <div class="relative rounded-md border theme-border shadow-sm transition-all duration-300">
                        <p class="absolute bg-[#0e0e0e] -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium font-[poppins] theme-text italic uppercase">Tytuł</p>
                        <div class="bg-[#0e0e0e] px-3 py-2 rounded-md block w-full border-0 p-0 text-gray-400 font-[poppins] focus:ring-0 focus:outline-0 sm:text-sm transition-all duration-300">
                            <?=$info_zapisy[0]?>
                        </div>
                    </div>
                    <div class="relative rounded-md border theme-border shadow-sm transition-all duration-300">
                        <p class="absolute bg-[#0e0e0e] -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium font-[poppins] theme-text italic uppercase">Treść</p>
                        <div class="bg-[#0e0e0e] px-3 py-2 rounded-md block w-full border-0 p-0 text-gray-400 font-[poppins] focus:ring-0 focus:outline-0 sm:text-sm transition-all duration-300">
                            <!-- Zgłaszam moją drużynę *nazwa drużny* na turniej *nazwa turnieju* jako jej lider.
                            <br/><br/>
                            Zawodnik 1 - lider (ja):<br><br>
                            - Imię i nazwisko: Jan Kowalski<br>
                            - Klasa: 5pi<br>
                            - Email szkolny: kowalskij@chmura.zs14.edu.pl<br>
                            - Nazwa użytkownika discord: kowalskij#1234<br>
                            - Nazwa na steamie: kowalskij (https://steamcommunity.com/id/kowalskij)<br>
                            - Peryferia: klawa, myszka, słuchawki z mikrofonem - potrzebne oprogramowanie to "G HUB" od logitech<br>
                            <br>
                            Ja Jan Kowalski wyrażam zgodę na wykorzystanie mojego wizerunku oraz danych osobowych w celach związanych z turniejem.
                            <br><br>
                            Zawodnik 2:<br><br>
                            - Imię i nazwisko: Paweł Pikasso<br>
                            - Klasa: 5pi<br>
                            - Email szkolny: pikassop@chmura.zs14.edu.pl<br>
                            - Nazwa użytkownika discord: pikasso#1234<br>
                            - Nazwa na steamie: pikasso (https://steamcommunity.com/id/pikasso)<br>
                            - Peryferia: słuchawki z mikrofonem<br>
                            <br>
                            Zgoda jest dołączona do emaila jako pdf o nazwie: zgoda - paweł pikasso.
                            <br><br>
                            (...)
                            <br><br>
                            Rezerwowy:<br><br>
                            - Imię i nazwisko: Grzegorz Brzęczyszczykiewicz<br>
                            - Klasa: 5pi<br>
                            - Email szkolny: brzeczyszczykiewiczg@chmura.zs14.edu.pl<br>
                            - Nazwa użytkownika discord: brzeczyszczykiewiczg#1234<br>
                            - Nazwa na steamie: brzeczyszczykiewiczg (https://steamcommunity.com/id/brzeczyszczykiewiczg)<br>
                            - Peryferia: klawa, myszka, słuchawki - icue corsair, steelseries engine<br>
                            <br>
                            Zgoda zostanie doniesiona w formie papierowej.
                            <br><br> -->
                            <?=$info_zapisy[3]?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</section>
<script>
  // Pobierz wszystkie przyciski "Expand/collapse question"
  const questionButtons = document.querySelectorAll('button[aria-controls]');

  // Dodaj obsługę kliknięcia dla każdego przycisku
  questionButtons.forEach(button => {
    button.addEventListener('click', () => {
      const targetId = button.getAttribute('aria-controls');
      const target = document.getElementById(targetId);

      if (target) {
        const expanded = button.getAttribute('aria-expanded') === 'true';

        // Zmień stan aria-expanded na przeciwny (true na false, false na true)
        button.setAttribute('aria-expanded', !expanded);

        // Zmień ikonę rozwijania/zwijania
        const icon = button.querySelector('svg');
        if (icon) {
          icon.classList.toggle('rotate-0', expanded);
          icon.classList.toggle('-rotate-180', !expanded);
        }

        // Pokaż lub ukryj odpowiedź na pytanie
        if (expanded) {
          target.style.scale = '0';
          target.style.height = '0';
        } else {
          target.style.scale = '1';
            target.style.height = 'auto';
        }
      }
    });
  });
</script>