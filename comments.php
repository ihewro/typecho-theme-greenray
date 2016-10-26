<?php if ($this->options->duoshuosn){ ?>
<div id="comments"> 
<script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
<script src="<?php $this->options->themeUrl('assets/js/kaomoji.js') ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/css/yan-style.css'); ?>">
<?php if($this->allow('comment')): ?>
<!-- 多说评论框 start -->
	<div class="ds-thread" data-thread-key="<?php echo $this->cid;?>" data-title="<?php echo $this->title;?>" data-author-key="<?php echo $this->authorId;?>" data-url=""></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"<?php $this->options->duoshuosn();?>",theme:"none"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src ='<?php $this->options->themeUrl('assets/js/embed.min.js') ?>';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- 多说公共JS代码 end -->

<?php else: ?>
<h4><?php _e('评论已关闭'); ?></h4> 
<?php endif; ?> 
</div>
<?php };?>