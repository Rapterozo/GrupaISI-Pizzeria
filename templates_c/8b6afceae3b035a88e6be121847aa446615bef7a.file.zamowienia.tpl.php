<?php /* Smarty version Smarty-3.1.13, created on 2013-04-20 15:33:34
         compiled from "./templates/admin/zamowienia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16913640195145be6287d360-34555201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b6afceae3b035a88e6be121847aa446615bef7a' => 
    array (
      0 => './templates/admin/zamowienia.tpl',
      1 => 1366464814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16913640195145be6287d360-34555201',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5145be628e80e6_93451586',
  'variables' => 
  array (
    'box' => 0,
    'zamowienia' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5145be628e80e6_93451586')) {function content_5145be628e80e6_93451586($_smarty_tpl) {?>    <div id="content">
    	<div id="table">
        	<div id="nav">Zamówienia</div>
            <div id="tabela">
                <div id="page">
                	<?php echo $_smarty_tpl->tpl_vars['box']->value;?>

                    	<?php if (isset($_smarty_tpl->tpl_vars['zamowienia']->value)){?>
                        <div class="name">
                            <div style="float:left; width:350px;">Nazwa Pizzy</div>
                            <div style="float:left; width:80px;" align="center">Kwota</div>
                            <div style="float:left; width:150px;" align="center">Akcja</div>
                        </div>
                        <div style="border-bottom:#f16007 dashed 0.5px; clear:both; padding:5px;"></div>
                    	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['zamowienia']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                        
                        <div id="lista_pizza">
                        <div style="float:left; width:350px;">
                        	<?php echo $_smarty_tpl->tpl_vars['zamowienia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['pizza'];?>
<br />
                            <span class="skladniki"><?php echo $_smarty_tpl->tpl_vars['zamowienia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['rozmiar'];?>
</span><br />
							<?php echo $_smarty_tpl->tpl_vars['zamowienia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dane'];?>
<br /><span class="skladniki"><?php echo $_smarty_tpl->tpl_vars['zamowienia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['telefon'];?>
</span>
                        
                        </div>

                        <div style="float:left; width:80px;" align="center"><?php echo $_smarty_tpl->tpl_vars['zamowienia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['kwota'];?>
 zł</div>
                        <div style="float:left; width:150px;" align="center">
                        	<form action="" method="post">
                            	<select name="status">
                                	<option value="-1">Odrzuć</option>
                                    <option value="1">Akceptuj</option>
                                </select>
                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['zamowienia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"/>
                                <input type="hidden" name="email" value="<?php echo $_smarty_tpl->tpl_vars['zamowienia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['email'];?>
"/>
                                <input name="send" type="submit" value="OK" />
                        </form>
                        </div>

                        </div>
                        <div style="border-bottom:#f16007 dashed 0.5px; clear:both; padding:5px;"></div>
                        <?php endfor; endif; ?>
                        <?php }else{ ?>
                        Brak zamówień
                        <?php }?>
                    <div style="clear:both"></div>
            	</div>
			</div>
        </div>
<?php }} ?>