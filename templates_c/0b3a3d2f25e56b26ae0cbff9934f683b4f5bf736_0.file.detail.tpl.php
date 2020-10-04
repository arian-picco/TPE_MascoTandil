<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-04 21:36:30
  from '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7a243eb0e883_20544151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b3a3d2f25e56b26ae0cbff9934f683b4f5bf736' => 
    array (
      0 => '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/detail.tpl',
      1 => 1601840178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7a243eb0e883_20544151 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <article class="contenedores-index">
            <h1><?php echo $_smarty_tpl->tpl_vars['productDetail']->value[0]->name;?>
</h1>
            <h2><?php echo $_smarty_tpl->tpl_vars['productDetail']->value[0]->description;?>
</h2>
            <h2><?php echo $_smarty_tpl->tpl_vars['productDetail']->value[0]->price;?>
</h2>
               <section class="guard-pelu-index">
                 <img src="">
            </section>
        </article>
     
 <article class="contenedores-index">
            <h3><a href="store">Volver a la tienda</a></h3>
        </article>
        

  <h2> Actualizar </h2>

        <form action="update/<?php echo $_smarty_tpl->tpl_vars['productDetail']->value[0]->id;?>
">
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

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
