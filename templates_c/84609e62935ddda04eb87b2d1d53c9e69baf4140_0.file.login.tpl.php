<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-07 01:35:21
  from '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7cff39870722_62404450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84609e62935ddda04eb87b2d1d53c9e69baf4140' => 
    array (
      0 => '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/login.tpl',
      1 => 1602027127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7cff39870722_62404450 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main>
    <div class="container">
    <div class="body-login">
    <div class="row">
    <form action="verify_user" class="form" method="post">
        <h3 class="mb-5">Ingrese nombre de usuario y contraseña</h3>
            <div class="row justify-content-between">
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label for="name">Usuario</label>
                        <input type="text" name="input_name" class="form-control" id="name"> 
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label for="description">Contraseña</label>
                        <input type="text" name="input_description" class="form-control" id="description"> 
                    </div>
                </div>
            </div>
              <div class="row justify-content-center">
            <div class="custom-control custom-checkbox col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary">Ingresar</button>
            </div>
              </div>
    </form>
    </div>
      </div>
</div>
 </main>   
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
