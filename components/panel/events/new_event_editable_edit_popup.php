<?php
$value = $_GET['value'];
$for = $_GET['for'];
?>
<div class="text-white flex flex-col h-full gap-4 pt-2 md:px-24 px-2">
    <div class="flex flex-row gap-4 w-full">
        <div class="relative z-0 w-full">
            <h1 class="text-xl theme-text"><?=$for?></h1>
        </div>
    </div>
        <div class="h-full max-h-[45vh] text-gray-400" id="editor-container-popup"><?=$value?></div>
        <input type="hidden" id="editorContent-eventEdit" name="answer" value='<?=$value?>'>
        <input type="hidden" id="textIn" value='<?=$value?>'>
        <input type="hidden" id="forIn" value='<?=$for?>'>
    <div class="text-center">
            <button type="button" onclick="popupEventOpenClose()" class="mx-1 inline-flex items-center gap-x-2 rounded-md bg-gray-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Anuluj
            </button>
            
            <button onclick="saveChanges()" type="button" class="inline-flex items-center gap-x-2 rounded-md bg-green-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Zapisz
            </button>
        </div>
</div>

 <section id="popupEventEditDeleteBg" class="fixed z-[50] h-0 opacity-0 top-0 left-0 w-full h-full bg-[#0000009e] transition-opacity duration-300"></section>
  <section id="popupEventEditDelete" onclick="popupEventDeleteOpenClose()" class="z-[70] fixed scale-0 top-0 left-0 w-full h-full">
    <div class="flex items-center justify-center w-full h-full px-2">
      <div onclick="event.cancelBubble=true;" id="pupupEventEditDeleteOutput">
      </div>
    </div>
  </section>

<script>
  var quill = new Quill('#editor-container-popup', {
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
    var editorContent = document.getElementById('editorContent-eventEdit');
    editorContent.value = quill.root.innerHTML;
  }
    function popupEventDeleteOpenClose() {
        var popup = document.getElementById("popupEventEditDelete")
        var popupBg = document.getElementById("popupEventEditDeleteBg")
        popupBg.classList.toggle("opacity-0")
        popupBg.classList.toggle("h-0")
        popup.classList.toggle("scale-0")
        popup.classList.add("duration-200")
        // resultOfStorage = localStorage.getItem('EventTempSettings')
        // alert('EventTempSettings: ', JSON.parse(resultOfStorage));
    }
    function saveChanges(){
        var resultOfStorage = localStorage.getItem('EventTempSettings')
        // console.log('EventTempSettings: ', JSON.parse(resultOfStorage));
        forWhat = document.getElementById('forIn').value;
        EventTempSettings[forWhat] = quill.root.innerHTML;
        localStorage.setItem('EventTempSettings', JSON.stringify(EventTempSettings));
        // resultOfStorage = localStorage.getItem('EventTempSettings')
        // console.log('EventTempSettings: ', JSON.parse(resultOfStorage));
        popupEventOpenClose()
    }
    // function fillInput(){
    //     forWhat = document.getElementById('forIn').value;
    //     var resultOfStorage = localStorage.getItem('EventTempSettings')
    //     quill.root.innerHTML = JSON.parse(resultOfStorage)[forWhat];
    // }
    // function openPopupEventDelete(id) {
    //     var popupEventEditDeleteOutput = document.getElementById("pupupEventEditDeleteOutput");
    //     popupEventDeleteOpenClose();
    //     const url = "components/panel/settings/faq_popup_delete.php?id="+id+"";
    //     fetch(url)
    //         .then(response => response.text())
    //         .then(data => {
    //         const parser = new DOMParser();
    //         const parsedDocument = parser.parseFromString(data, "text/html");

    //         // Wstaw zawartość strony (bez skryptów) do "panel_body"
    //         popupEventEditDeleteOutput.innerHTML = parsedDocument.body.innerHTML;

    //         // Przechodź przez znalezione skrypty i wykonuj je
    //         const scripts = parsedDocument.querySelectorAll("script");
    //         scripts.forEach(script => {
    //             const scriptElement = document.createElement("script");
    //             scriptElement.textContent = script.textContent;
    //             document.body.appendChild(scriptElement);
    //         });
    //         });
        
        
    // }

    
</script>

