<?php
/* Smarty version 3.1.38, created on 2021-03-15 06:55:09
  from 'C:\OpenServer\domains\hand-art.loc\Okay\Modules\OkayCMS\FastOrder\design\html\fast_order_btn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_604eda9db844e2_32694702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '250af741a138ef4ff614e786268abd8b87ffd0b3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\hand-art.loc\\Okay\\Modules\\OkayCMS\\FastOrder\\design\\html\\fast_order_btn.tpl',
      1 => 1605186114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604eda9db844e2_32694702 (Smarty_Internal_Template $_smarty_tpl) {
?><a class="fn_fast_order_button fast_order_button fa fa-rocket fn_is_stock"
   href="#fast_order" <?php if ($_smarty_tpl->tpl_vars['fastOrderProduct']->value->variant->stock < 1 && !$_smarty_tpl->tpl_vars['settings']->value->is_preorder) {?>style="display: none" <?php }?>
   title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->fast_order;?>
" data-language="fast_order" data-name="<?php echo $_smarty_tpl->tpl_vars['fast_order_product_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->fast_order;?>

</a><?php }
}
