<nav class="nav">
<a class="link" href="<?php echo Theme::siteUrl(); ?>">Home</a>
<?php foreach ($staticContent as $staticPage): ?>
<a class="link" href="<?php echo $staticPage->permalink(); ?>"><?php echo $staticPage->title(); ?></a>
<?php endforeach ?>
</nav>