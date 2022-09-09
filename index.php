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
      Dit is een tryout van een overzicht van mijn hobby's. Je kunt er navigeren naar diverse hobby's. Bij elke hobby wordt er wat dieper op in gegaan.
    </p>
  </main>

  <footer>
    <?php include 'template/php/includes/template-footer.php';?>
  </footer>

<?php include 'template/php/includes/document-end.php';?>

<script>
  document.getElementById("menu-item0").className += " active";
</script>

</body>
</html>
