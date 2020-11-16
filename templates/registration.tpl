{include file="header_public.tpl"}


<main class="main-container">

<div class="container">

<div class="signup-form">
    <form action="register" method="post">
		<h2>Formulario de registro</h2>
		<p>Por favor complete el formulario con sus datos</p>
		<hr>
		<div class="form-group">
			<input type="text" class="form-control" name="input_name" placeholder="Nombre de usuario" required="required">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="input_email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="input_password" placeholder="Contraseña" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirmar Contraseña" required="required">
        </div>        
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
        </div>  
    </form>
        <div class="hint-text">Ya posee una cuenta? 
        <a href="admin" style="color:black">Ingrese haciendo click aquí</a>
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
    </div>
   </div>
</main>
	{include file="footer.tpl"}