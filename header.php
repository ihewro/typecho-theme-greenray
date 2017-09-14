<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <link rel="stylesheet" href="http://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/default.css') ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/railscasts.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/css/zoom.css') ?>">
	<script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
    <?php if ($this->options->duoshuosn){ ?>
    <style>
	#ds-thread #ds-reset a.ds-user-name[data-user-id="<?php $this->options->duoshuoid();?>"]::after {
    content: "博主";
    color: #80d260;
    margin-left: 6px;
    font-size: 13px;
    display: inline-block;
    font-weight: 300;
    border-radius: 3px;
    background: none;
    padding: 2px 3px;
}
	</style>
    <?php };?>
</head>
 <body class="reader theme-white color-custom">
<div id="pjaxzz"> <img src="<?php $this->options->themeUrl('assets/img/loadingpjax.gif') ?>"> </div>
    
