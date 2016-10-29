<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="container" class="container">
  <!--sidebar-->
  <?php $this->need('sidebar.php'); ?>
     <div id="pjax-container">
  <div id="primary" class="content-area">
    <article class="article page">
      <header class="header">
        <h1 class="title"><?php $this->title() ?></h1></header>
      <div class="content">
      <?php $this->content(); ?>
      </div>
    </article>
    
    <nav id="page-nav" class="page-nav">
      <div class="nav-links">
        <div class="nav-previous"></div>
        <div class="nav-next"></div>
      </div>
    </nav>
    <!--comments-->
<div id="fb_comments_container">
 <?php $this->need('comments.php'); ?>
</div>
      </div>
      </div>
          <?php $this->need('footer.php'); ?>
</div>