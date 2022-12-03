<?php
/* Smarty version 3.1.43, created on 2022-12-03 13:00:53
  from 'module:leofeatureviewstemplatesf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638b3a75e1f016_56018706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '805ce2d86f1187d802d55b829fd8b831e391ad7c' => 
    array (
      0 => 'module:leofeatureviewstemplatesf',
      1 => 1664963652,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638b3a75e1f016_56018706 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\AIG/modules/leofeature/views/templates/front/fly_cart.tpl --><div data-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type_fly_cart']->value, ENT_QUOTES, 'UTF-8');?>
" style="position: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type_position']->value, ENT_QUOTES, 'UTF-8');?>
; <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vertical_position']->value, ENT_QUOTES, 'UTF-8');?>
; <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['horizontal_position']->value, ENT_QUOTES, 'UTF-8');?>
" class="leo-fly-cart solo type-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type_position']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['type_fly_cart']->value == 'dropup' || $_smarty_tpl->tpl_vars['type_fly_cart']->value == 'dropdown') {?> enable-dropdown<?php }
if ($_smarty_tpl->tpl_vars['type_fly_cart']->value == 'slidebar_top' || $_smarty_tpl->tpl_vars['type_fly_cart']->value == 'slidebar_bottom' || $_smarty_tpl->tpl_vars['type_fly_cart']->value == 'slidebar_right' || $_smarty_tpl->tpl_vars['type_fly_cart']->value == 'slidebar_left') {?> enable-slidebar<?php }?>">
	<div class="leo-fly-cart-icon-wrapper">
		<a href="javascript:void(0)" class="leo-fly-cart-icon" data-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type_fly_cart']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons">&#xE8CC;</i></a>
		<span class="leo-fly-cart-total"></span>
	</div>
		<div class="leo-fly-cart-cssload-loader"></div>
</div><!-- end C:\xampp\htdocs\AIG/modules/leofeature/views/templates/front/fly_cart.tpl --><?php }
}
