<?php
/* Smarty version 3.1.38, created on 2021-03-15 06:55:14
  from 'C:\OpenServer\domains\hand-art.loc\design\okay_shop\html\switcher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_604edaa2a45cc0_56127408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd336ef2bf91397aea3d4b5323e307da5bf961929' => 
    array (
      0 => 'C:\\OpenServer\\domains\\hand-art.loc\\design\\okay_shop\\html\\switcher.tpl',
      1 => 1605186114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604edaa2a45cc0_56127408 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
	<?php $_smarty_tpl->_assignInScope('cnt', 0);?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'ln');
$_smarty_tpl->tpl_vars['ln']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ln']->value) {
$_smarty_tpl->tpl_vars['ln']->do_else = false;
?>
		<?php if ($_smarty_tpl->tpl_vars['ln']->value->enabled) {?>
			<?php $_smarty_tpl->_assignInScope('cnt', $_smarty_tpl->tpl_vars['cnt']->value+1);?>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php if ($_smarty_tpl->tpl_vars['cnt']->value > 1) {?>
		<div class="switcher__item d-flex align-items-center switcher__language">
			<div class="switcher__visible d-flex align-items-center">
				<?php if (is_file(((string)$_smarty_tpl->tpl_vars['config']->value->lang_images_dir).((string)$_smarty_tpl->tpl_vars['language']->value->label).".png")) {?>
					<img alt="<?php echo $_smarty_tpl->tpl_vars['language']->value->current_name;?>
" width="20" src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( (((string)$_smarty_tpl->tpl_vars['language']->value->label).".png"),20,20,false,$_smarty_tpl->tpl_vars['config']->value->lang_resized_dir ));?>
'/>
				<?php }?>
				<span class="switcher__name hidden-xs-up"><?php echo $_smarty_tpl->tpl_vars['language']->value->name;?>
</span>
				<span class="switcher__name"><?php echo $_smarty_tpl->tpl_vars['language']->value->label;?>
</span>
			</div>
			<div class="switcher__hidden">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['l']->value->enabled) {?>
						<a class="switcher__link d-flex align-items-center <?php if ($_smarty_tpl->tpl_vars['language']->value->id == $_smarty_tpl->tpl_vars['l']->value->id) {?> active<?php }?>" href="<?php echo preg_replace('/^(.+)\/$/','$1',$_smarty_tpl->tpl_vars['l']->value->url);?>
">
							<?php if (is_file(((string)$_smarty_tpl->tpl_vars['config']->value->lang_images_dir).((string)$_smarty_tpl->tpl_vars['l']->value->label).".png")) {?>
								<img alt="<?php echo $_smarty_tpl->tpl_vars['l']->value->current_name;?>
" width="20" src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( (((string)$_smarty_tpl->tpl_vars['l']->value->label).".png"),20,20,false,$_smarty_tpl->tpl_vars['config']->value->lang_resized_dir ));?>
'/>
							<?php }?>
							<span class="switcher__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
							<span class="switcher__name hidden-xl-up"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value->label, ENT_QUOTES, 'UTF-8', true);?>
</span>
						</a>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</div>
	<?php }
}?>

<?php if (count($_smarty_tpl->tpl_vars['currencies']->value) > 1) {?>
	<div class="switcher__item d-flex align-items-center switcher__currencies">
		<div class="switcher__visible">
			<span class="switcher__name hidden-lg-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
			<span class="switcher__name hidden-xl-up"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
		</div>
		<div class="switcher__hidden">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['c']->value->enabled) {?>
					<form method="POST">
						<button type="submit" name="prg_seo_hide" class="switcher__link d-flex align-items-center <?php if ($_smarty_tpl->tpl_vars['currency']->value->id == $_smarty_tpl->tpl_vars['c']->value->id) {?> active<?php }?>" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('currency_id'=>$_smarty_tpl->tpl_vars['c']->value->id),$_smarty_tpl ) );?>
">
							<span class="switcher__name hidden-lg-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
							<span class="switcher__name hidden-xl-up"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
						</button>
					</form>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
<?php }
}
}
