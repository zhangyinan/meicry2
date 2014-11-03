<?php /* Smarty version Smarty-3.1.6, created on 2014-11-02 22:42:59
         compiled from "./Tpl\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:319565453a772d450e6-44870550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ebdb8cf9971e5370f7097a66f3b8b0b1e1bd504' => 
    array (
      0 => './Tpl\\Index\\index.html',
      1 => 1414939295,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '319565453a772d450e6-44870550',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5453a7731a47e',
  'variables' => 
  array (
    'user_session_id' => 0,
    'themes' => 0,
    'theme' => 0,
    'images' => 0,
    'themeId' => 0,
    'templateId' => 0,
    'templates' => 0,
    'template' => 0,
    'image' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453a7731a47e')) {function content_5453a7731a47e($_smarty_tpl) {?><!DOCTYPE html><!--[if lt IE 7 ]><html class="ie6"><![endif]--><!--[if IE 7 ]><html class="ie7"><![endif]--><!--[if IE 8 ]><html class="ie8"><![endif]--><!--[if IE 9 ]><html class="ie9"><![endif]--><!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>
<meta charset="utf-8">
<title>首页</title>
<link rel="stylesheet" href="http://s0.qhimg.com/static/8da31adea42c6392.css" />
<link rel="stylesheet" href="__PUBLIC__/css/common.css" />
<script src="http://s2.qhimg.com/!827a72ed/_360so_ob_loader.js"></script>
<script src="http://s0.qhimg.com/lib/jquery/183.js"></script>
<style>
body{
	background-color: #ededef;
}
/* 轮播 */
#mohe-meicry .slide-wrap{
	width: 100%;
	height: 568px;
	margin: 0 0 30px 0;
	overflow: hidden;
}
#mohe-meicry .mh-ui-img-slide {
	position: relative;
	height: 568px;
}
#mohe-meicry .mh-ui-img-slide li {
	position: absolute;
	left: 0;
	right: 0;
	height: 568px;
	opacity: 0;
	visibility: hidden;
	-webkit-transition: all 0.5s ease 0s;
	-moz-transition: all 0.5s ease 0s;
	-o-transition: all 0.5s ease 0s;
	transition: all 0.5s ease 0s;
}
#mohe-meicry .mh-ui-img-slide li.mh-ui-img-cur {
	opacity: 1;
	visibility: visible;
}
#mohe-meicry .mh-ui-img-slide .mh-ui-img-op {
	position: absolute;
	bottom: 0;
	right: 0;
	width: 100%;
	height: 30px;
	z-index: 2;
}
#mohe-meicry .mh-ui-img-op a {
	display: inline-block;
	width: 28px;
	height: 28px;
	background: url(http://p7.qhimg.com/t0137d347d46b725f30.png) -16px -30px no-repeat;
}
#mohe-meicry .mh-ui-img-op a.mh-ui-img-cur {
	background-position: -16px -70px;
}
/* 查看更多 */
#mohe-meicry .mh-ui-btn-more{
	text-align: center;
	background: #f9f9f9;
	margin-top: 10px;
}
#mohe-meicry .mh-ui-btn-more a {
	display: inline-block;
	height: 60px;
	width: 100%;
	color: #898989;
	text-decoration: none;
	line-height: 60px;
	outline: 0;
}
/* 二级导航 */
#mohe-meicry .sub-nav{
	/* height: 90px; */
	margin-bottom: 30px;
	display: -webkit-box;
	display: -webkit-flex;
	display: flex;
}
#mohe-meicry .sub-nav-item{
	display: block;
	-webkit-box-flex: 1;
	-moz-box-flex: 1;
	-webkit-flex: 1;
	-ms-flex: 1;
	flex: 1;
	width: 1%;
	text-align: center;
}
#mohe-meicry .sub-nav-item{
	height: 85px;
	margin-right: 1px;
	background: #fff;
	border-bottom: 5px solid #fff;
	font-size: 20px;
	color: #333;
	line-height: 84px;
	text-align: center;
	letter-spacing: 6px;
}
#mohe-meicry .sub-nav-active{
	border-bottom: 5px solid #9AC600;
}
/* 蒙版start */
#mohe-meicry .tpl-list-wrap{
	position: relative;
	border: 1px solid #eee;
	background: #fff;
	margin-bottom: 30px;
}
#mohe-meicry .tpl-list-wrap h3{
	height: 59px;
	border-bottom: 1px solid #eee;
	line-height: 60px;
	font-size: 18px;
	font-weight: bold;
	color: #333;
	letter-spacing: 6px;
}
#mohe-meicry .tpl-list-cont{
	padding: 32px 0 0 0;
}
#mohe-meicry .first-view{
	margin-left: 32px;
}
#mohe-meicry .tpl{
	float: left;
	width: 338px;
	height: 512px;
	margin-right: 10px;
	overflow: hidden;
	background: #f9f9f9;
}
#mohe-meicry .tpl .img-wrap {
	display: block;
	width: 338px;
	height: 400px;
	overflow: hidden;
}
#mohe-meicry .tpl .tpl-des{
	height: 40px;
	line-height: 40px;
}
/* 照片item */
#mohe-meicry .photo-list{
	float: left;
	width: 522px;
}
#mohe-meicry .photo-list-later{
	margin: 5px 0 0 32px;
	display: none;
}
#mohe-meicry .photo-item{
	float: left;
	position: relative;
	margin-right: 10px;
	margin-bottom: 10px;
}
#mohe-meicry .photo-item .img-wrap{
	display: block;
	width: 164px;
	height: 164px;
	overflow: hidden;
}
#mohe-meicry .photo-item a.tit{
	position: absolute;
	left: 6px;
	bottom: 10px;
	width: 60px;
	height: 24px;
	padding: 0 .6em;
	border-radius: 5px;
	text-align: center;
	color: #fff;
	line-height: 23px;
	font-size: 14px;
	background: #000;
	opacity: .8;
	filter: alpha(opacity=80);
	z-index: 1;
	white-space: nowrap;
	text-overflow: ellipsis;
	overflow: hidden;
}
#mohe-meicry .like{
	position: absolute;
	right: 3px;
	bottom: 10px;
	width: 26px;
	height: 23px;
	-webkit-transition: all 0.3s ease 0s;
	-moz-transition: all 0.3s ease 0s;
	-o-transition: all 0.3s ease 0s;
	transition: all 0.3s ease 0s;
	background: url('__PUBLIC__/img/like.png') no-repeat left center;
	background-size: 20px;
}
#mohe-meicry .like:hover,
#mohe-meicry .likedIt{
	background: url('__PUBLIC__/img/liked.png') no-repeat left center;
	background-size: 20px;
}
.cover-all-wrap{
	position: absolute;
	left: 0;
	top: 0;
	display: none;
}
.cover-mask{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: #000;
	opacity: 0.8;
}
.cover-cont{
	z-index: 10;
	position: fixed;
	top: 10px;
	width: 723px;
	overflow: hidden;
	margin-top: 30px;
	margin-left: auto;
	margin-right: auto;
}
</style>
</head>
<body>
<div id="mohe-meicry">
	<header class="gclearfix">
		<div class="bd gclearfix">
			<h2 class="logo">
				<a href="##" class="title">MeiCry</a>
			</h2>
			<nav class="main-nav">
				<a href="##" class="nav-item nav-active">首页</a>
				<a href="__APP__/Index/owner?user_id=<?php echo $_smarty_tpl->tpl_vars['user_session_id']->value;?>
