<?php snippet('header') ?>

  <div id="page-wrapper">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

  </div>

<?php snippet('footer') ?>