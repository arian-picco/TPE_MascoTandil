<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-12 20:24:30
  from '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/detail_public.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f849f5e426c62_74345211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '849aac4a87438bde121c335222ab92d24e9442c8' => 
    array (
      0 => '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/detail_public.tpl',
      1 => 1602527027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_public.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f849f5e426c62_74345211 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header_public.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Bienvenido a la tienda Online - Modo Editor</h1>
      <h2 class="lead text-muted">
        Usted ha seleccionado - <?php echo $_smarty_tpl->tpl_vars['productDetail']->value[0]->name;?>

      </h2>
    </div>
  </section>

<div class="container">
    <div class="col-md-12 mb-3">
    <section class="panel">
          <div class="panel-body">
          <div class="row">
              <div class="col-md-6">
                  <div class="pro-img-details">
                      <img src="imagenes/<?php echo $_smarty_tpl->tpl_vars['productDetail']->value[0]->id_category;?>
.png">
                  </div>
              </div>
              <div class="col-md-6">
                  <h4 class="pro-d-title">
                    <?php echo $_smarty_tpl->tpl_vars['productDetail']->value[0]->name;?>

                  </h4>
                  <p>
                    <?php echo $_smarty_tpl->tpl_vars['productDetail']->value[0]->description;?>

                  </p>
                                    <div class="product_meta">
                      <span class="posted_in"> <strong>Category:<?php echo $_smarty_tpl->tpl_vars['productDetail']->value[0]->cat_name;?>
</strong> 
                  </div>
                  <div class="m-bot15"> <strong>Price : </strong> <span class="amount-old"><?php echo $_smarty_tpl->tpl_vars['productDetail']->value[0]->price;?>
</span></div>
                   <p>
                    <a href="store"><button class="btn btn-round btn-danger" type="button">Volver a la tienda</button></a>
                  </p>
              </div>
          </div>
        </div>
      </section>
      </div>

</div>

 


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
