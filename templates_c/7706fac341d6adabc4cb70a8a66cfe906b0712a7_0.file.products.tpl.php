<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-05 00:49:21
  from '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7a517153d593_74180070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7706fac341d6adabc4cb70a8a66cfe906b0712a7' => 
    array (
      0 => '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/products.tpl',
      1 => 1601851759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7a517153d593_74180070 (Smarty_Internal_Template $_smarty_tpl) {
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
  <form action="insert" method="post">
    <div class="row">
      <div class="col-md-12 order-md-1">
        <h3 class="mb-3">Ingrese un nuevo Producto</h3>
        <div class="row">
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
            <div class="custom-control custom-checkbox col-md-12 mb-2">
                <input class="form-check-input" type="radio" name="input_category" id="exampleRadios1" value="1" >
                <label class="form-check-label" for="exampleRadios1">
                Producto para Gatos
                </label>
            </div>
            <div class="custom-control custom-checkbox col-md-12 mb-2">
                <input class="form-check-input" type="radio" name="input_category" id="exampleRadios1" value="2" >
                <label class="form-check-label" for="exampleRadios1">
                Producto para Perros
                </label>
            </div>
            <div class="custom-control custom-checkbox col-md-12 mb-2">
                <input class="form-check-input" type="radio" name="input_category" id="exampleRadios1" value="2" >
                <label class="form-check-label" for="exampleRadios1">
                Producto para animales Pequeños
                </label>
            </div>
            <div class="custom-control custom-checkbox col-md-12 mb-3">
                <button type="submit" class="btn btn-primary">Cargar</button>
            </div>
        </div>
      </div>
    </div>
  </form>
    <div class="row">
        <div class="col-md-12 order-md-1">
            
            <h2> Categorias </h2>
            <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
            <div class="collapse navbar-collapse justify-content-md-center">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="category/1">Gato</a></li>
                    <li class="nav-item"><a class="nav-link" href="category/2">Perro</a></li>
                    <li class="nav-item"><a class="nav-link" href="category/3">Animales Pequeños</a></li>
                    <li class="nav-item"><a class="nav-link" href="store">Ver Todos</a></li>
                </ul>
            </div>
            </nav>

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Producto</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio</th>
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
