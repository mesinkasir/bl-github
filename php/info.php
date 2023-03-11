<div class="col-md-8 col-8 text-end">
<?php if ($page->date()): ?><time>On <?php echo $page->date(); ?></time>&nbsp;<svg class="octicon octicon-history" viewBox="0 0 15 16" version="1.1" width="15" height="16" aria-hidden="true">
<path d="m.427 1.927 1.215 1.215a8.002 8.002 0 1 1-1.6 5.685.75.75 0 1 1 1.493-.154 6.5 6.5 0 1 0 1.18-4.458l1.358 1.358A.25.25 0 0 1 3.896 6H.25A.25.25 0 0 1 0 5.75V2.104a.25.25 0 0 1 .427-.177ZM7.75 4a.75.75 0 0 1 .75.75v2.992l2.028.812a.75.75 0 0 1-.557 1.392l-2.5-1A.751.751 0 0 1 7 8.25v-3.5A.75.75 0 0 1 7.75 4Z">
</svg> <?php echo $page->readingTime(); ?><?php endif ?>
  </div>
  </div>
