<?php
/* Smarty version 3.1.38, created on 2021-03-15 06:55:14
  from 'C:\OpenServer\domains\hand-art.loc\design\okay_shop\html\wishlist_informer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_604edaa2cf14b5_53272467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7d1dc8b9dc8865a0593036aa850c04a4779ecb2' => 
    array (
      0 => 'C:\\OpenServer\\domains\\hand-art.loc\\design\\okay_shop\\html\\wishlist_informer.tpl',
      1 => 1575033808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604edaa2cf14b5_53272467 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['wishlist']->value->products) > 0) {?>
    <a class="header_informers__link d-flex align-items-center" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"wishlist"),$_smarty_tpl ) );?>
">
        <i class="d-flex align-items-center fa fa-heart-o"></i>
                <span class="wishlist_counter"><?php echo count($_smarty_tpl->tpl_vars['wishlist']->value->products);?>
</span>
    </a>
<?php } else { ?>
    <span class="header_informers__link d-flex align-items-center">
        <i class="d-flex align-items-center fa fa-heart-o"></i>
            </span>
<?php }
}
}
