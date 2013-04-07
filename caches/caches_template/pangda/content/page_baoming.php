<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
	<meta name="keywords" content="<?php echo $SEO['keyword'];?>"/>
	<meta name="description" content="<?php echo $SEO['description'];?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo SKIN_PATH;?>/css/main.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo SKIN_PATH;?>/css/common.css"/>
	<script type="text/javascript" src="<?php echo SKIN_PATH;?>/formvalidator/jquery-1.4.4.min.js" charset="UTF-8"></script>
	<script type="text/javascript" src="<?php echo SKIN_PATH;?>/formvalidator/formValidator-4.1.3.min.js" charset="UTF-8"></script>
	<script type="text/javascript" src="<?php echo SKIN_PATH;?>/formvalidator/formValidatorRegex.js" charset="UTF-8"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$.formValidator.initConfig({formID:"form1",onError:function(){alert("校验没有通过，具体错误请看错误提示");}});
		$("#uname").formValidator({onShow:"请输入中文用户名",onFocus:"请输入中文用户名",onCorrect:"输入正确"}).inputValidator({min:4,max:10,onError:"用户名长度为2~5个汉字,请确认"}).regexValidator({regExp:"chinese",dataType:"enum",onError:"只能输入中文名字，不能包含空格及其它字符"});
		$("#hometel").formValidator({onShow:"请输入手机号码",onFocus:"手机的长度必须是11位",onCorrect:"手机合法"}).inputValidator({min:11,max:11,onError:"手机号码必须为11位,请确认"}).regexValidator({regExp:"mobile",dataType:"enum",onError:"手机的格式不正确"});
		$("#zhuanye").formValidator({onShow:"请选择专业",onFocus:"请选择专业",onCorrect:"输入正确"}).inputValidator({min:1,onError:"至少选择一个专业,请确认"});
		$("#qq").formValidator({onShow:"请输入QQ号码",onFocus:"请输入QQ号码",onCorrect:"输入正确"}).regexValidator({regExp:"qq",dataType:"enum",onError:"QQ号码格式错误,请确认"});
		$("#email").formValidator({onShow:"请输入E-mail号码",onFocus:"请输入E-mail号码",onCorrect:"输入正确"}).regexValidator({regExp:"email",dataType:"enum",onError:"E-mail号码格式错误,请确认"});

	});
	</script>
	<style type="text/css">
	#bmtable tr td input.txt,#bmtable tr td select.txt,#bmtable tr td span{float:left}
	</style>
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
		<div class="content">
			<div class="baoming">
				<strong>报名须知：</strong>    
				<p>1.凡报读我校汽车检测与运营工程师（大专）、汽车维修与运营工程师（中专）、汽车商务与管理经理专业（2+1连读），免费学电脑、合格毕业生全部推荐工作。</p>
				<p>2.请报名的朋友们真实填写以下表格。我们收到您的资料后将尽快进行备案，以便来校时能更好地为你做好相关的报名安排工作。</p>
				<p>3.请不要重复提交报名申请,否则本系统将会自动删除报名申请的信息资料。</p>
				<p>4.本报名网站是庞锐汽车商学院学校唯一指定官方网站，其他均属欺骗行为，您可以向我们举报，举报电话：03158133833。</p>
				<strong>在线报名：</strong><br/><br/>
				<strong>*请您认真填写报名信息   注: 带*的为必填项,填写完毕后请按“提交信息”按钮</strong>
				<form  method="post" action="/index.php?m=formguide&c=index&a=show&formid=21&siteid=1" name="form1" id="form1">
				<table width="90%" cellspacing="5" cellpadding="3" border="0" id="bmtable">
				  <tr>
					<td width="75" align="right">姓&nbsp;&nbsp;&nbsp;&nbsp;名：</td>
					<td><input name="info[uname]" class="txt" size="25" id="uname"/>
					<span id="unameTip"></span></td>
				  </tr>
				  <tr>
					<td align="right">性&nbsp;&nbsp;&nbsp;&nbsp;别：</td>
					<td><select name="info[sex]" id="sex">
							<option selected="selected" value="男">男</option>
							<option value="女">女</option>
					</select></td>
				  </tr>
				  <tr>
					<td align="right">手机号码：</td>
					<td><input name="info[hometel]" id="hometel" class="txt" /><span id="hometelTip"></span>
					</td>
				  </tr>
				  <tr>
					<td align="right">专&nbsp;&nbsp;&nbsp;&nbsp;业：</td>
					<td>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=4cb72055a728b3a760d292deac34afb2&sql=SELECT+%2A+FROM+%60pd_kbxx%60+A+INNER+JOIN+%60pd_category%60+B+ON+A.catid+%3D+B.catid+AND+B.parentid+%3D+26+ORDER+BY+B.catid+ASC&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM `pd_kbxx` A INNER JOIN `pd_category` B ON A.catid = B.catid AND B.parentid = 26 ORDER BY B.catid ASC LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
					<select name="info[zhuanye]" id="zhuanye" class="txt">
						  <option selected="" value="0">请选择</option>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						 <option value="<?php echo $r['id'];?>"><?php echo $r['title'];?></option>
						<?php $n++;}unset($n); ?>
					</select>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<span id="zhuanyeTip"></span></td>
				  </tr>
				  <tr>
					<td align="right">Q&#12288;&#12288;&#12288;Q：</td>
					<td><input name="info[qq]" id="qq" class="txt"/><span id="qqTip"></span></td>
				  </tr>
				  <tr>
					<td align="right">E&nbsp;-&nbsp;Mail：</td>
					<td><input name="info[email]" id="email" class="txt"/><span id="emailTip"></span></td>
				  </tr>
				   <tr>
					<td align="right">家庭住址：</td>
					<td><input name="info[address]" class="txt" size="60" id="address"/>
					</td>
				  </tr>
				  <tr>
					<td align="right">个人备注：</td>
					<td><textarea id="beizhu" rows="4" cols="56" name="info[beizhu]"></textarea></td>
				  </tr>
				  <tr>
					<td align="center" colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="center" colspan="2"><input type="submit" name="dosubmit" value="提交信息" id="dosubmit" />&nbsp;&nbsp;<input type="reset" value="重新填写" name="Reset">&nbsp;&nbsp;</td>
				  </tr>
				</table>
			</form>
			</div>
		</div>
		</div>
	</div>
	
	<?php include template("content","inc_footer"); ?>
</body>
</html>