" class="nav-item" target="_blank">个人主页</a>
				<a href="##" class="nav-item">xxxx</a>
			</nav>
		</div>
	</header>
	<div class="slide-wrap">
		<div class="mh-ui-img-slide bd">
			<ul>
				<li class="mh-ui-img-cur">
					<a href="###" target="_blank">
						<img src="http://p9.qhimg.com/t010500d877d876aaa3.jpg" width="928" height="568">
					</a>						
				</li>
				<li class="">
					<a href="###" target="_blank">
						<img src="http://p8.qhimg.com/d/inn/826512dd/t01a8744b79a3820997.jpg" width="928" height="568">
					</a>							
				</li>
				<li class="">
					<a href="###" target="_blank">
						<img src="http://p4.qhimg.com/d/inn/0d6ad07c/t0184aa8ff4779d9ef3.jpg" width="928" height="568">
					</a>						
				</li>
			</ul>
			<div class="mh-ui-img-op">					
				<a href="###slide" target="_self" class="mh-ui-img-cur"></a>
				<a href="###slide" target="_self" class=""></a>
				<a href="###slide" target="_self" class=""></a>
			</div>					
		</div>
	</div>
	
	<nav class="sub-nav bd">
	 <?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value){
$_smarty_tpl->tpl_vars['theme']->_loop = true;
?>
		<a href="##" class="sub-nav-item  js-sub-nav-item  <?php if ($_smarty_tpl->tpl_vars['theme']->value['id']==1){?>sub-nav-active<?php }?>" data-target="<?php echo $_smarty_tpl->tpl_vars['theme']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['theme']->value['name'];?>
</a>
	<?php } ?>	
	</nav>

	<?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_smarty_tpl->tpl_vars['themeId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value){
$_smarty_tpl->tpl_vars['theme']->_loop = true;
 $_smarty_tpl->tpl_vars['themeId']->value = $_smarty_tpl->tpl_vars['theme']->key;
?>
	<div class="tpl-list-wrap bd js-tpl-list" data-target="<?php echo $_smarty_tpl->tpl_vars['themeId']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['themeId']->value==1){?>style="display: block;"<?php }else{ ?>style="display: none;"<?php }?>>
		<?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_smarty_tpl->tpl_vars['templateId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['theme']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value){
$_smarty_tpl->tpl_vars['template']->_loop = true;
 $_smarty_tpl->tpl_vars['templateId']->value = $_smarty_tpl->tpl_vars['template']->key;
?>
		<h3><?php echo $_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->tpl_vars['templateId']->value]['name'];?>
</h3>
		<div class="tpl-list-cont">
			<div class="first-view gclearfix">
				<div class="tpl">
					<a href="##" target="_blank" class="img-wrap">
						<img src="__PUBLIC__/img/template/<?php echo $_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->tpl_vars['templateId']->value]['logo'];?>
" width="320" height="400">
					</a>
					<p class="tpl-des"><?php echo $_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->tpl_vars['templateId']->value]['name'];?>
