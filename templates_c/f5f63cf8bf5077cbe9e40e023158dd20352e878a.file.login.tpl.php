<?php /* Smarty version Smarty-3.1.13, created on 2013-04-17 18:00:55
         compiled from "./templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15802005605142332c337d46-09781100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f63cf8bf5077cbe9e40e023158dd20352e878a' => 
    array (
      0 => './templates/login.tpl',
      1 => 1366214454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15802005605142332c337d46-09781100',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5142332c3aeb01_76715824',
  'variables' => 
  array (
    'login' => 0,
    'errorboxbig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5142332c3aeb01_76715824')) {function content_5142332c3aeb01_76715824($_smarty_tpl) {?>    <div id="content">
    	<div id="table">
        	<div id="nav">Logowanie</div>
            <div id="tabela">
                <div id="page">
                	
					<form id="Register" action="" method="post" class="formularz">
                            <label>
                            <span class="dane">Login</span>
                                    <input type="text" name="login" id="name"  value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
"  tabindex="1"/><br />                                
							</label>
                            
                            <label><span class="dane">Hasło</span>
                                    <input type="password"  name="haslo" id="haslo" class="input-email2" tabindex="2"/>
                            </label>
                            <?php echo $_smarty_tpl->tpl_vars['errorboxbig']->value;?>

                            <div style="clear:both"></div>
							<label>
                            <span><input name="send" class="submit" type="submit" value="Zaloguj" tabindex="3"/></span>
                            </label>
					</form>
                    <div style="clear:both"></div>
            	</div>
			</div>
        </div>
<?php }} ?>