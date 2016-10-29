<?php
/**
* 归档页面
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
      <h1 class="title">Archive</h1>
     </header>
<div id="search-own">
<form method="post" action="">
    <input type="text" name="s" class="text search-class" size="32" placeholder="<?php _e('Input keyword And then Press enter'); ?>"/>
</form>
</div>
<div class="content">
<?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
    $year=0; $mon=0; $i=0; $j=0;$mon2;
    $output = '<div>';
    while($archives->next()):
        $year_tmp = date('Y',$archives->created);
        $mon_tmp = date('m',$archives->created);
		$mon_tmp2 = date('F',$archives->created);
        $y=$year; $m=$mon;
        if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></li>';
        if ($year != $year_tmp && $year > 0) $output .= '</ul>';
        if ($year != $year_tmp) {
            $year = $year_tmp;
            $output .= '<h2 class="archive-title">'. $year .' </h2><ul>'; //输出年份
        }
        if ($mon != $mon_tmp) {
            $mon = $mon_tmp;
			$mon2 = $mon_tmp2;
            $output .= '<li><h3 class="archive-title">'. $mon2 .'</h3><ul>'; //输出月份
        }
        $output .= '<li>'.date('F jS , Y',$archives->created).' » <a href="'.$archives->permalink .'">'. $archives->title .'</a></li>'; //输出文章日期和标题
    endwhile;
    $output .= '</ul></li></ul></div>';
    echo $output;
?>  
</div>
</article>
     <!--footer-->

              </div>
              </div>
</div>
                  <?php $this->need('footer.php'); ?>
