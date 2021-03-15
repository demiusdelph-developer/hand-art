<?php
/* Smarty version 3.1.38, created on 2021-03-15 06:55:14
  from 'C:\OpenServer\domains\hand-art.loc\design\okay_shop\html\comparison_informer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_604edaa2d711e7_92608125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '109afb2371f1ae58ac3bc0815741bcab34b54323' => 
    array (
      0 => 'C:\\OpenServer\\domains\\hand-art.loc\\design\\okay_shop\\html\\comparison_informer.tpl',
      1 => 1575033808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604edaa2d711e7_92608125 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['comparison']->value->products) > 0) {?>
    <a class="header_informers__link d-flex align-items-center" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"comparison"),$_smarty_tpl ) );?>
">
        <i class="d-flex align-items-center fa fa-balance-scale"></i>
                <span class="compare_counter"><?php echo count($_smarty_tpl->tpl_vars['comparison']->value->products);?>
</span>
    </a>
<?php } else { ?>
    <div class="header_informers__link d-flex align-items-center">
        <i class="d-flex align-items-center fa fa-balance-scale"></i>
            </div>
<?php }
}
}
