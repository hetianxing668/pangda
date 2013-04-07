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
		当前位置：<a href="<?php echo siteurl($siteid);?>"><?php echo $SEO['site_title'];?></a> &gt; <?php echo catpos($catid);?>列表页
		</div>
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9d9cfb52a7f50bcffd2abb9c17ac0f33&action=lists&catid=%24catid&moreinfo=1&num=10&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'moreinfo'=>'1','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
		<ul class="downloads">
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li><span class="title"><h2><a href="<?php echo fileurlformat($r['downfiles']);?>"><?php echo $r['title'];?></a></h2><p>来自：<a href="<?php echo siteurl($siteid);?>">庞锐汽车商学院</a>&#12288;格式：RAR&#12288;大小：<?php echo $r['filesize'];?></p></span><span class="downimg"><a href="<?php echo fileurlformat($r['downfiles']);?>"><img src="<?php echo SKIN_PATH;?>/images/ico_downloads.jpg" alt="" /></a></span></li>
			<?php $n++;}unset($n); ?>
		</ul>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		<div id="pages" class="text-c"><?php echo $pages;?></div>
		</div>
	</div>
	
	<?php include template("content","inc_footer"); ?>
</body>
</html>