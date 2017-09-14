<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
	//首页文字
	$IndexName = new Typecho_Widget_Helper_Form_Element_Text('IndexName', NULL, 'Friend C', _t('首页的名称'), _t('输入你喜欢的一行文字吧，不要太长哦，否则就不好看啦'));
	$form->addInput($IndexName);
	
		//首页介绍文字
	$IndexIntroduction = new Typecho_Widget_Helper_Form_Element_Text('IndexIntroduction', NULL, '长长来路，心生温度。', _t('首页的一行介绍文字'), _t('在这里输入文字，不要太长'));
	$form->addInput($IndexIntroduction);
	
	//配置侧边栏颜色
    $themeColor = new Typecho_Widget_Helper_Form_Element_Text('themeColor', NULL, NULL, _t('自定义侧边栏色调'), _t('默认为<span style="color: #1abc9c;">#80d260</span>, 你可以自定义任何你喜欢的颜色侧边栏色调。自定义侧边栏色调必须使用 Hex Color, 即`#233333`或`#333`的格式。填写错误的格式可能不会生效。'));
    $themeColor->input->setAttribute('class', 'mini');
    $form->addInput($themeColor);
	
	
	//底部第一个链接的标题
	$linkonetitle = new Typecho_Widget_Helper_Form_Element_Text('linkonetitle',NULL, 'Friends','底部第一个链接的标题','');
	    $linkonetitle ->input->setAttribute('class', 'mini');
    $form->addInput($linkonetitle);
	//底部第一个链接地址
	$linkoneadress = new Typecho_Widget_Helper_Form_Element_Text('linkoneadress', NULL, 'http://www.ihewro.com/links.html', _t('底部第一个链接地址'), _t(''));
	$form->addInput($linkoneadress);
	//底部第二个链接的标题
	$linktwotitle = new Typecho_Widget_Helper_Form_Element_Text('linktwotitle',NULL, 'About','底部第二个链接的标题','');
	    $linktwotitle->input->setAttribute('class', 'mini');
    $form->addInput($linktwotitle);
	//底部第二个链接地址
	$linktwoadress = new Typecho_Widget_Helper_Form_Element_Text('linktwoadress', NULL, 'http://www.ihewro.com/about.html', _t('底部第二个链接地址'), _t(''));
	$form->addInput($linktwoadress);
	
	//底部第三个链接的标题
	$linkthreetitle = new Typecho_Widget_Helper_Form_Element_Text('linkthreetitle',NULL, ' Message','底部第三个链接的标题','');
	    $linkthreetitle->input->setAttribute('class', 'mini');
    $form->addInput($linkthreetitle);
	//底部第三个链接地址
	$linkthreeadress = new Typecho_Widget_Helper_Form_Element_Text('linkthreeadress', NULL, 'http://www.ihewro.com/msg.html', _t('底部第三个链接地址'), _t(''));
	$form->addInput($linkthreeadress);
	
	//底部第四个链接的标题
	$linkfourtitle = new Typecho_Widget_Helper_Form_Element_Text('linkfourtitle',NULL, 'File','底部第四个链接的标题','');
	    $linkfourtitle->input->setAttribute('class', 'mini');
    $form->addInput($linkfourtitle);
	//底部第四个链接地址
	$linkfouradress = new Typecho_Widget_Helper_Form_Element_Text('linkfouradress', NULL, 'http://www.ihewro.com/archive.html', _t('底部第四个链接地址'), _t(''));
	$form->addInput($linkfouradress);
	
	//底部第五个链接的标题	
	$linkfivetitle = new Typecho_Widget_Helper_Form_Element_Text('linkfivetitle',NULL, 'Category','底部第五个链接的标题','');
	    $linkfivetitle->input->setAttribute('class', 'mini');
    $form->addInput($linkfivetitle);		
	//底部第五个链接地址
	$linkfiveadress = new Typecho_Widget_Helper_Form_Element_Text('linkfiveadress', NULL, 'http://www.ihewro.com/tag.html', _t('底部第五个链接地址'), _t(''));
	$form->addInput($linkfiveadress);
	//pjax-complete
    $pjaxCompleteAction = new Typecho_Widget_Helper_Form_Element_Textarea('pjaxCompleteAction', NULL, NULL, _t('PJAX:COMPLETE Action'), _t('启用 PJAX 选项后, 你的第三方插件可能会在 PJAX 中失效。在这种情况下, 你可能需要重新注册事件或做其他处理。<br>在这里写入你需要进行处理的 JS 代码。并确保正确,否则可能会导致后续 JS 代码无法执行。<br>这些 JS 代码会在 PJAX 完成页面加载并替换(PJAX 触发事件 pjax:complete)的时候执行。<br>绝大多数的处理可能应该在这里执行。你需要根据实际情况判断。'));
    $form->addInput($pjaxCompleteAction);
	

}
