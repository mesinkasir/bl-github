<?php if ($page->coverImage()): ?><img class="img-fluid" alt="<?php echo $page->description(); ?>" width="100%" src="<?php echo $page->coverImage(); ?>"/><?php endif ?>
<div class="p-3">
<h1><strong><a href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a></strong></h1>
<h2 class="border-bottom border-gray-light mb-3 p-1"><?php echo $page->description(); ?></a></h2>
<?php if ($page->tags()): ?><p class="border-bottom p-1"><small><svg class="octicon octicon-tag" viewBox="0 0 15 16" version="1.1" width="15" height="16" aria-hidden="true">
<path d="M1 7.775V2.75C1 1.784 1.784 1 2.75 1h5.025c.464 0 .91.184 1.238.513l6.25 6.25a1.75 1.75 0 0 1 0 2.474l-5.026 5.026a1.75 1.75 0 0 1-2.474 0l-6.25-6.25A1.752 1.752 0 0 1 1 7.775Zm1.5 0c0 .066.026.13.073.177l6.25 6.25a.25.25 0 0 0 .354 0l5.025-5.025a.25.25 0 0 0 0-.354l-6.25-6.25a.25.25 0 0 0-.177-.073H2.75a.25.25 0 0 0-.25.25ZM6 5a1 1 0 1 1 0 2 1 1 0 0 1 0-2Z"></path>
</svg><?php echo $tag ?> Tag : <?php echo $page->tags(); ?></small></p><?php endif ?>
<?php echo $page->content(); ?>