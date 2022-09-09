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
      Ik heb verschillende categoriën boeken:
    </p>
    <div class="list-group list-group-horizontal">
        <p><a href="#" class="list-group-item list-group-item-action">science fiction</a></p>
        <p><a href="#" class="list-group-item list-group-item-action">historische romans</a></p>
        <p><a href="#" class="list-group-item list-group-item-action">fantasy</a></p>
        <p><a class="list-group-item list-group-item-action disabled">studieboeken</a></p>
        <p><a href="#" class="list-group-item list-group-item-action">naslagwerken</a></p>
      </div>
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
