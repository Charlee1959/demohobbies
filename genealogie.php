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
      Ooit was ik begonnen met het uitzoeken van mijn stamboom, daarna had mijn vader het overgenomen en het verder uitgewerkt.
      Later ontdekte ik een website van een verre achterneef van me, onze gemeenschappelijke voorvader is mijn overgrootvader.
      Daarnaast ben ik ook geinteresseerd geraakt in genealogiën van diverse adelshuizen, in het begin die van Oranje-Nassau.
    </p>
  </main>

  <footer>
    <?php include 'template/php/includes/template-footer.php';?>
  </footer>

<?php include 'template/php/includes/document-end.php';?>

<script>
  document.getElementById("menu-item5").className += " active";
</script>

</body>
</html>
