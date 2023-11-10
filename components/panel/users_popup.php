<script>
  function popupOpenClose() {
    var popup = document.getElementById("popup")
    var popupBg = document.getElementById("popupBg")
    popupBg.classList.toggle("opacity-0")
    popupBg.classList.toggle("h-0")
    popup.classList.toggle("scale-0")
    popup.classList.add("duration-300")
  }
</script>
   <!-- popup -->
  <section id="popupBg" class="fixed z-[50] h-0 opacity-0 top-0 left-0 w-full h-full bg-[#0000009e] transition-opacity duration-500"></section>
  <section id="popup" onclick="popupOpenClose()" class="z-[60] fixed scale-0 top-0 left-0 w-full h-full">
    <div class="flex items-center justify-center w-full h-full px-2">
      <div onclick="event.cancelBubble=true;" class="bg-[#0e0e0e] md:min-w-[800px] md:w-auto w-full max-w-[800px] max-h-[80vh] overflow-y-auto flex md:flex-row flex-col gap-4 rounded-2xl py-6 sm:px-6  -xl">
        <div id="popupItself" class="flex h-auto w-full justify-between flex-col">
          <div class="w-full flex justify-between items-center sm:hidden">
            <span>  </span>
              <a onclick="popupOpenClose()" class="-mt-2 pb-3 flex items-center space-x-2 text-gray-500 hover:text-red-600 transition-all duration-500">
                  <p class="uppercase font-medium text-xs">zamknij</p>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
              </a>
          </div>                        
                    <!-- This example requires Tailwind CSS v2.0+ -->
          <div>
            <div>
              <img id="popup_background" class="h-32 w-full object-cover lg:h-48" src="" alt="">
            </div>
            <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8 pb-4">
              <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
                <div class="flex">
                  <img id="popup_img" class="h-24 w-24 rounded-full ring-4 ring-[#1c1c1c] sm:h-32 sm:w-32 object-cover" src="" alt="">
                </div>
                <div class="mt-6 sm:flex sm:min-w-0 sm:flex-1 sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                  <div class="mt-6 min-w-0 flex-1 sm:hidden md:block">
                    <h1 id="popup_name" class="truncate text-2xl font-semibold text-gray-300"></h1>
                  </div>
                  <div class="justify-stretch mt-6 flex flex-col space-y-3 sm:flex-row sm:space-y-0 sm:space-x-4">
                    <span id="popup_status" class="inline-flex items-center rounded-full px-4 py-2 text-xs font-medium text-gray-800 capitalize"></span>
                  </div>
                </div>
              </div>
              <div class="mt-6 hidden min-w-0 flex-1 sm:block md:hidden">
                <h1 id="popup_name_2" class="truncate text-2xl font-bold text-gray-300"></h1>
              </div>
              <!-- detail section -->
              <div class="overflow-hidden bg-[#0e0e0e]   sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                  <h3 class="text-lg font-medium leading-6 text-gray-300">Informacje osobowe</h3>
                  <p class="mt-1 max-w-2xl text-sm text-gray-500">Dane personalne oraz szczegóły.</p>
                </div>
                <div class="border-t border-[#3d3d3d] px-4 py-5 sm:px-6">
                  <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                    <div class="sm:col-span-1">
                      <dt class="text-sm font-medium text-gray-500">Pełne imię</dt>
                      <dd id="popup_full_name_det" class="mt-1 text-sm text-gray-300"></dd>
                    </div>
                    <div class="sm:col-span-1">
                      <dt class="text-sm font-medium text-gray-500">Adres email</dt>
                      <dd id="popup_email_det" class="mt-1 text-sm text-gray-300"></dd>
                    </div>
                    <div class="sm:col-span-2">
                      <dt class="text-sm font-medium text-gray-500">O mnie</dt>
                      <dd id="popup_about_det" class="mt-1 text-sm text-gray-300"></dd>
                    </div>
                  </dl>
                </div>
              </div>
              <!-- edit section -->
            <?php
            if ($_SESSION['privilage_users']!=1) {
                include "../../scripts/conn_db.php";
                echo '
                <div>
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
                      <form action="scripts/users/edit_personal.php" method="POST">
                        <input type="hidden" name="popup_personal_id" id="popup_personal_id" value="">
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
                          <div class="px-4 py-3 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-green-600 py-2 px-4 text-sm font-medium text-white  -sm hover:bg-green-700 duration-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Zapisz</button>
                          </div>
                        
                      </form>
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
                      <form action="scripts/users/edit_role.php" method="POST">
                        <input type="hidden" name="popup_role_id" id="popup_role_id" value="">
                        <div class="overflow-hidden   sm:rounded-md">
                          <div class="px-4 py-5 sm:p-6">
                            
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-6">
                                    <div class="relative rounded-md border theme-border  -sm focus-within:border-indigo-600 focus-within:ring-1 focus-within:ring-indigo-600 transition-all duration-300">
                                        <label for="popup_role" class="absolute -top-2 left-2 -mt-px inline-block bg-[#0e0e0e] px-1 text-xs font-medium theme-text">Uprawnienia</label>
                                        <select type="text" name="popup_role" id="popup_role" class="bg-[#0e0e0e] capitalize px-3 py-2 rounded-md block w-full border-0 p-0 text-gray-300 placeholder-gray-500 focus:ring-0 focus:outline-0 sm:text-sm" placeholder="">
                                            ';
                                                $sql2 = "SELECT * FROM `user_roles`;";
                                                $result2 = mysqli_query($conn, $sql2);
                                                if(mysqli_num_rows($result2) > 0)
                                                {
                                                    while($row2 = mysqli_fetch_assoc($result2))
                                                    {
                                                        echo "<option id='popup_role_option' class='capitalize' value='".$row2['role']."'>".$row2['role']."</option>";
                                                    }
                                                }
                                            echo '
                                        </select>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="px-4 py-3 text-right sm:px-6">
                              <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-green-600 py-2 px-4 text-sm font-medium text-white  -sm hover:bg-green-700 duration-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Zapisz</button>
                            </div>
                          </div>
                        </div>
                      </form>
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
                      <form action="scripts/users/edit_personalisation.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="popup_personalisation_id" id="popup_personalisation_id" value="">
                        <div class="overflow-hidden   sm:rounded-md">
                          <div class="px-4 py-5 sm:p-6">
                            <div>
                              <label class="block text-xs font-medium theme-text">Zdjęcie profilowe</label>
                              <div class="mt-1 flex flex-col items-center">
                                <div class="w-full flex flex-row items-center justify-between">
                                  <input type="file" name="fileToUpload" id="fileToUpload" class="cursor-copy w-3/4 mt-1 flex justify-center rounded-md border-2 border-dashed theme-border text-gray-300 px-6 pt-5 pb-6">
                                  <span class="inline-block h-14 w-14  -md overflow-hidden rounded-full bg-gray-100">
                                    <img id="popup_img_inpt" src="" alt="" class="w-full h-full object-cover">
                                  </span>
                                </div>
                                <p class="text-xs text-gray-500 mt-1">Przeciągnij i upuść - PNG, JPG, GIF do 5MB</p>
                              </div>
                            </div>

                            <div>
                              <label class="mt-1 block text-xs font-medium theme-text">Tło profilu</label>
                              <div class="mt-1 flex flex-col items-center">
                                <div class="w-full flex flex-row items-center justify-between">
                                  <input type="file" name="background" id="background" class="cursor-copy w-3/4 mt-1 flex justify-center rounded-md border-2 border-dashed theme-border text-gray-300 px-6 pt-5 pb-6">
                                  <span class="inline-block h-14 w-18  -md overflow-hidden rounded-md bg-gray-100">
                                    <img id="popup_background_inpt" src="" alt="" class="w-full h-full object-cover">
                                  </span>
                                </div>
                                <p class="text-xs text-gray-500 mt-1">Przeciągnij i upuść - PNG, JPG, GIF do 5MB</p>
                              </div>
                            </div>
                          </div>
                          <div class="px-4 py-3 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-green-600 py-2 px-4 text-sm font-medium text-white  -sm hover:bg-green-700 duration-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Zapisz</button>
                          </div>
                        </div>
                      </form>
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
                      <form action="user_scripts/users_back_account.php" method="POST">
                        <input type="hidden" name="popup_account_id" id="popup_account_id" value="">
                        <div class="overflow-hidden   sm:rounded-md">
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
                                            ';
                                                $sql2 = "SELECT * FROM `user_status`;";
                                                $result2 = mysqli_query($conn, $sql2);
                                                if(mysqli_num_rows($result2) > 0)
                                                {
                                                    while($row2 = mysqli_fetch_assoc($result2))
                                                    {
                                                        echo "<option id='popup_status_option' class='capitalize' value='".$row2['status']."'>".$row2['status']."</option>";
                                                    }
                                                }
                                            echo '
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
                          <div class="px-4 py-3 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-green-600 py-2 px-4 text-sm font-medium text-white  -sm hover:bg-green-700 duration-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Zapisz</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="hidden sm:block" aria-hidden="true">
                  <div class="py-5">
                    <div class="border-t border-[#3d3d3d]"></div>
                  </div>
                </div>
                <!-- delete account -->
                <div class="mt-10 sm:mt-0 mb-10">
                  <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                      <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-200">Usuń konto</h3>
                        <p class="mt-1 text-sm text-gray-500">Usuń je na zawsze, konto nie zniknie ale znikną dane.</p>
                      </div>
                    </div>
                    <div class="mt-5 md:col-span-2 md:mt-0">
                      <form action="user_scripts/users_back_account.php" method="POST">
                        <input type="hidden" name="popup_account_id" id="popup_account_id" value="">
                        <div class="overflow-hidden  sm:rounded-md">
                          <div class="px-4 py-3 text-right sm:px-6">
                            <form class="flex items-start md:col-span-2">
                                <button type="submit" class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white  -sm hover:bg-red-400">Tak, usuń to konto</button>
                            </form>
                            </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
                ';
                }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>