<?php /* Smarty version Smarty-3.1.13, created on 2013-03-18 23:09:10
         compiled from "./templates/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94121228651424d272ceb03-16537887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '136eb1b0fbcdc162f2d607593da19d4d2b53396b' => 
    array (
      0 => './templates/admin/index.tpl',
      1 => 1363644550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94121228651424d272ceb03-16537887',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51424d273123d1_26826478',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51424d273123d1_26826478')) {function content_51424d273123d1_26826478($_smarty_tpl) {?>  <script src="https://raw.github.com/DmitryBaranovskiy/raphael/300aa589f5a0ba7fce667cd62c7cdda0bd5ad904/raphael-min.js"></script>
  <script src="/js/morris.js"></script>
  <script src="/js/prettify.js"></script>
  <script src="/js/example.js"></script>
  <link rel="stylesheet" href="/css/prettify.css">
  <link rel="stylesheet" href="/css/morris.css">
    <div id="content">
    	<div id="table">
        	<div id="nav">Panel Administratora</div>
            <div id="tabela">
                <div id="page">
                	Witaj w Panelu administracyjnym ;)
                    <div style="clear:both"></div>
                    <div id="graph"></div>
                    <pre id="code" class="prettyprint linenums" style="display:none;">
                    
                    var day_data = [
                      {"elapsed": "01.02.2013", "value": 34},
                      {"elapsed": "02.02.2013", "value": 24},
                      {"elapsed": "03.02.2013", "value": 3},
                      {"elapsed": "04.02.2013", "value": 12},
                      {"elapsed": "05.02.2013", "value": 13},
                      {"elapsed": "06.02.2013", "value": 22},
                      {"elapsed": "07.02.2013", "value": 5}
                    ];
                    Morris.Line({
                      element: 'graph',
                      data: day_data,
                      xkey: 'elapsed',
                      ykeys: ['value'],
                      labels: ['Zamówień'],
                      parseTime: false
                    });
                    
                    </pre>
            	</div>
			</div>
        </div><?php }} ?>