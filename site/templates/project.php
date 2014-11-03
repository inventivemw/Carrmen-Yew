<div id="header-wrapper">
  <?php snippet('header') ?>
</div>
<div id="projects-wrapper">
  <div class="clearfix"></div>
    <div id="sidebar">
    <div class="desc">
      <h1><?php echo $page->title()->html() ?></h1>
        <div class="text">
          <?php echo $page->text()->kirbytext() ?>
        </div>
      </div>
    </div>
    <div id="main-content">
      <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
      <figure>
        <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
      </figure>
      <?php endforeach ?>

      <ul class="meta cf">
        <li><b>Year:</b> <time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('Y', 'year') ?></time></li>
        <li><b>Tags:</b> <?php echo $page->tags() ?></li>
      </ul>

      <nav class="nextprev cf" role="navigation">
        <?php if($prev = $page->prevVisible()): ?>
        <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
        <?php endif ?>
        <?php if($next = $page->nextVisible()): ?>
        <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
        <?php endif ?>
      </nav>
    </div>
    <div class="clearfix"></div>
    <a href="#top" class="goToTop">↑ Top</a>
</div>
<div id="snowden"></div>

<?php snippet('footer') ?>