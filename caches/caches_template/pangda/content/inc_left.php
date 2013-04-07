<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="leftbox fixed">
<dl class="leftmenu">
	<dd class="menu_top"></dd>
	<dd class="menu_middle">
	<ul>
		<?php $arr = Array(31,21,1,26,)?>
		<?php $postionid = $catid?>
		<?php if($child == 0 && in_array($parentid,$arr)) { ?>
			<?php $cid = $parentid?>
		<?php } else { ?>
			<?php $cid = 1?>
		<?php } ?>
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=24b7261c2065bd9086dac4750d38c8d1&sql=select+catid%2Ccatname%2Curl+from+%60pd_category%60+where+parentid%3D%24cid&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select catid,catname,url from `pd_category` where parentid=$cid LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
		 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
		<li><span class="title"><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></span><?php if($catid==$r['catid']) { ?><span class="cur"></span><?php } ?></li>
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	</ul>
	</dd>
	<dd class="menu_bottom"></dd>
</dl>
<dl class="address">
	<dd>
	<img src="<?php echo SKIN_PATH;?>/images/bg_leftmenu_teladdress.jpg" alt="" />
	</dd>
	<dd>
	<a href="#"><img src="<?php echo SKIN_PATH;?>/images/bg_leftmenu_baoming.jpg" alt="" /></a>
	</dd>
</dl>
<div class="major">
	<h2></h2>
	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b31ae56a0b959187b820129412e61667&action=category&catid=26&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'26','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?> 
	<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
	<dl>
		<dt><?php echo $r['catname'];?></dt>
		<dd>
		<ul>
			<?php $childid = $r['catid']?>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=96df52504ba27ae0efbbd8910a212d64&sql=SELECT+A.catid%2CA.title%2CA.url%2CB.leftnum+FROM+%60pd_kbxx%60+A+INNER+JOIN+%60pd_kbxx_data%60+B+ON+A.id%3DB.id+WHERE+A.catid+%3D+%24childid&return=rows\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT A.catid,A.title,A.url,B.leftnum FROM `pd_kbxx` A INNER JOIN `pd_kbxx_data` B ON A.id=B.id WHERE A.catid = $childid LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$rows = $a;unset($a);?> 
			<?php $n=1;if(is_array($rows)) foreach($rows AS $val) { ?>
			<li><span class="sp_txt"></span><a href="<?php echo $CATEGORYS['14']['url'];?>"><?php echo $val['title'];?></a></li>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
		</ul>
		</dd>
	</dl>
	<?php $n++;}unset($n); ?>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
<dl class="taught">
	<dt></dt>
	<dd>
	<ul>
		<li><a href="<?php echo $CATEGORYS['43']['url'];?>"><img src="<?php echo SKIN_PATH;?>/images/img_leftmenu_plans_1.jpg" alt="" /></a></li>
		<li><a href="<?php echo $CATEGORYS['44']['url'];?>"><img src="<?php echo SKIN_PATH;?>/images/img_leftmenu_plans_2.jpg" alt="" /></a></li>
		<li><a href="<?php echo $CATEGORYS['45']['url'];?>"><img src="<?php echo SKIN_PATH;?>/images/img_leftmenu_plans_3.jpg" alt="" /></a></li>
		<li><a href="<?php echo $CATEGORYS['46']['url'];?>"><img src="<?php echo SKIN_PATH;?>/images/img_leftmenu_plans_4.jpg" alt="" /></a></li>
		<li><a href="<?php echo $CATEGORYS['47']['url'];?>"><img src="<?php echo SKIN_PATH;?>/images/img_leftmenu_plans_5.jpg" alt="" /></a></li>
	</ul>
	</dd>
</dl>
</div>