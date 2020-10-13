<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-13 21:20:12
  from '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f85fdec2121f9_34314055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b3a3d2f25e56b26ae0cbff9934f683b4f5bf736' => 
    array (
      0 => '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/detail.tpl',
      1 => 1602616810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f85fdec2121f9_34314055 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Bienvenido a la tienda Online - <?php echo $_SESSION['USER_NAME'];?>
</h1>
      <h2 class="lead text-muted">
        Usted ha seleccionado - <?php echo $_smarty_tpl->tpl_vars['productDetail']->value[0]->name;?>

      </h2>
    </div>
  </section>


     <div class="row justify-content-center">
        <div class="col-md-6 ">
    <form action="update/<?php echo $_smarty_tpl->tpl_vars['productDetail']->value[0]->id;?>
" class="form">
        <h3 class="mb-5">Edite el producto seleccionado</h3>
            <div class="row justify-content-around" style="margin:2%;">
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                <div class="custom-control custom-checkbox col-md-4 mb-2">
                    <input class="form-check-input" type="radio" name="input_category" id="exampleRadios1" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
" >
                    <label class="form-check-label" for="exampleRadios1"><?php echo $_smarty_tpl->tpl_vars['category']->value->category_name;?>
</label>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
