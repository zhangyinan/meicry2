<?php /* Smarty version Smarty-3.1.6, created on 2014-11-02 18:59:54
         compiled from "./Tpl\Index\owner.html" */ ?>
<?php /*%%SmartyHeaderCode:196365453a7c7ad0265-43826280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e5156e048b348dc6de1ff995c6c83191b5f916a' => 
    array (
      0 => './Tpl\\Index\\owner.html',
      1 => 1414925992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196365453a7c7ad0265-43826280',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5453a7c7cdf7e',
  'variables' => 
  array (
    'user_info_session' => 0,
    'user_info' => 0,
    'image_info' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453a7c7cdf7e')) {function content_5453a7c7cdf7e($_smarty_tpl) {?><!DOCTYPE html><!--[if lt IE 7 ]><html class="ie6"><![endif]--><!--[if IE 7 ]><html class="ie7"><![endif]--><!--[if IE 8 ]><html class="ie8"><![endif]--><!--[if IE 9 ]><html class="ie9"><![endif]--><!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>
<meta charset="utf-8">
<title>个人页面</title>
<link rel="stylesheet" href="http://s0.qhimg.com/static/8da31adea42c6392.css" />
<link rel="stylesheet" href="__PUBLIC__/css/common.css" />
<script src="http://s2.qhimg.com/!827a72ed/_360so_ob_loader.js"></script>
<script src="http://s0.qhimg.com/lib/jquery/183.js"></script>
<style>
body{
	background: #dce9e7;
}
.back{
	position: absolute;
	right: 20px;
	top: 20px;
	width: 60px;
	height: 50px;
	text-indent: -9999px;
	background: url('http://p0.qhimg.com/t0114568e589ba1bded.png') no-repeat -70px 0px;
}
.back:hover{
	background-position: 0 0;
}
.owner-bd{
	width: 600px;
	margin: 0 auto;
}
.aside{
	position: fixed;
	top: 0;
	left: 0;
	width: 70px;
	padding: 20px;
	text-align: center;
}
.aside .nav,
.post-info .nav{
	display: block;
	width: 60px;
	height: 60px;
	background: #fff;
	border-radius: 50%;
	margin: 0 auto 20px auto;
	overflow: hidden;
}
.top{
	padding: 20px 0;
}
.top h1{
	font-weight: bold;
	font-size: 45px;
	line-height: 60px;
	text-align: center;
	text-shadow: 2px 2px 2px #fff;
}
.post-item{
	position: relative;
	margin-bottom: 20px;
	padding: 20px;
	border: 1px solid #fff;
	border-radius: 5px;
	background: #fff;
	box-shadow: 2px 3px 10px #888;
}
.post-info{
	position: absolute;
	left: -30px;
	top: 20px;
	width: 60px;
}
.post-info .nav{
	background: #C3F0C7;
	border: 1px solid #999;
	text-align: center;
}
.post-bd{
	float: right;
}
.img-wrap{
	position: relative;
	display: block;
	width: 540px;
	height: 535px;
	margin-bottom: 20px;
	overflow: hidden;
}
.post-info .nav-small{
	display: block;
	width: 50px;
	height: 50px;
}
.post-bd p{
	text-align: left;
	font-size: 12px;
	color: #666;
	margin-left: 22px;
}
.post-bd .theme-info{
	display: inline-block;
	max-width: 100px;
	padding: 2px 8px;
	background: #eee;
	border-radius: 10px;
	margin-right: 5px;
	text-align: center;
}
.post-bd .photo-del{
	float: right;
}
.post-bd a.photo-del{
	color: #666;
}
.post-bd a.photo-del:hover{
	color: #7594b3;
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
.share{
	position: relative;
}
.share:hover .share-icons-wrap{
	display: block;
}
.share-icons-wrap{
	display: none;
}
.share-icon{
	display: inline-block;
	width: 43px;
	height: 43px;
	margin-bottom: 10px;
	text-indent: -9999px;
	background: url('__PUBLIC__/img/icons24.png') no-repeat 0 0;
}
.share-wx{

}
.share-weibo{
	top: 50px;
	background-position: -200px 0;
}
.share-qzone{
	top: 100px;
	background-position: -300px 0;
}
.share-wx:hover{
	background-position: 0px -89px;
}
.share-weibo:hover{
	background-position: -200px -89px;
}
.share-qzone:hover{
	background-position: -300px -89px;
}
.like{
	display: block;
	width: 40px;
	height: 40px;
	-webkit-transition: all 0.3s ease 0s;
	-moz-transition: all 0.3s ease 0s;
	-o-transition: all 0.3s ease 0s;
	transition: all 0.3s ease 0s;
	background: url('__PUBLIC__/img/like.png') no-repeat left center;
	background-size: 40px;
}
.like:hover,
.likedIt{
	background: url('__PUBLIC__/img/liked.png') no-repeat left center;
	background-size: 40px;
}
</style>
</head>
<body>
<div id="owner">
	<div class="aside">
		<div class="nav">
			<a href="__APP__/Index/owner?user_id=<?php echo $_smarty_tpl->tpl_vars['user_info_session']->value['id'];?>
"><img src="__PUBLIC__/img/user/<?php echo $_smarty_tpl->tpl_vars['user_info_session']->value['icon'];?>
" /></a>
		</div>
		<a href="__APP__/Index/getImageLiked" class="nav">
			赞过的照片
		</a>
		<div class="nav">
			个人设置
		</div>
		<div class="nav">
			主题投稿
		</div>
	</div>
	<a href="http://127.0.0.1/meicry2/meicry/" class="back">返回首页</a>
	<div class="top owner-bd">
		<h1><?php echo $_smarty_tpl->tpl_vars['user_info']->value['name'];?>
</h1>
	</div>
	<div class="doc owner-bd">
		<ol>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['image_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
			<li class="post-item gclearfix">
				<ul class="post-info">

					<li class="nav"><a href="##like" class="like  js-like <?php if ($_smarty_tpl->tpl_vars['value']->value['imageInfo']['liked']==1){?> likedIt <?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['imageInfo']['id'];?>
">点赞</a></li>

					<li class="share js-share">
						<a href="##share" class="nav nav-small">分享</a>
							
						<ul class="share-icons-wrap js-share-icons-wrap">
							<li><a herf="##" target="_blank" class="share-icon share-wx js-wx">微信</a></li>
							<li><a herf="##" target="_blank" class="share-icon share-weibo js-weibo">新浪微博</a></li>
							<li><a herf="##" target="_blank" class="share-icon share-qzone js-qzone">qq空间</a></li>
						</ul>
					</li>
				</ul>

				<div class="post-bd">
					<a href="####" target="_blank" class="img-wrap">
						<img src="__PUBLIC__/img/uploads/<?php echo $_smarty_tpl->tpl_vars['value']->value['imageInfo']['image_url'];?>
" width="556" class="js-img"/>
					</a>
					<p class="gclearfix">
						<span class="theme-info "><?php echo $_smarty_tpl->tpl_vars['value']->value['themeInfo']['name'];?>
</span>
						<span class="theme-info "><?php echo $_smarty_tpl->tpl_vars['value']->value['userInfo']['name'];?>
</span>
						<span class=""><?php echo $_smarty_tpl->tpl_vars['value']->value['imageInfo']['updated_at'];?>
</span>
						<span><a href="##del" class="photo-del js-del" data-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['imageInfo']['id'];?>
"> 删除</a></span>
					</p>
				</div>
			</li>
		<?php } ?>
		</ol>
		<div class="pager">
		</div>
	</div>
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
</body>
<script type="text/javascript">
_loader.add('scrollUp', '__PUBLIC__/js/common.js');
_loader.use('jquery, scrollUp',function(){
	var $context = $('#owner'),
		$cover = $('.js-cover-all-wrap',$context),
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


	$('.js-share').hover(function(){
		$('.js-share-icons-wrap').fadeIn('10000').css("display", "block");;
	},function(){
		$('.js-share-icons-wrap').fadeOut('5000').hide(); 
	});

	$('.js-del').on('click',function(e){
		e.preventDefault();

		var id = $(this).data('id'),
			that = $(this);

		$.ajax({
			 url: "delImageById?id="+id,
			 success: function(){
			    that.parents('.post-item').remove();
			}
		});
	});

	//点赞
	$('.js-like', $context).on('click',function(e){
		e.preventDefault();

		var id = $(this).data('id'),
		that = $(this);
		
		if(!$(this).hasClass('likedIt')){
			$.ajax({
				 url: "http://127.0.0.1/meicry2/meicry/index.php/Index/dianliked?id="+id,
				 success: function(){
				    that.addClass('likedIt');
				}
			});
		}else{
			return;
		}
	});
});
</script>
</html><?php }} ?>