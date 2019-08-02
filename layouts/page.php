<main class="container-main">
  <?php include 'layouts/side.php'; ?>

  <div class="container-page">
    <?php include 'layouts/page-head.php'; ?>
    <div class="container-page-content">

      <?php if(isset($_GET['errors']) && $_GET['errors']): ?>
        <?php include 'pages/errors.php'; ?>
      <?php elseif(isset($_GET['page']) && $_GET['page']): ?>
        <?php include 'pages/'.$_GET['page'].'.php'; ?>
      <?php else: ?>
        <?php include 'pages/dashboard.php'; ?>
      <?php endif; ?>

    </div><!-- ./page-content -->
  </div><!-- ./page -->

</main>