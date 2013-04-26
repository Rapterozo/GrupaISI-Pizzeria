<?php /* Smarty version Smarty-3.1.13, created on 2013-04-20 15:22:46
         compiled from "./templates/zamowienia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17138016895143531e70f2d2-07080723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf3ce5a41c899eb02f43087296411bc1e51f8fdd' => 
    array (
      0 => './templates/zamowienia.tpl',
      1 => 1366464145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17138016895143531e70f2d2-07080723',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5143531e753401_88095723',
  'variables' => 
  array (
    'box' => 0,
    'zamowienia' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5143531e753401_88095723')) {function content_5143531e753401_88095723($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/admin/domains/watch4free.pl/public_html/lacosta/libs/plugins/modifier.date_format.php';
?>    <div id="content">
    	<div id="table">
        	<div id="nav">Zamówienia</div>
            <div id="tabela">
                <div id="page">
                	<?php echo $_smarty_tpl->tpl_vars['box']->value;?>

                    	<div style="clear:both"></div>
                    	<?php if (isset($_smarty_tpl->tpl_vars['zamowienia']->value)){?>
                        <div class="name">
                            <div style="float:left; width:200px;">Nazwa Pizzy</div>
                            <div style="float:left; width:100px;" align="center">Data</div>
                            <div style="float:left; width:80px;" align="center">Kwota</div>
                            <div style="float:left; width:80px;" align="center">Status</div>
                            <div style="float:left; width:80px;" align="center">Płatność</div>
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
                        <div class="oferta" style="width:200px; text-align:left;"><?php echo $_smarty_tpl->tpl_vars['zamowienia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['pizza'];?>
(<?php echo $_smarty_tpl->tpl_vars['zamowienia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['rozmiar'];?>
)</div>
                        <div class="oferta"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['zamowienia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['date'],"%d/%m/%Y");?>
</div>
                        <div class="oferta" style="width:80px;"><?php echo $_smarty_tpl->tpl_vars['zamowienia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['kwota'];?>
 zł</div>
                        <div class="oferta" style="width:80px;"><?php if ($_smarty_tpl->tpl_vars['zamowienia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']==-1){?>Odrzucono<?php }elseif($_smarty_tpl->tpl_vars['zamowienia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']==0){?>W toku<?php }else{ ?>Zaakceptowano<?php }?> </div>
                        <div class="oferta"><?php if ($_smarty_tpl->tpl_vars['zamowienia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['platnosc']==1){?> Przy odbiorze <?php }else{ ?><form action="" method="post"><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['zamowienia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"/><input name="zaplac" type="submit" value="Zapłać" /></form><?php }?></div>

                        </div>
                        <div style="border-bottom:#f16007 dashed 0.5px; clear:both; padding:5px;"></div>
                        <?php endfor; endif; ?>
                        <?php }else{ ?>
                            <div style="width:600px;">
                            <div style="border-right:#F60 1px solid; width:50px; float:left; background-image:url(./images/info.gif); background-repeat:no-repeat; background-position:left; line-height:60px;">&nbsp;</div>
                            <div style="float:left; padding-left:10px;min-height:60px; line-height:60px;font-weight:bold; text-decoration:underline;">Brak zamówień!</div>
                            </div>
                        <?php }?>
                    <div style="clear:both"></div>
            	</div>
			</div>
        </div>
<?php }} ?>