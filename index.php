<!DOCTYPE html>
<html lang="pl">
<?php include 'components/head.php'; ?>
<body data-theme="green" style="overflow-x: hidden;">
    <section class="flex flex-col items-center justify-start w-screen overflow-x-hidden">
        <?php include 'components/navbar.php'; ?>
        <?php include 'components/hero.php'; ?>
        <?php include 'components/events_main.php'; ?>
        <?php include 'components/sponsors.php'; ?>
        <?php include 'components/newsletter.php'; ?>
        <?php include 'components/footer.php'; ?>
    </section>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>