{include file="header.tpl"}



<div class="container">
    <div class="row-lg-2">
    
    <div class="col-lg-6">
         <h2> Categorias </h2>
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
        <div class="collapse navbar-collapse justify-content-md-center">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="category/1">Gato</a></li>
                <li class="nav-item"><a class="nav-link" href="category/2">Perro</a></li>
                <li class="nav-item"><a class="nav-link" href="category/3">Animales Pequeños</a></li>
                <li class="nav-item"><a class="nav-link" href="store">Ver Todos</a></li>
            </ul>
        </div>
        </nav>


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

    </div>

    <div class="col-lg-6">

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
        </div>

    </div>
    
</div>




    

{include file="footer.tpl"}