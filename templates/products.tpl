{include file="header.tpl"}
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
                <input class="form-check-input" type="radio" name="input_category" id="exampleRadios1" value="2" >
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
                    <th scope="col">Categoría</th>
                    <th scope="col">Edicion</th>
                  </tr>
                </thead>
                <tbody>
                  {foreach from=$products item=product}
                  {$products|@print_r}
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
                      <button class="btn-delete">
                          <a href="delete/{$product->id}">Borrar</a>
                      </button>
                      <button class="btn-delete">
                          <a href="detail/{$product->id}">Actualizar</a>
                      </button>
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