<?php
$id = $_GET['id'];
    include "../../../scripts/conn_db.php";
    $sql = "SELECT * FROM informations WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>

<form action="scripts/settings/edit_docs.php" method="POST" class="text-white flex flex-col h-full gap-4 pt-2 px-24">
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

<!-- <script>
    function applyStyle(style) {
        const editor = document.getElementById('editor');
        const selection = window.getSelection();
        const selectedText = selection.toString();
        const range = selection.getRangeAt(0);

        switch (style) {
            case 'bold':
                document.execCommand('bold', false, null);
                break;
            case 'underline':
                document.execCommand('underline', false, null);
                break;
            case 'themeText':
                const span = document.createElement('span');
                span.className = 'theme-text';
                span.textContent = selectedText;

                // Replaces the selected text with the created span
                range.deleteContents();
                range.insertNode(span);
                break;
        }

        updateToolbar();
        updateHiddenField();
    }

    function updateToolbar() {
        const toolbar = document.getElementById('toolbar');

        const isBold = document.queryCommandState('bold');
        const isUnderlined = document.queryCommandState('underline');

        // Update button styles based on the current state
        toolbar.querySelector('button:nth-child(1)').style.fontWeight = isBold ? 'bold' : 'normal';
        toolbar.querySelector('button:nth-child(2)').style.textDecoration = isUnderlined ? 'underline' : 'none';
        updateHiddenField();
    }

    function updateHiddenField() {
        const editorContent = document.getElementById('editorContent');
        editorContent.value = document.getElementById('editor').innerHTML;
    }

</script> -->

<!-- <div class="relative z-0">
    <div id="toolbar" class="mt-2 flex space-x-2">
        <button type="button" onclick="applyStyle('bold')"><strong>B</strong></button>
        <button type="button" onclick="applyStyle('underline')"><u>U</u></button>
        <button type="button" onclick="applyStyle('themeText')">themeText</button>
        <button type="button" onclick="changeFontSize('increase')">A+</button>
        <button type="button" onclick="changeFontSize('decrease')">A-</button>
        <input type="color" onchange="applyTextColor(this.value)">
        <button type="button" onclick="undo()">Undo</button>
    </div>
    <div id="editor" contenteditable="true" class="block py-2.5 px-0 w-full text-sm bg-transparent invalid:border-red-600 border-0 border-b-[1px] border-gray-300 appearance-none text-gray-300 focus:text-white dark:border-gray-600 dark:focus:theme-border focus:outline-none focus:ring-0 theme-border-focus peer" oninput="updateToolbar()"><?=$row['value']?></div>
    <label for="editor" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 theme-text-focus peer-focus:dark:text-[--text] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Odpowiedź</label>
    <input required type="hidden" id="editorContent" name="answer" value='<?=$row['value']?>'>
</div>
<script>
    function applyStyle(style) {
        const editor = document.getElementById('editor');
        const selection = window.getSelection();
        const selectedText = selection.toString();
        const range = selection.getRangeAt(0);

        switch (style) {
            case 'bold':
                document.execCommand('bold', false, null);
                break;
            case 'underline':
                document.execCommand('underline', false, null);
                break;
            case 'themeText':
                const span = document.createElement('span');
                span.className = 'theme-text';
                span.textContent = selectedText;

                // Replaces the selected text with the created span
                range.deleteContents();
                range.insertNode(span);
                break;
        }

        updateToolbar();
        updateHiddenField();
    }

    function changeFontSize(action) {
        const editor = document.getElementById('editor');
        const currentSize = window.getComputedStyle(editor, null).getPropertyValue('font-size');
        let newSize;

        if (action === 'increase') {
            newSize = (parseFloat(currentSize) * 1.2) + 'px';
        } else if (action === 'decrease') {
            newSize = (parseFloat(currentSize) / 1.2) + 'px';
        }

        document.execCommand('fontSize', false, newSize);
        updateToolbar();
        updateHiddenField();
    }

    function applyTextColor(color) {
        document.execCommand('foreColor', false, color);
        updateToolbar();
        updateHiddenField();
    }

    function undo() {
        document.execCommand('undo', false, null);
        updateToolbar();
        updateHiddenField();
    }

    function updateToolbar() {
        const toolbar = document.getElementById('toolbar');
        const isBold = document.queryCommandState('bold');
        const isUnderlined = document.queryCommandState('underline');

        // Update button styles based on the current state
        toolbar.querySelector('button:nth-child(1)').style.fontWeight = isBold ? 'bold' : 'normal';
        toolbar.querySelector('button:nth-child(2)').style.textDecoration = isUnderlined ? 'underline' : 'none';
        updateHiddenField();
    }

    function updateHiddenField() {
        const editorContent = document.getElementById('editorContent');
        editorContent.value = document.getElementById('editor').innerHTML;
    }
</script> -->

<!-- <script>
  var quill = new Quill('#editor-container', {
    theme: 'snow',
    placeholder: 'Tu wpisz treść...',
    modules: {
      toolbar: [
        [{ 'color': [] }],
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
</script> -->
<!-- <script>
  var quill = new Quill('#editor-container', {
    theme: 'snow',
    placeholder: 'Tu wpisz treść...',
    modules: {
      toolbar: [
        [{ 'color': [] }],
        // Dodaj nowy przycisk do paska narzędziowego
        [{ 'themeText': 'Dodaj klasę theme-text' }],
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

  // Dodaj funkcję do obsługi przycisku w pasku narzędziowym
  const CustomButton = quill.import('ui/color-picker');
  CustomButton.prototype.build = function (label) {
    // Utwórz nowy element przycisku
    const button = document.createElement('button');
    button.innerHTML = label;
    button.addEventListener('click', () => {
      this.onClick(button);
    });

    // Dodaj klasę CSS do stylizacji
    button.classList.add('ql-themeText');
    return button;
  };

  // Dodaj obsługę przycisku do dodawania klasy theme-text
  quill.on('editor-change', function (eventName, ...args) {
    if (eventName === 'selection-change') {
      const [range, oldRange, source] = args;
      if (range) {
        const [line, offset] = quill.getLine(range.index);
        const formats = quill.getFormat(line.index, line.length);
        const isThemeText = 'theme-text' in formats;
        quill.theme.tooltip.editingArea.querySelector('.ql-themeText').classList.toggle('ql-active', isThemeText);
      }
    }
  });

  // Dodaj event listener do przycisku w pasku narzędziowym
  quill.getModule('toolbar').addHandler('themeText', function (value) {
    const selection = quill.getSelection();
    if (selection) {
      quill.formatText(selection.index, selection.length, 'theme-text', !value);
    }
  });
</script> -->


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
        [{ 'color': [false, 'var(--text)', 'var(--scroll)', '#ffffff', 'rgb(243 244 246)', 'rgb(229 231 235)', 'rgb(209 213 219)'] }],
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

