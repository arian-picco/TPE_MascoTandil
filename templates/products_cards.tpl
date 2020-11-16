{include file="header_public.tpl"}		

 <main role="main">		
   <section class="jumbotron text-center">		
       <div class="container">		
           <h1 class="jumbotron-heading">Bienvenido a la tienda Online</h1>		
           <p class="lead text-muted"> Encuentre aquí los mejores productos dedicados a su mascota</p>		
       </div>		
   </section>		
  </main>		


<main class="main-container">

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



              <div class="container">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-md-center" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">Productos</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        Categorias
                      </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            {foreach from=$categories item=category}
                            <a class="dropdown-item" href="category/{$category->id}">{$category->category_name}</a>
                            {/foreach}
                            <a class="dropdown-item" href="store">Ver Todos</a>
                        </div>
                    </li>
                    {if {$smarty.session.IS_ADMIN} == 1}
                    <li class="nav-item"><a class="nav-link" href="category_edition">
                    <span style="color:red">Editar Categorías</span></a>
                    </li>
                    {/if}

                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
              </div>
            </nav>
            </div>


    <div class="album py-5 bg-light">		
      <div class="container">		
        <div class="row">		
                 {foreach from=$products item=product}		
               <div class="col-md-4">		
                   <div class="card card mb-4 shadow-sm"    style="min-width: 300px; max-width:450px !important;  min-height: 550px; max-height:550px !important;" >		
                     <img class="card-img-top"  src="imagenes/{$product->cat_id}.png" alt="Card image cap">		
                     {* {$products|@print_r} *}
                       <div class="card-body">		
                           <h5 class="card-title"><a href="detail/{$product->id}">{$product->name}</a></h5>		
                           <p class="card-text">{$product->description} - precio: {$product->price} categoría:</p>		
                           {if {$smarty.session.IS_ADMIN} == 1}
                             <button class="btn btn-sm btn-outline-secondary">		
                               <a href="delete/{$product->id}">Borrar</a>		
                             </button>  		
                             <button class="btn btn-sm btn-outline-secondary">		
                               <a href="detail/{$product->id}">Actualizar</a>		
                              </button>  		
                           {/if}
                       </div>		
                   </div>		
             </div>		
          {/foreach}  		
       </div>		
      </div>		
    </div>		

  </main>		



 {include file="footer.tpl"} 

               	
