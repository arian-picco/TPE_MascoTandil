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
        

  <h2> Actualizar </h2>

        <form action="update/{$productDetail[0]->id}">
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" name="input_name" class="form-control" id="name"> 
  </div>
  <div class="form-group">
    <label for="description">Descripción</label>
    <input type="text" name="input_description" class="form-control" id="description"> 
  </div>
    <div class="form-group">
    <label for="price">Precio</label>
    <input type="text" name="input_price" class="form-control" id="price"> 
  </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="input_category" id="exampleRadios1" value="1" >
    <label class="form-check-label" for="exampleRadios1">
    Gato
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="input_category" id="exampleRadios1" value="2" >
    <label class="form-check-label" for="exampleRadios1">
    Perro
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="input_category" id="exampleRadios1" value="3" >
    <label class="form-check-label" for="exampleRadios1">
    Animales Pequeños
    </label>
    </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

{include file="footer.tpl"}