<ul id="projects">
  <?php foreach(page('projects')->children()->visible()->limit(8) as $project): ?>
  <li>
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
      <div class="thumbnail">
      <a href="<?php echo $project->url() ?>">
          <span class="title"><?php echo html($project->title()) ?></span>
          <img src="<?php echo $image->url() ?>" alt="<?php echo html($project->title()) ?>" >
      </a>
      </div>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>