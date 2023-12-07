<!DOCTYPE html>
<html lang="pl">
<?php include 'components/head.php'; ?>
<body class="flex flex-col items-center justify-start w-screen overflow-x-hidden p-0 m-0">
    <section class="w-screen flex flex-col items-center z-20 h-full">
        <?php include 'scripts/conn_db.php'; ?>
        <?php include 'components/navbar.php'; ?>

        <?php 
            $selected_nav = "SELECT value FROM informations WHERE name = 'events_selected_hero'";
            $selected_nav_result = mysqli_query($conn, $selected_nav);
            $selected = mysqli_fetch_array($selected_nav_result);

            if($selected[0] == 'blank_page'){
                include 'components/events/blank_hero.php';
            } else if($selected[0] == 'clock'){
                include 'components/events/clock.php';
            } else if($selected[0] == 'last_champions'){
                include 'components/events/lastest_champions.php';
            } else if($selected[0] == 'schedule'){
                include 'components/schedule.php';
            } else{
                include 'components/events/blank_hero.php';
            }
        ?>
    </section>
    <section class="w-screen">
        <?php include 'components/events/winner_before_tournanament.php'; ?>
        <?php //include 'components/events/winner_over_the_years.php'; ?>
    </section>
    <?php include 'components/footer.php'; ?>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

        var theme = localStorage.getItem("theme");
        if (theme == null) {
        motyw("green");
        } else {
        motyw(theme);
        }
    </script>
</body>
</html>