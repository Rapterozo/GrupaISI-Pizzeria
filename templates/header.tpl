<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$title}</title>
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
                    {if !$isLogged}
                    <li><a href="/rejestracja.html">Rejestracja</a></li>
                    <li><a href="/login.html">Logowanie</a></li>
                 	{else}
                    <li><a href="/profil.html">Profil</a></li>
                    <li><a href="/login.html?logout=yes">Wyloguj</a></li>
                    {/if}
                </ul>
            </div>
            <div class="middle">
            	<div class="promocja">Do zamówienia powyżej 50zł<br />1l Pepsi gratis!</div>
            </div>
        </div>
        <div class="right"></div>
    </div>