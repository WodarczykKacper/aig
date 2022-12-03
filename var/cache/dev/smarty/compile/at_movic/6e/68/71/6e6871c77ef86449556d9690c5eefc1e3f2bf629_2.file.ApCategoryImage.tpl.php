<?php
/* Smarty version 3.1.43, created on 2022-12-03 13:00:53
  from 'C:\xampp\htdocs\AIG\modules\appagebuilder\views\templates\hook\ApCategoryImage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638b3a75949256_72197350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e6871c77ef86449556d9690c5eefc1e3f2bf629' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AIG\\modules\\appagebuilder\\views\\templates\\hook\\ApCategoryImage.tpl',
      1 => 1664963651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638b3a75949256_72197350 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'apmenu' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\AIG\\var\\cache\\dev\\smarty\\compile\\at_movic\\6e\\68\\71\\6e6871c77ef86449556d9690c5eefc1e3f2bf629_2.file.ApCategoryImage.tpl.php',
    'uid' => '6e6871c77ef86449556d9690c5eefc1e3f2bf629',
    'call_name' => 'smarty_template_function_apmenu_631497378638b3a75926f36_68526740',
  ),
));
?><!-- @file modules\appagebuilder\views\templates\hook\ApCategoryImage -->


<?php if ((isset($_smarty_tpl->tpl_vars['categories']->value))) {?>
<div class="widget-category_image block <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['class']))) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>">
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>
	<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])) && !empty($_smarty_tpl->tpl_vars['formAtts']->value['title'])) {?>
	<h4 class="title_block">
		<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

	</h4>
	<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
        <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
    <?php }?>
	<div class="block_content">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'cate', false, 'key');
$_smarty_tpl->tpl_vars['cate']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['cate']->value) {
$_smarty_tpl->tpl_vars['cate']->do_else = false;
?>
			<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'apmenu', array('data'=>$_smarty_tpl->tpl_vars['cate']->value), true);?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<div id="view_all_wapper_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['random']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="view_all_wapper hide">
			<a class="btn btn-primary view_all" href="javascript:void(0)"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
		</div> 
	</div>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
</div>
<?php }
echo '<script'; ?>
 type="text/javascript">
 
	ap_list_functions.push(function(){
		$(".view_all_wapper").hide();
		var limit = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['limit']), ENT_QUOTES, 'UTF-8');?>
;
		var level = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['cate_depth']), ENT_QUOTES, 'UTF-8');?>
 - 1;
		$("ul.ul-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['random']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
, ul.ul-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['random']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 ul").each(function(){
			var element = $(this).find(">li").length;
			var count = 0;
			$(this).find(">li").each(function(){
				count = count + 1;
				if(count > limit){
					// $(this).remove();
					$(this).hide();
				}
			});
			if(element > limit) {
				view = $(".view_all","#view_all_wapper_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['random']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
").clone(1);
				// view.appendTo($(this).find("ul.level" + level));
				view.appendTo($(this));
				var href = $(this).closest("li").find('a:first-child').attr('href');
				$(view).attr("href", href);
			}
		})
	});

<?php echo '</script'; ?>
><?php }
/* smarty_template_function_apmenu_631497378638b3a75926f36_68526740 */
if (!function_exists('smarty_template_function_apmenu_631497378638b3a75926f36_68526740')) {
function smarty_template_function_apmenu_631497378638b3a75926f36_68526740(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

<ul class="level<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['level']->value), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['level']->value == 0) {?> ul-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['random']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
	<?php if ((isset($_smarty_tpl->tpl_vars['category']->value['children'])) && is_array($_smarty_tpl->tpl_vars['category']->value['children'])) {?>
	<li class="cate_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['category']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
" >
		<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category'],$_smarty_tpl->tpl_vars['category']->value['link_rewrite']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
			<span class="cate_content">
				<span class="cover-img">
					<?php if ((isset($_smarty_tpl->tpl_vars['category']->value['image']))) {?>
					<img class="img-fluid<?php if ($_smarty_tpl->tpl_vars['aplazyload']->value) {?> lazy<?php }?>" <?php if ($_smarty_tpl->tpl_vars['aplazyload']->value) {?>data-src<?php } else { ?>src<?php }?>='<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value["image"],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
' alt='<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value["name"],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
' 
						 <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['showicons'] == 0 || ($_smarty_tpl->tpl_vars['level']->value > 0 && $_smarty_tpl->tpl_vars['formAtts']->value['showicons'] == 2)) {?> style="display:none"<?php }?> loading="lazy"/>
					<?php }?>
				</span>
				<span class="cat_name"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
			</span>
		</a>
		<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'apmenu', array('data'=>$_smarty_tpl->tpl_vars['category']->value['children'],'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

	</li>
	<?php } else { ?>
	<li class="cate_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['category']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
">
		<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category'],$_smarty_tpl->tpl_vars['category']->value['link_rewrite']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
			<span class="cate_content">
				<span class="cover-img">
					<?php if ((isset($_smarty_tpl->tpl_vars['category']->value['image']))) {?>
					<img class="img-fluid<?php if ($_smarty_tpl->tpl_vars['aplazyload']->value) {?> lazy<?php }?>" <?php if ($_smarty_tpl->tpl_vars['aplazyload']->value) {?>data-src<?php } else { ?>src<?php }?>='<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value["image"],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
' alt='<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value["name"],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
' 
						 <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['showicons'] == 0 || ($_smarty_tpl->tpl_vars['level']->value > 0 && $_smarty_tpl->tpl_vars['formAtts']->value['showicons'] == 2)) {?> style="display:none"<?php }?> loading="lazy"/>
					<?php }?>
				</span>
				<span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
			</span>
		</a>
	</li>
	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php
}}
/*/ smarty_template_function_apmenu_631497378638b3a75926f36_68526740 */
}
