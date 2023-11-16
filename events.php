<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventy / E-SPORT'owa ZS14</title>
    <link rel="stylesheet" href="public/global.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="theme.js"></script>
</head>
<body class="flex flex-col items-center justify-start w-screen overflow-x-hidden p-0 m-0">
    <section class="w-screen flex flex-col items-center z-20 h-full">
        <?php include 'components/navbar.php'; ?>
        <?php //include 'components/events/blank_hero.php' ?>
        <?php  include 'components/events/clock.php' ?>

        <?php //include 'components/schedule.php'; ?>
        <?php include 'components/events/lastest_champions.php' ?>

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