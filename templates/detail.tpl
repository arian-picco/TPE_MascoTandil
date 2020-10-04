{include file="header.tpl"}
 <article class="contenedores-index">
            <h1>{$productDetail[0]->name}</h1>
            <h2>{$productDetail[0]->description}</h2>
            <h2>{$productDetail[0]->price}</h2>
               <section class="guard-pelu-index">
                 <img src="">
            </section>
        </article>
     
 <article class="contenedores-index">
            <h3><a href="store">Volver a la tienda</a></h3>
        </article>
        

 <div class="container">
  <form action="update/{$productDetail[0]->id}">
        <div class="row">
      <div class="col-md-12 order-md-1">
        <h3 class="mb-3">Actualizar</h3>
        <div class="row">
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
            <div class="custom-control custom-checkbox col-md-12 mb-2">
                <input class="form-check-input" type="radio" name="input_category" id="exampleRadios1" value="1" >
                <label class="form-check-label" for="exampleRadios1">
                Producto para Gatos
                </label>
            </div>
            <div class="custom-control custom-checkbox col-md-12 mb-2">
                <input class="form-check-input" type="radio" name="input_category" id="exampleRadios1" value="2" >
                <label class="form-check-label" for="exampleRadios1">
                Producto para Perros
                </label>
            </div>
            <div class="custom-control custom-checkbox col-md-12 mb-2">
                <input class="form-check-input" type="radio" name="input_category" id="exampleRadios1" value="2" >
                <label class="form-check-label" for="exampleRadios1">
                Producto para animales Pequeños
                </label>
            </div>
            <div class="custom-control custom-checkbox col-md-12 mb-3">
                <button type="submit" class="btn btn-primary">Cargar</button>
            </div>
        </div>
      </div>
    </div>
  </form>
</div>
{include file="footer.tpl"}