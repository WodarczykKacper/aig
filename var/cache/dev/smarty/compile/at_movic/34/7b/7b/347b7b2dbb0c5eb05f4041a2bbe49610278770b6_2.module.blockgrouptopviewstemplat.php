<?php
/* Smarty version 3.1.43, created on 2022-12-03 13:00:53
  from 'module:blockgrouptopviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638b3a75c9fba7_70235628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '347b7b2dbb0c5eb05f4041a2bbe49610278770b6' => 
    array (
      0 => 'module:blockgrouptopviewstemplat',
      1 => 1664963654,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638b3a75c9fba7_70235628 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\AIG/themes/at_movic/modules/blockgrouptop/views/templates/hook/blockgrouptop.tpl -->
<!-- Block languages module -->
<div id="leo_block_top" class="popup-over dropdown js-dropdown">
    <a href="javascript:void(0)" data-toggle="dropdown" class="popup-title" title="">
    	<?php if ($_smarty_tpl->tpl_vars['enable_userinfo']->value == 1) {?>
    	<i class="ti-user"></i>
    	<?php } else { ?>
	    <i class="ti-settings icons"></i>
	    <?php }?>
	</a>
	<div class="popup-content dropdown-menu">
		<?php if ($_smarty_tpl->tpl_vars['enable_userinfo']->value == 1) {?>
			<ul class="user-info">
		      	<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
			    <li>
			      <a
			        class="account" 
			        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
			        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
			        rel="nofollow"
			      >
			        <i class="ti-user"></i>
			        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hello','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span>
			      </a>
			    </li>
			    <li>
			      <a
			        class="logout"
			        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
"
			        rel="nofollow"
			        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
			      >
			        <i class="ti-unlock"></i>
			        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
			      </a>
			    </li>
			    <?php } else { ?>
					  <?php if (Configuration::get('LEOQUICKLOGIN_ENABLE')) {?>
				      <li>
				        <a
						class="signin leo-quicklogin"
						data-enable-sociallogin="enable"
						data-type="popup"
						data-layout="login"
						href="javascript:void(0)"
						title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
						rel="nofollow"
				        >
				          <i class="ti-lock"></i>
				          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
				        </a>
				      </li>
				      <li>
				        <a
						class="register leo-quicklogin"
						data-enable-sociallogin="enable"
						data-type="popup"
						data-layout="register"
						href="javascript:void(0)"
						title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
						rel="nofollow"
				        >
				        	<i class="ti-user"></i>
				        	<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
				        </a>
				      </li>
				    <?php } else { ?>
				      <li>
				        <a
						href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
						title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
						rel="nofollow"
				        >
				        	<i class="ti-lock"></i>
				        	<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
				        </a>
				      </li>
				      <li>
				        <a
						href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" 
						title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
						rel="nofollow"
				        >
				        	<i class="ti-user"></i>
				        	<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
				        </a>
				      </li>
				    <?php }?>
			    <?php }?>
			  	<?php if (Configuration::get('LEOFEATURE_ENABLE_PRODUCTWISHLIST')) {?>
			  	  <li>
			        <a
			          	class="btn-wishlist"
				        href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'leofeature','controller'=>'mywishlist'),$_smarty_tpl ) );?>
"
				        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
				        rel="nofollow"
			        >
			        	<i class="ti-heart"></i>
				        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
				  		(<span class="ap-total-wishlist ap-total"></span>)
			        </a>
			      </li>
			  	<?php }?>
			    <?php if (Configuration::get('LEOFEATURE_ENABLE_PRODUCTCOMPARE')) {?>
			    <li>
			        <a
			            class="btn-compare"
			            href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'leofeature','controller'=>'productscompare'),$_smarty_tpl ) );?>
"
			            title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
			            rel="nofollow"
			        >
			            <i class="ti-reload"></i>
			            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
			    		(<span class="ap-total-compare ap-total"></span>)
			        </a>
			    </li>
			    <?php }?>
		    </ul>
		<?php }?>
		<div class="language-selector">
			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
			<ul class="link">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
		          	<li <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> class="current" <?php }?>>
		            	<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl ) );?>
" class="dropdown-item" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
">
		            		<span class="lang-img"><img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['img_lang_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
.jpg" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['iso_code'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" width="16" height="11" /></span>
		            				            		<span class="lang-name"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['iso_code'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
		            	</a>
		          	</li>
		        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
		<div class="currency-selector">
			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
			<ul class="link">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
		        	<li <?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> class="current" <?php }?>>
		          		<a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item">
		          			<span class="cur-code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
</span>
		          			<span class="cur-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
</span>
		          		</a>
		        	</li>
		      	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
	</div>
</div>

<!-- /Block languages module -->
<!-- end C:\xampp\htdocs\AIG/themes/at_movic/modules/blockgrouptop/views/templates/hook/blockgrouptop.tpl --><?php }
}
