<?php /* Smarty version Smarty-3.1.13, created on 2013-04-17 18:03:59
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10912476315141f6633326e8-34187118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1366214637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10912476315141f6633326e8-34187118',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5141f66335d899_03129175',
  'variables' => 
  array (
    'title' => 0,
    'isLogged' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5141f66335d899_03129175')) {function content_5141f66335d899_03129175($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link rel="stylesheet" type="text/css" href="/css/style.css" media="all">
<script type="text/javascript" src="/js/jquery.min-1.7.js"></script>
<script type="text/javascript" src="/js/pizza.js"></script>


</head>

<body>
<div id="conteiner">
	<div id="logo">
    	<div class="logo"></div>
        <div class="dane">
            <div class="tel">+48 222 222 222</div>
            <div class="email">kontakt@lacosta.pl</div>
        </div>
    </div>
    <div id="menu">
    	<div class="left"></div>
        <div class="center">
        	<div class="top">
            	<ul>
                	<li><a href="/index.html">Główna</a></li>
                    <li><a href="/promocje.html">Promocje</a></li>
                    <li><a href="/dostawa.html">Dostawa</a></li>
                    <li><a href="/kontakt.html">Kontakt</a></li>
                    <li><a href="/zamowienia.html">Zamówienia</a></li>
                    <?php if (!$_smarty_tpl->tpl_vars['isLogged']->value){?>
                    <li><a href="/rejestracja.html">Rejestracja</a></li>
                    <li><a href="/login.html">Logowanie</a></li>
                 	<?php }else{ ?>
                    <li><a href="/profil.html">Profil</a></li>
                    <li><a href="/login.html?logout=yes">Wyloguj</a></li>
                    <?php }?>
                </ul>
            </div>
            <div class="middle">
            	<div class="promocja">Do zamówienia powyżej 50zł<br />1l Pepsi gratis!</div>
            </div>
        </div>
        <div class="right"></div>
    </div><?php }} ?>