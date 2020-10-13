<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-13 22:15:54
  from '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/products_public.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f860afa22e738_81266459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6c7c37e936e6960ce0d213941f6548ef6d7e05a' => 
    array (
      0 => '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/products_public.tpl',
      1 => 1602620086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_public.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f860afa22e738_81266459 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header_public.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
   
    <div class="row product-table">
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
