<?php
/**
 * 超简洁typecho皮肤，主题来自@imzoke，移植至typecho
 * 
 * @package Greenray
 * @author imzoke & ihewro
 * @version 1.1.0
 * @link http://www.ihewro.com/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

  <div id="container" class="container">
  <!--sidebar-->
   <?php $this->need('sidebar.php'); ?>
   <div id="pjax-container">
   <div id="primary" class="content-area">
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
     <div class="footer"></div>
    </article>
<?php endwhile; ?>
  <nav id="page-nav" class="page-nav">
   <div class="nav-links">
    <div class="nav-previous">
          <?php $this->pageLink('<span class="nav-meta">←</span> Older posts','next');?>

    </div>
    <div class="nav-next">
     <?php $this->pageLink('Newer posts <span class="nav-meta">→</span>','prev');?>
    </div>
   </div>
  </nav>
     </div>
     </div>
  </div>
     <!--footer-->
    <?php $this->need('footer.php'); ?>
