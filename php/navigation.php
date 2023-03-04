<?php if (Paginator::numberOfPages()>1): ?>
<div class="cardes">
<div class="carde">
<div class="card-content">
<div class="center">
<?php if (Paginator::showPrev()): ?>
<a class="page-link bg-dark" href="<?php echo Paginator::previousPageUrl() ?>" tabindex="-1">	&nbsp; ← 	&nbsp;<!--<?php echo $L->get('Previous'); ?>--></a>
<?php endif; ?>
<a class="page-link bg-dark text-white" href="<?php echo Theme::siteUrl() ?>">	&nbsp; <?php echo $L->get('Home'); ?> 	&nbsp;</a>
<?php if (Paginator::showNext()): ?>
<a class="page-link bg-dark" href="<?php echo Paginator::nextPageUrl() ?>">	&nbsp; <!--<?php echo $L->get('Next'); ?>--> → 	&nbsp;</a>
<?php endif; ?>
</div>
</div>
</div>
</div>
<?php endif ?>