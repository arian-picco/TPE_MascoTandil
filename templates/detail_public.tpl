{include 'header_public.tpl'}

 <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Bienvenido a la tienda Online</h1>
      <h2 class="lead text-muted">
        Usted ha seleccionado - {$productDetail[0]->name}
      </h2>
    </div>
</section>

<div class="container">
    <div class="col-md-12 mb-3">
    <section class="panel">
          <div class="panel-body">
          <div class="row">
              <div class="col-md-6">
                  <div class="pro-img-details">
                      <img src="imagenes/{$productDetail[0]->id_category}.png">
                  </div>
              </div>
              <div class="col-md-6">
                  <h4 class="pro-d-title">
                    {$productDetail[0]->name}
                  </h4>
                  <p>
                    {$productDetail[0]->description}
                  </p>
                  <div class="product_meta">
                      <span class="posted_in"> <strong>Category:{$productDetail[0]->cat_name}</strong> 
                  </div>
                  <div class="m-bot15"> <strong>Price : </strong> <span class="amount-old">{$productDetail[0]->price}</span></div>
                   <p>
                    <a href="store"><button class="btn btn-round btn-danger" type="button">Volver a la tienda</button></a>
                  </p>
              </div>
          </div>
        </div>
      </section>
      </div>
 </div>
 


{include file="footer.tpl"}