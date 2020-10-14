<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 02:51:57
  from '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f864bad32ffe6_45566174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19776d155901c43bb46a406dd1dfaed2d637b6ed' => 
    array (
      0 => '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/main.tpl',
      1 => 1602630498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f864bad32ffe6_45566174 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <article class="main-body bg-image " style="background-image: url(imagenes/background.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="intro-body">
                  <p class="intro-title-top">Bienvenido  <?php echo $_SESSION['USER_NAME'];?>

                    <br> Encuentre los mejores productos para su mascota!</p>
                  <h1 class="intro-title mb-4">
                    <span class="color-b">Masco </span> Cuidados
                    <br>Productos para recreación y peluqería</h1>
                  <p class="intro-subtitle intro-price">
                    <a href="store" style="text-decoration:none;"><span class="price-a">Visite nuestra tienda</span></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </article>
    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
