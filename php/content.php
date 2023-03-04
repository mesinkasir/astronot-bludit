<div class="cards">
<?php foreach ($content as $page): ?>
<?php Theme::plugins('pageBegin'); ?>
<div class="card">
<?php if ($page->coverImage()): ?>
<a title="<?php echo $page->title(); ?>" href="<?php echo $page->permalink(); ?>">
<img class="img-fluid rounded-circle" src="<?php echo $page->coverImage(); ?>"/>
</a>
<?php endif ?>
<div class="card-content">
<h3><strong>
<a href="<?php echo $page->permalink(); ?>" class="astronot"><?php echo $page->title(); ?></a></strong></h3>
<?php if ($page->description()): ?><p><?php echo $page->description(); ?></p><?php endif ?>
<?php echo $page->contentBreak(); ?> <?php if ($page->readMore()): ?><button><a class="link" href="<?php echo $page->permalink(); ?>"><?php echo $L->get('Read more'); ?></a></button><?php endif ?>
</div>
</div>
<?php Theme::plugins('pageEnd'); ?>
<?php endforeach ?>
</div>
<?php include(THEME_DIR_PHP.'navigation.php'); ?>
</div>
</div>