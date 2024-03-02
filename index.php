<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> -->
    <script src="jquery.js"></script>
	<script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="login-reg-panel">
		<div class="login-info-box">
			<h2>Have an account?</h2>
			<p>Commencez à acheter dès maintenant!</p>
			<label id="label-register" for="log-reg-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>
							
		<div class="register-info-box">
			<h2>Don't have an account?</h2>
			<p>Inscrivez vous pour acceder à toutes nos fonctionnalités</p>
			<label id="label-login" for="log-login-show">Register</label>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>
							
		<div class="white-panel">
			<!-- <div class="login-show">
				<h2>LOGIN</h2>
                <form action="javascript:connexion()" method="post">
                <input id="id" type="text" placeholder="Email" required>
				<input id="idpwd" type="password" placeholder="Password" required>
				<input type="sumbit" value="Login" readonly >
                </form>
				<a href="">Forgot password?</a>
			</div> -->
			<div class="register-show">
				<h2>REGISTER</h2>
                <form >
                <input name="nom" id="nom" type="text" placeholder="Nom" required>
                <input name="email" id="email" type="text" placeholder="Email" required>
				<input name="mdp" id="pwd" type="password" placeholder="Password" required>
				<input name="mdp2"id="pwd2" type="password" placeholder="Confirm Password" required>
				<input type="submit" value="Register">
				<button id="button">CLIQUER</button>
                </form>
				
			</div>
		</div>
	</div>
    
<script src="/loginbootstrap.js"></script>
</body>
</html>