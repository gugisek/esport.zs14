<?php
include "../../../scripts/security.php";
?>
<div class="divide-y divide-white/5" enctype="multipart/form-data">
    <div class="sm:px-6 lg:px-8 px-4">
        <div class="px-4 mb-6 sm:px-0 mt-6 flex flex-row justify-between items-center">
            <div>
                <h3 class="text-base font-semibold leading-7 text-white">Dokumenty</h3>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-400">Edytuj wymagane dokumenty na stronie.</p>
            </div>
        </div>
            <?php
            include "../../../scripts/conn_db.php";
            $sql = "SELECT * FROM informations where id=13 or id=14";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                if(mb_strlen($row['value'], "UTF-8")>200){
                    $row['value'] = substr($row['value'], 0, 200)."...";
                }
                echo '<div onclick="openPopupDocs('.$row['id'].')" class=" border-t border-white/10 hover:bg-[#3d3d3d] cursor-pointer duration-150">
                <dl class="divide-y divide-white/10">
                <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm flex items-center font-medium leading-6 py-4 text-white normal-case">'.$row['name'].'</dt>
                    <dd class="flex items-center mt-2 text-sm text-gray-400 sm:mt-0 sm:col-span-2"><div>'.$row['value'].'</div></dd>
                </div>
                </dl>
            </div>';
            }
            ?>
        </div>
    </div>
</div>
<div class="divide-y divide-white/5" enctype="multipart/form-data">
    <div class="sm:px-6 lg:px-8 px-4">
        <div class="px-4 mb-6 sm:px-0 mt-6 flex flex-row justify-between items-center">
            <div>
                <h3 class="text-base font-semibold leading-7 text-white">Pliki do pobrania</h3>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-400">Dodaj, usuń, edytuj wszystkie pliki, które można pobrać.</p>
            </div>
        </div>
            <?php
            include "../../../scripts/conn_db.php";
            $sql = "SELECT * FROM downloads";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                if(mb_strlen($row['description'], "UTF-8")>250){
                    $row['description'] = substr($row['description'], 0, 250)."...";
                    echo strlen($row['description']);
                }
                echo '<div onclick="openPopupFaq('.$row['id'].')" class=" border-t border-white/10 hover:bg-[#3d3d3d] cursor-pointer duration-150">
                <dl class="divide-y divide-white/10">
                <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm flex items-center font-medium leading-6 py-4 text-white normal-case">'.$row['name'].'</dt>
                    <dd class="flex items-center mt-2 text-sm text-gray-400 sm:mt-0 sm:col-span-2 gap-4 justify-between"><div>'.$row['description'].'</div><div class="text-gray-200">'.$row['path'].'</div></dd>
                </div>
                </dl>
            </div>';
            }
            ?>
        </div>
    </div>
</div>
 <section id="popupDocsBg" class="fixed z-[50] h-0 opacity-0 top-0 left-0 w-full h-full bg-[#0000009e] transition-opacity duration-300"></section>
  <section id="popupDocs" onclick="popupDocsOpenClose()" class="z-[60] fixed scale-0 top-0 left-0 w-full h-full">
    <div class="flex items-center justify-center w-full h-full px-2">
      <div onclick="event.cancelBubble=true;" class="bg-[#0e0e0e] md:min-w-[800px] md:w-auto w-full max-w-[800px] h-[80vh] overflow-y-auto flex md:flex-row flex-col gap-4 rounded-2xl py-6 sm:px-6  -xl">
        <div id="popupItself" class="flex h-auto w-full justify-between flex-col">
          <div class="w-full flex justify-between items-center sm:hidden">
            <span>  </span>
              <a onclick="popupDocsOpenClose()" class="-mt-2 pb-3 flex items-center space-x-2 text-gray-500 hover:text-red-600 transition-all duration-500">
                  <p class="uppercase font-medium text-xs">zamknij</p>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
              </a>
          </div>                        
            <div class="h-full" id="pupupDocsOutput"></div>
        </div>
      </div>
    </div>
  </section>
<script>
    function popupDocsOpenClose() {
        var popup = document.getElementById("popupDocs")
        var popupBg = document.getElementById("popupDocsBg")
        popupBg.classList.toggle("opacity-0")
        popupBg.classList.toggle("h-0")
        popup.classList.toggle("scale-0")
        popup.classList.add("duration-200")
    }
    function openPopupDocs(id){
        var popupOutput = document.getElementById("pupupDocsOutput");
        popupOutput.innerHTML =  "<div class='flex justify-center items-center'><div class='flex flex-col justify-center items-center'><div class='animate-spin rounded-full h-32 w-32 border-t-2 border-b-2 border-gray-900'></div><div class='text-white text-xl font-semibold mt-4'>Ładowanie...</div></div>";
        popupDocsOpenClose();
        const url = "components/panel/settings/docs_popup.php?id="+id;
        fetch(url)
            .then(response => response.text())
            .then(data => {
            const parser = new DOMParser();
            const parsedDocument = parser.parseFromString(data, "text/html");

            // Wstaw zawartość strony (bez skryptów) do "panel_body"
            popupOutput.innerHTML = parsedDocument.body.innerHTML;

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

