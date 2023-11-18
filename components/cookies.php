<div id="cookies_alert">

</div>
<!-- Ta strona internetowa wykorzystuje pliki cookie w celu zapewnienia jak najlepszej jakości usług oraz optymalizacji działania witryny.



Pliki cookie są małymi plikami tekstowymi przechowywanymi na urządzeniu użytkownika i wykorzystywane do zbierania informacji o aktywności na stronie.



Cele używania plików cookie obejmują:

Funkcjonalność: Zapewnienie poprawnego działania strony internetowej.
Anonimowa analiza ruchu: Umożliwienie nam lepszego zrozumienia sposobu, w jaki użytkownicy korzystają z naszej witryny.
Reklamy: Dostosowanie treści i reklam do indywidualnych preferencji.


Wyrażając zgodę na korzystanie z plików cookie, zgadzasz się na ich przechowywanie na Twoim urządzeniu. Jednocześnie zaznaczamy, że masz możliwość zmiany ustawień dotyczących plików cookie w ustawieniach przeglądarki internetowej.



Jednakże, wyłączenie niektórych rodzajów plików cookie może wpłynąć na funkcjonalność i wygodę korzystania z naszej witryny.



Prosimy o zapoznanie się z naszą Polityką Prywatności, gdzie znajdziesz szczegółowe informacje na temat plików cookie oraz sposobu, w jaki są one wykorzystywane.



Klikając przycisk "Akceptuję", wyrażasz zgodę na używanie plików cookie zgodnie z naszymi zasadami.



Dziękujemy za korzystanie z naszej strony.

Zespół ZS14 Events -->
<script>
    var currentURL = window.location.href;
    if(localStorage.getItem("cookies") == null && currentURL.includes("polityka_prywatnosci") == false){
        console.log(window.location.pathname );
        document.getElementById("cookies_alert").innerHTML = '<div id="cookie_bg-itself" data-aos="fade" data-aos-delay="300" class="duration-300 bg-black/70 h-full fixed z-40 inset-x-0 bottom-0 px-6 pb-6"><div id="cookie_itself" class="duration-300 pointer-events-auto mx-auto max-w-xl rounded-xl bg-white p-6 shadow-lg ring-1 ring-gray-900/10 fixed bottom-0  inset-x-0 mb-6"><div class="max-h-[60vh] overflow-y-auto text-sm text-gray-900"><?php include 'scripts/conn_db.php'; $sql = "SELECT * FROM informations WHERE id = 15"; $result = mysqli_query($conn, $sql); $info = mysqli_fetch_row($result); echo $info[2]; ?></div><div class="mt-4 flex items-center gap-x-5"><button type="button" onclick="cookieAccept()" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">Akceptuję</button</div></div></div>';
    }
    function cookieAccept(){
        localStorage.setItem("cookies", "true");
        document.getElementById("cookie_itself").classList.add("bottom-[-100%]");
        document.getElementById("cookie_bg-itself").classList.add("bottom-[-100%]");
    }
</script>