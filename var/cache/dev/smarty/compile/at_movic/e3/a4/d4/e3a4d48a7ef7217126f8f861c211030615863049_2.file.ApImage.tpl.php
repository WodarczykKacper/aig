<?php
/* Smarty version 3.1.43, created on 2022-12-03 13:00:53
  from 'C:\xampp\htdocs\AIG\modules\appagebuilder\views\templates\hook\ApImage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638b3a7559fcc1_35967868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3a4d48a7ef7217126f8f861c211030615863049' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AIG\\modules\\appagebuilder\\views\\templates\\hook\\ApImage.tpl',
      1 => 1664963651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638b3a7559fcc1_35967868 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApImage -->
<div id="image-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="block <?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['formAtts']->value['class'])) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>

    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
        <h4 class="title_block"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['title'];?>
</h4>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
        <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
    <?php }?>
    
    <?php if (((isset($_smarty_tpl->tpl_vars['formAtts']->value['image'])) && $_smarty_tpl->tpl_vars['formAtts']->value['image']) || ((isset($_smarty_tpl->tpl_vars['formAtts']->value['image_link'])) && $_smarty_tpl->tpl_vars['formAtts']->value['image_link'])) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['url'])) && $_smarty_tpl->tpl_vars['formAtts']->value['url']) {?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['url'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['formAtts']->value['is_open'])) && $_smarty_tpl->tpl_vars['formAtts']->value['is_open'] ? 'target="_blank"' : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
>
        <?php }?>
        <img class="img-fluid<?php if ($_smarty_tpl->tpl_vars['aplazyload']->value) {?> lazy<?php }?> <?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['formAtts']->value['animation'])) && $_smarty_tpl->tpl_vars['formAtts']->value['animation'] != 'none' ? 'has-animation' : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['aplazyload']->value) {?>data-src<?php } else { ?>src<?php }?>="<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['image'])) && $_smarty_tpl->tpl_vars['formAtts']->value['image']) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['image_link']))) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['image_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}
}?>"
            <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['animation'])) && $_smarty_tpl->tpl_vars['formAtts']->value['animation'] != 'none') {?> data-animation="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['animation'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['animation_delay'] != '') {?> data-animation-delay="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['animation_delay'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
            title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ((isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['title'] ? $_smarty_tpl->tpl_vars['formAtts']->value['title'] : ''),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
            alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ((isset($_smarty_tpl->tpl_vars['formAtts']->value['alt'])) && $_smarty_tpl->tpl_vars['formAtts']->value['alt'] ? $_smarty_tpl->tpl_vars['formAtts']->value['alt'] : ''),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
	    style=" width:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ((isset($_smarty_tpl->tpl_vars['formAtts']->value['width'])) && $_smarty_tpl->tpl_vars['formAtts']->value['width'] ? $_smarty_tpl->tpl_vars['formAtts']->value['width'] : 'auto'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
; 
			height:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ((isset($_smarty_tpl->tpl_vars['formAtts']->value['height'])) && $_smarty_tpl->tpl_vars['formAtts']->value['height'] ? $_smarty_tpl->tpl_vars['formAtts']->value['height'] : 'auto'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" loading="lazy"/>

        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['url'])) && $_smarty_tpl->tpl_vars['formAtts']->value['url']) {?>
        </a>
        <?php }?>
    <?php }?>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['description'])) && $_smarty_tpl->tpl_vars['formAtts']->value['description']) {?>
            <div class='image_description'>
								<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['description'] ? $_smarty_tpl->tpl_vars['formAtts']->value['description'] : '';?>
            </div>
        <?php }?>
</div><?php }
}
