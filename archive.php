<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

  <div id="container" class="container">
    <!--sidebar-->
  <?php $this->need('sidebar.php'); ?>
       <div id="pjax-container">
     <div id="primary" class="content-area">
    <article class="article page">
<header class="header">
        <h1 class="title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h1>
</header>
  
      <div class="content">
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
<article class="article">
     <header class="header">
      <h2 class="title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
      <div class="meta">
       <span class="date">Posted on <time datetime="<?php $this->date('c'); ?>"><?php $this->date('F j, Y'); ?></time></span>
      </div>
     </header>
     <div class="content">
      <?php $this->content('Keep reading...'); ?>
     </div>
    </article>
    	<?php endwhile; ?>
        <?php else: ?>
<article class="article">
     <header class="header">
                <h2 class="title"><?php _e('没有找到内容'); ?></h2>
      </header>
            </article>
        <?php endif; ?>

        <?php $this->pageNav('&laquo;', '&raquo;'); ?>
        </div>
        </article>
        </div>
        </div>
    </div><!-- end #container -->
    	<?php $this->need('footer.php'); ?>
