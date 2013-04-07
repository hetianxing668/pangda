<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
	<meta name="keywords" content="<?php echo $SEO['keyword'];?>"/>
	<meta name="description" content="<?php echo $SEO['description'];?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo SKIN_PATH;?>/css/main.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo SKIN_PATH;?>/css/index.css"/>
	<script type="text/javascript" src="<?php echo SKIN_PATH;?>/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="<?php echo SKIN_PATH;?>/js/jquery.SuperSlide.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		var tab_title = $(".tab_title ul").find("li");
		var tab_content = $(".tab_content").find("ul");
		Tabchange(tab_title,tab_content);
		var menu_title = $(".menu_title").find("li");
		var menu_content = $(".menu_content").find("li");
		Tabchange(menu_title,menu_content);
	});
	//选项卡切换
	function Tabchange(menu,content)
	{
		menu.each(function(i){
			menu.eq(i).hover(function(){
				menu.removeClass("hover");
				menu.eq(i).addClass("hover");
				content.hide();
				content.eq(i).show();
			});
		});
	}
	</script>
</head>
<body>
	<?php include template("content","inc_header"); ?>
	
	<!-- 幻灯片开始 -->
	<div class="slider fixed">
		<div class="flashnews">
		 <!-- size: 831px * 320px -->
	   <script language='javascript'>
		linkarr = new Array();
		picarr = new Array();
		textarr = new Array();
		var swf_width=831;
		var swf_height=320;
		//文字颜色|文字位置|文字背景颜色|文字背景透明度|按键文字颜色|按键默认颜色|按键当前颜色|自动播放时间|图片过渡效果|是否显示按钮|打开方式
		var configtg='0xffffff||0x3FA61F|5|0xffffff|0xC5DDBC|0x000033|2|3|1|_blank';
		var files = "";
		var links = "";
		var texts = "";
		//这里设置调用标记
		/*{dede:arclist flag='f' row='5'}
		linkarr[[field:global.autoindex/]] = "[field:arcurl/]";
		picarr[[field:global.autoindex/]]  = "[field:litpic/]";
		textarr[[field:global.autoindex/]] = "[field:title function='html2text(@me)'/]";
		{/dede:arclist}*/
		linkarr[1] = "#";
		picarr[1]  = "<?php echo SKIN_PATH;?>/images/img_slider.jpg";
		textarr[1] = "";
		linkarr[2] = "#";
		picarr[2]  = "<?php echo SKIN_PATH;?>/images/img_slider.jpg";
		textarr[2] = "";
		linkarr[3] = "#";
		picarr[3]  = "<?php echo SKIN_PATH;?>/images/img_slider.jpg";
		textarr[3] = "";
		
		for(i=1;i<picarr.length;i++){
		if(files=="") files = picarr[i];
		else files += "|"+picarr[i];
		}
		for(i=1;i<linkarr.length;i++){
		if(links=="") links = linkarr[i];
		else links += "|"+linkarr[i];
		}
		for(i=1;i<textarr.length;i++){
		if(texts=="") texts = textarr[i];
		else texts += "|"+textarr[i];
		}
		document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ swf_width +'" height="'+ swf_height +'">');
		document.write('<param name="movie" value="<?php echo SKIN_PATH;?>/images/bcastr3.swf"><param name="quality" value="high">');
		document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
		document.write('<param name="FlashVars" value="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'&bcastr_config='+configtg+'">');
		document.write('<embed src="<?php echo SKIN_PATH;?>/images/bcastr3.swf" wmode="opaque" FlashVars="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'&bcastr_config='+configtg+'&menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'); document.write('</object>');
		</script>
		</div>
		<div class="rmenu">
		<ul>
			<li><a href="<?php echo $CATEGORYS['43']['url'];?>"><img src="<?php echo SKIN_PATH;?>/images/bg_senior_school.jpg" alt="" /></a></li>
			<li><a href="<?php echo $CATEGORYS['44']['url'];?>"><img src="<?php echo SKIN_PATH;?>/images/bg_secondary_school.jpg" alt="" /></a></li>
			<li><a href="<?php echo $CATEGORYS['45']['url'];?>"><img src="<?php echo SKIN_PATH;?>/images/bg_university_school.jpg" alt="" /></a></li>
			<li><a href="<?php echo $CATEGORYS['46']['url'];?>"><img src="<?php echo SKIN_PATH;?>/images/bg_incumbents_school.jpg" alt="" /></a></li>
			<li><a href="<?php echo $CATEGORYS['47']['url'];?>"><img src="<?php echo SKIN_PATH;?>/images/bg_qualifications_school.jpg" alt="" /></a></li>
		</ul>
		</div>
	</div>
	<!-- 幻灯片结束 -->
	
	<!-- box_1开始 -->
	<div class="box_1 fixed">
		<div class="order fixed">
			 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b31ae56a0b959187b820129412e61667&action=category&catid=26&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'26','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?> 
			<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
			<dl>
				<dt><?php echo $r['catname'];?></dt>
				<dd>
				<ul>
					<?php $catid = $r['catid']?>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=bfbc57fc092ef67a55059af6835d15fb&sql=SELECT+A.catid%2CA.title%2CA.url%2CB.leftnum+FROM+%60pd_kbxx%60+A+INNER+JOIN+%60pd_kbxx_data%60+B+ON+A.id%3DB.id+WHERE+A.catid+%3D+%24catid&return=rows\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT A.catid,A.title,A.url,B.leftnum FROM `pd_kbxx` A INNER JOIN `pd_kbxx_data` B ON A.id=B.id WHERE A.catid = $catid LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$rows = $a;unset($a);?> 
					<?php $n=1;if(is_array($rows)) foreach($rows AS $val) { ?>
					<li><span class="sp_txt"><?php echo $val['title'];?></span><a href="<?php echo $CATEGORYS['14']['url'];?>">预约报名</a><span class="sp_red"><?php echo $val['leftnum'];?></span></li>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
				</ul>
				</dd>
			</dl>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
			
		</div>
		<div class="box_1_1">
		<div class="news fixed">
		<dl>
			<dt></dt>
			<dd class="tab_title fixed">
			<ul>
				<li class="hover"><a href="<?php echo $CATEGORYS['22']['url'];?>"><?php echo $CATEGORYS['22']['catname'];?></a></li>
				<li><a href="<?php echo $CATEGORYS['23']['url'];?>"><?php echo $CATEGORYS['23']['catname'];?></a></li>
				<li><a href="<?php echo $CATEGORYS['24']['url'];?>"><?php echo $CATEGORYS['24']['catname'];?></a></li>
			</ul>
			</dd>
			<dd class="tab_content fixed">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6c8fd07fcf76763795b7c7f9a757dc8e&action=position&posid=2&catid=22&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','catid'=>'22','order'=>'listorder DESC','limit'=>'4',));}?>
				<ul>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><span class="title"><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>">[<?php echo $CATEGORYS['22']['catname'];?>]<?php echo $r['title'];?></a></span><span class="date"><?php echo date('Y-m-d',$r['inputtime']);?></span></li>
					<?php $n++;}unset($n); ?>
				</ul>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c4f61df8a572d6baee9c3c5770a3ec50&action=position&posid=2&catid=23&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','catid'=>'23','order'=>'listorder DESC','limit'=>'4',));}?>
				<ul style="display:none">
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><span class="title"><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>">[<?php echo $CATEGORYS['23']['catname'];?>]<?php echo $r['title'];?></a></span><span class="date"><?php echo date('Y-m-d',$r['inputtime']);?></span></li>
					<?php $n++;}unset($n); ?>
				</ul>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4963441b745da581097090ebaaf015eb&action=position&posid=2&catid=24&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','catid'=>'24','order'=>'listorder DESC','limit'=>'4',));}?>
				<ul style="display:none">
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><span class="title"><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>">[<?php echo $CATEGORYS['24']['catname'];?>]<?php echo $r['title'];?></a></span><span class="date"><?php echo date('Y-m-d',$r['inputtime']);?></span></li>
					<?php $n++;}unset($n); ?>
				</ul>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</dd>
		</dl>
		</div>
		<div class="map fixed">
		<dl>
			<dt></dt>
			<dd class="map_content">
			<img src="<?php echo SKIN_PATH;?>/images/img_map.jpg" alt="" />
			</dd>
		</dl>
		</div>
		</div>
		<div class="box_1_2">
		<div class="contact fixed">
		<dl>
			<dt class="title"></dt>
			<dd><img src="<?php echo SKIN_PATH;?>/images/img_tel.jpg" alt="" /></dd>
			<dd><img src="<?php echo SKIN_PATH;?>/images/img_address.jpg" alt="" /></dd>
		</dl>
		</div>
		<div class="star">
		<dl>
			<dt></dt>
			<dd class="starbox">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a5b616687c420c3ceccad9b127d946aa&action=lists&catid=39&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'39','order'=>'listorder DESC','limit'=>'20',));}?>
				<div class="starbox_roll">
				<ul>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="javascript:void(0);"><?php echo $r['title'];?></a></li>
					<?php $n++;}unset($n); ?>
				</ul>
				</div>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</dd>
			<script type="text/javascript">
			jQuery(".starbox").slide({mainCell:".starbox_roll ul",autoPlay:true,effect:"topMarquee",vis:4,interTime:50});
			</script>
		</dl>
		</div>
		</div>
	</div>
	<!-- box_1结束 -->
	
	<!-- box_2开始 -->
	<div class="box_2 fixed">
	<div class="box_2_1">
	<dl>
		<dt class="fixed"><span class="title diamond">关于我们</span><a href="<?php echo $CATEGORYS['25']['url'];?>" class="more">更多&gt;&gt;</a></dt>
		<dd>
		<p><img src="<?php echo SKIN_PATH;?>/images/img_about_index.jpg" alt="" /></p>
		<p><a href="<?php echo $CATEGORYS['25']['url'];?>" class="title">庞大中锐汽车学院</a></p>
