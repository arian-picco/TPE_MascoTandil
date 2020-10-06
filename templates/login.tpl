
{include file="header.tpl"}
<main>
    <div class="container">
    <div class="body-login">
    <div class="row">
    <form action="verify_user" class="form" method="post">
        <h3 class="mb-5">Ingrese nombre de usuario y contraseña</h3>
            <div class="row justify-content-between">
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label for="name">Usuario</label>
                        <input type="text" name="input_name" class="form-control" id="name"> 
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label for="description">Contraseña</label>
                        <input type="text" name="input_description" class="form-control" id="description"> 
                    </div>
                </div>
            </div>
              <div class="row justify-content-center">
            <div class="custom-control custom-checkbox col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary">Ingresar</button>
            </div>
              </div>
    </form>
    </div>
      </div>
</div>
 </main>   
{include file="footer.tpl"}