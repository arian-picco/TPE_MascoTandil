<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-09 21:48:09
  from '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/edit_category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f80be793f2959_23499429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91a5a957f7897af9eb973d7d71c81cfeaf33b758' => 
    array (
      0 => '/opt/lampp/htdocs/SegundoCuatrimestre/TPE/templates/edit_category.tpl',
      1 => 1602272849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f80be793f2959_23499429 (Smarty_Internal_Template $_smarty_tpl) {
?>   <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div  class="container">



    <section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Panel de edicion Categorías</h1>
    </div>
    </section>  

  
    <form action="updateCategories" class="form" method="post">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col"> Editar Nombre</th>
                  </tr>

                </thead>
                <tbody>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                    <tr>
                      <td>
                          <div class="form-group">
                            <input type="text" name="input_name" class="form-control" id="name" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->category_name;?>
"> 
                          </div>
                      </td>
                      <td>
                        <div class="form-group" style="visibility:hidden">
                          <input type="int" name="input_id" class="form-control" id="name" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
"> 
                        </div>
                      </td>
                      <td>
                      <button class="btn-delete">
                          <a href="deleteCategory/<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
">Borrar</a>
                      </button>
                      </td>
                      <td>
                        <div>
                            <button type="submit" class="btn btn-primary">Aplicar Cambios</button>
                        </div>
                      </td>
                  </tr>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
           </table>
     </form>


        <form action="addCategory" class="form">
        <h3 class="mb-5">Agregue una nueva categoria</h3>
            <div class="row justify-content-around">
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="input_name" class="form-control" id="name"> 
                    </div>
                </div>
                
                <div class="custom-control custom-checkbox col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary">Aplicar Cambios</button>
                </div>
        
            </div>
        </div>
        </div>
    </form>

      


</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
