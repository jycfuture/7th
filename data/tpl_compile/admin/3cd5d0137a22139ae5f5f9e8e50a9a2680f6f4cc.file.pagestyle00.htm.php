<?php /* Smarty version Smarty-3.0.6, created on 2017-07-10 17:31:18
         compiled from "D:/www/mishi/core/common/skin/pagestyle00.htm" */ ?>
<?php /*%%SmartyHeaderCode:145345963496652f5f5-10714028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cd5d0137a22139ae5f5f9e8e50a9a2680f6f4cc' => 
    array (
      0 => 'D:/www/mishi/core/common/skin/pagestyle00.htm',
      1 => 1350319610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145345963496652f5f5-10714028',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="page">
[<?php echo $_smarty_tpl->getVariable('lang')->value->total_records_number;?>
:<?php echo $_smarty_tpl->getVariable('rc')->value;?>
]&nbsp;
<?php if ($_smarty_tpl->getVariable('sy')->value==1){?>
<a href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->first_page;?>
</a>&nbsp;
<a href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
<?php echo $_smarty_tpl->getVariable('cp')->value-1;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->previous_page;?>
</a>&nbsp;
<?php }?>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('pg')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total']);
?>
	<a href="<?php echo $_smarty_tpl->getVariable('pg')->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['url'];?>
"<?php if ($_smarty_tpl->getVariable('pg')->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['isCurrent']){?> class="current"<?php }?>><?php echo $_smarty_tpl->getVariable('pg')->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['nr'];?>
</a>&nbsp;
<?php endfor; endif; ?>
<?php if ($_smarty_tpl->getVariable('wy')->value==1){?>
<a href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
<?php echo $_smarty_tpl->getVariable('cp')->value+1;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->next_page;?>
</a>&nbsp;
<a href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
<?php echo $_smarty_tpl->getVariable('pc')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->last_page;?>
</a>&nbsp;
<?php }?>
[<?php echo $_smarty_tpl->getVariable('cp')->value;?>
/<?php echo $_smarty_tpl->getVariable('pc')->value;?>
]&nbsp;[<?php echo $_smarty_tpl->getVariable('lang')->value->per_page_count;?>
 <input type="text" name="perPageCount" size="5" value="<?php echo $_smarty_tpl->getVariable('ps')->value;?>
" onkeypress="chkKeyDownForPage(this, event)" />]
</div>
<script>
function chkKeyDownForPage(o, e)
{
	var e		= e || event;
	var key		= e.keyCode || e.which || e.charCode;
	if (key == 13)
	{
		var url	= '<?php echo $_smarty_tpl->getVariable('url')->value;?>
';
		url		= url.replace(/&?perPageCount=\d+/g, '');
		window.location.href = url + '&perPageCount=' + o.value;
	}
	
}
</script>