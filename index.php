<!DOCTYPE html>
<html lang="pl">
<?php include 'components/head.php'; ?>
<body style="overflow-x: hidden;">
    <section class="flex flex-col items-center justify-start w-screen overflow-x-hidden">
        <?php include 'components/navbar.php'; ?>
        <?php include 'components/hero.php'; ?>
        <?php include 'components/events_main.php';// ?>
        <?php //include 'components/schedule.php';// ?>
        <?php //include 'components/winners.php'; ?>
        <?php include 'components/sponsors.php'; ?>
        <section style="background-image: url('public/img/cs_grafik.webp');" class="bg-cover bg-fixed bg-center bg-no-repeat bg-top bg-gray-50 w-full">
          <section class="bg-[#fffffff4]">
            <?php include 'components/faq.php'; ?>
            <?php include 'components/stream.php'; ?>
          </section>
        </section>
        <?php include 'components/share.php'; ?>
        <?php include 'components/footer.php'; ?>
    </section>
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