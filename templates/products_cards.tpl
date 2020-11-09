{include file="header.tpl"}		
 <main role="main">		
   <section class="jumbotron text-center">		
       <div class="container">		
           <h1 class="jumbotron-heading">Bienvenido a la tienda Online</h1>		
           <p class="lead text-muted"> Encuentre aquí los mejores productos dedicados a su mascota</p>		
       </div>		
   </section>		

    <div class="album py-5 bg-light">		

      <div class="container">		

        <div class="row">		
                 {foreach from=$products item=product}		

                <div class="col-md-3">		

                  {* <div class="card mb-4 shadow-sm">		
                     <img class="card-img-top"  src="imagenes/{$product->id_category}.png" style="height: 225px; width: 225px; display: block; />		
                   <div class="card-body">		
                             <p class="card-text">		
                              <a href="detail/{$product->id}">{$product->name}</a>		
                              {$product->description} precio {$product->price}		
                              </p>		
                           <div class="d-flex justify-content-between align-items-center">		
                                 <div class="btn-group">		
                                     <button class="btn btn-sm btn-outline-secondary">		
                                       <a href="delete/{$product->id}">Borrar</a>		
                                     </button>  		
                                     <button class="btn btn-sm btn-outline-secondary">		
                                       <a href="detail/{$product->id}">Actualizar</a>		
                                     </button>  		
                                 </div>		
                                		
                           </div>		
                   		
                   </div>		
                 		
                 </div> *}		
                   <div class="card card mb-4 shadow-sm" style="width: 18rem margin:1%;">		
                     <img class="card-img-top"  src="imagenes/{$product->id_category}.png" alt="Card image cap">		
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