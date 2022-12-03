<?php
/* Smarty version 3.1.43, created on 2022-12-03 13:00:53
  from 'C:\xampp\htdocs\AIG\modules\appagebuilder\views\templates\hook\ApColumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638b3a755c61a0_71525316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6957e9ac2988932a5b77ef7ebaf966e8dd227669' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AIG\\modules\\appagebuilder\\views\\templates\\hook\\ApColumn.tpl',
      1 => 1664963651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638b3a755c61a0_71525316 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
<div<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['id'])) && $_smarty_tpl->tpl_vars['formAtts']->value['id']) {?> id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    class="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['formAtts']->value['class'])) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['formAtts']->value['animation'])) && $_smarty_tpl->tpl_vars['formAtts']->value['animation'] != call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( 'none','html','UTF-8' )) ? 'has-animation' : '', ENT_QUOTES, 'UTF-8');?>
"
	<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['animation'])) && $_smarty_tpl->tpl_vars['formAtts']->value['animation'] != 'none') {?> data-animation="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['animation'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
	<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['animation_delay'])) && $_smarty_tpl->tpl_vars['formAtts']->value['animation_delay'] != '') {?> data-animation-delay="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['animation_delay'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['animation_duration'])) && $_smarty_tpl->tpl_vars['formAtts']->value['animation_duration'] != '') {?> data-animation-duration="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['animation_duration'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['animation_iteration_count'])) && $_smarty_tpl->tpl_vars['formAtts']->value['animation_iteration_count'] != '') {?> data-animation-iteration-count="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['animation_iteration_count'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['animation_infinite'])) && $_smarty_tpl->tpl_vars['formAtts']->value['animation_infinite'] != '') {?> data-animation-infinite="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['animation_infinite'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
	<?php }?>
    >
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
    <h4 class="title_block title-ap-column"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['title'];?>
</h4>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
        <div class="sub-title-widget sub-title-ap-column"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['content_html']))) {?>
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['content_html'],'html','UTF-8' ));?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>

    <?php }?>
</div><?php }
}
