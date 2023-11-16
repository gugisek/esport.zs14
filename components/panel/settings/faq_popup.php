<?php
$id = $_GET['id'];
if($id == "add"){
    $row['id'] = "add";
    $row['question'] = "";
    $row['answer'] = "";
}else{
    include "../../../scripts/conn_db.php";
    $sql = "SELECT * FROM faq WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>
<form action="scripts/settings/edit_faq.php" method="POST" class="text-white flex flex-col gap-4 pt-2">
    <input type="hidden" name="id" value="<?=$row['id']?>">
    <div class="flex flex-row gap-4 w-full">
        <div class="relative z-0 w-full">
            <input required type="text" id="question" name="question" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-[1px] border-gray-300 appearance-none text-gray-300 focus:text-white dark:border-gray-600 dark:focus:theme-border focus:outline-none focus:ring-0 theme-border-focus peer" value="<?=$row['question']?>" />
            <label for="question" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 theme-text-focus peer-focus:dark:text-[--text] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Pytanie</label>
        </div>
    </div>
    <div class="relative z-0">
        <div id="toolbar" class="mt-2 flex space-x-2">
            <button type="button" onclick="applyStyle('bold')"><strong>B</strong></button>
            <button type="button" onclick="applyStyle('underline')"><u>U</u></button>
            <button type="button" onclick="applyStyle('themeText')">themeText</button>
        </div>
        <div id="editor" contenteditable="true" class="block py-2.5 px-0 w-full text-sm bg-transparent invalid:border-red-600 border-0 border-b-[1px] border-gray-300 appearance-none text-gray-300 focus:text-white dark:border-gray-600 dark:focus:theme-border focus:outline-none focus:ring-0 theme-border-focus peer" oninput="updateToolbar()"><?=$row['answer']?></div>
        <label for="editor" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 theme-text-focus peer-focus:dark:text-[--text] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Odpowiedź</label>
        <input required type="hidden" id="editorContent" name="answer" value='<?=$row['answer']?>'>
    </div>
    <div class="text-center">
            <?php
            if($id!='add'){
                echo '
                <button type="button" onclick="openPopupFaqDelete('.$row['id'].')" class="inline-flex items-center gap-x-2 rounded-md bg-red-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Usnuń
            </button>
                ';
            }
            ?>
            <button type="button" onclick="popupFaqOpenClose()" class="mx-1 inline-flex items-center gap-x-2 rounded-md bg-gray-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Anuluj
            </button>
            
            <button type="subbmit" class="inline-flex items-center gap-x-2 rounded-md bg-green-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Zapisz
            </button>
        </div>
</form>

 <section id="popupFaqDeleteBg" class="fixed z-[50] h-0 opacity-0 top-0 left-0 w-full h-full bg-[#0000009e] transition-opacity duration-300"></section>
  <section id="popupFaqDelete" onclick="popupFaqDeleteOpenClose()" class="z-[70] fixed scale-0 top-0 left-0 w-full h-full">
    <div class="flex items-center justify-center w-full h-full px-2">
      <div onclick="event.cancelBubble=true;" id="pupupFaqDeleteOutput">
      </div>
    </div>
  </section>

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

    function popupFaqDeleteOpenClose() {
        var popup = document.getElementById("popupFaqDelete")
        var popupBg = document.getElementById("popupFaqDeleteBg")
        popupBg.classList.toggle("opacity-0")
        popupBg.classList.toggle("h-0")
        popup.classList.toggle("scale-0")
        popup.classList.add("duration-200")
    }

    function openPopupFaqDelete(id) {
        var popupFaqDeleteOutput = document.getElementById("pupupFaqDeleteOutput");
        popupFaqDeleteOpenClose();
        const url = "components/panel/settings/faq_popup_delete.php?id="+id;
        fetch(url)
            .then(response => response.text())
            .then(data => {
            const parser = new DOMParser();
            const parsedDocument = parser.parseFromString(data, "text/html");

            // Wstaw zawartość strony (bez skryptów) do "panel_body"
            popupFaqDeleteOutput.innerHTML = parsedDocument.body.innerHTML;

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

