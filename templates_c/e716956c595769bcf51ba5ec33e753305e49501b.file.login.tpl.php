<?php /* Smarty version Smarty-3.1.13, created on 2013-04-02 00:07:45
         compiled from "./templates/admin/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1768015851424868571c13-10993836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e716956c595769bcf51ba5ec33e753305e49501b' => 
    array (
      0 => './templates/admin/login.tpl',
      1 => 1363644377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1768015851424868571c13-10993836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_514248685e4f79_85700872',
  'variables' => 
  array (
    'box' => 0,
    'login' => 0,
    'login_errorbox' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514248685e4f79_85700872')) {function content_514248685e4f79_85700872($_smarty_tpl) {?>    <div id="content">
    	<div id="table">
        	<div id="nav">Logowanie - Panel Administratora</div>
            <div id="tabela">
                <div id="page">
                	<?php echo $_smarty_tpl->tpl_vars['box']->value;?>

					<form id="Register" action="" method="post" class="formularz">
                            <label>
                            <span class="dane">Login</span>
                                    <input type="text" name="login" id="name" class="input-name2 tipForm required" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
"  tabindex="1" original-title="Podaj swój login"/><br />                                
							</label>
                            <?php echo $_smarty_tpl->tpl_vars['login_errorbox']->value;?>

                            <label><span class="dane">Hasło</span>
                                    <input type="password"  name="haslo" id="haslo" class="input-email2" tabindex="2"/>
                            </label>
                            
						<span><input name="send" class="submit" type="submit" value="Zaloguj" tabindex="3"/></span>
					</form>
                    <div style="clear:both"></div>
            	</div>
			</div>
        </div><?php }} ?>