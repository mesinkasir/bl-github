<?php if (Paginator::numberOfPages()>1): ?>
<nav class="paginate-container" aria-label="Pagination">
<div class="pagination">
<?php if (Paginator::showPrev()): ?>
<a class="previous_page" rel="previous" href="<?php echo Paginator::previousPageUrl() ?>" aria-label="Previous Page">Previous</a>
<?php endif; ?>
<a class="home_page" rel="home" href="<?php echo Paginator::nextPageUrl() ?>" aria-label="Home Page">Home</a>
<?php if (Paginator::showNext()): ?>
<a class="next_page" rel="next" href="<?php echo Paginator::nextPageUrl() ?>" aria-label="Next Page">Next</a>
<?php endif; ?>
</div>
</nav>
<?php endif; ?>