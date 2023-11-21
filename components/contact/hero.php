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
       <section data-aos="fade-up" class="py-32 md:mt-0 mt-14">
            <div class="mx-auto max-w-2xl p-8 text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-100 sm:text-4xl">Kontakt</h2>
                <p class="mt-2 leading-8 text-gray-300">Masz wątpliwości? Znalazleś błąd? Chcesz pomóc rozwijać projekt?<br/><span class="theme-text">Zobacz szczegóły poniżej.</span></p>
            </div>
       </section>
       <section data-aos="fade-up" class="bg-black/80 font-[poppins] text-gray-400 p-8 text-justify">
            <div class="mx-auto my-20 max-w-lg space-y-16">
                <div data-aos="fade-left" data-aos-delay="100" data-aos-anchor-placement="top-bottom" class="flex gap-x-6">
                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg theme-bg">
                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-base font-semibold leading-7 text-gray-200">Masz pytania?</h3>
                        <p class="mt-2 leading-7 text-gray-400">Jeśli chcesz się szybko dowiedzieć o turnieju lub innych organizacyjnych sprawach napisz do nas na discord.</p>
                        <p class="mt-4">
                        <a href="<?=$contact_info[0]?>" target="_blank" class="text-sm font-semibold leading-6 theme-text theme-text-hover duration-150">Dołącz na serwer <span aria-hidden="true">&rarr;</span></a>
                        </p>
                    </div>
                </div>
                <div data-aos="fade-left" data-aos-delay="200" data-aos-anchor-placement="top-bottom" class="flex gap-x-6">
                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg theme-bg">
                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 12.75c1.148 0 2.278.08 3.383.237 1.037.146 1.866.966 1.866 2.013 0 3.728-2.35 6.75-5.25 6.75S6.75 18.728 6.75 15c0-1.046.83-1.867 1.866-2.013A24.204 24.204 0 0112 12.75zm0 0c2.883 0 5.647.508 8.207 1.44a23.91 23.91 0 01-1.152 6.06M12 12.75c-2.883 0-5.647.508-8.208 1.44.125 2.104.52 4.136 1.153 6.06M12 12.75a2.25 2.25 0 002.248-2.354M12 12.75a2.25 2.25 0 01-2.248-2.354M12 8.25c.995 0 1.971-.08 2.922-.236.403-.066.74-.358.795-.762a3.778 3.778 0 00-.399-2.25M12 8.25c-.995 0-1.97-.08-2.922-.236-.402-.066-.74-.358-.795-.762a3.734 3.734 0 01.4-2.253M12 8.25a2.25 2.25 0 00-2.248 2.146M12 8.25a2.25 2.25 0 012.248 2.146M8.683 5a6.032 6.032 0 01-1.155-1.002c.07-.63.27-1.222.574-1.747m.581 2.749A3.75 3.75 0 0115.318 5m0 0c.427-.283.815-.62 1.155-.999a4.471 4.471 0 00-.575-1.752M4.921 6a24.048 24.048 0 00-.392 3.314c1.668.546 3.416.914 5.223 1.082M19.08 6c.205 1.08.337 2.187.392 3.314a23.882 23.882 0 01-5.223 1.082" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-base font-semibold leading-7 text-gray-200">Znalazleś błąd?</h3>
                        <p class="mt-2 leading-7 text-gray-400">Napisz do nas na <?=$contact_info[1]?> i opisz w jakich warunkach on wystepuje, nie zapominj podać przeglądarki z jakiej korzystasz.</p>
                        <p class="mt-4">
                        <a href="mailto:<?=$contact_info[1]?>" class="text-sm font-semibold leading-6 theme-text theme-text-hover duration-150">Wyślij email <span aria-hidden="true">&rarr;</span></a>
                        </p>
                    </div>
                </div>
                <div data-aos="fade-left" data-aos-delay="300" data-aos-anchor-placement="top-bottom" class="flex gap-x-6">
                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg theme-bg">
                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-base font-semibold leading-7 text-gray-200">Inne sprawy</h3>
                        <p class="mt-2 leading-7 text-gray-400">Jak chcesz skontaktować się z administratorami lub organizatorami to pisz na wyznaczonym kanale discord lub napisz email na aktualny adres administrtora: <br> <span class="theme-text"><?=$contact_info[1]?></span>.</p>
                        <p class="mt-4">
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </section>
</section>