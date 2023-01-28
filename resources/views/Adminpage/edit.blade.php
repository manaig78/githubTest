<html>
	<head>
		<style>
			h1{
				text-align: center;
			}
		</style>
	</head>
	<body>
		<h1>Update</h1>
        <a href="/admin"><button>Go Back?</button></a>
		<form action={{url('/admin/'.$employees->id)}} method="POST">
            @csrf
            <div style="padding: 4px 8px;">
                <input style="width: 25%" placeholder="Enter First Name" type="text" name="first_name" value="{{$employees->first_name}}">
            </div>

            <div style="padding: 4px 8px;">
                <input style="width: 25%" placeholder="Enter Last Name " type="text" name="last_name" value="{{$employees->last_name}}">
            </div>

            <div style="padding: 4px 8px;">
                <input style="width: 25%" placeholder="Enter Gender " type="text" name="gender" value="{{$employees->gender}}">
            </div>

            <div style="padding: 4px 8px;">
                <input style="width: 25%" placeholder="Enter Birthday " type="text" name="birthday" value="{{$employees->birthday}}">
            </div>

            <div style="padding: 4px 8px;">
                <input style="width: 25%" placeholder="Enter Position " type="text" name="position" value="{{$employees->position}}">
            </div>

            <div>
                <button class="btn1"> Submit </button>
            </div>
            <input type="hidden" name="_method" value="PUT">
            </form>
	</body>
</html>