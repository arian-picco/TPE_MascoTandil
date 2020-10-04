<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-04 22:28:29
  from '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7a306dc5b041_96731633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7706fac341d6adabc4cb70a8a66cfe906b0712a7' => 
    array (
      0 => '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/products.tpl',
      1 => 1601843307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7a306dc5b041_96731633 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2> Ingrese un nuevo Producto </h2>



        <form action="insert">
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" name="input_name" class="form-control" id="name"> 
    </div>
    <div class="form-group">
        <label for="description">Descripción</label>
        <input type="text" name="input_description" class="form-control" id="description"> 
    </div>
        <div class="form-group">
        <label for="price">Precio</label>
        <input type="text" name="input_price" class="form-control" id="price"> 
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="input_category" id="exampleRadios1" value="1" >
    <label class="form-check-label" for="exampleRadios1">
    Gato
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="input_category" id="exampleRadios1" value="2" >
    <label class="form-check-label" for="exampleRadios1">
    Perro
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="input_category" id="exampleRadios1" value="3" >
    <label class="form-check-label" for="exampleRadios1">
    Animales Pequeños
    </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    <div>
    <h2> Categorias </h2>
    <a href="category/1">Gato</a>
    <a href="category/2">Perro</a>
    <a href="category/3">Animales Pequeños</a>
    <a href="store">Ver Todos</a>
    </div>


    <table>
        <thead>
                <td>Producto</td>
                <td>Descripción</td>
                <td>Precio</td>
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
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </tbody>
        </table>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
