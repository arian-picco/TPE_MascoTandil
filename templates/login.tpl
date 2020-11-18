
{include file="header.tpl"}	


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