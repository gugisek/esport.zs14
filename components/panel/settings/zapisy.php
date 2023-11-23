<?php
include "../../../scripts/security.php";
include "../../../scripts/conn_db.php";
$sql = "select * from informations where id=16 or id=17 or id=18 or id=19";
$result = mysqli_query($conn, $sql);
$i=0;
while ($row = $result->fetch_assoc()) {
    $info[$i] = $row['value'];
    $i++;
}
?>
<div class="divide-y divide-white/5" enctype="multipart/form-data">
    <div class="sm:px-6 lg:px-8 px-4">
        <div class="px-4 mb-6 sm:px-0 mt-6 flex md:flex-row flex-col justify-between items-center">
            <div>
                <h3 class="text-base font-semibold leading-7 text-white">Pytania o zapisy</h3>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-400">Dodaj lub usuń pytania i odpowiedzi wyświetlane na stronie zapisów.</p>
            </div>
            <button type="button" onclick="openPopupFaqAdd()" class="md:mt-0 mt-4 inline-flex items-center gap-x-2 rounded-md bg-green-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Dodaj pytanie
                    <svg class="-mr-0.5 h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                    </svg>

            </button>
        </div>
            <?php
            include "../../../scripts/conn_db.php";
            $sql = "SELECT * FROM zapisy";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                if(mb_strlen($row['answer'], "UTF-8")>90){
                    $row['answer'] = substr($row['answer'], 0, 90)."...";
                    
                }
                echo '<div onclick="openPopupFaq('.$row['id'].')" class=" border-t border-white/10 hover:bg-[#3d3d3d] cursor-pointer duration-150">
                <dl class="divide-y divide-white/10">
                <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm flex items-center font-medium leading-6 py-4 text-white">'.$row['question'].'</dt>
                    <dd class="flex items-center text-sm text-gray-400 md:mt-0 md:mb-0 mb-2 sm:col-span-2"><div>'.$row['answer'].'</div></dd>
                </div>
                </dl>
            </div>';
            }
            ?>
        </div>
    </div>
    <form method="POST" action="scripts/settings/edit_zapisy.php" class="sm:px-6 lg:px-8 px-4">
        <div class="px-4 mb-6 sm:px-0 mt-6 flex md:flex-row flex-col justify-between items-center">
            <div>
                <h3 class="text-base font-semibold leading-7 text-white">Przykładowe zgłoszenie</h3>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-400">Edytuj dane w przykładowym zgłoszeniu.</p>
            </div>
            <button type="submit" class="inline-flex items-center gap-x-2 rounded-md bg-green-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Zapisz
                    <svg class="-mr-0.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                    </svg>
            </button>
        </div>
            <dl class="divide-y divide-white/10">
                <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 py-4 text-white">Odbiorca</dt>
                    <input name="odbiorca" required type="text" value="<?=$info[2]?>" class="w-full focus:outline-0 invalid:border-red-600 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white py-4  bg-[#0e0e0e]/0 mt-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0"></input>
                </div>
                <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 py-4 text-white">Nadawca</dt>
                    <input name="nadawca" required type="text" value="<?=$info[1]?>" class="w-full focus:outline-0 invalid:border-red-600 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white py-4  bg-[#0e0e0e]/0 mt-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0"></input>
                </div>
                <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 py-4 text-white">Tytuł</dt>
                    <input name="title" required type="text" value="<?=$info[0]?>" class="w-full focus:outline-0 invalid:border-red-600 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white py-4  bg-[#0e0e0e]/0 mt-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0"></input>
                </div>
                <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 py-4 text-white">Treść</dt>
                    <div class="sm:col-span-2 w-full max-h-[45vh]">
                        <div class="text-gray-400" id="editor-container"><?=$info[3]?></div>
                    </div>
                    <input type="hidden" id="editorContent" name="tresc" value='<?=$info[3]?>'>
                </div>
            </dl>
        </div>
            <div class="text-center">
        <div class="px-4 sm:px-0 my-6 mt-12 border-t-[1px] border-[#3d3d3d] pt-4">
            <button type="submit" class="inline-flex items-center gap-x-2 rounded-md bg-green-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Zapisz
                <svg class="-mr-0.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </div>
    </form>
