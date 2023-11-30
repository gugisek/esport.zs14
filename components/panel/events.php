<?php
include "../../scripts/security.php";
include "../../scripts/conn_db.php";
?>
<div class="w-full" data-aos="fade-right" data-aos-delay="100">
    <!-- <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-semibold text-gray-300">Events</h1>
    </div> -->
    <div class="panel_body w-full h-full">
        <section data-aos="fade-right" data-aos-delay="100" class="aos-init aos-animate h-full">
            <main>
                <?php include 'events/events_navbar.php' ?>
                <div class="divide-y divide-white/5  flex flex-col">
                    <?php include 'events/hero_panel.php' ?>
                    <?php include 'events/champions_panel.php' ?>
                    <?php include 'events/schedule_panel.php' ?>
                </div>
            </main>
        </section>
    </div>
    <!-- <button onclick="toTest()">test</button> -->
</div>