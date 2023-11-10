<?php session_start()?>
<?php
include "users_popup.php";
include "users_add_popup.php";
?>
<section class="overflow-x-auto w-full" data-aos="fade-right" data-aos-delay="100">
    <div class="">
        <table class="w-full">
            <tr class="uppercase text-left text-xs text-gray-400 border-b border-white/5">
                <th class="sm:px-6 lg:px-8 px-4">Pracownik</th>
                <th class="px-3 py-3.5 sm:table-cell hidden">Status</th>
                <th class="px-3 py-3.5 sm:table-cell hidden">Rola</th>
                <th class="px-3 py-3.5 sm:table-cell hidden">Data założenia</th>
                <th class="w-[2px] pr-8 theme-text">
                    <a onclick="popupAddOpenClose()" class="flex flex-row items-center justify-center theme-text-hover hover:[text-shadow:_2px_5px_20px] duration-300 cursor-pointer">Dodaj 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                        </svg>
                    </a>
                </th>
            </tr>
            <script>
                //details
                var popupEmailDet = document.getElementById("popup_email_det");
                var popupTitleDet = document.getElementById("popup_title_det");
                var popupDepartmentDet = document.getElementById("popup_department_det");
                var popupFullNameDet = document.getElementById("popup_full_name_det");
                var popupAboutDet = document.getElementById("popup_about_det");
                //information public
                var popupName = document.getElementById("popup_name");
                var popupName2 = document.getElementById("popup_name_2");
                var popupImg = document.getElementById("popup_img");
                var popupBackground = document.getElementById("popup_background");
                var popupStatus = document.getElementById("popup_status");
                var popupRole = document.getElementById("popup_role");
                var popupId = null;
                //information private
                var popupRoleOption = document.querySelectorAll("#popup_role_option");
                var popupDepartmentOption = document.querySelectorAll("#popup_department_option");
                var popupTitleOption = document.querySelectorAll("#popup_title_option");
                var popupStatusOption = document.querySelectorAll("#popup_status_option");

                var popupIdPersonalInpt = document.querySelector("#popup_personal_id");
                var popupIdRole = document.querySelector("#popup_role_id");
                var popupIdAccount = document.querySelector("#popup_account_id");
                var popupIdPersonalisation = document.querySelector("#popup_personalisation_id");
                var popupNameInpt = document.getElementById("popup_name_inpt");
                var popupSurname = document.getElementById("popup_surname");
                var popupEmail = document.getElementById("popup_email");
                var popupSecName = document.getElementById("popup_sec_name");
                var popupAddres = document.getElementById("popup_addres");
                var popupDesc = document.getElementById("popup_desc");
                var popupImgInpt = document.getElementById("popup_img_inpt");
                var popupBackgroundInpt = document.getElementById("popup_background_inpt");
            </script>
            <?php        
                include "../../scripts/conn_db.php";
                if (isset($_POST['search'])) {
                    $search = $_POST['search'];
                    $role = $_POST['role'];
                    $status = $_POST['status'];
                }
                else {
                    $search = "";
                    $role = "";
                    $status = "";
                }
                $sql = "SELECT users.id, users.name, users.sec_name, users.description, users.addres, users.mail, users.profile_picture, users.background_picture, users.sur_name, user_roles.role, users.create_date, user_status.status, colors.name as status_color FROM `users` join user_roles on users.role_id=user_roles.id join user_status on user_status.id=users.status_id join colors on colors.id=user_status.color_id where (users.name like '%$search%' and role_id like '%$role%' and status_id like '%$status%') or (sur_name like '%$search%' and role_id like '%$role%' and status_id like '%$status%') or (mail like '%$search%' and role_id like '%$role%' and status_id like '%$status%') order by users.id asc;";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0)
                {
                    //window.location=`?page=użytkownicy&action=edit&id='.$row['id'].'#edit`;
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $create_date = $row['create_date'];
                        if ($row['profile_picture'] == NULL) {
                            $row['profile_picture'] = 'default.png';
                        }
                        if ($row['background_picture'] == NULL) {
                            $row['background_picture'] = 'default.avif';
                        }
                        if ($row['description'] == NULL) {
                            $desc = 'Nic tu nie ma ciekawego...';
                        }else {
                            $desc = $row['description'];
                        }
                        echo '
                        <script>
                        function detailsPopup'.$row['id'].'() {

                            popupEmailDet.innerHTML = "'.$row['mail'].'";
                            popupFullNameDet.innerHTML = "'.$row['name'].' '.$row['sec_name'].' '.$row['sur_name'].'";
                            popupAboutDet.innerHTML = "'.$desc.'";

                            popupId = '.$row['id'].';
                            popupName.innerHTML = "'.$row['name'].' '.$row['sur_name'].'";
                            popupName2.innerHTML = "'.$row['name'].' '.$row['sur_name'].'";
                            popupStatus.innerHTML = "'.$row['status'].'";
                            popupStatus.classList.add("bg-'.$row['status_color'].'-500");
                            popupImg.src = "public/img/users_pp/'.$row['profile_picture'].'";
                            popupBackground.src = "public/img/users_bp/'.$row['background_picture'].'";
                            
                            ';
                            //information private
                            if ($_SESSION['privilage_users']!=1) {
                                echo '
                                popupIdPersonalInpt.value = '.$row['id'].';
                                popupIdRole.value = '.$row['id'].';
                                popupIdAccount.value = '.$row['id'].';
                                popupIdPersonalisation.value = '.$row['id'].';
                                popupNameInpt.value = "'.$row['name'].'";
                                popupSurname.value = "'.$row['sur_name'].'";
                                popupEmail.value = "'.$row['mail'].'";
                                popupSecName.value = "'.$row['sec_name'].'";
                                popupAddres.value = "'.$row['addres'].'";
                                popupDesc.value = "'.$row['description'].'";
                                popupImgInpt.src = "public/img/users_pp/'.$row['profile_picture'].'";
                                popupBackgroundInpt.src = "public/img/users_bp/'.$row['background_picture'].'";
                                ';
                            }
                            echo '
                        for (var i = 0; i < popupStatusOption.length; i++) {
                            if (popupStatusOption[i].value == "'.$row['status'].'") {
                                popupStatusOption[i].setAttribute("selected", "");
                            }
                            else {
                                popupStatusOption[i].removeAttribute("selected");
                            }
                        }
                         for (var i = 0; i < popupRoleOption.length; i++) {
                            if (popupRoleOption[i].value == "'.$row['role'].'") {
                                popupRoleOption[i].setAttribute("selected", "");
                            }
                            else {
                                popupRoleOption[i].removeAttribute("selected");
                            }
                        }
                            popupOpenClose();
                            
                        }
                        </script>
                        <tr class="hover:bg-[#3d3d3d] transition-all duration-150" style="cursor: pointer; cursor: hand;" onclick="detailsPopup'.$row['id'].'()">
                            <td class="whitespace-nowrap py-4 pl-4 sm:px-6 lg:px-8 px-4 text-sm sm:pl-6">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 flex-shrink-0">
                                    <img class="h-10 w-10 rounded-full object-cover" src="public/img/users_pp/'.$row['profile_picture'].'" alt="">
                                    </div>
                                    <div class="ml-4">
                                    <div class="font-medium text-gray-200">'.$row['name'].' '.$row['sur_name'].'</div>
                                    <div class="text-gray-400">'.$row['mail'].'</div>
                                    </div>
                                </div>
                            </td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 sm:table-cell hidden">
                                <span class="inline-flex rounded-full px-2 text-xs font-semibold leading-5 capitalize text-'.$row['status_color'].'-900 bg-'.$row['status_color'].'-400">'.$row['status'].'</span>
                            </td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-400 capitalize sm:table-cell hidden">'.$row['role'].'</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-400 capitalize sm:table-cell hidden">'.substr($create_date, 0, strrpos($create_date, ' ', 0)).'</td>
                            <td></td>
                        </tr>
                        ';
                    }
                } else {
                    echo "<tr class='border-t-[0.5px] border-b-[0.5px]'>";
                        echo "<td class='py-3 text-gray-800 leading-4 text-sm'>Brak wyników</td>";
                        echo "<td class='text-center capitalize text-sm text-gray-500'></td>";
                        echo "<td class='text-center capitalize text-sm text-gray-500'></td>";
                        echo "<td class='text-center text-sm text-gray-500'></td>";
                        echo "<td class='text-center text-sm'></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</section>
