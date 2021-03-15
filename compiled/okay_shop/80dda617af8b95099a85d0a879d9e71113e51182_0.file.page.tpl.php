<?php
/* Smarty version 3.1.38, created on 2021-03-15 06:55:17
  from 'C:\OpenServer\domains\hand-art.loc\design\okay_shop\html\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_604edaa57aba00_18161822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80dda617af8b95099a85d0a879d9e71113e51182' => 
    array (
      0 => 'C:\\OpenServer\\domains\\hand-art.loc\\design\\okay_shop\\html\\page.tpl',
      1 => 1612250296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page_404.tpl' => 1,
  ),
),false)) {
function content_604edaa57aba00_18161822 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value->url == '404') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:page_404.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
	<div class="block">
				<div class="block__header block__header--boxed block__header--border">
			<h1 class="block__heading">
				<span data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php if (htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name_h1, ENT_QUOTES, 'UTF-8', true)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name_h1, ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);
}?></span>
			</h1>
		</div>

				<div class="block block--boxed block--border">
			<div class="block__description"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</div>
		</div>
    </div>
<?php }
}
}
