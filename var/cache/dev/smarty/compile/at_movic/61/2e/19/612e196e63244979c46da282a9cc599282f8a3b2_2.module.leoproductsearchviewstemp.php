<?php
/* Smarty version 3.1.43, created on 2022-12-03 13:00:53
  from 'module:leoproductsearchviewstemp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638b3a75c55932_67612085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '612e196e63244979c46da282a9cc599282f8a3b2' => 
    array (
      0 => 'module:leoproductsearchviewstemp',
      1 => 1664963652,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638b3a75c55932_67612085 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'lps_categories' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\AIG\\var\\cache\\dev\\smarty\\compile\\at_movic\\61\\2e\\19\\612e196e63244979c46da282a9cc599282f8a3b2_2.module.leoproductsearchviewstemp.php',
    'uid' => '612e196e63244979c46da282a9cc599282f8a3b2',
    'call_name' => 'smarty_template_function_lps_categories_143323259638b3a75c41743_78375721',
  ),
));
?><!-- begin C:\xampp\htdocs\AIG/modules/leoproductsearch/views/templates/front/leosearch_top.tpl -->


<!-- Block search module -->
<div id="leo_search_block_top" class="block exclusive<?php if ($_smarty_tpl->tpl_vars['en_search_by_cat']->value) {?> search-by-category<?php }?>">
	<h4 class="title_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search here...','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
</h4>
		<form method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('productsearch',true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" id="leosearchtopbox" data-label-suggestion="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suggestion','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
" data-search-for="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search for','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
" data-in-category="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'in category','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
" data-products-for="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products For','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
" data-label-products="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
" data-view-all="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
">
		<input type="hidden" name="fc" value="module" />
		<input type="hidden" name="module" value="leoproductsearch" />
		<input type="hidden" name="controller" value="productsearch" />
		<input type="hidden" name="txt_not_found" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products found','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
">
                <input type="hidden" name="leoproductsearch_static_token" value="<?php echo htmlspecialchars(stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['leoproductsearch_static_token']->value,'htmlall','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
"/>
		    	<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search products:','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
</label>
		<div class="block_content clearfix leoproductsearch-content">
			<?php if ($_smarty_tpl->tpl_vars['en_search_by_cat']->value) {?>		
				<div class="list-cate-wrapper">
					<input id="leosearchtop-cate-id" name="cate" value="<?php if ((isset($_smarty_tpl->tpl_vars['selectedCate']->value))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['selectedCate']->value, ENT_QUOTES, 'UTF-8');
}?>" type="hidden">
					<a href="javascript:void(0)" id="dropdownListCateTop" class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span><?php if ($_smarty_tpl->tpl_vars['selectedCateName']->value != '') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['selectedCateName']->value, ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Categories','mod'=>'leoproductsearch'),$_smarty_tpl ) );
}?></span>
						<i class="material-icons pull-xs-right">keyboard_arrow_down</i>
					</a>
					<div class="list-cate dropdown-menu" aria-labelledby="dropdownListCateTop">
						<a href="#" data-cate-id="" data-cate-name="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Categories','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
" class="cate-item<?php if ($_smarty_tpl->tpl_vars['selectedCate']->value == '') {?> active<?php }?>" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Categories','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
</a>				
						<a href="#" data-cate-id="<?php echo htmlspecialchars(stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cates']->value['id_category'],'htmlall','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" data-cate-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cates']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="cate-item cate-level-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cates']->value['level_depth'], ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['selectedCate']->value)) && $_smarty_tpl->tpl_vars['cates']->value['id_category'] == $_smarty_tpl->tpl_vars['selectedCate']->value) {?> active<?php }?>" ><?php if ($_smarty_tpl->tpl_vars['cates']->value['level_depth'] > 1) {
echo htmlspecialchars(str_repeat('-',$_smarty_tpl->tpl_vars['cates']->value['level_depth']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['cates']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
						<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'lps_categories', array('nodes'=>$_smarty_tpl->tpl_vars['cates']->value['children']), true);?>

					</div>
				</div>
			<?php }?>
			<div class="leoproductsearch-result">
				<div class="leoproductsearch-loading cssload-speeding-wheel"></div>
				<input class="search_query form-control grey" type="text" id="leo_search_query_top" name="search_query" data-content='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['placeholder']->value, ENT_QUOTES, 'UTF-8');?>
' value="<?php echo htmlspecialchars(stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_query']->value,'htmlall','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
"/>
				<div class="ac_results lps_results"></div>
			</div>
			<button type="submit" id="leo_search_top_button" class="btn btn-default button button-small"><span><i class="material-icons search">search</i></span></button> 
		</div>
	</form>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var blocksearch_type = 'top';
<?php echo '</script'; ?>
>
<!-- /Block search module -->
<!-- end C:\xampp\htdocs\AIG/modules/leoproductsearch/views/templates/front/leosearch_top.tpl --><?php }
/* smarty_template_function_lps_categories_143323259638b3a75c41743_78375721 */
if (!function_exists('smarty_template_function_lps_categories_143323259638b3a75c41743_78375721')) {
function smarty_template_function_lps_categories_143323259638b3a75c41743_78375721(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if (count($_smarty_tpl->tpl_vars['nodes']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
?><a href="#" data-cate-id="<?php echo htmlspecialchars(stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['id_category'],'htmlall','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" data-cate-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="cate-item cate-level-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['level_depth'], ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['selectedCate']->value)) && $_smarty_tpl->tpl_vars['node']->value['id_category'] == $_smarty_tpl->tpl_vars['selectedCate']->value) {?> active<?php }?>" ><?php if ($_smarty_tpl->tpl_vars['node']->value['level_depth'] > 1) {
echo htmlspecialchars(str_repeat('-',$_smarty_tpl->tpl_vars['node']->value['level_depth']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'lps_categories', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}}
/*/ smarty_template_function_lps_categories_143323259638b3a75c41743_78375721 */
}
