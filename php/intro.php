<div class="col-12 col-md-12 p-3 p-md-5">
<svg class="octicon octicon-repo text-secondary" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z"></path></svg>
<a href="<?php echo $site->url(); ?>">Home</a> / <?php if ($page->title()): ?>
<a href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a><?php endif ?>
<span class="border border-secaondary rounded-pill p-1 ms-1"><small>Published</small></span>
</div>