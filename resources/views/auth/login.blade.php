
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login form using HTML5 and CSS3</title>



      <link rel="stylesheet" href="css/style2.css">


</head>

<body>

<div class="container" >
	<section id="content">

		  <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
          {{ csrf_field() }}
			<h1>Login Form</h1>
			<div>
        <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

        @if ($errors->has('username'))
            <span class="help-block">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
        @endif
    </div>


			<div>
        <input id="password" type="password" class="form-control" name="password" required>

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
			</div>
			<div>
				<input type="submit" value="Log in" />

			</div>
		</form><!-- form -->

	</section><!-- content -->
</div><!-- container -->
</body>

    <script src="js/index.js"></script>

</body>
</html>
