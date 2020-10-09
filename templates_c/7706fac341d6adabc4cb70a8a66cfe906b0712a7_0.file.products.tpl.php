<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-09 19:31:47
  from '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f809e830f10a3_12541176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7706fac341d6adabc4cb70a8a66cfe906b0712a7' => 
    array (
      0 => '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/products.tpl',
      1 => 1602264698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f809e830f10a3_12541176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main role="main">
  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Bienvenido a la tienda Online</h1>
      <p class="lead text-muted">
        Encuentre aquí los mejores productos dedicados a su mascota
      </p>
    </div>
  </section>

  <div class="container">
  
    <div class="row justify-content-center">
      <div class="col-md-8 order-md-1">
      <form action="insert" method="post" class="form">
        <h3 class="mb-5">Ingrese un nuevo Producto</h3>
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
            <div class="custom-control custom-checkbox col-md-3 mb-2">
                <input class="form-check-input" type="radio" name="input_category" id="exampleRadios1" value="1" >
                <label class="form-check-label" for="exampleRadios1">
                Producto para Gatos
                </label>
            </div>
            <div class="custom-control custom-checkbox col-md-3 mb-2">
                <input class="form-check-input" type="radio" name="input_category" id="exampleRadios1" value="2" >
                <label class="form-check-label" for="exampleRadios1">
                Producto para Perros
                </label>
            </div>
            <div class="custom-control custom-checkbox col-md-3 mb-2">
                <input class="form-check-input" type="radio" name="input_category" id="exampleRadios1" value="3" >
                <label class="form-check-label" for="exampleRadios1">
                Producto para animales Pequeños
                </label>
            </div>
            <div class="row justify-content-center">
              <div class="custom-control custom-checkbox col-md-12 mb-6">
                  <button type="submit" class="btn btn-primary">Cargar Nuevo Producto</button>
             </div>
            </div>
        </div>
      </div>
    </div>
  </form>
    <div class="row">
        <div class="col-md-12 order-md-1">
            
            <h2> Lista de productos </h2>
            <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
            <div class="collapse navbar-collapse justify-content-md-center">
                <ul class="navbar-nav">
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                    <li class="nav-item"><a class="nav-link" href="category/<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->category_name;?>
</a></li>
                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <li class="nav-item"><a class="nav-link" href="store">Ver Todos</a></li>
                    <li class="nav-item"><a class="nav-link" href="store">Editar Categorías</a></li>
                </ul>
            </div>
            </nav>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Producto</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Edicion</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                    <tr>
                      <td>
                       <a href="detail/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</a>
                      </td>
                      <td>
                        <?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>

                      </td>
                      <td>
                        <?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>

                      </td>
                      <td>
                        <?php echo $_smarty_tpl->tpl_vars['product']->value->cat_name;?>

                      </td>
                      <td>
                      <button class="btn-delete">
                          <a href="delete/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">Borrar</a>
                      </button>
                      <button class="btn-delete">
                          <a href="detail/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">Actualizar</a>
                      </button>
                                            </td>
                  </tr>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
              </table>
        </div>
    </div>

  </div>
</main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
