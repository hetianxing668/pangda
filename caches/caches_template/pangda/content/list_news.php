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
		<table class="title_list">
			<tr class="thead">
				<td align="left" style="padding-left:20px;width:80%">文章标题</td>
				<td align="center">发布时间</td>
			</tr>
			<tr>
				<td colspan="2">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5ab4b05e97fd14c3ed386604ee1a9399&action=lists&catid=%24catid&num=25&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 25;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
				<ul>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><span class="sp_title"><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></span><span class="sp_date"><?php echo date('Y-m-d ',$r[inputtime]);?></span></li>
					<?php $n++;}unset($n); ?>
				</ul>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</td>
			</tr>
			<tr class="thead">
				<td align="left" style="padding-left:20px;width:80%">文章标题</td>
				<td align="center">发布时间</td>
			</tr>
			<tr>
				<td colspan="2">
				 <div id="pages" class="text-c"><?php echo $pages;?></div>
				</td>
			</tr>
		</table>
		</div>
	</div>
	
	<?php include template("content","inc_footer"); ?>
</body>
</html>