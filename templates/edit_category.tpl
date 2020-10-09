   {include file="header.tpl"}

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
                  {foreach from=$categories item=category}
                  {* {$categories|@print_r} *}
                  <tr>
                      <td>
                          <div class="form-group">
                            <input type="text" name="input_name" class="form-control" id="name" value="{$category->category_name}"> 
                          </div>
                      </td>
                      <td>
                        <div class="form-group" style="visibility:hidden">
                          <input type="int" name="input_id" class="form-control" id="name" value="{$category->id}"> 
                        </div>
                      </td>
                      <td>
                      <button class="btn-delete">
                          <a href="deleteCategory/{$category->id}">Borrar</a>
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
{include file="footer.tpl"}
