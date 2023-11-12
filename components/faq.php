<!-- This example requires Tailwind CSS v2.0+ -->
<div>
  <div class="py-12 px-4 sm:py-16 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-3xl divide-y-2 divide-gray-200">
      <h2 class="text-center text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Często zadawane pytania</h2>
      <dl class="mt-6 divide-y divide-gray-200">
        <?php
        include "scripts/conn_db.php";
        $sql = "select * from faq";
        $result = mysqli_query($conn, $sql);
        $i = 1;
        while($row = mysqli_fetch_assoc($result)){
          echo '
        <div data-aos="fade-up" data-aos-delay="'.$i.'00" data-aos-anchor-placement="bottom-bottom" class="">
          <dt class="text-lg">
            <!-- Expand/collapse question button -->
            <button type="button" class="pt-5 pb-3 flex w-full items-start justify-between text-left text-gray-400" aria-controls="faq-'.$row['id'].'" aria-expanded="false">
              <span class="font-medium text-gray-900">'.$row['question'].'</span>
              <span class="ml-6 flex h-7 items-center">
                <svg class="rotate-0 duration-300 h-6 w-6 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
              </span>
            </button>
          </dt>
          <dd style="scale: 0; height: 0;" class="duration-300 mt-2 pr-12" id="faq-'.$row['id'].'">
            <p class="text-base text-gray-600 pb-4">'.$row['answer'].'</p>
          </dd>
        </div>
          ';
          $i++;
        }
        ?>
      </dl>
    </div>
  </div>
</div>
<!-- Dodaj ten fragment HTML na początku twojego dokumentu HTML -->
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
