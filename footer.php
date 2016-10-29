<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

  <footer id="footer" class="footer">
  <div id="footerother">
<?php if ($this->options->linkonetitle): ?>
   <a href="<?php $this->options->linkoneadress(); ?>"><?php $this->options->linkonetitle(); ?></a> | 
<?php endif; ?>
<?php if ($this->options->linktwotitle): ?>
   <a href="<?php $this->options->linktwoadress(); ?>"><?php $this->options->linktwotitle(); ?></a> | 
<?php endif; ?>  
<?php if ($this->options->linkthreetitle): ?>
   <a href="<?php $this->options->linkthreeadress(); ?>"><?php $this->options->linkthreetitle(); ?></a> | 
<?php endif; ?> 
<?php if ($this->options->linkfourtitle): ?>
   <a href="<?php $this->options->linkfouradress(); ?>"><?php $this->options->linkfourtitle(); ?></a> | 
<?php endif; ?> 
<?php if ($this->options->linkfivetitle): ?>
   <a href="<?php $this->options->linkfiveadress(); ?>"><?php $this->options->linkfivetitle(); ?></a>
<?php endif; ?> 

</div>
   Powered by 
   <a target="_blank" href="http://typecho.org/">typecho</a> ❤ Theme 
   <a target="_blank" href="https://github.com/ihewro/greenray-theme-for-typecho/">Greenray</a> by 
   <a target="_blank" href="http://imzoke.com/">imzoke </a>.
  </footer>

<?php $this->footer(); ?>
<script src="//cdn.bootcss.com/jquery.pjax/1.9.6/jquery.pjax.min.js"></script>

<script src="<?php $this->options->themeUrl('assets/js/highlight.pack.js') ?>"></script>

<script src="<?php $this->options->themeUrl('assets/js/kaomoji.js') ?>"></script>
<!--灯箱zoom.js-->
<script src="//cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php $this->options->themeUrl('assets/js/zoom.min.js') ?>" type="text/javascript"></script>
<script type="text/javascript">
        var setupContents = function () {
            $(".content img:not(article .link-box img, img[no-zoom])").each(function() {
                $(this).attr('data-action', 'zoom');
                if($(this).next().is('br')){
                    $(this).next().remove();
                }
            });
          
        };
 setupContents();
</script>
<script>
hljs.initHighlightingOnLoad();
//pjax 刷新

$(document).pjax('a[href^="<?php Helper::options()->siteUrl()?>"]:not(a[target="_blank"], a[no-pjax])', {
    container: '#pjax-container',
    fragment: '#pjax-container',
    timeout: 8000
}).on('pjax:send',
function() {
		gotoTop();
	$('#pjaxzz').show();
}).on('pjax:complete',
function() {
	$('#pjaxzz').hide();
	kaomoji();
	setupContents();
	$('pre code').each(function(i, block) {
                hljs.highlightBlock(block);
            });
if ($('.ds-thread').length > 0) { if (typeof DUOSHUO !== 'undefined') DUOSHUO.EmbedThread('.ds-thread'); else $.getScript('<?php $this->options->themeUrl('assets/js/embed.min.js') ?>');
 }
 <?php $this->options->pjaxCompleteAction(); ?>
});

function gotoTop(acceleration,stime) {
   acceleration = acceleration || 0.1;
   stime = stime || 10;
   var x1 = 0;
   var y1 = 0;
   var x2 = 0;
   var y2 = 0;
   var x3 = 0;
   var y3 = 0; 
   if (document.documentElement) {
       x1 = document.documentElement.scrollLeft || 0;
       y1 = document.documentElement.scrollTop || 0;
   }
   if (document.body) {
       x2 = document.body.scrollLeft || 0;
       y2 = document.body.scrollTop || 0;
   }
   var x3 = window.scrollX || 0;
   var y3 = window.scrollY || 0;

   // 滚动条到页面顶部的水平距离
   var x = Math.max(x1, Math.max(x2, x3));
   // 滚动条到页面顶部的垂直距离
   var y = Math.max(y1, Math.max(y2, y3));

   // 滚动距离 = 目前距离 / 速度, 因为距离原来越小, 速度是大于 1 的数, 所以滚动距离会越来越小
   var speeding = 1 + acceleration;
   window.scrollTo(Math.floor(x / speeding), Math.floor(y / speeding));

   // 如果距离不为零, 继续调用函数
   if(x > 0 || y > 0) {
       var run = "gotoTop(" + acceleration + ", " + stime + ")";
       window.setTimeout(run, stime);
   }
}

</script>
</body>
</html>
