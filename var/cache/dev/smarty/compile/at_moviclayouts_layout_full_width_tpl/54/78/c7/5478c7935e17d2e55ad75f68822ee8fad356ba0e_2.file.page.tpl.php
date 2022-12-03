<?php
/* Smarty version 3.1.43, created on 2022-12-03 13:00:53
  from 'C:\xampp\htdocs\AIG\themes\at_movic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638b3a759e90a6_30775468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5478c7935e17d2e55ad75f68822ee8fad356ba0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AIG\\themes\\at_movic\\templates\\page.tpl',
      1 => 1664963655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638b3a759e90a6_30775468 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1891511738638b3a759e3fb1_23194932', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_550678512638b3a759e4791_13849981 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_356386629638b3a759e4353_62244469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_550678512638b3a759e4791_13849981', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_369065162638b3a759e7872_18950322 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1949097009638b3a759e7d23_56093995 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_949245887638b3a759e7515_45763275 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_369065162638b3a759e7872_18950322', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1949097009638b3a759e7d23_56093995', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1548066314638b3a759e8775_48101165 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1039079119638b3a759e8464_61936326 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1548066314638b3a759e8775_48101165', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1891511738638b3a759e3fb1_23194932 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1891511738638b3a759e3fb1_23194932',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_356386629638b3a759e4353_62244469',
  ),
  'page_title' => 
  array (
    0 => 'Block_550678512638b3a759e4791_13849981',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_949245887638b3a759e7515_45763275',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_369065162638b3a759e7872_18950322',
  ),
  'page_content' => 
  array (
    0 => 'Block_1949097009638b3a759e7d23_56093995',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1039079119638b3a759e8464_61936326',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1548066314638b3a759e8775_48101165',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_356386629638b3a759e4353_62244469', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_949245887638b3a759e7515_45763275', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1039079119638b3a759e8464_61936326', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
