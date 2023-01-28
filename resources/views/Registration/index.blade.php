<html>
	<head></head>


	<body>
		<h1><center>Registration</center></h1>
		<a href="/"><button>Go Back?</button></a>



		<h3>Register Here</h3>
		<form action="{{route('register.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div style="padding: 4px 8px;">
                            <input style="width: 25%" placeholder="Enter First Name" type="text" name="first_name">
                        </div>

                        <div style="padding: 4px 8px;">
                            <input style="width: 25%" placeholder="Enter Last Name" type="text" name="last_name">
                        </div>

                        <div style="padding: 4px 8px;">
                            <input style="width: 25%" placeholder="Enter Gender" type="text" name="gender">
                        </div>

                        <div style="padding: 4px 8px;">
                            <input style="width: 25%" placeholder="Enter Birthday" type="text" name="birthday">
                        </div>

                        <div style="padding: 4px 8px;">
                            <input style="width: 25%" placeholder="Enter Position" type="text" name="position">
                        </div>

                        <div>
                            <button>Submit</button>
                        </div>

	</body>

</html>