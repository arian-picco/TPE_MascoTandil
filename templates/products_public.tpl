{include 'header_public.tpl'}
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
                 {foreach from=$categories item=category}
                    <li class="nav-item"><a class="nav-link" href="category/{$category->id}">{$category->category_name}</a></li>
                 {/foreach}
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
                  </tr>
              {/foreach}
                </tbody>
              </table>
        </div>
    </div>

  </div>
</main>
{include file="footer.tpl"}