<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
	//首页文字
	$IndexName = new Typecho_Widget_Helper_Form_Element_Text('IndexName', NULL, 'Friend C', _t('首页的名称'), _t('输入你喜欢的一行文字吧，不要太长哦，否则就不好看啦'));
	$form->addInput($IndexName);
	
		//首页介绍文字
	$IndexIntroduction = new Typecho_Widget_Helper_Form_Element_Text('IndexIntroduction', NULL, '我们笑着说再见，却深知再见遥遥无期。', _t('首页的一行介绍文字'), _t('在这里输入字母，不要太长'));
	$form->addInput($IndexIntroduction);
	
	//配置多说
    $duoshuosn = new Typecho_Widget_Helper_Form_Element_Text('duoshuosn',NULL, 'hewro','配置多说short_name', '填写你的多说评论的short_name，使博客的评论系统可用,不填则不启用多说，包括不加载多说js与css<br><font color="#F40">注意：</font>这里的多说css都是主题内置好的，所以多说自定义css里的css最好清空，否则会有不美观的现象发生.<br>博主认证必须修改aseets/css/duoshuo.min.css的博主ID');
    $duoshuosn->input->setAttribute('class', 'mini');
    $form->addInput($duoshuosn);
	
}
