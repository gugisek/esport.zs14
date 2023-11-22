<?php
$id = $_GET['id'];
    include "../../../scripts/conn_db.php";
    $sql = "SELECT * FROM informations WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>

<form action="scripts/settings/edit_docs.php" method="POST" class="text-white flex flex-col h-full gap-4 pt-2 md:px-24 px-2">
    <input type="hidden" name="id" value="<?=$row['id']?>">
    <div class="flex flex-row gap-4 w-full">
        <div class="relative z-0 w-full">
            <h1 class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-[1px] theme-border appearance-none text-white font-semibold"><?=$row['name']?></h1>
        </div>
    </div>
    <div class="h-full max-h-[45vh] text-gray-400" id="editor-container"><?=$row['value']?></div>
    <input type="hidden" id="editorContent" name="value" value='<?=$row['value']?>'>
    <div class="text-center">
            <button type="button" onclick="popupDocsOpenClose()" class="mx-1 inline-flex items-center gap-x-2 rounded-md bg-gray-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Anuluj
            </button>
            
            <button type="subbmit" class="inline-flex items-center gap-x-2 rounded-md bg-green-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Zapisz
            </button>
        </div>
</form>
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

