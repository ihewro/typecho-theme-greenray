<?php
/**
* 分类和标签页面
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

  <div id="container" class="container">
  <!--sidebar-->
  <?php $this->need('sidebar.php'); ?>
     <div id="pjax-container">
   <div id="primary" class="content-area">
   <article class="article archive">
     <header class="header">
      <h1 class="title">Tag and Category</h1>
     </header>
<div class="content">
    <div id="archives-tags">
        <h3>标签云</h3>
        <?php Typecho_Widget::widget('Widget_Metas_Tag_Cloud')->to($tags); ?>
        <?php if($tags->have()): ?>
            <?php while ($tags->next()): ?>
                <a class="itags" href="<?php $tags->permalink();?>">
                    <?php $tags->name(); ?></a>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
     <div id="archives-category">
         	<h3>分类</h3>
            <ul>
			    <?php $this->widget('Widget_Metas_Category_List')
               ->parse('<li><a href="{permalink}">{name}</a> ({count})</li>'); ?>
               </ul>
     </div>
     <div id="archives-counts">
     <h3>博客统计</h3>
     <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
<li>文章总数：<?php $stat->publishedPostsNum() ?>篇</li>
<li>分类总数：<?php $stat->categoriesNum() ?>个</li>
<li>评论总数：<?php $stat->publishedCommentsNum() ?>条</li>
<li>页面总数：<?php $stat->publishedPagesNum() ?>个</li>
     </div>
</div>

<div id="dlpages">
     <h3>独立页面</h3>
                 <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>

                <a <?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                <?php endwhile; ?>

</div>

</article>

              </div>
              </div>
</div>
     <!--footer-->
<?php $this->need('footer.php'); ?>
