<main>
  <?php
  $path = './includes/pages/';
  $page = isset($_GET['page']) ? $_GET['page'] : 'accueil';
  $page = $path . $page . '.inc.php';
  $tableauFichiers = glob($path . '*.inc.php');
  if (in_array($page, $tableauFichiers)) {
    require $page;
  }
  else {
    require $path . 'accueil.inc.php';
  }
  ?>
</main>
