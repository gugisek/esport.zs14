<?php
    include "./scripts/conn_db.php";
    $sql = "SELECT * FROM informations where id=9 or id=5";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $contact_info[] = $row['value'];
    }
?>
<section id="bg" class="bg-cover bg-fixed">
    <section class="pt-4 bg-[#000000c0]">
        <?php include 'components/navbar.php'; ?>
       <section class="py-32 md:mt-0 sm:mt-14 mt-28">
            <div class="mx-auto max-w-2xl p-8 text-center">
                <h2 data-aos="fade-right" data-aos-delay="200" class="text-3xl font-bold tracking-tight text-gray-100 sm:text-4xl">Autorzy</h2>
                <p data-aos="fade-right" data-aos-delay="300"  class="mt-2 leading-8 text-gray-300">Jesteśmy pierwotnymi autorami tej witrny oraz pierwszych wydarzeń.</p>
            </div>
       </section>
       <section data-aos="fade-up" class="bg-black/80 2xl:px-[15%] md:px-[10%] px-[5%] font-[poppins] text-gray-400 p-8 text-justify">
            <ul role="list" class="mx-auto my-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <li data-aos="fade-up" data-aos-delay="100">
                    <img class="mx-auto h-56 w-56 rounded-full" src="public/img/autors/gugisek.jpg" alt="">
                    <h3 class="mt-6 text-base text-center font-semibold leading-7 tracking-tight text-gray-300">Gustaw Sołdecki</h3>
                    <p class="text-sm leading-6 text-center text-gray-500">Web developer</p>
                    <ul role="list" class="mt-6 flex justify-center items-center gap-x-6">
                    <li>
                        <a target="_blank" href="https://ui.gugisek.pl/" class="text-gray-400 theme-text-hover">
                        <span class="sr-only">Portfolio</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                        </svg>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:gugisek@gmail.com" class="text-gray-400 theme-text-hover">
                        <span class="sr-only">Gmail</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                            <path d="M19.5 22.5a3 3 0 003-3v-8.174l-6.879 4.022 3.485 1.876a.75.75 0 01-.712 1.321l-5.683-3.06a1.5 1.5 0 00-1.422 0l-5.683 3.06a.75.75 0 01-.712-1.32l3.485-1.877L1.5 11.326V19.5a3 3 0 003 3h15z" />
                            <path d="M1.5 9.589v-.745a3 3 0 011.578-2.641l7.5-4.039a3 3 0 012.844 0l7.5 4.039A3 3 0 0122.5 8.844v.745l-8.426 4.926-.652-.35a3 3 0 00-2.844 0l-.652.35L1.5 9.59z" />
                        </svg>
                        </a>
                    </li>
                    </ul>
                </li>
                <li data-aos="fade-up" data-aos-delay="200">
                    <img class="mx-auto h-56 w-56 rounded-full" src="public/img/autors/lef.jpg" alt="">
                    <h3 class="mt-6 text-base text-center font-semibold leading-7 tracking-tight text-gray-300">Jakub Strzelczak</h3>
                    <p class="text-sm leading-6 text-center text-gray-500">Web developer</p>
                    <ul role="list" class="mt-6 flex justify-center gap-x-6">
                    <li>
                        <a target="_blank" href="https://github.com/lefinek" class="text-gray-400 theme-text-hover">
                        <span class="sr-only">Portfolio</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                        </svg>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="mailto:gugisek@gmail.com" class="text-gray-400 theme-text-hover">
                        <span class="sr-only">Gmail</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                            <path d="M19.5 22.5a3 3 0 003-3v-8.174l-6.879 4.022 3.485 1.876a.75.75 0 01-.712 1.321l-5.683-3.06a1.5 1.5 0 00-1.422 0l-5.683 3.06a.75.75 0 01-.712-1.32l3.485-1.877L1.5 11.326V19.5a3 3 0 003 3h15z" />
                            <path d="M1.5 9.589v-.745a3 3 0 011.578-2.641l7.5-4.039a3 3 0 012.844 0l7.5 4.039A3 3 0 0122.5 8.844v.745l-8.426 4.926-.652-.35a3 3 0 00-2.844 0l-.652.35L1.5 9.59z" />
                        </svg>
                        </a>
                    </li> -->
                    </ul>
                </li>
                <li data-aos="fade-up" data-aos-delay="300">
                    <img class="mx-auto h-56 w-56 rounded-full" src="public/img/autors/kakor.jpg" alt="">
                    <h3 class="mt-6 text-base text-center font-semibold leading-7 tracking-tight text-gray-300">Kacper Korus</h3>
                    <p class="text-sm leading-6 text-center text-gray-500">Research & Organizator</p>
                    <ul role="list" class="mt-6 flex justify-center gap-x-6">
                    <li>
                        <a href="mailto:123kakor56@gmail.com" class="text-gray-400 theme-text-hover">
                        <span class="sr-only">Gmail</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                            <path d="M19.5 22.5a3 3 0 003-3v-8.174l-6.879 4.022 3.485 1.876a.75.75 0 01-.712 1.321l-5.683-3.06a1.5 1.5 0 00-1.422 0l-5.683 3.06a.75.75 0 01-.712-1.32l3.485-1.877L1.5 11.326V19.5a3 3 0 003 3h15z" />
                            <path d="M1.5 9.589v-.745a3 3 0 011.578-2.641l7.5-4.039a3 3 0 012.844 0l7.5 4.039A3 3 0 0122.5 8.844v.745l-8.426 4.926-.652-.35a3 3 0 00-2.844 0l-.652.35L1.5 9.59z" />
                        </svg>
                        </a>
                    </li>
                    </ul>
                </li>
                <li data-aos="fade-up" data-aos-delay="100">
                    <img class="mx-auto h-56 w-56 rounded-full" src="public/img/autors/djdiamond.jpg" alt="">
                    <h3 class="mt-6 text-base text-center font-semibold leading-7 tracking-tight text-gray-300">Marcin Wąsik</h3>
                    <p class="text-sm leading-6 text-center text-gray-500">Research & Organizator</p>
                    <ul role="list" class="mt-6 flex justify-center gap-x-6">
                    <li>
                        <a href="mailto:wasikm@chmura.zs14.edu.pl" class="text-gray-400 theme-text-hover">
                        <span class="sr-only">Gmail</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                            <path d="M19.5 22.5a3 3 0 003-3v-8.174l-6.879 4.022 3.485 1.876a.75.75 0 01-.712 1.321l-5.683-3.06a1.5 1.5 0 00-1.422 0l-5.683 3.06a.75.75 0 01-.712-1.32l3.485-1.877L1.5 11.326V19.5a3 3 0 003 3h15z" />
                            <path d="M1.5 9.589v-.745a3 3 0 011.578-2.641l7.5-4.039a3 3 0 012.844 0l7.5 4.039A3 3 0 0122.5 8.844v.745l-8.426 4.926-.652-.35a3 3 0 00-2.844 0l-.652.35L1.5 9.59z" />
                        </svg>
                        </a>
                    </li>
                    </ul>
                </li>
                

                <!-- More people... -->
            </ul>
        </section>
    </section>
</section>