<?php snippet('header') ?>

<div id="masthead">
    <div class="logo-wrapper">
      <div class="logo">
        <img src="<?php echo url('assets/images/c-white.png') ?>" alt="Carrmen Yew - Graphic Designer" />
      </div>
    </div>
</div>

<div id="wrapper" class="masthead-push">
	<div id="content-wrapper">
		<header id="top" class="header cf" role="banner">
			<h1><a href="/">Carrmen Yew</a></h1>
			<?php snippet('menu') ?>
		</header>
		<?php snippet('projects') ?>
		<a href="#top" class="scrollToTop round-button">↑ Top</a>
	</div>
	<?php snippet('footer') ?>
</div>