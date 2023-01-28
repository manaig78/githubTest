<html>
	<head></head>

	<body>
		<h1><center>Login as Admin</center></h1>
		<a href="/"><button>Go Back?</button></a>

		<h3>Login Here</h3>
		<form action="{{route('login.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
        	       <div style="padding: 4px;">
                        <input type="text" name="username" id="login__input" aria-describedby="emailHelp" placeholder="Email">
                    </div>

                    <div style="padding: 4px;">
                        <input type="password" name="password" id="login__input" placeholder="Password">
                    </div>

                    <input type="submit" value="SUBMIT">
                </form>
	</body>

</html>