<?php if ($this->options->duoshuosn){ ?>
<div id="comments"> 
<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/css/yan-style.css'); ?>">
<?php if($this->allow('comment')): ?>
<!-- 多说评论框 start -->
	<div class="ds-thread" data-thread-key="<?php echo $this->cid;?>" data-title="<?php echo $this->title;?>" data-author-key="<?php echo $this->authorId;?>" data-url=""></div>
<!-- 多说评论框 end -->

<?php else: ?>
<h4><?php _e('评论已关闭'); ?></h4> 
<?php endif; ?> 
</div>
<?php };?>