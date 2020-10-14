
{include file="header_public.tpl"}
<main class="main">
    <div class="container">
    <div class="body-login">
    <div class="row justify-content-center">
    <div class="col-md-12 mb-3 ">
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
                        <label for="email">E mail</label>
                        <input type="text" name="input_email" class="form-control" id="input_email"> 
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" name="input_password" class="form-control" id="input_password"> 
                    </div>
                </div>
            </div>
              <div class="row justify-content-center">
            <div class="custom-control custom-checkbox col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary">Ingresar</button>
            </div>
              </div>
                              {if $error}
                <div class="row justify-content-center">
                    <div class="col-md-12 mb-3">
                        <div class="alert alert-danger ">
                        {$error}
                        <div>
                    <div>    
                <div>
                {/if}
    </form>
    </div>
      </div>
</div>
</div>
 </main>   
{include file="footer.tpl"}