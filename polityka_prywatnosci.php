<!DOCTYPE html>
<html lang="pl">
<?php include 'components/head.php'; ?>
<body>
    <?php include 'components/polityka_prywatnosci/hero.php'; ?> 
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