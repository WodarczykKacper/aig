<?php
/* Smarty version 3.1.43, created on 2022-12-03 13:00:53
  from 'C:\xampp\htdocs\AIG\modules\appagebuilder\views\templates\hook\ApGenCode.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638b3a75b08e07_06890227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9afce6b660bf9b6a023b5cdb628a8c48ff738063' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AIG\\modules\\appagebuilder\\views\\templates\\hook\\ApGenCode.tpl',
      1 => 1664963651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638b3a75b08e07_06890227 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApGenCode -->

<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'])) && !empty($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'])) {?>
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['error_file'])) && !empty($_smarty_tpl->tpl_vars['formAtts']->value['error_file'])) {?>
	<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['error_message'];
}
}
}
