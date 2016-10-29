<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<style>
.sidebar{
	background-color: <?php $this->options->themeColor(); ?>!important;
}
</style>
<div class="sidebar"><header id="header" class="header"><h2 class="title"><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->IndexName(); ?></a></h2><p><?php $this->options->IndexIntroduction(); ?></p></header></div><!-- end #sidebar -->