</p>
				</div>
				
				<ul class="photo-list">
				 <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['template']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['image']->index++;
?>
				 <?php if ($_smarty_tpl->tpl_vars['image']->index>5){?><?php break 1?><?php }?>
					<li class="photo-item">
						<a href="###">
							<img src="__PUBLIC__/img/uploads/<?php echo $_smarty_tpl->tpl_vars['image']->value['image_url'];?>
" width="164" height="164" class="js-img">
						</a>
						<a href="__APP__/Index/owner?user_id=<?php echo $_smarty_tpl->tpl_vars['user_info']->value[$_smarty_tpl->tpl_vars['image']->value['user_id']]['id'];?>
" class="tit" target="_blank"><?php echo $_smarty_tpl->tpl_vars['user_info']->value[$_smarty_tpl->tpl_vars['image']->value['user_id']]['name'];?>
</a>
						<!--只有登录的了用户才可以看到点赞的标志-->
						<!--点赞加1时，就记录已被该用户喜欢了-->
						<!--下一次加载时需要读状态，当前用户是不是已经喜欢了-->
						<a href="##like" class="like <?php if ($_smarty_tpl->tpl_vars['image']->value['liked']==1){?> likedIt <?php }?>"  data-id='<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
'></a>
					</li>
				<?php } ?>
				</ul>
			</div>
			<ul class="photo-list-later gclearfix">
			 	<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['template']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['image']->index++;
?>
				<?php if ($_smarty_tpl->tpl_vars['image']->index>=5){?>
					<li class="photo-item">
						<a href="###">
							<img src="__PUBLIC__/img/uploads/<?php echo $_smarty_tpl->tpl_vars['image']->value['image_url'];?>
" width="164" height="164" class="js-img">
						</a>
						<a href="##用户id" class="tit" target="_blank"><?php echo $_smarty_tpl->tpl_vars['user_info']->value[$_smarty_tpl->tpl_vars['image']->value['user_id']]['name'];?>
</a>
						<a href="##like" class="like"></a>
					</li>
				<?php }?>
				<?php } ?>
			</ul>
			<?php if (count($_smarty_tpl->tpl_vars['template']->value)>6){?>
			<div class="mh-ui-btn-more">
				<a href="##"><span class="mh-ui-btn-txt" data-html="更多照片&gt;&gt;">更多照片&gt;&gt;</span></a>		
			</div>
			<?php }?>
		</div>
	<?php } ?>
	</div>
	
