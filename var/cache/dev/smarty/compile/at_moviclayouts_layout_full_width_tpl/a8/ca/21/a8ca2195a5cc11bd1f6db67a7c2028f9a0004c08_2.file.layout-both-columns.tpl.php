<?php
/* Smarty version 3.1.43, created on 2022-12-03 13:00:53
  from 'C:\xampp\htdocs\AIG\themes\at_movic\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638b3a75a1c334_99299867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8ca2195a5cc11bd1f6db67a7c2028f9a0004c08' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AIG\\themes\\at_movic\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1669210505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_638b3a75a1c334_99299867 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['locale'], ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['IS_RTL']->value)) && $_smarty_tpl->tpl_vars['IS_RTL']->value) {?> dir="rtl"<?php if ((isset($_smarty_tpl->tpl_vars['LEO_RTL']->value)) && $_smarty_tpl->tpl_vars['LEO_RTL']->value) {?> class="rtl<?php if ((isset($_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value))) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value, ENT_QUOTES, 'UTF-8');
}?>"<?php }
} else { ?> class="<?php if ((isset($_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php }?>>

  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1558224609638b3a75a0c1f3_02426942', 'head');
?>

  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['LEO_LAYOUT_MODE']->value))) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LEO_LAYOUT_MODE']->value, ENT_QUOTES, 'UTF-8');
}
if ((isset($_smarty_tpl->tpl_vars['USE_FHEADER']->value)) && $_smarty_tpl->tpl_vars['USE_FHEADER']->value) {?> keep-header<?php }?>">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_715771835638b3a75a0eb07_78761853', 'hook_after_body_opening_tag');
?>


    <main id="page">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_706373196638b3a75a0f4c6_30131198', 'product_activation');
?>

      <header id="header">
		  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2105480117638b3a75a0fdb1_16053410', 'header');
?>

      </header>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164828925638b3a75a10694_70176335', 'notifications');
?>

      <section id="wrapper">
       <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

      <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayHome'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayHome'] == 0) {?>
      <div class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == "category") {?>container-large<?php } else { ?>container<?php }?>">
      <?php }?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1263815120638b3a75a12bf3_17745358', 'breadcrumb');
?>

          <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1974628368638b3a75a135d2_43165298', "left_column");
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99203661638b3a75a14d22_44874500', "content_wrapper");
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1948420920638b3a75a16283_27516261', "right_column");
?>

          </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayHome'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayHome'] == 0) {?>
          </div>
        <?php }?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

      </section>

      <footer id="footer" class="footer-container js-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1799626381638b3a75a18a70_06908312', "footer");
?>

      </footer>
      <?php if ((isset($_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value)) && $_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value) {?>
          <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./modules/appagebuilder/views/templates/front/info/paneltool.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      <?php }?>
      <?php if ((isset($_smarty_tpl->tpl_vars['LEO_BACKTOP']->value)) && $_smarty_tpl->tpl_vars['LEO_BACKTOP']->value) {?>
          <div id="back-top" class="progress-wrap"> 
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
              <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
          </div>
      <?php }?>

    </main>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1273794823638b3a75a1a950_96137757', 'javascript_bottom');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_972196996638b3a75a1b615_68101342', 'hook_before_body_closing_tag');
?>

  </body>

</html>
<?php }
/* {block 'head'} */
class Block_1558224609638b3a75a0c1f3_02426942 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1558224609638b3a75a0c1f3_02426942',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_715771835638b3a75a0eb07_78761853 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_715771835638b3a75a0eb07_78761853',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_706373196638b3a75a0f4c6_30131198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_706373196638b3a75a0f4c6_30131198',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_2105480117638b3a75a0fdb1_16053410 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_2105480117638b3a75a0fdb1_16053410',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		  <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_164828925638b3a75a10694_70176335 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_164828925638b3a75a10694_70176335',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
class Block_1263815120638b3a75a12bf3_17745358 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_1263815120638b3a75a12bf3_17745358',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'breadcrumb'} */
/* {block "left_column"} */
class Block_1974628368638b3a75a135d2_43165298 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_1974628368638b3a75a135d2_43165298',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="left-column" class="sidebar col-xs-12 col-sm-12 col-md-2 col-lg-2">
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

                <?php } else { ?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

                <?php }?>
              </div>
            <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_1648772808638b3a75a15583_74522612 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <p>Hello world! This is HTML5 Boilerplate.</p>
                <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_99203661638b3a75a14d22_44874500 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_99203661638b3a75a14d22_44874500',
  ),
  'content' => 
  array (
    0 => 'Block_1648772808638b3a75a15583_74522612',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="content-wrapper" class="js-content-wrapper left-column right-column col-sm-4 col-md-10 col-lg-10">
	              	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1648772808638b3a75a15583_74522612', "content", $this->tplIndex);
?>

		            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

              </div>
            <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_1948420920638b3a75a16283_27516261 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_1948420920638b3a75a16283_27516261',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="right-column" class="sidebar col-xs-12 col-sm-12 col-md-4 col-lg-3">
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

                <?php } else { ?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

                <?php }?>
              </div>
            <?php
}
}
/* {/block "right_column"} */
/* {block "footer"} */
class Block_1799626381638b3a75a18a70_06908312 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1799626381638b3a75a18a70_06908312',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_1273794823638b3a75a1a950_96137757 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_1273794823638b3a75a1a950_96137757',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_972196996638b3a75a1b615_68101342 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_972196996638b3a75a1b615_68101342',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
