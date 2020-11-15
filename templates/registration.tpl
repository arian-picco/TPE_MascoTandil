{include file="header_public.tpl"}


<main class="main-container">

<div class="container">

<div class="signup-form">
    <form action="/examples/actions/confirmation.php" method="post">
		<h2>Sign Up</h2>
		<p>Please fill in this form to create an account!</p>
		<hr>
		<div class="form-group">
			<input type="text" class="form-control" name="first_name" placeholder="First Name" required="required">
        </div>
		<div class="form-group">
			<input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
        </div>        
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
    </form>
	<div class="hint-text">Already have an account? <a href="admin" style="color:black">Login here</a></div>
</div>

</div>

</main>
	{include file="footer.tpl"}