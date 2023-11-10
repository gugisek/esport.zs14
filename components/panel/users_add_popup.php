<script>
  function popupAddOpenClose() {
    var popup = document.getElementById("popupAdd")
    var popupBg = document.getElementById("popupAddBg")
    popupBg.classList.toggle("opacity-0")
    popupBg.classList.toggle("h-0")
    popup.classList.toggle("scale-0")
    popup.classList.add("duration-300")
  }
</script>
   <!-- popup -->
  <section id="popupAddBg" class="fixed z-[50] h-0 opacity-0 top-0 left-0 w-full h-full bg-[#0000009e] transition-opacity duration-500"></section>
  <section id="popupAdd" onclick="popupAddOpenClose()" class="z-[60] fixed scale-0 top-0 left-0 w-full h-full">
    <div class="flex items-center justify-center w-full h-full px-2">
      <div onclick="event.cancelBubble=true;" class="bg-[#0e0e0e] md:min-w-[800px] md:w-auto w-full max-w-[800px] max-h-[80vh] overflow-y-auto flex md:flex-row flex-col gap-4 rounded-2xl py-6 sm:px-6  -xl">
        <div id="popupItself" class="flex h-auto w-full justify-between flex-col">
          <div class="w-full flex justify-between items-center sm:hidden">
            <span>  </span>
              <a onclick="popupAddOpenClose()" class="-mt-2 pb-3 flex items-center space-x-2 text-gray-500 hover:text-red-600 transition-all duration-500">
                  <p class="uppercase font-medium text-xs">zamknij</p>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
              </a>
          </div>                        
                    <!-- This example requires Tailwind CSS v2.0+ -->
          <div>
            <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8 pb-4">
              <div class="mt-6 min-w-0 flex-1">
                <h1 id="popup_name_2" class="truncate text-2xl font-bold text-gray-300">Dodaj użytkownika</h1>
              </div>
              <!-- detail section -->

              <!-- edit section -->
              <form>
                <div class="hidden sm:block" aria-hidden="true">
                  <div class="py-5">
                    <div class="border-t border-[#3d3d3d]"></div>
                  </div>
                </div>
                <!-- personal info -->
                <div  class="mt-10 sm:mt-0">
                  <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                      <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-200">Informacje osobowe</h3>
                        <p class="mt-1 text-sm text-gray-500">Zmień tutaj dane personalne oraz publiczne użytkownika.</p>
                      </div>
                    </div>
                    <div class="mt-5 md:col-span-2 md:mt-0">
                        <div class="overflow-hidden   sm:rounded-md">
                          <div class="px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <div class="relative rounded-md border theme-border  -sm focus-within:border-indigo-600 focus-within:ring-1 focus-within:ring-indigo-600 transition-all duration-300">
                                        <label for="popup_name_input" class="absolute bg-[#0e0e0e] theme-text -top-2 left-2 -mt-px inline-block px-1 text-xs font-medium text-gray-900">Imię</label>
                                        <input required type="text" name="popup_name_input" id="popup_name_inpt" class="bg-[#0e0e0e] px-3 py-2 rounded-md block w-full border-0 p-0 text-gray-300 placeholder-gray-500 focus:ring-0 focus:outline-0 sm:text-sm transition-all duration-300" placeholder="">
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <div class="relative rounded-md border theme-border  -sm focus-within:border-indigo-600 focus-within:ring-1 focus-within:ring-indigo-600 transition-all duration-300">
                                        <label for="popup_surname" class="absolute -top-2 left-2 -mt-px inline-block bg-[#0e0e0e] px-1 text-xs font-medium theme-text">Nazwisko</label>
                                        <input required type="text" name="popup_surname" id="popup_surname" class="bg-[#0e0e0e] px-3 py-2 rounded-md block w-full border-0 p-0 text-gray-300 placeholder-gray-500 focus:ring-0 focus:outline-0 sm:text-sm" placeholder="">
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <div class="relative rounded-md border theme-border  -sm focus-within:border-indigo-600 focus-within:ring-1 focus-within:ring-indigo-600 transition-all duration-300">
                                        <label for="popup_email" class="absolute -top-2 left-2 -mt-px inline-block bg-[#0e0e0e] px-1 text-xs font-medium theme-text">Email</label>
                                        <input required type="text" name="popup_email" id="popup_email" autocomplete="email" class="bg-[#0e0e0e] px-3 py-2 rounded-md block w-full border-0 p-0 text-gray-300 placeholder-gray-500 focus:ring-0 focus:outline-0 sm:text-sm" placeholder="">
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <div class="relative rounded-md border theme-border  -sm focus-within:border-indigo-600 focus-within:ring-1 focus-within:ring-indigo-600 transition-all duration-300">
                                        <label for="popup_sec_name" class="absolute -top-2 left-2 -mt-px inline-block bg-[#0e0e0e] px-1 text-xs font-medium theme-text">Drugie imię</label>
                                        <input type="text" name="popup_sec_name" id="popup_sec_name" class="bg-[#0e0e0e] px-3 py-2 rounded-md block w-full border-0 p-0 text-gray-300 placeholder-gray-500 focus:ring-0 focus:outline-0 sm:text-sm" placeholder="">
                                    </div>
                                </div>

                              <div class="col-span-6">
                                    <div class="relative rounded-md border theme-border  -sm focus-within:border-indigo-600 focus-within:ring-1 focus-within:ring-indigo-600 transition-all duration-300">
                                        <label for="popup_addres" class="absolute -top-2 left-2 -mt-px inline-block bg-[#0e0e0e] px-1 text-xs font-medium theme-text">Adres zamieszkania</label>
                                        <input type="text" name="popup_addres" id="popup_addres" class="bg-[#0e0e0e] px-3 py-2 rounded-md block w-full border-0 p-0 text-gray-300 placeholder-gray-500 focus:ring-0 focus:outline-0 sm:text-sm" placeholder="">
                                    </div>
                                </div>
                                <div class="col-span-6">
                                    <div class="relative rounded-md border theme-border  -sm focus-within:border-indigo-600 focus-within:ring-1 focus-within:ring-indigo-600 transition-all duration-300">
                                        <label for="popup_desc" class="absolute -top-2 left-2 -mt-px inline-block bg-[#0e0e0e] px-1 text-xs font-medium theme-text">O mnie</label>
                                        <textarea type="text" name="popup_desc" id="popup_desc" class="bg-[#0e0e0e] px-3 py-2 rounded-md block w-full border-0 p-0 text-gray-300 placeholder-gray-500 focus:ring-0 focus:outline-0 sm:text-sm" placeholder=""></textarea>
                                    </div>
                                </div>
                              
                            </div>
                          </div>
                    </div>
                  </div>
                </div>
                <div class="hidden sm:block" aria-hidden="true">
                  <div class="py-5">
                    <div class="border-t border-[#3d3d3d]"></div>
                  </div>
                </div>
                <!-- role -->
                <div class="mt-10 sm:mt-0">
                  <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                      <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-200">Rola użytkownika</h3>
                        <p class="mt-1 text-sm text-gray-500">Rola definiuje uprawnienia jakie ma użytkownik.</p>
                      </div>
                    </div>
                    <div class="mt-5 md:col-span-2 md:mt-0">
                        <div class="overflow-hidden   sm:rounded-md">
                          <div class="px-4 py-5 sm:p-6">
                            
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-6">
                                    <div class="relative rounded-md border theme-border  -sm focus-within:border-indigo-600 focus-within:ring-1 focus-within:ring-indigo-600 transition-all duration-300">
                                        <label for="popup_role" class="absolute -top-2 left-2 -mt-px inline-block bg-[#0e0e0e] px-1 text-xs font-medium theme-text">Uprawnienia</label>
                                        <select type="text" name="popup_role" id="popup_role" class="bg-[#0e0e0e] capitalize px-3 py-2 rounded-md block w-full border-0 p-0 text-gray-300 placeholder-gray-500 focus:ring-0 focus:outline-0 sm:text-sm" placeholder="">
                                            <?php
                                                $sql2 = "SELECT * FROM `user_roles`;";
                                                $result2 = mysqli_query($conn, $sql2);
                                                if(mysqli_num_rows($result2) > 0)
                                                {
                                                    while($row2 = mysqli_fetch_assoc($result2))
                                                    {
                                                        echo "<option id='popup_role_option' class='capitalize' value='".$row2['role']."'>".$row2['role']."</option>";
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="hidden sm:block" aria-hidden="true">
                  <div class="py-5">
                    <div class="border-t border-[#3d3d3d]"></div>
                  </div>
                </div>
                <!-- personalisation -->
                <div class="mt-10 sm:mt-0">
                  <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                      <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-200">Personalizacja</h3>
                        <p class="mt-1 text-sm text-gray-500">Dostosuj wygląd konta użytkownika.</p>
                      </div>
                    </div>
                    <div class="mt-5 md:col-span-2 md:mt-0">
                        <div class="overflow-hidden   sm:rounded-md">
                          <div class="px-4 py-5 sm:p-6">
                            <div>
                              <label class="block text-xs font-medium theme-text">Zdjęcie profilowe</label>
                              <div class="mt-1 flex flex-col items-center">
                                <div class="w-full flex flex-row items-center justify-between">
                                  <input type="file" name="fileToUpload" id="fileToUpload" class="cursor-copy w-full mt-1 flex justify-center rounded-md border-2 border-dashed theme-border text-gray-300 px-6 pt-5 pb-6">

                                </div>
                                <p class="text-xs text-gray-500 mt-1">Przeciągnij i upuść - PNG, JPG, GIF do 5MB</p>
                              </div>
                            </div>

                            <div>
                              <label class="mt-1 block text-xs font-medium theme-text">Tło profilu</label>
                              <div class="mt-1 flex flex-col items-center">
                                <div class="w-full flex flex-row items-center justify-between">
                                  <input type="file" name="background" id="background" class="cursor-copy w-full mt-1 flex justify-center rounded-md border-2 border-dashed theme-border text-gray-300 px-6 pt-5 pb-6">

                                </div>
                                <p class="text-xs text-gray-500 mt-1">Przeciągnij i upuść - PNG, JPG, GIF do 5MB</p>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="hidden sm:block" aria-hidden="true">
                  <div class="py-5">
                    <div class="border-t border-[#3d3d3d]"></div>
                  </div>
                </div>
                <!-- account -->
                <div class="mt-10 sm:mt-0">
                  <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                      <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-200">Konto</h3>
                        <p class="mt-1 text-sm text-gray-500">Login i hasło są szyfrowane, można je jedynie zresetować.</p>
                      </div>
                    </div>
                    <div class="mt-5 md:col-span-2 md:mt-0">
                        <div class="overflow-hidden sm:rounded-md">
                          <div class="px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <div class="relative rounded-md border theme-border  -sm focus-within:border-indigo-600 focus-within:ring-1 focus-within:ring-indigo-600 transition-all duration-300">
                                        <label for="popup_login" class="absolute -top-2 left-2 -mt-px inline-block bg-[#0e0e0e] px-1 text-xs font-medium theme-text">Login</label>
                                        <input type="text" name="popup_login" id="popup_login" class="bg-[#0e0e0e] px-3 py-2 rounded-md block w-full border-0 p-0 text-gray-300 placeholder-gray-500 focus:ring-0 focus:outline-0 sm:text-sm" placeholder="">
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <div class="relative rounded-md border theme-border  -sm focus-within:border-indigo-600 focus-within:ring-1 focus-within:ring-indigo-600 transition-all duration-300">
                                        <label for="popup_login_2" class="absolute -top-2 left-2 -mt-px inline-block bg-[#0e0e0e] px-1 text-xs font-medium theme-text">Powtórz login</label>
                                        <input type="text" name="popup_login_2" id="popup_login_2" class="bg-[#0e0e0e] px-3 py-2 rounded-md block w-full border-0 p-0 text-gray-300 placeholder-gray-500 focus:ring-0 focus:outline-0 sm:text-sm" placeholder="">
                                    </div>
                                </div>

                              <div class="col-span-6 sm:col-span-6">
                                    <div class="relative rounded-md border theme-border  -sm focus-within:border-indigo-600 focus-within:ring-1 focus-within:ring-indigo-600 transition-all duration-300">
                                      <label for="popup_status_inpt" class="absolute -top-2 left-2 -mt-px inline-block bg-[#0e0e0e] px-1 text-xs font-medium theme-text">Status</label>
                                        <select type="text" name="popup_status_inpt" id="popup_status_inpt" class="capitalize bg-[#0e0e0e] px-3 py-2 rounded-md block w-full border-0 p-0 text-gray-300 placeholder-gray-500 focus:ring-0 focus:outline-0 sm:text-sm" placeholder="">
                                            <?php
                                                $sql2 = "SELECT * FROM `user_status`;";
                                                $result2 = mysqli_query($conn, $sql2);
                                                if(mysqli_num_rows($result2) > 0)
                                                {
                                                    while($row2 = mysqli_fetch_assoc($result2))
                                                    {
                                                        echo "<option id='popup_status_option' class='capitalize' value='".$row2['status']."'>".$row2['status']."</option>";
                                                    }
                                                }
                                            ?>
                                        </select>
                                      </div>
                                </div>    
                                <div class="col-span-6 sm:col-span-3">
                                    <div class="relative rounded-md border theme-border  -sm focus-within:border-indigo-600 focus-within:ring-1 focus-within:ring-indigo-600 transition-all duration-300">
                                        <label for="popup_pswd" class="absolute -top-2 left-2 -mt-px inline-block bg-[#0e0e0e] px-1 text-xs font-medium theme-text">Hasło</label>
                                        <input type="text" name="popup_pswd" id="popup_pswd" class="bg-[#0e0e0e] px-3 py-2 rounded-md block w-full border-0 p-0 text-gray-300 placeholder-gray-500 focus:ring-0 focus:outline-0 sm:text-sm" placeholder="">
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <div class="relative rounded-md border theme-border  -sm focus-within:border-indigo-600 focus-within:ring-1 focus-within:ring-indigo-600 transition-all duration-300">
                                        <label for="popup_pswd_2" class="absolute -top-2 left-2 -mt-px inline-block bg-[#0e0e0e] px-1 text-xs font-medium theme-text">Powtórz hasło</label>
                                        <input type="text" name="popup_pswd_2" id="popup_pswd_2" class="bg-[#0e0e0e] px-3 py-2 rounded-md block w-full border-0 p-0 text-gray-300 placeholder-gray-500 focus:ring-0 focus:outline-0 sm:text-sm" placeholder="">
                                    </div>
                                </div>          
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="hidden sm:block" aria-hidden="true">
                  <div class="py-5">
                    <div class="border-t border-[#3d3d3d]"></div>
                  </div>
                </div>
               </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>