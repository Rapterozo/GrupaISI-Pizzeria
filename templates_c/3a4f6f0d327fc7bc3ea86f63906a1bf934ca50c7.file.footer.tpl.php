<?php /* Smarty version Smarty-3.1.13, created on 2013-04-20 14:48:04
         compiled from "./templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7024121725141f6633645c5-57651996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a4f6f0d327fc7bc3ea86f63906a1bf934ca50c7' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1366462040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7024121725141f6633645c5-57651996',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5141f663365a47_28533370',
  'variables' => 
  array (
    'isLogged' => 0,
    'profile' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5141f663365a47_28533370')) {function content_5141f663365a47_28533370($_smarty_tpl) {?>    	<div id="table_right">
        	<div id="nav"></div>
            <div id="tabela">
            	<div id="page">
            	<?php if ($_smarty_tpl->tpl_vars['isLogged']->value){?>
                	Witaj, <?php echo $_smarty_tpl->tpl_vars['profile']->value['username'];?>
. <a href="/login.html?logout=yes">Wyloguj się</a><br /><a href="/admin.html">Panel Administracyjny</a>
                    <?php if ($_SESSION['admin']&&$_smarty_tpl->tpl_vars['isLogged']->value){?>

                    <h1>Panel administracyjny:</h1>
                    <ul>
                    	<li><a href="/admin/pizza">Dodaj pizze</a></li>
                       <li><a href="/admin/skladniki">Dodaj składniki</a></li>
                       <li><a href="/admin/zamowienia">Zamówienia</a></li>
                    </ul>

                    <?php }?>
                <br /><br /><?php }?>

                <div id="koszyk" align="center">Koszyk jest pusty</div>
                <div id="twoj_koszyk"><h1>Twój koszyk</h1></div>
                <div class="lista_koszyk">
                    <ol>
                    </ol>
                </div>
        
                <div align="center"><div id="loading"><img src="./images/loading.gif" alt="Loading..." /></div></div>
                <a class="wyczysc_koszyk" href="">Wyczyść koszyk</a>
                <hr />
					<form action="/zamowienia.html" method="post" class="form_zamow">
                            <label>
                            <div class="dane">Numer telefonu</div>
                                    <input type="text" name="telefon" id="name" value="<?php echo $_smarty_tpl->tpl_vars['profile']->value['telefon'];?>
" tabindex="10" />                               
							</label>

                            <label><div class="dane">Dane adresowe</div>
                                    <textarea  name="dane"  tabindex="11"/><?php echo $_smarty_tpl->tpl_vars['profile']->value['dane'];?>
</textarea>
                            </label>
                            <label>
                            	<div class="dane">Kwota do zapłtay</div>
                                <input type="text" readonly="readonly" name="kwota" value="0 zł" id="kwota" />
                            </label>
                            <label>
                            	<div class="dane">Sposób płatności:</div>
                                <select name="platnosc">
                                	<option value="1">Przy odbiorze</option>
                                    <option value="0">Przelew</option>
                                </select>
                            </label>
						<label><input name="send" class="submit" type="submit" value="Zamów" tabindex="12"/></label>
					</form>
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
    </div>
<div id="content">
    	<div id="bottom">
        	<div id="nav">Godziny otwarcia</div>
            <div id="tabela"></div>
        </div>
    	<div id="bottom-center">
        	<div id="nav">Dojaz do lokalu</div>
            <div id="tabela"></div>
        </div>
    	<div id="bottom">
        	<div id="nav">Kontakt</div>
            <div id="tabela"></div>
        </div>
        <div id="footer">
        	<p>Copyright © <b>La-costa.pl</b> 2013.</p>
        </div>
    </div>

</div>
</body>
</html>
<?php }} ?>