<?php snippet('header') ?>
<div id="main">
  <div id="wrapper">
    <div id="content-wrapper">
      <header id="top">
          <h1><a href="/">Carrmen Yew</a></h1>
          <?php snippet('menu') ?>
      </header>

	    <div class="text">
	      <h1><?php echo $page->title()->html() ?></h1>
	      <?php echo $page->text()->kirbytext() ?>
	    </div>
  	</div>
  </div>
</div>
<?php snippet('footer') ?>