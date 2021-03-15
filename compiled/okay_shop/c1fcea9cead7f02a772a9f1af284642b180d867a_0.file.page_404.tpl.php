<?php
/* Smarty version 3.1.38, created on 2021-03-15 06:55:17
  from 'C:\OpenServer\domains\hand-art.loc\design\okay_shop\html\page_404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_604edaa58c3bc7_18485462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1fcea9cead7f02a772a9f1af284642b180d867a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\hand-art.loc\\design\\okay_shop\\html\\page_404.tpl',
      1 => 1580286402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 1,
  ),
),false)) {
function content_604edaa58c3bc7_18485462 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="block">
    <div class="container">
        <div class="not_found">
            <div class="not_found__image">
                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"404_icon"), 0, false);
?>
            </div>
            <div class="not_found__description">
                <?php echo $_smarty_tpl->tpl_vars['description']->value;?>

            </div>
            <div class="not_found__menu">
                <?php echo $_smarty_tpl->tpl_vars['menu_404']->value;?>

            </div>
        </div>
    </div>
</div><?php }
}
