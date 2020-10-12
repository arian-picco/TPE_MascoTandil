<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-13 00:04:21
  from '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/errorCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f84d2e54d9be2_22430743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35f8f0c7093ed35f33f5583e12f9195fa062b7d5' => 
    array (
      0 => '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/errorCategory.tpl',
      1 => 1602540250,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f84d2e54d9be2_22430743 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading" style="background-color:pink;">Faltaron campos obligatorios - Por favor vuelva e intente nuevamente</h1>
    </div>
       <p class="lead text-muted">
       Vuelva al  <a href="category_edition"> Panel de edicion </a>
      </p>
  </section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
