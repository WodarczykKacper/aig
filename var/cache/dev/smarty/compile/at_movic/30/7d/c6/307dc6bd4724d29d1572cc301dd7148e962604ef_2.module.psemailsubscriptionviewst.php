<?php
/* Smarty version 3.1.43, created on 2022-12-03 13:00:53
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638b3a75d41f22_78049062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1664963654,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638b3a75d41f22_78049062 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\AIG/themes/at_movic/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl -->
<div class="block_newsletter block"  id="blockEmailSubscription_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
">
  <h3 class="title_block" id="block-newsletter-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Newsletter signup','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>
  <div class="block_content">
    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
#blockEmailSubscription_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">
      <div class="row">
        <div class="col-xs-12 col-conditions">
            <?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
              <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>
        </div>
        <div class="col-xs-12 col-form">
          <div class="input-wrapper">
            <input
              name="email"
              type="text"
              value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
              placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email...','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
"
              aria-labelledby="block-newsletter-label"
            >
            <button
              class="btn btn-outline float-xs-right"
              name="submitNewsletter"
              type="submit"
              value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            >
              <i class="ti-arrow-right"></i></span>
              <span class="hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
            </button>
          </div>
          <input type="hidden" name="action" value="0">
          <div class="clearfix"></div>
        </div>
        <div class="col-xs-12 col-mesg">
          <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
            <p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

            </p>
          <?php }?>
	  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNewsletterRegistration'),$_smarty_tpl ) );?>

          <?php if ((isset($_smarty_tpl->tpl_vars['id_module']->value))) {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

          <?php }?>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- end C:\xampp\htdocs\AIG/themes/at_movic/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl --><?php }
}
