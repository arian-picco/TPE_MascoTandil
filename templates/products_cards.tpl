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

             

            

            <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
            <div class="collapse navbar-collapse justify-content-md-center">
                <ul class="navbar-nav">
                 <h4>PRODUCTOS</h4>     
                  <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-3" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>

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
                    <li class="nav-item"><a class="nav-link" href="category_edition"><span style="color:red">Editar Categorías</span></a></li>
                     {/if}
                </ul>
            </div>
            </nav>


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
                             <button class="btn btn-sm btn-outline-secondary">		
                               <a href="delete/{$product->id}">Borrar</a>		
                             </button>  		
                             <button class="btn btn-sm btn-outline-secondary">		
                               <a href="detail/{$product->id}">Actualizar</a>		
                              </button>  		
                       </div>		
                   </div>		
             </div>		
          {/foreach}  		
       </div>		
      </div>		
    </div>		

  </main>		



 {include file="footer.tpl"} 

               	
