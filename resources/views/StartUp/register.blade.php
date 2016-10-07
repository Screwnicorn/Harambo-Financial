<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> {{ config('app.name', 'Harambo') }} </title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="css/LoginStyle.css">
	</head>
	<body>
	<img id="Imones_Logo" class="center-block" src="http://wallpapersinhd.in/wp-content/uploads/2016/04/marketing-icons-positive-growth.png">
	<form role="form" method="POST" action="{{ url('/register') }}">
	<div id="form" class="panel panel-default text-center center-block">
		<h3>Register form</h3>
		<div class="panel-body">
		<div class="form-group has-feedback">
				<h4 class="text-left">First Name:</h4>
				<div id="whole_input" class="input-group">
					<div id="icon_addon" class="input-group-addon">
						<img id="icon" src="https://cdn3.iconfinder.com/data/icons/ahasoft-war/512/token-512.png">
					</div>

						<input id="username" type="text" name="name" class="form-control" placeholder="First Name" required="required" oninvalid="this.setCustomValidity('Please write your Name')" oninput="setCustomValidity('')">
				</div>

								@if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
			</div>

		<div class="form-group has-feedback">
				<h4 class="text-left">Last Name:</h4>
				<div id="whole_input" class="input-group">
					<div id="icon_addon" class="input-group-addon">
						<img id="icon" src="https://cdn3.iconfinder.com/data/icons/ahasoft-war/512/token-512.png">
					</div>

						<input id="username" type="text" name="surname" class="form-control" placeholder="Last Name" required="required" oninvalid="this.setCustomValidity('Please write your last name')" oninput="setCustomValidity('')">
				</div>


							@if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif

			</div>
			<div class="form-group has-feedback">
				<h4 class="text-left">Email:</h4>
				<div id="whole_input" class="input-group">
					<div id="icon_addon" class="input-group-addon">
						<img id="icon" src="http://downloadicons.net/sites/default/files/mail-symbol-icon-20736.png">
					</div>

						<input id="username" type="text" name="email" class="form-control" placeholder="Email" required="required" oninvalid="this.setCustomValidity('Please write your email')" oninput="setCustomValidity('')">
				</div>

			</div>


							 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

			<div class="form-group has-feedback">
				<h4 class="text-left">Password:</h4>
				<div class="input-group">
						<div id="icon_addon" class="input-group-addon">
							<img id="icon" src="https://cdn2.iconfinder.com/data/icons/flat-ui-icons-24-px/24/lock-24-512.png">
						</div>
					<input id="password" type="password" name="password" class="form-control" placeholder="Password" required="required" oninvalid="this.setCustomValidity('Please write your password')" oninput="setCustomValidity('')">
				</div>

			</div>
			<div class="form-group has-feedback">
				<h4 class="text-left">Confirm password:</h4>
				<div class="input-group">
						<div id="icon_addon" class="input-group-addon">
							<img id="icon" src="https://cdn2.iconfinder.com/data/icons/flat-ui-icons-24-px/24/lock-24-512.png">
						</div>
					<input id="password" type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required="required" oninvalid="this.setCustomValidity('Please confirm your password')" oninput="setCustomValidity('')">
				</div>

							 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

			</div>
			<div class="form-group">
				<input id="submit_button" value="Register" type="submit" class="btn btn-block" >
			</div>
		</div>
		<a id="footer_link" href="/login">
			<div id="panel_footer" class="panel-footer" >

				<span id="footer_text"><span id="info_signUp" style="">Already have an account?</span> <u style="color:rgb(121, 88, 159);">Log In</u></span>

			</div>
		</a>
	</div>

    {{ csrf_field() }}
	 {{ var_dump($errors) }}
</form>




	</html>