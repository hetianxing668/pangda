<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
	<meta name="keywords" content="<?php echo $SEO['keyword'];?>"/>
	<meta name="description" content="<?php echo $SEO['description'];?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo SKIN_PATH;?>/css/main.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo SKIN_PATH;?>/css/common.css"/>
</head>
<body>
	<?php include template("content","inc_header"); ?>
	
	<!-- 头部广告 开始 -->
	<div class="top_ad">
	<a href="#"><img src="<?php echo SKIN_PATH;?>/images/img_topad.jpg" alt="" /></a>
	</div>
	<!-- 头部广告 结束 -->
	
	<div class="mainbox fixed">
		<?php include template("content","inc_left"); ?>
		
		<div class="rightbox fixed">
		<div class="location">
		当前位置：<a href="<?php echo siteurl($siteid);?>"><?php echo $SEO['site_title'];?></a> &gt; <?php echo catpos($catid);?>
		</div>
		<div class="content_page">
		<?php echo $content;?>
		</div>
		</div>
	</div>
	
	<?php include template("content","inc_footer"); ?>
</body>
</html>