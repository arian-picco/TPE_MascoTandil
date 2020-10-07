{include file="header.tpl"}
 
 <div class="container">
     <div class="row justify-content-center">
        <div class="col-md-8 order-md-1">
    <form action="update/{$productDetail[0]->id}" class="form">
        <h3 class="mb-5">Edite el producto seleccionado</h3>
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
                <div class="custom-control custom-checkbox col-md-4 mb-3">
                    <input class="form-check-input" type="radio" name="input_category" id="exampleRadios1" value="1" >
                    <label class="form-check-label" for="exampleRadios1">
                    Producto para Gatos
                    </label>
                </div>
                <div class="custom-control custom-checkbox col-md-4 mb-3">
                    <input class="form-check-input" type="radio" name="input_category" id="exampleRadios1" value="2" >
                    <label class="form-check-label" for="exampleRadios1">
                    Producto para Perros
                    </label>
                </div>
                <div class="custom-control custom-checkbox col-md-4 mb-3">
                    <input class="form-check-input" type="radio" name="input_category" id="exampleRadios1" value="3" >
                    <label class="form-check-label" for="exampleRadios1">
                    Producto para animales Pequeños
                    </label>
                </div>
                <div class="row justify-content-center">
                <div class="custom-control custom-checkbox col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary">Aplicar Cambios</button>
                </div>
                  {* <div class="col-md-12 mb-6">
                        <h3>{$Error}</h3>
                  </div> *}
                </div>
            </div>
        </div>
        </div>
    </form>
    </div>
    </div>
</div>
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
                      <span class="posted_in"> <strong>Category:</strong> 
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