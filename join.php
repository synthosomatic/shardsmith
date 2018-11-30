<section>
THIS IS NON-FUNCTIONAL
	<form method=\"POST\" action=\"form.aspx\">
		<fieldset>
			<legend>Login Details</legend>
			<p><label>Username: <input type="text" id="username" name="username" minlength="3" maxlength="12" required></p>
			<p><label>Password: <input type="text" id="password" name="password" minlength="12" maxlength="24" required></p>
		</fieldset>
		<fieldset>
			<legend>User Details</legend>
			<p><label>First Name: <input type="text" id="firstname" name="firstname" minlength="1" maxlength="12" required></p>
			<p><label>Last Name: <input type="text" id="lastname" name="lastname" minlength="1" maxlength="12" required></p>
			<p><label>Email Address: <input type="email" id="email" name="email" minlength="5" maxlength="254" required></p>
		</fieldset>
		<button type="submit" value="submit">Submit</button><button type="reset" value="reset">Clear</button>
	</form>
</section>