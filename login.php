<?php
    session_start();
    if(isset($_SESSION['logged']))
    {
        header('Location: panel.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pl">
<?php include 'components/head.php'; ?>
<body data-theme="">
    <?php include 'components/login/hero.php'; ?>
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