<?php /* Smarty version Smarty-3.1.6, created on 2014-11-02 16:39:37
         compiled from "./Tpl\Index\login.html" */ ?>
<?php /*%%SmartyHeaderCode:266775455ed22639e85-16873257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e03fd32b225a4b4c46367934752cfb95f455ecf6' => 
    array (
      0 => './Tpl\\Index\\login.html',
      1 => 1414917523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266775455ed22639e85-16873257',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5455ed22714ad',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5455ed22714ad')) {function content_5455ed22714ad($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link rel="stylesheet" href="http://s0.qhimg.com/static/8da31adea42c6392.css" />
	<link rel="stylesheet" href="__PUBLIC__/css/common.css" />
	<style type="text/css">
		html,body{
			background-color: #2c394c;
			height:100%; 
			position:relative;
		}
		.bg{
			position: fixed;
			left: 0;
			right: 0;
			top: 0;
			bottom: 0;
			background: url('__PUBLIC__/img/login-bg.jpg') no-repeat;
			background-size: cover;
			background-position: 50% 50%;
		}
		.login-wrap{
			z-index: 2;
			position: relative;
			top: 50%;
			
			width: 260px;
			margin-left: auto;
			margin-right: auto;
			margin-top: -150px;
			padding: 20px 30px 30px;
		}
		.login-wrap h1{
			margin-bottom: 10px;
			color: #fff;
			text-align: center;
			font-family: 'Helvetica Neue', HelveticaNeue, Helvetica, Arial, sans-serif;
			font-size: 38px;
		}
		.login-wrap input,
		.mh-submit{
			width: 260px;
			padding: 11px;
			box-sizing: border-box;
		}
		.mh-input{
			border: 1px solid #eaeaea;
			line-height: 22px;
			outline: none;
		}
		.mh-username{
			border-radius: 3px 3px 0 0;
		}
		.mh-pwd{
			border-top: none;
			border-radius: 0 0 3px 3px;
		}
		.mh-submit{
			display: block;
			margin-top: 10px;
			border-radius: 3px;
			background: #529ecc;
			border: 1px solid #529ecc;
			color: #fff;
			text-align: center;
			font-weight: bold;
			font-family: 'Helvetica Neue', HelveticaNeue, Helvetica, Arial, sans-serif;
		}
		.mh-submit:hover{
			border-color: #60B8ED;
			background: #60B8ED;
			color: #fff;
		}
		.mh-submit:active{
			border-color: #60B8ED;
			background: #60B8ED;
			background: -moz-linear-gradient(#529ecc,#60B8ED 25%,#60B8ED);
			background: -webkit-gradient(linear,center top,center bottom,from(#529ecc),color-stop(.5,#60B8ED),to(#60B8ED))
			background: -webkit-linear-gradient(#529ecc,#60B8ED 25%,#60B8ED);
			background: -o-linear-gradient(#529ecc,#60B8ED 25%,#60B8ED);
			background: -ms-linear-gradient(#529ecc,#60B8ED 25%,#60B8ED);
			background: linear-gradient(#529ecc,#60B8ED 25%,#60B8ED);
			color: #fff;
		}
	</style>
</head>
<body>
	<div class="bg"></div>
	<div class="login-wrap">
		<h1>MeiCry!</h1>
		<form action="http://127.0.0.1/meicry2/meicry/">
			<input type="text" name="username" placeholder="Username" class="mh-input mh-username"/>
			<input type="text" name="pwd" placeholder="Password" class="mh-input mh-pwd"/>
			<input type="submit" href="##submit" class="mh-submit"  value="Log in" />
		</form>
	</div>
</body>
</html><?php }} ?>