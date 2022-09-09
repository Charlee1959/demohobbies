<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'template/php/includes/document-begin.php';?>
  <title>PHP Template System</title>

</head>

<body>

  <header>
    <?php include 'template/php/includes/template-header.php';?>

  </header>

  <main>
    <!-- ADD MAIN CONTENT HERE -->
    <p>
      Ik heb diverse lange afstandswandelingen gedaan. In Nederland worden ze LAW genoemd, in Frankrijk GR (Grande Randonnée). Tot nu toe heb ik een deel van het Pieterpad,
      een deel van het Drenthepad, het Noaberpad, een deel in Noord-Duitsland (van Nieuweschans tot iets boven Hamburg) en ergens in het Tarngebied in Zuid-Frankrijk.
    </p>
  </main>

  <footer>
    <?php include 'template/php/includes/template-footer.php';?>
  </footer>

<?php include 'template/php/includes/document-end.php';?>

<script>
  document.getElementById("menu-item3").className += " active";
</script>

</body>
</html>
