<?php /* Smarty version Smarty-3.1.13, created on 2013-04-01 23:21:08
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18467077855141f663360c98-57501699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1364851264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18467077855141f663360c98-57501699',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5141f663362784_35392471',
  'variables' => 
  array (
    'pizza' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5141f663362784_35392471')) {function content_5141f663362784_35392471($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/admin/domains/watch4free.pl/public_html/lacosta/libs/plugins/modifier.replace.php';
?>
    <div id="content">
    	<div id="table">
        	<div id="nav">Menu LaCosta</div>
            <div id="tabela">
				<div id="page">
                		<div class="name">
                            <div style="float:left; width:200px;">Nazwa Pizzy</div>
                            <div style="float:left; width:100px;" align="center">Mala</div>
                            <div style="float:left; width:100px;" align="center">Średnia</div>
                            <div style="float:left; width:100px;" align="center">Duża</div>
                        </div>
                        <div style="border-bottom:#f16007 dashed 0.5px; clear:both; padding:5px;"></div>
                    	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pizza']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <div style="float:left; width:200px;"><?php echo $_smarty_tpl->tpl_vars['pizza']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['nazwa'];?>
<br /><span class="skladniki"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pizza']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['skladniki'],",",", ");?>
</span></div>
                        <div class="oferta"><a class="zamow" id="<?php echo $_smarty_tpl->tpl_vars['pizza']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['pizza']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['nazwa'];?>
_s_<?php echo $_smarty_tpl->tpl_vars['pizza']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['s'];?>
" href=""><?php echo $_smarty_tpl->tpl_vars['pizza']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['s'];?>
 zł</a></div>
                        <div class="oferta"><a class="zamow" id="<?php echo $_smarty_tpl->tpl_vars['pizza']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['pizza']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['nazwa'];?>
_m_<?php echo $_smarty_tpl->tpl_vars['pizza']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['m'];?>
" href=""><?php echo $_smarty_tpl->tpl_vars['pizza']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['m'];?>
 zł</a></div>
                        <div class="oferta"><a class="zamow" id="<?php echo $_smarty_tpl->tpl_vars['pizza']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['pizza']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['nazwa'];?>
_l_<?php echo $_smarty_tpl->tpl_vars['pizza']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['l'];?>
" href=""><?php echo $_smarty_tpl->tpl_vars['pizza']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['l'];?>
 zł</a></div>

                        </div>
                        <?php endfor; endif; ?>
				</div>
            </div>
        </div>
<?php }} ?>