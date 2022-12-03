<?php
/* Smarty version 3.1.43, created on 2022-12-03 13:00:53
  from 'C:\xampp\htdocs\AIG\modules\appagebuilder\views\templates\hook\ApModule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638b3a75c6e912_92536689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e584bb5dc0f7f211321849f9b712a7d4419d84fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AIG\\modules\\appagebuilder\\views\\templates\\hook\\ApModule.tpl',
      1 => 1664963651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638b3a75c6e912_92536689 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApModule -->
<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';
echo $_smarty_tpl->tpl_vars['apContent']->value;
echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';
}
}
