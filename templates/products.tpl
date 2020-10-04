{include file="header.tpl"}


<h2> Ingrese un nuevo Producto </h2>



        <form action="insert">
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


    <div>
    <h2> Categorias </h2>
    <a href="category/1">Gato</a>
    <a href="category/2">Perro</a>
    <a href="category/3">Animales Pequeños</a>
    <a href="store">Ver Todos</a>
    </div>


    <table>
        <thead>
                <td>Producto</td>
                <td>Descripción</td>
                <td>Precio</td>
        </thead>
        <tbody>


        {foreach from=$products item=product}
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
                <button class="btn-delete">
                    <a href="delete/{$product->id}">Borrar</a>
                </button>
                <button class="btn-delete">
                    <a href="detail/{$product->id}">Actualizar</a>
                </button>
            </tr>
        {/foreach}

            </tbody>
        </table>


{include file="footer.tpl"}