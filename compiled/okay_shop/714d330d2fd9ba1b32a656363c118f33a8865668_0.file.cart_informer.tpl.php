<?php
/* Smarty version 3.1.38, created on 2021-03-15 06:55:14
  from 'C:\OpenServer\domains\hand-art.loc\design\okay_shop\html\cart_informer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_604edaa2deadd2_93386229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '714d330d2fd9ba1b32a656363c118f33a8865668' => 
    array (
      0 => 'C:\\OpenServer\\domains\\hand-art.loc\\design\\okay_shop\\html\\cart_informer.tpl',
      1 => 1580286402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604edaa2deadd2_93386229 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['cart']->value->isEmpty === false) {?>
    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'cart'),$_smarty_tpl ) );?>
" class="header_informers__link d-flex align-items-center">
        <i class="d-flex align-items-center fa fa-shopping-cart"></i>
        <span class="cart_counter"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
</span>
            </a>
<?php } else { ?>
    <div class="header_informers__link d-flex align-items-center">
        <i class="d-flex align-items-center fa fa-shopping-cart"></i>
        <span class="cart_counter"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
</span>
            </div>
<?php }
}
}
