{include file="header.tpl"}


  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Bienvenido a la tienda Online - 
      {if isset($smarty.session.USER_NAME)}
      {$smarty.session.USER_NAME}
      {/if}
      </h1>
      <h2 class="lead text-muted">
        Usted ha seleccionado - {$productDetail[0]->name}
      </h2>
    </div>
  </section>

  <main class="main-container">
{* FORMULARIO DE EDICION *}
  {if {$smarty.session.IS_ADMIN} == 1}
    <div class="signup-form">
     <form action="update/{$productDetail[0]->id}" class="form" method="post" enctype="multipart/form-data">
        <h2>Edite el producto seleccionado</h2>
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
                 <button type="submit" class="btn btn-primary">Aplicar Cambios</button>
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
  {* DETALLE DEL PRODUCTO *}
<div class="container">
  <div class="col-md-12 mb-3">
  <section class="panel">
        <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <div class="pro-img-details">
                    <img src="{$productDetail[0]->prodImg}" style="max-width:450px !important; max-height:500px !important;">
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
        <div style="display:none"><input id="product_id" value="{$productDetail[0]->id}"></div>
        <div style="display:none"><input id="user_id" value="{$smarty.session.ID_USER}"></div>
        <div style="display:none"><input id="isAdmin" value="{$smarty.session.IS_ADMIN}"></div> 
        </div>
      </div>
   </section>
 </div>

    {* CAJA DE COMENTARIOS *}
   <div class="row justify-content-center form" id="comments-box" style="width:inherit;" >
   </div>

 {* FORM DE COMENTARIOS *}
  {if isset($smarty.session.USER_NAME)}
    <div class="row justify-content-center" style="padding:10px; margin-bottom: 3%;" > 
      <form id="formComments" class="form" method="post">
            <h2 style="border: solid 1px black;"> Comentario de {$smarty.session.USER_NAME}<h2>
        <div class="row justify-content-between" style="width:900px;" >
            <div class="col-md-11 mb-1">
                <div class="form-group">
                  <label for="name">Comentario</label>
                    <input type="textarea" name="input_comment" class="form-control" id="comment" style="height: 100px"> 
                </div>
            </div>
            <div class="col-md-1 mb-1">
                <div class="form-group">
                    <label for="price">Puntaje</label>
                      <input type="number" name="input_score" class="form-control" id="score"  maxlength="5" style="width: 70px">  
                </div>
            </div>
          </div>
        <div class="row justify-content-center">
            <div class="custom-control custom-checkbox col-md-12 mb-3">
                <button type="submit" class="btn btn-primary">Comentar</button>
            </div>
          </div>
          </div>
        </form>         
      </div>
  {/if}


</main>



              


{include file="footer.tpl"}