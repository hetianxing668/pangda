<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>	<!-- 合作企业 开始 -->
	<div class="footbox">
	<dl class="partners fixed">
		<dt><span class="title diamond">合作企业</span></dt>
		<dd class="fixed">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=332986f874b144feaed88bd0a7dfac3a&action=lists&catid=38&num=8&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'38','order'=>'listorder ASC','limit'=>'8',));}?>
		<ul>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li><a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],118,56);?>" alt="<?php echo $r['title'];?>" /></a></li>
			<?php $n++;}unset($n); ?>
		</ul>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</dd>
	</dl>
	<ul class="footmenu fixed">
		<li><a href="<?php echo siteurl($siteid);?>">网站首页</a></li>
		<li><a href="<?php echo $CATEGORYS['1']['url'];?>"><?php echo $CATEGORYS['1']['catname'];?></a></li>
		<li><a href="<?php echo $CATEGORYS['6']['url'];?>"><?php echo $CATEGORYS['6']['catname'];?></a></li>
		<li><a href="<?php echo $CATEGORYS['7']['url'];?>"><?php echo $CATEGORYS['7']['catname'];?></a></li>
		<li><a href="<?php echo $CATEGORYS['8']['url'];?>"><?php echo $CATEGORYS['8']['catname'];?></a></li>
		<li><a href="<?php echo $CATEGORYS['9']['url'];?>"><?php echo $CATEGORYS['9']['catname'];?></a></li>
		<li><a href="<?php echo $CATEGORYS['10']['url'];?>"><?php echo $CATEGORYS['10']['catname'];?></a></li>
		<li><a href="<?php echo $CATEGORYS['11']['url'];?>"><?php echo $CATEGORYS['11']['catname'];?></a></li>
		<li><a href="<?php echo $CATEGORYS['12']['url'];?>"><?php echo $CATEGORYS['12']['catname'];?></a></li>
		<li><a href="<?php echo $CATEGORYS['13']['url'];?>"><?php echo $CATEGORYS['13']['catname'];?></a></li>
		<li><a href="<?php echo $CATEGORYS['14']['url'];?>"><?php echo $CATEGORYS['14']['catname'];?></a></li>
	</ul>
	</div>
	<!-- 合作企业 开始 -->
	
	<!-- 底部 开始 -->
	<div class="foot fixed">
		<p>河北庞锐汽车商学院地址：河北省唐山市古冶区林西西中街55号 联系电话：03158133833 邮编：063100</p>
	</div>
	<!-- 底部 结束 -->