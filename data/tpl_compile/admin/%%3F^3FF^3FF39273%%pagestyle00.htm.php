<?php /* Smarty version 2.6.26, created on 2012-11-20 10:20:04
         compiled from D:/project/php//CoreCMSV1.0_en/core/common/skin/pagestyle00.htm */ ?>
<div class="page">
[<?php echo $this->_tpl_vars['lang']->total_records_number; ?>
:<?php echo $this->_tpl_vars['rc']; ?>
]&nbsp;
<?php if ($this->_tpl_vars['sy'] == 1): ?>
<a href="<?php echo $this->_tpl_vars['url']; ?>
"><?php echo $this->_tpl_vars['lang']->first_page; ?>
</a>&nbsp;
<a href="<?php echo $this->_tpl_vars['url']; ?>
<?php echo $this->_tpl_vars['cp']-1; ?>
"><?php echo $this->_tpl_vars['lang']->previous_page; ?>
</a>&nbsp;
<?php endif; ?>
<?php unset($this->_sections['id']);
$this->_sections['id']['name'] = 'id';
$this->_sections['id']['loop'] = is_array($_loop=$this->_tpl_vars['pg']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['id']['show'] = true;
$this->_sections['id']['max'] = $this->_sections['id']['loop'];
$this->_sections['id']['step'] = 1;
$this->_sections['id']['start'] = $this->_sections['id']['step'] > 0 ? 0 : $this->_sections['id']['loop']-1;
if ($this->_sections['id']['show']) {
    $this->_sections['id']['total'] = $this->_sections['id']['loop'];
    if ($this->_sections['id']['total'] == 0)
        $this->_sections['id']['show'] = false;
} else
    $this->_sections['id']['total'] = 0;
if ($this->_sections['id']['show']):

            for ($this->_sections['id']['index'] = $this->_sections['id']['start'], $this->_sections['id']['iteration'] = 1;
                 $this->_sections['id']['iteration'] <= $this->_sections['id']['total'];
                 $this->_sections['id']['index'] += $this->_sections['id']['step'], $this->_sections['id']['iteration']++):
$this->_sections['id']['rownum'] = $this->_sections['id']['iteration'];
$this->_sections['id']['index_prev'] = $this->_sections['id']['index'] - $this->_sections['id']['step'];
$this->_sections['id']['index_next'] = $this->_sections['id']['index'] + $this->_sections['id']['step'];
$this->_sections['id']['first']      = ($this->_sections['id']['iteration'] == 1);
$this->_sections['id']['last']       = ($this->_sections['id']['iteration'] == $this->_sections['id']['total']);
?>
	<a href="<?php echo $this->_tpl_vars['pg'][$this->_sections['id']['index']]['url']; ?>
"<?php if ($this->_tpl_vars['pg'][$this->_sections['id']['index']]['isCurrent']): ?> class="current"<?php endif; ?>><?php echo $this->_tpl_vars['pg'][$this->_sections['id']['index']]['nr']; ?>
</a>&nbsp;
<?php endfor; endif; ?>
<?php if ($this->_tpl_vars['wy'] == 1): ?>
<a href="<?php echo $this->_tpl_vars['url']; ?>
<?php echo $this->_tpl_vars['cp']+1; ?>
"><?php echo $this->_tpl_vars['lang']->next_page; ?>
</a>&nbsp;
<a href="<?php echo $this->_tpl_vars['url']; ?>
<?php echo $this->_tpl_vars['pc']; ?>
"><?php echo $this->_tpl_vars['lang']->last_page; ?>
</a>&nbsp;
<?php endif; ?>
[<?php echo $this->_tpl_vars['cp']; ?>
/<?php echo $this->_tpl_vars['pc']; ?>
]&nbsp;[<?php echo $this->_tpl_vars['lang']->per_page_count; ?>
 <input type="text" name="perPageCount" size="5" value="<?php echo $this->_tpl_vars['ps']; ?>
" onkeypress="chkKeyDownForPage(this, event)" />]
</div>
<script>
function chkKeyDownForPage(o, e)
{
	var e		= e || event;
	var key		= e.keyCode || e.which || e.charCode;
	if (key == 13)
	{
		var url	= '<?php echo $this->_tpl_vars['url']; ?>
';
		url		= url.replace(/&?perPageCount=\d+/g, '');
		window.location.href = url + '&perPageCount=' + o.value;
	}
	
}
</script>