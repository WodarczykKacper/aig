<?php
/* Smarty version 3.1.43, created on 2022-12-03 13:00:53
  from 'C:\xampp\htdocs\AIG\themes\at_movic\templates\_partials\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638b3a75d0c078_64779192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0564b326d7478fe3b804810451cd694c57a729e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AIG\\themes\\at_movic\\templates\\_partials\\breadcrumb.tpl',
      1 => 1664963655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638b3a75d0c078_64779192 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"pagebuilderConfig",'configName'=>"leobrbg"),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('leobrbg', $_prefixVariable1);
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"pagebuilderConfig",'configName'=>"leobrcolor"),$_smarty_tpl ) );
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('leobrcolor', $_prefixVariable2);
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"pagebuilderConfig",'configName'=>"leobgfull"),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_assignInScope('leobgfull', $_prefixVariable3);
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"pagebuilderConfig",'configName'=>"leobgheight"),$_smarty_tpl ) );
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_assignInScope('leobgheight', $_prefixVariable4);
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"pagebuilderConfig",'configName'=>"leobrtext"),$_smarty_tpl ) );
$_prefixVariable5 = ob_get_clean();
$_smarty_tpl->_assignInScope('leobrtext', $_prefixVariable5);?>

<?php if ($_smarty_tpl->tpl_vars['leobrbg']->value || $_smarty_tpl->tpl_vars['leobrcolor']->value) {?>
<div data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb-bg <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leobrtext']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['leobgfull']->value) {?>breadcrumb-full<?php }?>" style="<?php if ($_smarty_tpl->tpl_vars['leobrbg']->value) {?>background-image: <?php if ($_smarty_tpl->tpl_vars['leobrbg']->value) {?>url(<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category' && $_smarty_tpl->tpl_vars['leobrbg']->value == 'catimg' && $_smarty_tpl->tpl_vars['category']->value['image']['large']['url'] != '') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['leobrbg']->value, ENT_QUOTES, 'UTF-8');
}?>)<?php }?>;<?php }
if ($_smarty_tpl->tpl_vars['leobrcolor']->value) {?> background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leobrcolor']->value, ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['leobgheight']->value) {?> min-height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leobgheight']->value, ENT_QUOTES, 'UTF-8');?>
;<?php }?> ">
  <?php if ((isset($_smarty_tpl->tpl_vars['leobgfull']->value)) && $_smarty_tpl->tpl_vars['leobgfull']->value) {?>
  <div class="container">
  <?php }?>
  <nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb hidden-sm-down">
    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2083061498638b3a75d06759_79110946', 'breadcrumb');
?>

    </ol>
  </nav>
  <?php if ((isset($_smarty_tpl->tpl_vars['leobgfull']->value)) && $_smarty_tpl->tpl_vars['leobgfull']->value) {?>
  </div>
  <?php }?>
</div>
<?php } else { ?>
<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb hidden-sm-down">
  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1650773376638b3a75d09a35_65916011', 'breadcrumb');
?>

  </ol>
</nav>
<?php }
}
/* {block 'breadcrumb_item'} */
class Block_1441403825638b3a75d07386_71707045 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
              </a>
              <meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
">
            </li>
          <?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
class Block_2083061498638b3a75d06759_79110946 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_2083061498638b3a75d06759_79110946',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_1441403825638b3a75d07386_71707045',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1441403825638b3a75d07386_71707045', 'breadcrumb_item', $this->tplIndex);
?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
}
}
/* {/block 'breadcrumb'} */
/* {block 'breadcrumb_item'} */
class Block_297097829638b3a75d0a4f4_42359333 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
              <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
            </a>
            <meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
">
          </li>
        <?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
class Block_1650773376638b3a75d09a35_65916011 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_1650773376638b3a75d09a35_65916011',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_297097829638b3a75d0a4f4_42359333',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_297097829638b3a75d0a4f4_42359333', 'breadcrumb_item', $this->tplIndex);
?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
/* {/block 'breadcrumb'} */
}
