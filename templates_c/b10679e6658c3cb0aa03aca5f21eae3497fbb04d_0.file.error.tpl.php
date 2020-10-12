<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-13 00:25:00
  from '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f84d7bc01af06_19949182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b10679e6658c3cb0aa03aca5f21eae3497fbb04d' => 
    array (
      0 => '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/error.tpl',
      1 => 1602540021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f84d7bc01af06_19949182 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading" style="background-color:pink;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h1>
    </div>
       <p class="lead text-muted">
       Vuelva a la  <a href="store"> tienda </a>
      </p>
  </section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
