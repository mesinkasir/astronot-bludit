<div class="cardes">
<div class="carde">
<div class="card-content">
<?php Theme::plugins('pageBegin'); ?>
<?php if ($page->coverImage()): ?>
<img class="img-fluid rounded mt-3 mb-3" src="<?php echo $page->coverImage(); ?>"/>
<?php endif ?>
<h1><strong><a class="asteroid" href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a></strong></h1>
<?php if ($page->description()): ?>
<h2><span><?php echo $page->description(); ?></span></h2>
<?php endif ?>
<?php echo $page->content(); ?>
<?php Theme::plugins('pageEnd'); ?>
</div>
</div>
</div>