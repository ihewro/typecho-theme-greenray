<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="container" class="container">
<!--sidebar-->
  <?php $this->need('sidebar.php'); ?>
  <div id="primary" class="content-area">
    <article class="article page">
      <header class="header">
        <h1 class="title"><?php $this->title() ?></h1>
        <div class="meta">
          <span class="date">Posted on
            <time datetime="<?php $this->date('c'); ?>"><?php $this->date('F j, Y'); ?></time></span>
        </div>
      </header>
      
      <div class="content">
      <?php $this->content(); ?>
      </div>
    </article>
    <!--page-nav-->
    <nav id="page-nav" class="page-nav">
      <div class="nav-links">
        <div class="nav-previous">
            <span class="nav-meta">← </span><?php $this->thePrev('%s','没有了'); ?></div>
        <div class="nav-next"><?php $this->theNext('%s','没有了'); ?><span class="nav-meta"> →</span></div>
      </div>
    </nav>
    <!--comments-->
<div id="fb_comments_container">
 <?php $this->need('comments.php'); ?>
</div>
    <!--footer-->
    <?php $this->need('footer.php'); ?>
      </div>
</div>

