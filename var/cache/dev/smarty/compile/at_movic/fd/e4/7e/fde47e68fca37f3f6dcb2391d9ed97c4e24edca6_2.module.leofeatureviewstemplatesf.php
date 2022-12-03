<?php
/* Smarty version 3.1.43, created on 2022-12-03 13:00:53
  from 'module:leofeatureviewstemplatesf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638b3a75e2cf18_39328026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fde47e68fca37f3f6dcb2391d9ed97c4e24edca6' => 
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
function content_638b3a75e2cf18_39328026 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\AIG/modules/leofeature/views/templates/front/fly_cart_slide_bar.tpl --><?php if ($_smarty_tpl->tpl_vars['enable_overlay_background']->value) {?>
	<div class="leo-fly-cart-mask"></div>
<?php }?>

<div class="leo-fly-cart-slidebar <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
">
	
	<div class="leo-fly-cart disable-dropdown">
		<div class="leo-fly-cart-wrapper">
			<div class="leo-fly-cart-icon-wrapper">
				<a href="javascript:void(0)" class="leo-fly-cart-icon"><i class="material-icons">&#xE8CC;</i></a>
				<span class="leo-fly-cart-total"></span>
			</div>
						<div class="leo-fly-cart-cssload-loader"></div>
		</div>
	</div>

</div><!-- end C:\xampp\htdocs\AIG/modules/leofeature/views/templates/front/fly_cart_slide_bar.tpl --><?php }
}