<p class="content">庞大中锐汽车学院是庞大汽贸集团与中锐教育集团携手打造的国际化、现代化、企业化的汽车服务人才培养基地，实施订单招生、定向培养、定岗就业，为庞大汽贸集团等国内大型汽车经销商集团...</p>
		</dd>
	</dl>
	</div>
	<div class="box_2_2">
	<dl>
		<dt class="fixed"><span class="title diamond">精彩图片</span><a href="<?php echo $CATEGORYS['31']['url'];?>" class="more">更多&gt;&gt;</a></dt>
		<dd class="content">
			<ul class="menu_title">
				<li class="hover"><a href="<?php echo $CATEGORYS['32']['url'];?>" title="<?php echo $CATEGORYS['32']['title'];?>">学习环境</a></li>
				<li><a href="<?php echo $CATEGORYS['33']['url'];?>" title="<?php echo $CATEGORYS['33']['title'];?>">生活环境</a></li>
				<li><a href="<?php echo $CATEGORYS['34']['url'];?>" title="<?php echo $CATEGORYS['34']['title'];?>">校园活动</a></li>
				<li style="border-bottom:0px"><a href="<?php echo $CATEGORYS['35']['url'];?>" title="<?php echo $CATEGORYS['35']['title'];?>">实训设备</a></li>
			</ul>
			<ul class="menu_content">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1d89384fa22c23a5a502a9a0fd2a9e0f&action=position&posid=2&catid=32&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','catid'=>'32','order'=>'listorder DESC','limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li><a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],294,200);?>" alt="<?php echo $r['title'];?>" title="<?php echo $r['title'];?>"/></a></li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c14a7321926681952da014d086dc5675&action=position&posid=2&catid=33&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','catid'=>'33','order'=>'listorder DESC','limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li style="display:none"><a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],294,200);?>" alt="<?php echo $r['title'];?>" title="<?php echo $r['title'];?>"/></a></li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c584feebeb1cf405898930d6d04c5a8f&action=position&posid=2&catid=34&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','catid'=>'34','order'=>'listorder DESC','limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li style="display:none"><a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],294,200);?>" alt="<?php echo $r['title'];?>" title="<?php echo $r['title'];?>"/></a></li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=29736ccfd6d4f79c3ed6d046695d440c&action=position&posid=2&catid=35&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','catid'=>'35','order'=>'listorder DESC','limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li style="display:none"><a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],294,200);?>" alt="<?php echo $r['title'];?>" title="<?php echo $r['title'];?>"/></a></li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
		</dd>
	</dl>
	</div>
	<div class="box_2_3">
	<dl>
		<dt class="fixed"><span class="title diamond">商学院视频</span><a href="<?php echo $CATEGORYS['36']['url'];?>" class="more">更多&gt;&gt;</a></dt>
		<dd class="video">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fcf7b9d3d4576fcae715311297c54ba0&action=position&posid=15&catid=36&moreinfo=1&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'15','catid'=>'36','moreinfo'=>'1','order'=>'listorder DESC','limit'=>'1',));}?>
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
		<embed src="<?php echo $r['videourl'];?>" allowFullScreen="true" quality="high" width="240" height="164" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</dd>
		<dd class="title">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=25af32bca5a1da4fde70576f9718e466&action=lists&catid=36&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'36','order'=>'listorder DESC','limit'=>'4',));}?>
			<ul>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
				<?php $n++;}unset($n); ?>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</dd>
	</dl>
	</div>
	
	</div>
	<!-- box_2结束 -->
	
	<!-- qqbox 开始 -->
	<div class="qqbox">
	<ul>
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e970184c98b60910266f06349f763840&action=lists&catid=41&num=5&order=listorder+ASC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'41','order'=>'listorder ASC','moreinfo'=>'1','limit'=>'5',));}?>
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
		<li><?php echo $r['title'];?> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $r['qq'];?>&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo $r['qq'];?>:41" alt="点击这里给我发消息" title="点击这里给我发消息"></a></li>
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		
	</ul>
	</div>
	<!-- qqbox 结束 -->
	
	<!-- box_3开始 -->
	<div class="box_3 fixed">
		<div class="box_3_1">
		<dl>
			<dt class="fixed"><span class="title diamond">就业分配</span><a href="<?php echo $CATEGORYS['7']['url'];?>" class="more">更多&gt;&gt;</a></dt>
			<dd>
			<img src="<?php echo SKIN_PATH;?>/images/img_map_jyfp.jpg" alt="" />
			</dd>
		</dl>
		</div>
		<div class="box_3_2">
		<dl>
			<dt class="fixed"><span class="title diamond">名师风采</span><a href="<?php echo $CATEGORYS['8']['url'];?>" class="more">更多&gt;&gt;</a></dt>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=62a31475f58cb1c1a70bdbe07dc65182&action=lists&catid=8&num=2&order=listorder+ASC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'8','order'=>'listorder ASC','moreinfo'=>'1','limit'=>'2',));}?>
			<dd>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<ul class="dashed">
				<li class="photo"><a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],132,93);?>" alt="<?php echo $r['title'];?>" /></a></li>
				<li class="info">
					<p>姓名：<?php echo $r['title'];?></p>
					<p>专业特长：<?php echo $r['description'];?></p>
					<p>教学理念：<?php echo $r['jxln'];?></p>
				</li>
			</ul>
			<?php $n++;}unset($n); ?>
			</dd>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</dl>
		</div>
		<div class="box_3_3">
		<dl>
			<dt class="fixed"><span class="title diamond">校友会</span><a href="<?php echo $CATEGORYS['37']['url'];?>" class="more">更多&gt;&gt;</a></dt>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0dcf67a47c0883cca2509fcb7e96152b&action=lists&catid=37&num=2&order=listorder+ASC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'37','order'=>'listorder ASC','moreinfo'=>'1','limit'=>'2',));}?>
			<dd>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<ul class="dashed">
				<li class="photo"><a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],88,64);?>" alt="<?php echo $r['title'];?>" /></a></li>
				<li class="info">
					<p>姓名：<?php echo $r['title'];?></p>
					<p>专业：<?php echo $r['major'];?></p>
					<p>毕业时间：<?php echo $r['enddate'];?></p>
				</li>
				<li>单位：<?php echo $r['jydw'];?></li>
			</ul>
			<?php $n++;}unset($n); ?>
			</dd>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</dl>
		</div>
	</div>
	<!-- box_3结束 -->
	
	<!-- box_4开始 -->
	<div class="box_4 fixed">
	<div class="rollbox">
	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=994852c1829779cbcb2c1ba976cccad2&action=lists&catid=10&num=10&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'10','order'=>'listorder ASC','limit'=>'10',));}?>
	<ul class="school_view">
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
		<li><div class="pic"><a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],158,104);?>" alt="<?php echo $r['title'];?>" /></a></div><div class="title"><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></div></li>
		<?php $n++;}unset($n); ?>
	</ul>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	</div>
	<script type="text/javascript">
	jQuery(".box_4").slide({mainCell:".rollbox ul",autoPlay:true,effect:"leftMarquee",vis:5,interTime:50});
	</script>
	
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
		<li><a href="<?php echo $CATEGORYS['15']['url'];?>"><?php echo $CATEGORYS['15']['catname'];?></a></li>
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
	<!-- box_4结束 -->
	<!-- 友情链接 开始 -->
	<div class="flink fixed">
		<ul>
		<li><strong>友情链接：</strong><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a><a href="#">庞大教育</a></dd>
		</li>
		</ul>
	</div>
	<!-- 友情链接 结束 -->
	<!-- 底部 开始 -->
	<div class="foot fixed">
		<p>河北庞锐汽车商学院地址：河北省唐山市古冶区林西西中街55号 联系电话：03158133833 邮编：063100</p>
	</div>
	<!-- 底部 结束 -->
</body>
</html>