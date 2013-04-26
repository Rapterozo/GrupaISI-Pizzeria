<?php /* Smarty version Smarty-3.1.13, created on 2013-03-18 21:49:45
         compiled from "./templates/rejestracja.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11195731975141f937eacac7-64473966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '817381323a232b924ac9a836af42daed0edac83d' => 
    array (
      0 => './templates/rejestracja.tpl',
      1 => 1363295092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11195731975141f937eacac7-64473966',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5141f937f389a7_45985636',
  'variables' => 
  array (
    'blad' => 0,
    'userlogin' => 0,
    'login' => 0,
    'login_errorbox' => 0,
    'haslo_errorbox' => 0,
    'email' => 0,
    'email_errorbox' => 0,
    'successbox' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5141f937f389a7_45985636')) {function content_5141f937f389a7_45985636($_smarty_tpl) {?>    <div id="content">
    	<div id="table">
        	<div id="nav">Rejestracja</div>
            <div id="tabela">
                <div id="page">
					<?php if ((!isset($_smarty_tpl->tpl_vars['blad']->value)||$_smarty_tpl->tpl_vars['blad']->value!=0)&&!isset($_smarty_tpl->tpl_vars['userlogin']->value)){?>
					<form id="Register"  action="" method="post" class="formularz">
                            <label>
                                <span class="dane">Login:</span>
                                <input type="text" name="login" id="name" class="input-name2 tipForm required" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
"  tabindex="1" original-title="Podaj swój login"/>                                
                            </label>        
                                    <?php echo $_smarty_tpl->tpl_vars['login_errorbox']->value;?>

                            <label>
                                <span class="dane">Hasło:</span> 
                                <input type="password"  name="haslo" id="haslo" class="input-email2" tabindex="2"/>
							</label>
                            
                            <label>
                            		<span class="dane">Powtórz Hasło:</span>
                                    <input type="password"  name="haslo2" id="haslo2" class="input-email2" tabindex="3" />
							</label>
                            <?php echo $_smarty_tpl->tpl_vars['haslo_errorbox']->value;?>

                            
                            <label>
                            		<span class="dane">Email:</span>
                                    <input type="text"  name="email" id="email" class="input-email2" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" tabindex="4" />
                                    <div style="clear:both"></div>
                                    
							</label>
                            <div style="clear:both"></div>	
                            
                            
                            <?php echo $_smarty_tpl->tpl_vars['email_errorbox']->value;?>

                            <font style="font-size:9px; padding:20px 0 15px 0;">Rejestracja jest równoznaczna z akceptacją <a href="/regulamin" title="Regulamin serwisu watch4free.pl">regulaminu</a>.</font><br /><br />
							<span class="dane"><input name="wyslane" class="submit" type="submit" value="Rejestruj"/></span>
					</form>

                    <?php }else{ ?>
                    <?php echo $_smarty_tpl->tpl_vars['successbox']->value;?>

                    <?php }?>
                    <div style="clear:both"></div>
            	</div>
			</div>
        </div>

<?php }} ?>