
{include file="header_public.tpl"}

{* <main class="main-container">

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
             <div class="row justify-content-center">
            <div class="custom-control custom-checkbox col-md-12 mb-3">
                <button class="btn btn-primary"><a href="register_user" style="color:white">Registrarme</a></button>
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
 </main>    *}

<main class="main-container">

<div class="container">

<div class="signup-form">
    <form action="verify_user" method="post">
		<h2>Bienvenido</h2>
		<p>Ingrese  nombre de usuario y contraseña</p>
		<hr>
		<div class="form-group">
			<input type="text" class="form-control" name="input_name" placeholder="Nombre de Usuario" required="required">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="input_email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="input_password" placeholder="Contraseña" required="required">
        </div>
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Ingresar</button>
        </div>
    </form>
	<div class="hint-text">No posee una cuenta? Haga click en <a href="registration_form" style="color:black">Registrarse</a></div>

{if $error}
        <div class="row justify-content-center">
            <div class="col-md-12 mb-3">
                <div class="alert alert-danger ">
                {$error}
                <div>
            <div>    
        <div>
    {/if}
</div>
</div>
</main>

{include file="footer.tpl"}