</div>
 <section id="popupFaqBg" class="fixed z-[50] h-0 opacity-0 top-0 left-0 w-full h-full bg-[#0000009e] transition-opacity duration-300"></section>
  <section id="popupFaq" onclick="popupFaqOpenClose()" class="z-[60] fixed scale-0 top-0 left-0 w-full h-full">
    <div class="flex items-center justify-center w-full h-full px-2">
      <div onclick="event.cancelBubble=true;" class="bg-[#0e0e0e] md:min-w-[800px] md:w-auto w-full max-w-[800px] max-h-[80vh] overflow-y-auto flex md:flex-row flex-col gap-4 rounded-2xl py-6 sm:px-6  -xl">
        <div id="popupItself" class="flex h-auto w-full justify-between flex-col">
          <div class="w-full flex justify-between items-center sm:hidden">
            <span>  </span>
              <a onclick="popupFaqOpenClose()" class="-mt-2 pb-3 flex items-center space-x-2 text-gray-500 hover:text-red-600 transition-all duration-500">
                  <p class="uppercase font-medium text-xs">zamknij</p>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
              </a>
          </div>                        
            <div id="pupupFaqOutput"></div>
        </div>
      </div>
    </div>
  </section>
<script>
    function popupFaqOpenClose() {
        var popup = document.getElementById("popupFaq")
        var popupBg = document.getElementById("popupFaqBg")
        popupBg.classList.toggle("opacity-0")
        popupBg.classList.toggle("h-0")
        popup.classList.toggle("scale-0")
        popup.classList.add("duration-200")
    }
    function openPopupFaqAdd() {
        var popupFaqOutput = document.getElementById("pupupFaqOutput");
        popupFaqOutput.innerHTML =  "<div class='flex justify-center items-center'><div class='flex flex-col justify-center items-center'><div class='animate-spin rounded-full h-32 w-32 border-t-2 border-b-2 border-gray-900'></div><div class='text-white text-xl font-semibold mt-4'>Ładowanie...</div></div>";
        popupFaqOpenClose();
        const url = "components/panel/settings/faq_popup.php?id=add&type=zapisy";
        fetch(url)
            .then(response => response.text())
            .then(data => {
            const parser = new DOMParser();
            const parsedDocument = parser.parseFromString(data, "text/html");

            // Wstaw zawartość strony (bez skryptów) do "panel_body"
            popupFaqOutput.innerHTML = parsedDocument.body.innerHTML;

            // Przechodź przez znalezione skrypty i wykonuj je
            const scripts = parsedDocument.querySelectorAll("script");
            scripts.forEach(script => {
                const scriptElement = document.createElement("script");
                scriptElement.textContent = script.textContent;
                document.body.appendChild(scriptElement);
            });
            });
    }
    function openPopupFaq(id){
        var popupFaqOutput = document.getElementById("pupupFaqOutput");
        popupFaqOutput.innerHTML =  "<div class='flex justify-center items-center'><div class='flex flex-col justify-center items-center'><div class='animate-spin rounded-full h-32 w-32 border-t-2 border-b-2 border-gray-900'></div><div class='text-white text-xl font-semibold mt-4'>Ładowanie...</div></div>";
        popupFaqOpenClose();
        const url = "components/panel/settings/faq_popup.php?id="+id+"&type=zapisy";
        fetch(url)
            .then(response => response.text())
            .then(data => {
            const parser = new DOMParser();
            const parsedDocument = parser.parseFromString(data, "text/html");

            // Wstaw zawartość strony (bez skryptów) do "panel_body"
            popupFaqOutput.innerHTML = parsedDocument.body.innerHTML;

            // Przechodź przez znalezione skrypty i wykonuj je
            const scripts = parsedDocument.querySelectorAll("script");
            scripts.forEach(script => {
                const scriptElement = document.createElement("script");
                scriptElement.textContent = script.textContent;
                document.body.appendChild(scriptElement);
            });
            });
        
        
    }
</script>

<script>
  var quill = new Quill('#editor-container', {
    theme: 'snow',
    placeholder: 'Tu wpisz treść...',
    modules: {
      toolbar: [
        [{ 'size': [ 'small', false, 'large', 'huge'] }],
        ['bold', 'italic', 'underline', 'strike'],  // Funkcje pogrubiania, kursywy, podkreślenia, przekreślenia
        // Dodaj niestandardową paletę kolorów
        ['link'],
        ['blockquote'],
        ['code'],
        [{ 'color': [false, 'var(--text)', '#ffffff', 'rgb(243 244 246)', 'rgb(229 231 235)', 'rgb(209 213 219)', 'rgb(156 163 175)', 'rgb(107 114 128)', 'rgb(75 85 99)', 'rgb(55 65 81)', 'rgb(31 41 55)', 'rgb(17 24 39)', 'rgb(3 7 18)', 'black'] }],
        // Inne opcje
        
      ],
    },
  });


  // Dodaj event listener do śledzenia zmian w treści
  quill.on('text-change', function(delta, oldDelta, source) {
    // Zaktualizuj ukryte pole lub wykonaj inne operacje po zmianie treści
    updateHiddenField();
  });

  // Funkcja aktualizująca ukryte pole
  function updateHiddenField() {
    var editorContent = document.getElementById('editorContent');
    editorContent.value = quill.root.innerHTML;
  }
</script>