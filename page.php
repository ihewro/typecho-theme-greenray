<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="container" class="container">
  <!--sidebar-->
  <?php $this->need('sidebar.php'); ?>
     <div id="pjax-container">
  <div id="primary" class="content-area">
    <article class="article page">
      <header class="header">
        <h1 class="title"><?php $this->title() ?>
            <?php if($this->user->hasLogin()):?>
                <a class="superscript" href="<?php Helper::options()->adminUrl()?>write-page.php?cid=<?=$this->cid?>" target="_blank"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            <?php endif?>
            </h1>
        </header>
      <div class="content">
      <?php $this->content(); ?>
      </div>
    </article>
    
    <!-- comment out page navigation
    <nav id="page-nav" class="page-nav">
      <div class="nav-links">
        <div class="nav-previous"></div>
        <div class="nav-next"></div>
      </div>
    </nav>
    -->
    <!--comments-->
<div id="fb_comments_container">
 <?php $this->need('comments.php'); ?>
</div>
      </div>
      </div>
          <?php $this->need('footer.php'); ?>
</div>
