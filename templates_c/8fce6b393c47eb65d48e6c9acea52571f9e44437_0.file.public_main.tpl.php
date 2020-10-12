<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-12 20:24:23
  from '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/public_main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f849f575adf84_66840935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fce6b393c47eb65d48e6c9acea52571f9e44437' => 
    array (
      0 => '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/public_main.tpl',
      1 => 1602527006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_public.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f849f575adf84_66840935 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header_public.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
        <article class="main-body bg-image " style="background-image: url(imagenes/background.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="intro-body">
                  <p class="intro-title-top">Bienvenido
                    <br> Encuentre los mejores productos para su mascota!</p>
                  <h1 class="intro-title mb-4">
                    <span class="color-b">Masco </span> Cuidados
                    <br>Productos para recreación y peluqería</h1>
                  <p class="intro-subtitle intro-price">
                    <a href="store"><span class="price-a">Visite nuestra tienda</span></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </article>
    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
