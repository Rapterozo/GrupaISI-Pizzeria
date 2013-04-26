<?php /* Smarty version Smarty-3.1.13, created on 2013-03-18 23:00:34
         compiled from "./templates/profil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15569126351478b30de91f5-36269996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '939edfc761fa0337bde7ae4c35f0b15b3a018b46' => 
    array (
      0 => './templates/profil.tpl',
      1 => 1363643973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15569126351478b30de91f5-36269996',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51478b30e445f6_63534962',
  'variables' => 
  array (
    'zamowienia_count' => 0,
    'profile' => 0,
    'box' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51478b30e445f6_63534962')) {function content_51478b30e445f6_63534962($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/admin/domains/watch4free.pl/public_html/lacosta/libs/plugins/modifier.date_format.php';
?>    <div id="content">
    	<div id="table">
        	<div id="nav">Profil</div>
            <div id="tabela">
                <div id="page">
                	<h1>Ilość zamówień: <?php echo $_smarty_tpl->tpl_vars['zamowienia_count']->value;?>
</h1>
                	<h1>Data rejestracji: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['profile']->value['register'],"%Y/%m/%d");?>
</h1>
                
                	<h1>Edytuj dane:</h1>
                	<?php echo $_smarty_tpl->tpl_vars['box']->value;?>

					<form id="Register" action="" method="post" class="formularz">
                            <label>
                            <span class="dane">Numer telefonu:</span>
                                    <input type="text" name="telefon" id="name" value="<?php echo $_smarty_tpl->tpl_vars['profile']->value['telefon'];?>
"  tabindex="1"/><br />                                
							</label>
                            <label><span class="dane">Dane adresowe:</span>
                                    <textarea name="dane"><?php echo $_smarty_tpl->tpl_vars['profile']->value['dane'];?>
</textarea>
                            </label>
                            
						<span><input name="send" class="submit" type="submit" value="Edytuj" tabindex="3"/></span>
					</form>
                    <div style="clear:both"></div>
            	</div>
			</div>
        </div>
<?php }} ?>