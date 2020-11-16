{include file="header.tpl"}

<main role="main">
  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Bienvenido a la tienda Online -  {$smarty.session.USER_NAME}</h1>
      <p class="lead text-muted">
        Encuentre aquí los mejores productos dedicados a su mascota
      </p>
    </div>
  </section>

  <div class="container">
      {if {$smarty.session.IS_ADMIN} == 1}
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
            {foreach from=$categories item=category}
            <div class="custom-control custom-checkbox col-md-3 mb-2">
                <input class="form-check-input" type="radio" name="input_category" id="exampleRadios1" value="{$category->id}" >
                <label class="form-check-label" for="exampleRadios1">{$category->category_name}</label>
            </div>
            {/foreach}
            <div class="row justify-content-center">
              <div class="custom-control custom-checkbox col-md-12 mb-6">
                  <button type="submit" class="btn btn-primary">Cargar Nuevo Producto</button>
                 {if isset($error)}
                <div class="alert alert-danger">
                  {$error}
                </div>
              {/if}
             </div>
          </div>
           </form>
        </div>
       </div>
    </div>
     {/if}

    <div class="row product-table">
        <div class="col-md-12 order-md-1">
            
            <h2> Lista de productos </h2>
            <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
            <div class="collapse navbar-collapse justify-content-md-center">
                <ul class="navbar-nav">
                 {foreach from=$categories item=category}
                    <li class="nav-item"><a class="nav-link" href="category/{$category->id}">{$category->category_name}</a></li>
                 {/foreach}
                    <li class="nav-item"><a class="nav-link" href="store">Ver Todos</a></li>
                       {if {$smarty.session.IS_ADMIN} == 1}
                    <li class="nav-item"><a class="nav-link" href="category_edition"><span style="color:red">Editar Categorías</span></a></li>
                     {/if}
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
                    {if {$smarty.session.IS_ADMIN} == 1}
                    <th scope="col">Edicion</th>
                    {/if}
                  </tr>
                </thead>
                <tbody>
                  {foreach from=$products item=product}
                  {* {$products|@print_r} *}
                  <tr>
                      <td>
                       <a href="detail/{$product->id}">{$product->name}</a>
                      </td>
                      <td>
                        {$product->description}
                      </td>
                      <td>
                        {$product->price}
                      </td>
                      <td>
                        {$product->cat_name}
                      </td>
                      <td>
                       {if {$smarty.session.IS_ADMIN} == 1}
                      <button class="btn-delete">
                          <a href="delete/{$product->id}">Borrar</a>
                      </button>
                      <button class="btn-delete">
                          <a href="detail/{$product->id}">Actualizar</a>
                      </button>
                        </td>
                      {/if}
                  </tr>
              {/foreach}
                </tbody>
              </table>
        </div>
    </div>

  </div>
</main>
{include file="footer.tpl"}