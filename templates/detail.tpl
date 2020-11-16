{include file="header.tpl"}


  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Bienvenido a la tienda Online - {$smarty.session.USER_NAME}</h1>
      <h2 class="lead text-muted">
        Usted ha seleccionado - {$productDetail[0]->name}
      </h2>
    </div>
  </section>

    <main class="main-container">

      {if {$smarty.session.IS_ADMIN} == 1}
     <div class="row justify-content-center" style="widht:100%;">
        <div class="col-md-10 ">
    <form action="update/{$productDetail[0]->id}" class="form" method="post">
        <h3 class="mb-5">Edite el producto seleccionado</h3>
            <div class="row justify-content-around" style="margin:2%;">
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
                <div class="custom-control custom-checkbox col-md-4 mb-2">
                    <input class="form-check-input" type="radio" name="input_category" id="exampleRadios1" value="{$category->id}" >
                    <label class="form-check-label" for="exampleRadios1">{$category->category_name}</label>
                </div>
                {/foreach}
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
    </div>
      {/if}

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
                  <h2 class="pro-d-title">
                    {$productDetail[0]->name}
                  </h2>
                  <p class="description">
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
</main>

{include file="footer.tpl"}