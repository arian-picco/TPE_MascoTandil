{include file="header.tpl"}		

 <main role="main">		
   <section class="jumbotron text-center" >		
       <div class="container">		
           <h1 class="jumbotron-heading">Bienvenido a la tienda Online</h1>		
           <p class="lead text-muted"> Encuentre aquí los mejores productos dedicados a su mascota</p>		
       </div>		
   </section>		
  </main>		

{* style="background-image: url('imagenes/pets3.png') !important; 	background-size: contain;   background-repeat: repeat;
  background-position: center; " *}

<main class="main-container">

{* FORM DE NUEVO PRODUCTO *}
{if {$smarty.session.IS_ADMIN} == 1}
    <div class="signup-form">
      <form action="insert" method="post" enctype="multipart/form-data">
        <h2>Editor de productos</h2>
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="input_name" class="form-control" id="name"> 
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <input type="text" name="input_description" class="form-control" id="description" maxlength="40"> 
             </div>
              <div class="form-group">
                <label for="price">Precio</label>
                <input type="text" name="input_price" class="form-control" id="price"> 
              </div>
              <div class="form-group">
                <label for="category">Categoría</label>
                <select class="form-control" id="category" name="input_category">
                  {foreach from=$categories item=category}
                  <option value="{$category->id}">{$category->category_name}</option>
                  {/foreach}
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">Suba una imagen</label>
                <input type="file" class="form-control-file" id="imageToUpload" name="input_image">
              </div>
              <button type="submit" class="btn btn-primary">Cargar Nuevo Producto</button>
                 {if $error}
               <div class="form-group" style="margin:5%;">
                 <div class="alert alert-danger">
                  {$error}
                 </div>
               </div>
                 {/if}
      </form> 
    </div>
{/if}

{* //BARRA DE NAVEGACION DE LAS CARDS *}
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-md-center" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">Tienda Online</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
              Categorias
            </a>
              <div class="dropdown-menu">
                  {foreach from=$categories item=category}
                  <a class="dropdown-item" href="category/{$category->id}">{$category->category_name}</a>
                  {/foreach}
                  <a class="dropdown-item" href="store">Ver Todos</a>
              </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
          Ordenar por:
          </a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="store/byScore">Relevancia</a>
                  <a class="dropdown-item" href="store/orderASC">Precio: de menor a mayor</a>
                  <a class="dropdown-item" href="store/orderDESC">Precio: de mayor a menor</a>
                  <a class="dropdown-item" href="store">Ver Todos</a>
              </div>
        </li>
          {if {$smarty.session.IS_ADMIN} == 1}
          <li class="nav-item"><a class="nav-link" href="category_edition">
          <span style="color:red">Editar Categorías</span></a>
          </li>
          {/if}
      </ul>
      <form class="form-inline my-2 my-lg-0" action="search">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="input_sear">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  </div>

{* CARDS CON INFORMACION Y ACCESO A LA EDICION *}
    <div class="album py-5 bg-light">		
      <div class="container">		
        <div class="row">		
                 {foreach from=$products item=product}		
               <div class="col-md-4">		
                   <div class="card card mb-4 shadow-sm"  style="min-width: 350px; max-width:350px !important;  min-height: 500px; max-height:500px !important;" >		
                     <img class="card-img-top" style="min-width: 350px; max-width:350px !important;  
                     min-height: 300px; max-height:300px !important;" src="{$product->prodImg}" alt="Card image cap">		
                         <div class="card-body">		
                           <h5 class="card-title"><a href="detail/{$product->id}">{$product->name}</a></h5>
                           <div class="row">
                           <p class="card-text" style="text-align:left;">Descripción: {$product->description}</p>
                           </div>
                           <div class="row">
                           <p class="card-text">Precio: {$product->price}</p>
                           </div>
                           <div class="row">
                           <p class="card-text">Categoría: {$product->cat_name}</p>
                           </div>
                           {if {$smarty.session.IS_ADMIN} == 1}
                          <div class="row" style="margin:2%;">
                                 <button class="btn btn-sm btn-outline-secondary " style="margin:1%;">		
                               <a href="delete/{$product->id}">Borrar</a>		
                             </button>  		
                             <button class="btn btn-sm btn-outline-secondary"style="margin:1%;">		
                               <a href="detail/{$product->id}">Actualizar</a>		
                              </button> 
                           </div>
                           {/if}
                       </div>		
                   </div>		
             </div>		
          {/foreach}  		
       </div>		
      </div>		
    </div>		

  </main>		


<script src="js/form.js"></script>   
 {include file="footer.tpl"} 

               	
