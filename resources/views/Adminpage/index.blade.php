<html>
	<head>
		<style>
			h1{
				text-align: center;
			}
			table{
            width:90% ;
            text-align: center;
            border:  2px solid;
        	}
        	thead{
            background-color: gray;
            color: white;
       		}
       		td{
            border: 1px solid;
        	}
        	.btn1 {
        	border: none;
        	color: white;
        	padding: 8px 16px;
        	text-align: center;
        	color: black;
        	display: inline-block;
        	font-size: 16px;
		</style>
	</head>
	<body>
		<h1>List of Registered Employee</h1>

		<div style="padding: 4px;">
			<a href="/"><button class="btn1" style="background-color: skyblue;">Logout</button></a>
		</div>

		<!-- List of Employees -->

		<div>
			<center>
				<table>
					<thead>
						<tr>
							<th>#</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Gender</th>
							<th>Birthday</th>
							<th>Position</th>
							<th>Option</th>
						</tr>
					</thead>
					<tbody>
						@if(count($employees)>0)
						@foreach($employees as $key => $employee)

						<tr>
							<td>{{$key+1}}</td>
							<td>{{$employee->first_name}}</td>
							<td>{{$employee->last_name}}</td>
							<td>{{$employee->gender}}</td>
							<td>{{$employee->birthday}}</td>
							<td>{{$employee->position}}</td>
							<td>
								<a href="/admin/{{$employee->id}}/edit">Edit</a>
								<form action={{url('/removed/'.$employee->id)}} method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <input type="hidden" name="_method" value="PUT"> 
                                        <input type="hidden" name="state" value="Remove"> 
                                        <input type="submit" value="Delete">
                                </form>

							</td>


						</tr>

						@endforeach
						@endif


					</tbody>
				</table>
			</center>


		</div>

	</body>
</html>