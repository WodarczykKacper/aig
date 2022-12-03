<?php
/* Smarty version 3.1.43, created on 2022-12-03 13:00:53
  from 'C:\xampp\htdocs\AIG\modules\leobootstrapmenu\views\templates\hook\menu_1_nochild.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638b3a75be80a5_48832574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2aa94a1699822943e294c6470589f317f063b9cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AIG\\modules\\leobootstrapmenu\\views\\templates\\hook\\menu_1_nochild.tpl',
      1 => 1664963651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638b3a75be80a5_48832574 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['menu']->value['active'] == 1) {?>
    <li data-menu-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['type'], ENT_QUOTES, 'UTF-8');?>
" class="nav-item <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['menu_class'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addwidget']->value, ENT_QUOTES, 'UTF-8');?>
 leo-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['colums'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['model']->value->renderAttrs($_smarty_tpl->tpl_vars['menu']->value), ENT_QUOTES, 'UTF-8');?>
>
        <a class="nav-link has-category" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['model']->value->getLink($_smarty_tpl->tpl_vars['menu']->value), ENT_QUOTES, 'UTF-8');?>
" target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['target'], ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['menu']->value['icon_class']) {?>
                <?php if ($_smarty_tpl->tpl_vars['menu']->value['icon_class'] != preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['menu']->value['icon_class'])) {?>
                    <span class="hasicon menu-icon-class"><?php echo $_smarty_tpl->tpl_vars['menu']->value['icon_class'];?>

                <?php } else { ?>
                    <span class="hasicon menu-icon-class"><i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['icon_class'], ENT_QUOTES, 'UTF-8');?>
"></i>
                <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['menu']->value['image']) {?>
                <span class="hasicon menu-icon" style="background:url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['model']->value->image_base_url, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['image'], ENT_QUOTES, 'UTF-8');?>
') no-repeat">
            <?php }?>
                
            <?php if ($_smarty_tpl->tpl_vars['menu']->value['show_title']) {?>
                <span class="menu-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['menu']->value['text']) {?>
                <span class="sub-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['text'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['menu']->value['description']) {?>
                <span class="menu-desc"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['description'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['menu']->value['image'] || $_smarty_tpl->tpl_vars['menu']->value['icon_class']) {?>
                </span>
            <?php }?>
        </a>
    </li>
<?php }
}
}
