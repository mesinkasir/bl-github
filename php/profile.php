<div class="col-md-4 col-4">
<?php if ($page->user('profilePicture')): ?>
<img class="img-fluid rounded-circle" alt="<?php echo $page->title(); ?>" 
src="<?php echo ($page->user('profilePicture')?$page->user('profilePicture'):Theme::src('img/noimage.png')) ?>" width="30"/><?php endif ?> 
<?php if ($page->user('nickname')): ?>&nbsp;<strong><?php echo $page->user('nickname') ?></strong><?php endif ?> 
</div>