<?php } ?>
	<div id="footer">
		<a class="scrollUp">返回顶部</a>
		<p>Copyright&copy;五碗牛肉面</p>
	</div>
	<div class="cover-all-wrap js-cover-all-wrap">
		<div class="cover-cont js-cover-cont">
			<img src="" class="img-big"/>
		</div>
		<div class="cover-mask"></div>
	</div>
</div>

<form method ='post' action="__APP__/Api/upload1" enctype="multipart/form-data">
<input type='file'  name='photo' />
<input type='text'  name='user_id' value='1'/>
<input type='text'  name='template'  value='1' />
<input type="submit" value="ok"/>
</form>
</body>
 
<script>
_loader.use('jquery',function(){
	var $context = $('#mohe-meicry'),
		$imgSlide = $context.find('.mh-ui-img-op a'),
		_imgTotal = $imgSlide.length,
		pageScrollTimer,
		_playing = true,
		cur_page = 0;
	/*功能：单击图片轮转*/
	$imgSlide.click(function(e){
		e.preventDefault();
		sliderPage($(this).index());
	});
	/*功能：翻页*/
	function sliderPage( nextPage ){
			nextPage = (nextPage==_imgTotal?0:nextPage);
			$context.find('.mh-ui-img-op a').removeClass('mh-ui-img-cur').eq(nextPage).addClass('mh-ui-img-cur');
			$context.find('.mh-ui-img-slide li').removeClass('mh-ui-img-cur').eq(nextPage).addClass('mh-ui-img-cur');
			cur_page = nextPage;
		}
	/*功能：自动翻页*/
		function initPagescroll(){
			pageScrollTimer = setInterval(function(){
				if (_playing) {
					sliderPage(cur_page+1);
				}
			}, 2000);
		}
		initPagescroll();
		/*mouseenter后不自动翻页；mouseleave自动翻页*/
		$context.find('.mh-ui-img-slide').hover(function(){
			_playing = false;
		}, function(){
			_playing = true;
		}); 


		// 查看更多
		var btn_more = $('.mh-ui-btn-more',$context);
		$(".mh-ui-btn-more").on("click",function(e){
			e.preventDefault();
			var me = $(this),
				btn_txt = $('.mh-ui-btn-txt', me),
				photo_later = me.siblings('.photo-list-later');

			if(!me.hasClass("mh-ui-btn-open")){
				me.addClass("mh-ui-btn-open");
				btn_txt.text("收起");
				photo_later.show();
			}else{
				me.removeClass("mh-ui-btn-open");
				btn_txt.text(btn_txt.attr("data-html"));
				photo_later.hide();
			}
		});

		//点赞
		$('.like', $context).on('click',function(e){
			e.preventDefault();

			var id = $(this).data('id'),
			that = $(this);
			
			if(!$(this).hasClass('likedIt')){
				$.ajax({
					 url: "__APP__/Index/dianliked?id="+id,
					 success: function(){
					    that.addClass('likedIt');
					}
				});
			}else{
				return;
			}
		});

		//sub-nav切换
		$('.js-sub-nav-item').on('click',function(){
			var subNavs =  $('.js-sub-nav-item'),
				tpls = $('.js-tpl-list'),
				index = $(this).index();
			subNavs.removeClass('sub-nav-active');
			tpls.hide();

			$(this).addClass('sub-nav-active');
			tpls.eq(index).show();
		});

		//放大图
		var $cover = $('.js-cover-all-wrap',$context),
			$coverCont = $('.js-cover-cont',$context);

		function computWH(){
			var clientWidth = $(window).width() > document.body.clientWidth ? $(window).width() : document.body.clientWidth,
				clientHeight = $(window).height() > document.body.clientHeight ? $(window).height() : document.body.clientHeight;
			var contLeft = (clientWidth - 723) / 2;
			$cover.css({
					"width" :clientWidth,
					"height" : clientHeight
				});
			$coverCont.css({
					"left" :contLeft
				});
			$('img',$coverCont).css({
					"height": $(window).height()-50
				});
		}
		computWH();

		$('.js-img').on('click',function(e){
			e.preventDefault();
			var smallsrc = $(this).attr('src');

			$('img',$coverCont).attr('src',smallsrc);
			var imgH = $('img',$coverCont).height();
			computWH(imgH);
			$cover.show();
			$(window).on('resize',computWH);
		});
		$cover.on('click',function(){
			$cover.hide();
		});
});

</script>
 
</html><?php }} ?>