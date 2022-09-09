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
      Ik ben dol op puzzelen, sudoku's, doorlopers, cryptogrammen, etc
    </p>
  </main>

  <footer>
    <?php include 'template/php/includes/template-footer.php';?>
  </footer>

<?php include 'template/php/includes/document-end.php';?>

<script>
  document.getElementById("menu-item4").className += " active";
</script>

</body>
</html>
