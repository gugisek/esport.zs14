<?php
include "../../../scripts/conn_db.php";
$sql = "select * from informations;";
$result = mysqli_query($conn, $sql);
$i=0;
while ($row = $result->fetch_assoc()) {
    $info[$i] = $row['value'];
    $i++;
}
$php_version = phpversion();
$mysql_version = mysqli_get_server_info($conn);
?>
<form action="scripts/settings/edit_info.php" method="POST" class="divide-y divide-white/5" enctype="multipart/form-data">
    <div class="sm:px-6 lg:px-8 px-4">
    <div class="px-4 sm:px-0 mt-6 flex flex-row justify-between items-center">
        <div>
            <h3 class="text-base font-semibold leading-7 text-white">Podstawowe informacje</h3>
            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-400">Zmiana nazwy strony i logo.</p>
        </div>
        <button type="subbmit" class="inline-flex items-center gap-x-2 rounded-md bg-green-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Zapisz
                <svg class="-mr-0.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                </svg>
        </button>
    </div>
    <div class="mt-6 border-t border-white/10">
        <dl class="divide-y divide-white/10">
        <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-sm font-medium leading-6 py-4 text-white">Nazwa strony</dt>
            <input name="main_name" required type="text" value="<?=$info[0]?>" class="focus:outline-0 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white py-4  bg-[#0e0e0e] mt-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0"></input>
        </div>
        <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-sm font-medium leading-6 text-white py-4">Opis</dt>
            <textarea name="description" required class="bg-[#0e0e0e] focus:outline-0 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white py-4 bg-[#0e0e0e] mt-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0"><?=$info[1]?></textarea>
        </div>
        <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-sm font-medium leading-6 text-white py-4">Opis meta</dt>
            <textarea name="meta_description" required class="bg-[#0e0e0e] focus:outline-0 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white py-4  bg-[#0e0e0e] mt-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0"><?=$info[2]?></textarea>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-sm font-medium leading-6 text-white">Logo</dt>
            <dd class="w-full">
                <img id="popup_img_inpt" src="public/img/<?=$info[3]?>" alt="logo" class="max-w-[200px] pb-4 object-contain">
                <input type="file" name="fileToUpload" id="fileToUpload" class="cursor-copy min-w-[400px] mt-1 flex justify-center rounded-md border-2 border-dashed theme-border text-gray-300 px-6 pt-5 pb-6">
                <p class="text-xs text-gray-500 mt-2">Przeciągnij i upuść - PNG, JPG, GIF do 5MB</p>
            </dd>
        </div>
        </dl>
    </div>
    </div>
    <div class="sm:px-6 lg:px-8 px-4">
    <div class="px-4 sm:px-0 mt-6">
        <h3 class="text-base font-semibold leading-7 text-white">Media społecznościowe</h3>
        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-400">Zmień tu linki do profili na całej stronie.</p>
    </div>
    <div class="mt-6 border-t border-white/10">
        <dl class="divide-y divide-white/10">
        <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-sm font-medium leading-6 text-white py-4">Discord</dt>
            <input required name="discord" value="<?=$info[4]?>" class="focus:outline-0 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white py-4  bg-[#0e0e0e] mt-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0"></input>
        </div>
        <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-sm font-medium leading-6 text-white py-4">Twitch</dt>
            <input required name="twitch" value="<?=$info[5]?>" class="focus:outline-0 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white py-4  bg-[#0e0e0e] mt-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0"></input>
        </div>
        <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-sm font-medium leading-6 text-white py-4">Instagram</dt>
            <input required name="instagram" value="<?=$info[6]?>" class="focus:outline-0 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white py-4  bg-[#0e0e0e] mt-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0"></input>
        </div>
        <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-sm font-medium leading-6 text-white py-4">Strona szkoły</dt>
            <input required name="strona_szkoly" value="<?=$info[7]?>" class="focus:outline-0 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white py-4  bg-[#0e0e0e] mt-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0"></input>
        </div>
        </dl>
    </div>
    </div>
    <div class="sm:px-6 lg:px-8 px-4">
    <div class="px-4 sm:px-0 mt-6">
        <h3 class="text-base font-semibold leading-7 text-white">Dane kontaktowe</h3>
        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-400">Zmiana nazwy strony i logo.</p>
    </div>
    <div class="mt-6 border-t border-white/10">
        <dl class="divide-y divide-white/10">
        <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-sm font-medium leading-6 text-white py-4">Adres email</dt>
            <input required name="adres_email" value="<?=$info[8]?>" class="focus:outline-0 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white py-4  bg-[#0e0e0e] mt-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0"></input>
        </div>
        <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-sm font-medium leading-6 text-white py-4">Godność administratora</dt>
            <input required name="adm_name" value="<?=$info[9]?>" class="focus:outline-0 focus:border-b-[1px] theme-border mb-[1px] focus:mb-0 focus:text-white py-4  bg-[#0e0e0e] mt-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0"></input>
        </div>
        </dl>
    </div>
    </div>
    <div class="sm:px-6 lg:px-8 px-4 text-center">
        <div class="px-4 sm:px-0 my-6">
            <button type="subbmit" class="inline-flex items-center gap-x-2 rounded-md bg-green-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Zapisz
                <svg class="-mr-0.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </div>

    <div class="sm:px-6 lg:px-8 px-4">
    <div class="px-4 sm:px-0 mt-6">
        <h3 class="text-base font-semibold leading-7 text-white">Informacje o stronie</h3>
        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-400"></p>
    </div>
    <div class="mt-6 border-t border-white/10">
        <dl class="divide-y divide-white/10">
            <p class="text-center text-gray-500 text-sm py-4">
                version: <?=$info[10]?><br>
                engine: PHP <?=$php_version?><br>
                database: MySQL <?=$mysql_version?><br>
                author: <a href="https://ui.gugisek.pl" class="theme-text-hover font-[poppins] transition-all duration-100">gugisek</a> & leff<br>
                powered by <a href="https://rgbpc.pl/" target="_blank" class="font-[poppins] theme-text-hover duration-300"><span class="text-red-600 font-[poppins]">R</span><span class="text-green-600 font-[poppins]">G</span><span class="text-blue-600 font-[poppins]">B</span>pc.pl
            </p>
        </dl>
    </div>
    </div>
</form>

