<div class="cards">
<?php Theme::plugins('siteSidebar') ?>
<?php foreach (Theme::socialNetworks() as $key=>$label): ?><a class="meteor" href="<?php echo $site->{$key}(); ?>" target="_blank"><?php echo $label; ?>.</a><?php endforeach; ?>
<?php if (Theme::rssUrl()): ?><a class="meteor" href="<?php echo Theme::rssUrl() ?>" target="_blank">RSS</a></li><?php endif; ?>
</div>
<footer class="footer">
<p><?php echo $site->footer(); ?><br/><small>Powered by <a href="https://bludit.com" class="link">🐶 Bludit</a> feat <a href="https://astronot.axcora.com" class="link">👨‍🚀 Astonot</a> <br/>develope by <a target="_blank" class="link" href="https://www.fiverr.com/creativitas/design-your-website-with-phyton-django">🚀 Creativitas</a>
</small></p>
</footer>