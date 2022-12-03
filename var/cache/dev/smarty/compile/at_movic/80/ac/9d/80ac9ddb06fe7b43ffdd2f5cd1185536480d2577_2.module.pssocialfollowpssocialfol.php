<?php
/* Smarty version 3.1.43, created on 2022-12-03 13:00:53
  from 'module:pssocialfollowpssocialfol' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638b3a75d811a3_78411789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80ac9ddb06fe7b43ffdd2f5cd1185536480d2577' => 
    array (
      0 => 'module:pssocialfollowpssocialfol',
      1 => 1664963655,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638b3a75d811a3_78411789 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- begin C:\xampp\htdocs\AIG/themes/at_movic/modules/ps_socialfollow/ps_socialfollow.tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_381092779638b3a75d7edb2_60937609', 'block_social');
?>

<!-- end C:\xampp\htdocs\AIG/themes/at_movic/modules/ps_socialfollow/ps_socialfollow.tpl --><?php }
/* {block 'block_social'} */
class Block_381092779638b3a75d7edb2_60937609 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_social' => 
  array (
    0 => 'Block_381092779638b3a75d7edb2_60937609',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="block-social">
    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['social_links']->value, 'social_link');
$_smarty_tpl->tpl_vars['social_link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['social_link']->value) {
$_smarty_tpl->tpl_vars['social_link']->do_else = false;
?>
        <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['class'], ENT_QUOTES, 'UTF-8');?>
"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['label'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="noopener noreferrer"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span></a></li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
<?php
}
}
/* {/block 'block_social'} */
}
