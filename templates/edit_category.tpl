   {include file="header.tpl"}

<div  class="container">

    {* Crear cartel de bienvenida a la edición de categorías. *}

    <section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Panel de edicion Categorías</h1>
    </div>
    </section>  

    {* Crear un formulario que contenga todos los category names en un campo editable. Se debe abrir el form e iterar el arreglo de todas las Categorias. *}
    {* el form enviara el updateCategory, que recargará la pátina con todos los campos editados. *}
    <form action="updateCategories" class="form">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nombre Categoria</th>
                  </tr>
                </thead>
                <tbody>
                  {foreach from=$categories item=category}
                  {* {$products|@print_r} *}
                  <tr>
                      <td>
                          <div class="form-group">
                             <label for="name">{$category->id}</label>
                             <input type="text" name="input_name" class="form-control" id="name"> 
                          </div>
                      </td>
                      <td>
                      <button class="btn-delete">
                          <a href="deleteCategory/{$category->id}">Actualizar</a>
                      </button>
                      </td>
                      <td>
                        <div>
                            <button type="submit" class="btn btn-primary">Aplicar Cambios</button>
                        </div>
                      </td>
                  </tr>
                  {/foreach}
                </tbody>
           </table>
     </form>

    {* Crear otro formulario para agregar categorias - el form recargará la página con la nueva categoria*}

        <form action="addCategory" class="form">
        <h3 class="mb-5">Agregue una nueva categoria</h3>
            <div class="row justify-content-around">
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="input_name" class="form-control" id="name"> 
                    </div>
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
{include file="footer.tpl"}
