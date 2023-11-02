<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php echo Theme::metaTagTitle(); ?>
<?php echo Theme::metaTagDescription(); ?>
<meta name="twitter:title" content="<?php echo $page->title(); ?>"/>
<meta name="twitter:description" content="<?php echo $page->description(); ?>"/>
<?php echo Theme::metaTagDescription(); ?>
<?php echo Theme::favicon('img/favicon.png'); ?>
<?php echo Theme::css('css/bs.css'); ?>
<?php echo Theme::css('css/blug.css'); ?>
<?php echo Theme::css('css/github.css'); ?>
<?php Theme::plugins('siteHead'); ?>
</head>
<body>
<?php include(THEME_DIR_PHP.'navbar.php'); ?>
<div class="container-fluid">
<?php Theme::plugins('siteBodyBegin'); ?>
<?php
if ($WHERE_AM_I == 'page') {
include(THEME_DIR_PHP.'page.php');
} else {
include(THEME_DIR_PHP.'home.php');
}
?>
</div>
<?php include(THEME_DIR_PHP.'footer.php'); ?>
<?php Theme::plugins('siteBodyEnd'); ?>
<?php echo Theme::jquery();?>
</body>
</html>
