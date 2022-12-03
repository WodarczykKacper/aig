<?php
/* Smarty version 3.1.43, created on 2022-12-03 13:00:53
  from 'C:\xampp\htdocs\AIG\themes\at_movic\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638b3a75d27991_13999382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3e63eebf192e2c6c819ab258e9b9b153d1e5edd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AIG\\themes\\at_movic\\templates\\_partials\\footer.tpl',
      1 => 1664963655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638b3a75d27991_13999382 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1459340325638b3a75d1d0e7_48136232', 'hook_footer_before');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_578285129638b3a75d1fc55_10578435', 'hook_footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57131165638b3a75d22be3_34314321', 'hook_footer_after');
}
/* {block 'hook_footer_before'} */
class Block_1459340325638b3a75d1d0e7_48136232 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_1459340325638b3a75d1d0e7_48136232',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="footer-top">
    <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterBefore'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterBefore'] == 0) {?>
      <div class="container">
    <?php }?>
      <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>
</div>
    <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterBefore'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterBefore'] == 0) {?>
      </div>
    <?php }?>
  </div>
<?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_578285129638b3a75d1fc55_10578435 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_578285129638b3a75d1fc55_10578435',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="footer-center">
    <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooter'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooter'] == 0) {?>
      <div class="container">
    <?php }?>
      <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>
</div>
    <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooter'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooter'] == 0) {?>
      </div>
    <?php }?>
  </div>
<?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_57131165638b3a75d22be3_34314321 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_57131165638b3a75d22be3_34314321',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="footer-bottom">
    <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterAfter'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterAfter'] == 0) {?>
      <div class="container">
    <?php }?>
      <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>
</div>
    <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterAfter'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterAfter'] == 0) {?>
      </div>
    <?php }?>
  </div>
<?php
}
}
/* {/block 'hook_footer_after'} */
}
