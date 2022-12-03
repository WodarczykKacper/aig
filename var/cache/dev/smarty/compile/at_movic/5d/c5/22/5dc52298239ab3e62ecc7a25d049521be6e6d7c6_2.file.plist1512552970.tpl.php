<?php
/* Smarty version 3.1.43, created on 2022-12-03 13:00:53
  from 'C:\xampp\htdocs\AIG\themes\at_movic\modules\appagebuilder\views\templates\front\profiles\plist1512552970.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638b3a757f6568_30556173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dc52298239ab3e62ecc7a25d049521be6e6d7c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AIG\\themes\\at_movic\\modules\\appagebuilder\\views\\templates\\front\\profiles\\plist1512552970.tpl',
      1 => 1669560713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638b3a757f6568_30556173 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
  <div class="thumbnail-container">
    <div class="product-image">
<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_364182496638b3a757dcf03_79709617', 'product_flags');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154754084638b3a757dee23_89138777', 'product_thumbnail');
?>


</div>
    <div class="product-meta">
<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_968979494638b3a757f51e6_64055072', 'product_name');
?>

<div class="pro-info"></div></div>
  </div>
</article>
<?php }
/* {block 'product_flags'} */
class Block_364182496638b3a757dcf03_79709617 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_364182496638b3a757dcf03_79709617',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<ul class="product-flags">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
	<li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_thumbnail'} */
class Block_154754084638b3a757dee23_89138777 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_154754084638b3a757dee23_89138777',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ((isset($_smarty_tpl->tpl_vars['cfg_product_list_image']->value)) && $_smarty_tpl->tpl_vars['cfg_product_list_image']->value) {?>
	<div class="leo-more-info" data-idproduct="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value)) && (isset($_smarty_tpl->tpl_vars['formAtts']->value['lazyload'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lazyload']) {?>

	    <?php if ($_smarty_tpl->tpl_vars['lmobile_swipe']->value && $_smarty_tpl->tpl_vars['isMobile']->value) {?>
		    <div class="product-list-images-mobile">
		    	<div>
		<?php }?>
			    	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
					  <img
						class="img-fluid lazyOwl"
						src = ""
						data-src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['kwadrat_img']['url'], ENT_QUOTES, 'UTF-8');?>
"
						alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
						data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
						loading="lazy"
					  >
					  <?php if ((isset($_smarty_tpl->tpl_vars['cfg_product_one_img']->value)) && $_smarty_tpl->tpl_vars['cfg_product_one_img']->value) {?>
						<span class="product-additional" data-idproduct="<?php if ($_smarty_tpl->tpl_vars['lmobile_swipe']->value && $_smarty_tpl->tpl_vars['isMobile']->value) {?>0<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');
}?>"></span>
					  <?php }?>
					</a>
		<?php if ($_smarty_tpl->tpl_vars['lmobile_swipe']->value == 1 && $_smarty_tpl->tpl_vars['isMobile']->value) {?>			
				</div>
		    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
			    	<?php if ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'] != $_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url']) {?>
			            <div>
					    	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
			                    <img
			                      class="img-fluid thumb js-thumb <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?> selected <?php }
if ($_smarty_tpl->tpl_vars['aplazyload']->value) {?> lazy<?php }?>"
			                      data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['kwadrat_img']['url'], ENT_QUOTES, 'UTF-8');?>
"
			                      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
			                      title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
			                      loading="lazy"
			                      itemprop="image"
			                    >
			                </a>
						</div>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<div>
		<?php }?>
    <?php } else { ?>
    	<?php if ($_smarty_tpl->tpl_vars['lmobile_swipe']->value == 1 && $_smarty_tpl->tpl_vars['isMobile']->value) {?>
		    <div class="product-list-images-mobile">
		    	<div>
		<?php }?>
		    	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
				  <img
					class="img-fluid"
					src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['kwadrat_img']['url'], ENT_QUOTES, 'UTF-8');?>
"
					alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
					data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
					loading="lazy"
				  >
				  <?php if ((isset($_smarty_tpl->tpl_vars['cfg_product_one_img']->value)) && $_smarty_tpl->tpl_vars['cfg_product_one_img']->value) {?>
					<span class="product-additional" data-idproduct="<?php if ($_smarty_tpl->tpl_vars['lmobile_swipe']->value && $_smarty_tpl->tpl_vars['isMobile']->value) {?>0<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');
}?>"></span>
				  <?php }?>
				</a>

		<?php if ($_smarty_tpl->tpl_vars['lmobile_swipe']->value == 1 && $_smarty_tpl->tpl_vars['isMobile']->value) {?>
				</div>
		    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
			    	<?php if ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'] != $_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url']) {?>
			            <div>
					    	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
			                    <img
			                      class="thumb js-thumb img-fluid <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?> selected <?php }?>"
			                      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['kwadrat_img']['url'], ENT_QUOTES, 'UTF-8');?>
"
			                      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
			                      title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
			                      itemprop="image"
								  loading="lazy"
			                    >
			                </a>
						</div>	
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		<?php }?>
    <?php }
} else { ?>
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail leo-noimage">
 <img class="img-fluid" loading="lazy" <?php if ($_smarty_tpl->tpl_vars['aplazyload']->value) {?>class="lazy" data-src<?php } else { ?>src<?php }?> = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['kwadrat_img']['url'], ENT_QUOTES, 'UTF-8');?>
"
 >
  </a>
<?php }?>
  
<?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_968979494638b3a757f51e6_64055072 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_968979494638b3a757f51e6_64055072',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h3 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3>
<?php
}
}
/* {/block 'product_name'} */
}
