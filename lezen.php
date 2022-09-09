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
      Ik heb verschillende categoriën boeken, science fiction, historische romans, fantasy, studieboeken, naslagwerken, etc
    </p>
  </main>

  <footer>
    <?php include 'template/php/includes/template-footer.php';?>
  </footer>

<?php include 'template/php/includes/document-end.php';?>

<script>
  document.getElementById("menu-item2").className += " active";
</script>

</body>
</html>
