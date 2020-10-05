<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-06 00:33:56
  from '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7b9f54869949_39540715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b3a3d2f25e56b26ae0cbff9934f683b4f5bf736' => 
    array (
      0 => '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/detail.tpl',
      1 => 1601937234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7b9f54869949_39540715 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
 <div class="container">
     <div class="row justify-content-center">
        <div class="col-md-8 order-md-1">
    <form action="update/<?php echo $_smarty_tpl->tpl_vars['productDetail']->value[0]->id;?>
" class="form">
        <h3 class="mb-5">Edite el producto seleccionado</h3>
            <div class="row justify-content-around">
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="input_name" class="form-control" id="name"> 
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <input type="text" name="input_description" class="form-control" id="description"> 
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label for="price">Precio</label>
                        <input type="text" name="input_price" class="form-control" id="price"> 
                    </div>
                </div>
                <div class="custom-control custom-checkbox col-md-4 mb-3">
                    <input class="form-check-input" type="radio" name="input_category" id="exampleRadios1" value="1" >
                    <label class="form-check-label" for="exampleRadios1">
                    Producto para Gatos
                    </label>
                </div>
                <div class="custom-control custom-checkbox col-md-4 mb-3">
                    <input class="form-check-input" type="radio" name="input_category" id="exampleRadios1" value="2" >
                    <label class="form-check-label" for="exampleRadios1">
                    Producto para Perros
                    </label>
                </div>
                <div class="custom-control custom-checkbox col-md-4 mb-3">
                    <input class="form-check-input" type="radio" name="input_category" id="exampleRadios1" value="2" >
                    <label class="form-check-label" for="exampleRadios1">
                    Producto para animales Pequeños
                    </label>
                </div>
                <div class="row justify-content-center">
                <div class="custom-control custom-checkbox col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary">Aplicar Cambios</button>
                </div>
                </div>
            </div>
        </div>
        </div>
    </form>
    </div>
    </div>
</div>
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
                      <span class="posted_in"> <strong>Category:</strong> 
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
